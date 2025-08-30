<?php
session_start();
require 'database.php';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ? AND role = 'Member'");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];
        echo "Welcome Member: " . $user['username'];
        header("Location: MDashboard.php");
        exit;
    } else {
        $error = "Invalid username or password for Member!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Login</title>
    <link rel="stylesheet" href="MLogin.css"> <!-- external CSS -->
</head>
<body>
    <div class="login-card">
        <div class="icon">👤</div>
        <h2>Member Login</h2>
        <p>Continue your spiritual journey and manage your profile</p>
        
        <?php if ($error) echo "<p class='error'>$error</p>"; ?>

        <form method="post">
            <input type="text" name="username" placeholder="Enter your username" required>
            <input type="password" name="password" placeholder="Enter your password" required>
            <button type="submit">Sign In</button>

            <div class="links-row">
                <a href="Register.php" class="left-link">Register</a>
                <a href="ForgotPassword.php" class="right-link">Forgot Password?</a>
            </div>
        </form>

        <div class="back-link">
            <a href="RoleSelection.php">Back to Role Selection</a>
        </div>
    </div>
</body>
</html>
