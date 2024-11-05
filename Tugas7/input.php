<?php
session_start();
include('config.php'); 

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];


    $query = "INSERT INTO students (nama, nim, prodi) VALUES ('$nama', '$nim', '$prodi')";
    if (mysqli_query($conn, $query)) {
        header("Location: index.php");
        exit();
    } else {
        $error = "Failed to add new student. Please try again.";
    }
}
?>

<!-- HTML form for adding a new student -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Add New Student</h2>
    <form method="POST" action="input.php">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br>
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required><br>
        <label for="prodi">Program Studi:</label>
        <input type="text" id="prodi" name="prodi" required><br>
        
        <button type="submit">Add Student</button>
    </form>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
</body>
</html>
