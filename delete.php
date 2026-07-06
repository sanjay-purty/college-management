<?php
include 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM students_details WHERE id = $id";
if (mysqli_query($conn, $sql)) {
    header("Location: dashboard.php");
    exit();
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
?>