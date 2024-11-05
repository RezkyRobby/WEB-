<?php
session_start();
include 'users.php';

if (!isset($_SESSION['logged_in'])) {
    header('Location: index.php');
    exit();
}

$is_admin = $_SESSION['role'] == 'admin';
$admin_email = 'admin@gmail.com'; // Identifikasi admin berdasarkan email
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .dashboard-container {
            width: 600px;
            margin: 100px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .login-container{
            width: 300px;
            margin: 100px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2, h3 {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label, input, button {
            margin-bottom: 10px;
        }

        input {
            padding: 8px;
            font-size: 14px;
        }

        button {
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        .error {
            color: red;
            text-align: center;
        } */
    </style>
</head>
<body>
    <div class="dashboard-container">
        <h2>Dashboard</h2>
        <p>Selamat datang, <?= $_SESSION['username'] ?>!</p>
        <p>Nama: <?= isset($_SESSION['name']) ? $_SESSION['name'] : 'N/A' ?></p>
        <p>Email: <?= $_SESSION['email'] ?></p>
        <p>Gender: <?= isset($_SESSION['gender']) ? $_SESSION['gender'] : 'N/A' ?></p>
        <p>Fakultas: <?= isset($_SESSION['faculty']) ? $_SESSION['faculty'] : 'N/A' ?></p>
        <p>Batch: <?= isset($_SESSION['batch']) ? $_SESSION['batch'] : 'N/A' ?></p>

        <h3>Data User</h3>
        <table border="1">
            <tr>
                <th>Email</th>
                <th>Username</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Faculty</th>
                <th>Batch</th>
            </tr>
            <?php
            if ($is_admin) {
                foreach ($users as $user) {

                    if ($user['email'] !== $admin_email) {
                        echo "<tr>
                            <td>{$user['email']}</td>
                            <td>{$user['username']}</td>
                            <td>" . (isset($user['name']) ? $user['name'] : 'N/A') . "</td>
                            <td>" . (isset($user['gender']) ? $user['gender'] : 'N/A') . "</td>
                            <td>" . (isset($user['faculty']) ? $user['faculty'] : 'N/A') . "</td>
                            <td>" . (isset($user['batch']) ? $user['batch'] : 'N/A') . "</td>
                        </tr>";
                    }
                }
            } else {
                foreach ($users as $user) {
                    if ($user['email'] == $_SESSION['email']) {
                        echo "<tr>
                            <td>{$user['email']}</td>
                            <td>{$user['username']}</td>
                            <td>" . (isset($user['name']) ? $user['name'] : 'N/A') . "</td>
                            <td>" . (isset($user['gender']) ? $user['gender'] : 'N/A') . "</td>
                            <td>" . (isset($user['faculty']) ? $user['faculty'] : 'N/A') . "</td>
                            <td>" . (isset($user['batch']) ? $user['batch'] : 'N/A') . "</td>
                        </tr>";
                    }
                }
            }
            ?>
        </table>

        <br>
        <?php if ($is_admin): ?>
            <a href="add_user.php">Tambah User Baru</a><br><br>
        <?php endif; ?>
        
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
