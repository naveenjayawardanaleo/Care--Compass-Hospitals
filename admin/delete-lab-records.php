<?php 
include 'db.php';

$recordowner = $_POST['record-owner'];




$sql = "DELETE FROM labtests WHERE id=$recordowner";

if ($conn->query($sql) === TRUE) {
    header('Location: manage-lab-tests.php');
} 