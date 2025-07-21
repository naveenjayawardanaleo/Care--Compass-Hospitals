<?php

include 'db.php';

$decision = $_POST['decision'];
$testimonial_id = $_POST['testimonial_id'];
// $headline = $_POST['headline'];
// $feedback = $_POST['feedback'];



$sql = "UPDATE testimonials SET decision='$decision' WHERE Id=$testimonial_id";

if ($conn->query($sql) === TRUE) {
    header('Location: testimonials.php');
} 



