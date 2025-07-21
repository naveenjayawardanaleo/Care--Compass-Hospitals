<?php 
include 'db.php';

$recordowner = $_POST['record-owner'];




$sql = "DELETE FROM medicalreports WHERE id=$recordowner";

if ($conn->query($sql) === TRUE) {
    header('Location: manage-medical-tests.php');
} 