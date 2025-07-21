<?php

include 'db.php';

$decision = $_POST['decision'];
$doctor_id = $_POST['doctor_id'];
// $headline = $_POST['headline'];
// $feedback = $_POST['feedback'];



$sql = "UPDATE appoinment SET Decision='$decision' WHERE Id=$doctor_id";

if ($conn->query($sql) === TRUE) {
    header('Location: appointment.php');
} 



