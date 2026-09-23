<?php
declare(strict_types=1);

session_start();
require __DIR__ . '/db.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username === '' || $password === '') {
        $error = 'Enter your username and password.';
    } else {
        $statement = $pdo->prepare(
            'SELECT id, username, password_hash FROM users WHERE username = :username LIMIT 1'
        );
        $statement->execute(['username' => $username]);
        $user = $statement->fetch();

        if ($user && password_verify($password, $user['password_hash'])) {
            session_regenerate_id(true);
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header('Location: index.php');
            exit;
        }

        $error = 'Invalid username or password.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | STEM for All</title>
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

        <form class="form" method="post" action="login.php">
            <p id="heading">Login</p>
            <?php if ($error !== ''): ?>
                <p class="form-message" role="alert"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></p>
            <?php endif; ?>

            <div class="field">
                <label class="sr-only" for="username">Username</label>
                <input id="username" name="username" autocomplete="username" placeholder="Username" class="input-field" type="text" required maxlength="50">
            </div>

            <div class="field">
                <label class="sr-only" for="password">Password</label>
                <input id="password" name="password" autocomplete="current-password" placeholder="Password" class="input-field" type="password" required>
            </div>

            <div class="btn">
                <button class="button1" type="submit">Login</button>
                <a class="button2" href="register.php">Sign Up</a>
            </div>

            <a class="button3" href="register.php">Create an account to join</a>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>
