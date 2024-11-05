<?php
session_start();
include('config.php'); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $user['role']; // Either 'admin' or 'mahasiswa'

        $redirect_url = isset($_GET['redirect']) ? urldecode($_GET['redirect']) : 'index.php';
        header("Location: $redirect_url");
        exit();
    } else {
        $error = "Invalid username or password";
    }
}
?>
<!-- HTML login form -->
<link rel="stylesheet" href="style.css">
<form method="POST" action="">
    <h1>Login Dashboard</h1>
    <br>
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
    <a href="register.php">Register Akun</a>
    <?php if (isset($error)) echo "<p>$error</p>"; ?>
</form>
