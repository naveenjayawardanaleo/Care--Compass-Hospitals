<?php

include 'db.php';

$fullname = $_POST['fullname'];
$telephone = $_POST['telephone'];
$headline = $_POST['headline'];
$feedback = $_POST['feedback'];



$sql = "INSERT INTO testimonials (full_name, telephone, headline, note)
VALUES ('$fullname', '$telephone', '$headline', '$feedback')";

if ($conn->query($sql) === TRUE) {
    header('Location: testimonials.php');
} 



