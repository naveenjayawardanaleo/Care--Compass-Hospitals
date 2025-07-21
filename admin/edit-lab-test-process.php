<?php include 'db.php'; 

$idofreport = $_POST['idofreport'];
$note = $_POST['note'];
$patient = $_POST['patient'];



$sql = "UPDATE labtests SET note='$note', patient='$patient' WHERE Id=$idofreport";

if ($conn->query($sql) === TRUE) {
    header('Location: manage-lab-tests.php');
} 


