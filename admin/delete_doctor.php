<?php
include 'db.php';
// Create connection

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['doctor_id'])) {
    $doctor_id = $_POST['doctor_id'];

    // Soft delete by setting is_deleted = 1
    $sql = "UPDATE doctors SET is_deleted = 1 WHERE Id = '$doctor_id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Doctor deleted successfully!'); window.location.href='doctors.php';</script>";
    } else {
        echo "<script>alert('Error deleting doctor: " . $conn->error . "'); window.location.href='doctors.php';</script>";
    }
}

$conn->close();
?>
