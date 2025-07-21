<?php
include 'db.php';


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['staff_id'])) {
    $staff_id = $_POST['staff_id'];

    // Soft delete by setting is_deleted = 1
    $sql = "UPDATE staff SET is_deleted = 1 WHERE Id = '$staff_id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Doctor deleted successfully!'); window.location.href='staff.php';</script>";
    } else {
        echo "<script>alert('Error deleting doctor: " . $conn->error . "'); window.location.href='staff.php';</script>";
    }
}

$conn->close();
?>
