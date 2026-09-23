<?php
declare(strict_types=1);

session_start();
require __DIR__ . '/db.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirmPassword = $_POST['confirm_password'] ?? '';

    if (!preg_match('/^[A-Za-z0-9_]{3,50}$/', $username)) {
        $error = 'Username must be 3-50 characters using letters, numbers, or underscores.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Enter a valid email address.';
    } elseif (strlen($password) < 8) {
        $error = 'Password must be at least 8 characters.';
    } elseif ($password !== $confirmPassword) {
        $error = 'Passwords do not match.';
    } else {
        $statement = $pdo->prepare(
            'SELECT id FROM users WHERE username = :username OR email = :email LIMIT 1'
        );
        $statement->execute(['username' => $username, 'email' => $email]);

        if ($statement->fetch()) {
            $error = 'That username or email is already registered.';
        } else {
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            $statement = $pdo->prepare(
                'INSERT INTO users (username, email, password_hash) VALUES (:username, :email, :password_hash)'
            );
            $statement->execute([
                'username' => $username,
                'email' => $email,
                'password_hash' => $passwordHash,
            ]);

            header('Location: login.php?registered=1');
            exit;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join STEM for All</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="login-page">
    <div class="login-shell">
        <div class="login-topbar">
            <a class="login-brand" href="index.php">
                <span class="brand-mark">S</span>
                <span>STEM for All</span>
            </a>
            <label class="switch" aria-label="Toggle dark mode">
                <input type="checkbox" id="theme-toggle">
                <span class="slider"></span>
            </label>
        </div>

        <form class="form" method="post" action="register.php">
            <p id="heading">Join the Movement</p>
            <?php if ($error !== ''): ?>
                <p class="form-message" role="alert"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></p>
            <?php endif; ?>

            <div class="field">
                <label class="sr-only" for="username">Username</label>
                <input id="username" name="username" autocomplete="username" placeholder="Username" class="input-field" type="text" required maxlength="50">
            </div>
            <div class="field">
                <label class="sr-only" for="email">Email</label>
                <input id="email" name="email" autocomplete="email" placeholder="Email" class="input-field" type="email" required maxlength="254">
            </div>
            <div class="field">
                <label class="sr-only" for="password">Password</label>
                <input id="password" name="password" autocomplete="new-password" placeholder="Password (8+ characters)" class="input-field" type="password" required minlength="8">
            </div>
            <div class="field">
                <label class="sr-only" for="confirm_password">Confirm password</label>
                <input id="confirm_password" name="confirm_password" autocomplete="new-password" placeholder="Confirm password" class="input-field" type="password" required minlength="8">
            </div>

            <div class="btn">
                <button class="button1" type="submit">Create Account</button>
                <a class="button2" href="login.php">Login</a>
            </div>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>
