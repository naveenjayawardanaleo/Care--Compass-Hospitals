<?php 

session_start();

// Unset a specific session variable
unset($_SESSION['user_id']);

header('Location: login.php');