<?php
session_start();
include('config.php');

// Ensure only logged-in admins can access this page
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header("Location: index.php");
    exit();
}

// Check if 'id' is provided in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the student record
    $delete_query = "DELETE FROM students WHERE id = '$id'";
    if (mysqli_query($conn, $delete_query)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: Failed to delete student.";
    }
} else {
    header("Location: index.php");
    exit();
}
?>
