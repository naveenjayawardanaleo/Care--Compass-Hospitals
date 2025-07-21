<?php 

session_start();

// Unset a specific session variable
unset($_SESSION['user_id']);
unset($_SESSION['user_role']);



header('Location: index.php');