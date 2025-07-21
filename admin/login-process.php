<?php include '../db.php'; ?>



<?php


session_start();

$user = $_POST['user'];
$password = $_POST['password'];


$sql = "SELECT Id, username, role,  password FROM staff WHERE username='$user' AND  password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

       echo $row['Id'];
        $_SESSION["staff_id"] = $row['Id'];
        $_SESSION["user_role"] = $row['role'];


        // $_SESSION['email'] = 'premodya668@gmail.com';

        
        header('Location: dashboard.php');
    }
} else {
    echo "0 results";
    $_SESSION["error"] = 'Invalid credentials! Please check your email and password.';
    header('Location: index.php');
}
