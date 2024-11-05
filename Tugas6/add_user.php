<?php
session_start();
include 'users.php';

if (!isset($_SESSION['logged_in']) || $_SESSION['role'] !== 'admin') {
    header('Location: index.php');
    exit();
}

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hashing password
    $gender = $_POST['gender'];
    $faculty = $_POST['faculty'];
    $batch = $_POST['batch'];

    if (empty($name) || empty($email) || empty($username) || empty($password) || empty($gender) || empty($faculty) || empty($batch)) {
        $error = 'Semua field harus diisi!';
    } else {

        foreach ($users as $user) {
            if ($user['email'] == $email || $user['username'] == $username) {
                $error = 'Email atau username sudah terdaftar!';
                break;
            }
        }

        if (!$error) {
            $new_user = [
                'email' => $email,
                'username' => $username,
                'name' => $name,
                'password' => $password,
                'gender' => $gender,
                'faculty' => $faculty,
                'batch' => $batch
            ];
            $users[] = $new_user;
            $success = 'User baru berhasil ditambahkan!';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User Baru</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <h2>Tambah User Baru</h2>

        <?php if ($error): ?>
            <p class="error"><?= $error ?></p>
        <?php endif; ?>

        <?php if ($success): ?>
            <p class="success"><?= $success ?></p>
        <?php endif; ?>

        <form action="" method="post">
            <label for="name">Nama:</label>
            <input type="text" name="name" required><br>

            <label for="email">Email:</label>
            <input type="email" name="email" required><br>

            <label for="username">Username:</label>
            <input type="text" name="username" required><br>

            <label for="password">Password:</label>
            <input type="password" name="password" required><br>

            <label for="gender">Gender:</label>
            <select name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select><br>

            <label for="faculty">Faculty:</label>
            <input type="text" name="faculty" required><br>

            <label for="batch">Batch:</label>
            <input type="text" name="batch" required><br>

            <button type="submit">Tambah User</button>
        </form>

        <br>
        <a href="dashboard.php">Kembali ke Dashboard</a>
    </div>
</body>
</html>
