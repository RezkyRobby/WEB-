<?php
session_start();
include 'users.php';

if (isset($_SESSION['logged_in'])) {
    header('Location: dashboard.php');
    exit();
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username_or_email = $_POST['username_or_email'];
    $password = $_POST['password'];

    $found_user = null;

    foreach ($users as $user) {
        if (($user['username'] == $username_or_email || $user['email'] == $username_or_email)) {
            $found_user = $user;
            break;
        }
    }

    if ($found_user && password_verify($password, $found_user['password'])) {

        $_SESSION['logged_in'] = true;
        $_SESSION['email'] = $found_user['email'];
        $_SESSION['username'] = $found_user['username'];
        $_SESSION['name'] = $found_user['name'] ?? 'Guest'; 
        $_SESSION['role'] = ($found_user['email'] == 'admin@gmail.com') ? 'admin' : 'user';
        $_SESSION['faculty'] = $found_user['faculty'] ?? 'N/A';
        $_SESSION['gender'] = $found_user['gender'] ?? 'N/A';
        $_SESSION['batch'] = $found_user['batch'] ?? 'N/A';

        header('Location: dashboard.php');
        exit();
    } else {

        $error = 'Username/email atau password salah!';
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
    .login-container{
    width: 300px;
    margin: 100px auto;
    padding: 20px;
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php if ($error): ?>
            <p class="error"><?= $error ?></p>
        <?php endif; ?>
        <form action="" method="post">
            <label for="username_or_email">Username/Email:</label>
            <input type="text" name="username_or_email" required><br>

            <label for="password">Password:</label>
            <input type="password" name="password" required><br>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
