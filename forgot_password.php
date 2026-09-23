<?php
declare(strict_types=1);

require __DIR__ . '/db.php';

$message = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Enter a valid email address.';
    } else {
        $statement = $pdo->prepare('SELECT id FROM users WHERE email = :email LIMIT 1');
        $statement->execute(['email' => $email]);

        $message = 'If an account uses that email, password reset instructions will be sent.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password | STEM for All</title>
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

        <div class="card">
            <div class="card2">
                <form class="form" method="post" action="forgot_password.php">
                    <p id="heading">Forgot Password?</p>
                    <p class="form-hint">Enter your account email to request a password reset.</p>
                    <?php if ($error !== ''): ?>
                        <p class="form-message" role="alert"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></p>
                    <?php elseif ($message !== ''): ?>
                        <p class="form-success" role="status"><?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8') ?></p>
                    <?php endif; ?>

                    <div class="field">
                        <label class="sr-only" for="email">Email address</label>
                        <input id="email" name="email" autocomplete="email" placeholder="Email address" class="input-field" type="email" required maxlength="254">
                    </div>

                    <div class="btn single-action">
                        <button class="button1" type="submit">Send Reset Request</button>
                    </div>

                    <a class="button3" href="login.php">Back to Login</a>
                </form>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
