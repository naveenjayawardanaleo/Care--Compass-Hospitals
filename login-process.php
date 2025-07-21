<?php

include 'db.php';
session_start() ;



$email = $_POST['email'];
$password = $_POST['password'];


$sql = "SELECT Id, Email, Password FROM users WHERE Email='$email' AND  Password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

       
        $_SESSION["user_id"] = $row['Id'];

        $_SESSION['email'] = $email;

        
        header('Location: dashboard.php');
    }
} else {
    echo "0 results";

    $_SESSION["error"] = 'Invalid credentials! Please check your email and password.';



    header('Location: login.php');
}
