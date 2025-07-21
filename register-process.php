<?php 


include 'db.php';
session_start() ;


$full_name = $_POST['full_name'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$password = $_POST['password'];



$sql = "INSERT INTO users (Id, full_name, email, telephone, password)
VALUES ('', '$full_name', '$email', '$telephone', '$password')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";


  $last_id = $conn->insert_id;


  $_SESSION["user_id"] = $last_id;

  $_SESSION['email'] = $email;

  
  header('Location: dashboard.php');


} 


