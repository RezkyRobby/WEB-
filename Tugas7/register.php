<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role']; // Assign 'admin' or 'mahasiswa'

    $query = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$role')";
    if (mysqli_query($conn, $query)) {
        header("Location: login.php");
        exit();
    } else {
        $error = "Registration failed!";
    }
}
?>

<link rel="stylesheet" href="style.css">
<form method="POST" action="">
    <h1>Register</h1>
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <select name="role">
        <option value="admin">Admin</option>
        <option value="mahasiswa">Mahasiswa</option>
    </select>
    <button type="submit">Register</button>
    <?php if (isset($error)) echo "<p>$error</p>"; ?>
</form>
