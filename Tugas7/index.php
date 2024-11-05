<?php
session_start();
include('config.php');

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$role = $_SESSION['role'];

// Fetch student data
$students_query = "SELECT * FROM students";
$students = mysqli_query($conn, $students_query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Student Management</h2>
        <!-- Table and action buttons here -->
        <table>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Program Studi</th>
                <?php if ($role == 'admin') { echo "<th>Actions</th>"; } ?>
            </tr>
            <?php while ($student = mysqli_fetch_assoc($students)) : ?>
                <tr>
                    <td><?= $student['nama'] ?></td>
                    <td><?= $student['nim'] ?></td>
                    <td><?= $student['prodi'] ?></td>
                    <?php if ($role == 'admin') : ?>
                        <td>
                            <a href="edit.php?id=<?= $student['id'] ?>">Edit</a> |
                            <a href="delete.php?id=<?= $student['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                    <?php endif; ?>
                </tr>
            <?php endwhile; ?>
        </table>
        <br>
        <?php if ($role == 'admin') : ?>
            <a href="input.php">Add New Student</a> |
            
        <?php endif; ?>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>

