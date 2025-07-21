<?php 


include 'db.php';
session_start() ;

$doctor = $_POST['doctor'];
$patitentid = $_POST['patitentId'];
$appointment_date = $_POST['appointment_date'];
$note = $_POST['note'];



$sql = "INSERT INTO appoinment (DrId, PatientId, DateTime, Note, Decision)
VALUES ('$doctor','$patitentid',  '$appointment_date', '$note', '3')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";

//   $last_id = $conn->insert_id;

//   $_SESSION["user_id"] = $last_id;

//   $_SESSION['email'] = $email;

  
  header('Location: appoinment-history.php');


} else{
    echo 'Error';
}


