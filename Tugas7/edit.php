<?php
session_start();
include('config.php');

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header("Location: index.php");
    exit();
}

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit();
}

$id = $_GET['id'];

$query = "SELECT * FROM students WHERE id = '$id'";
$result = mysqli_query($conn, $query);
$student = mysqli_fetch_assoc($result);

if (!$student) {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];

    $update_query = "UPDATE students SET nama = '$nama', nim = '$nim', prodi = '$prodi' WHERE id = '$id'";
    if (mysqli_query($conn, $update_query)) {
        header("Location: index.php");
        exit();
    } else {
        $error = "Failed to update student data. Please try again.";
    }
}
?>

<!-- HTML form for editing student details -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
</head>
<body>
    <h2>Edit Student</h2>
    <form method="POST" action="">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" value="<?= $student['nama'] ?>" required><br><br>
        
        <label for="nim">NIM:</label><br>
        <input type="text" id="nim" name="nim" value="<?= $student['nim'] ?>" required><br><br>
        
        <label for="prodi">Program Studi:</label><br>
        <input type="text" id="prodi" name="prodi" value="<?= $student['prodi'] ?>" required><br><br>
        
        <button type="submit">Update Student</button>
    </form>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
</body>
</html>
