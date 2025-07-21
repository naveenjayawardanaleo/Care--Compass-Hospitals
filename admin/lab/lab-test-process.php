<?php

include 'db.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $target_dir = "reports/";
    $imageFileType = strtolower(pathinfo($_FILES["report"]["name"], PATHINFO_EXTENSION));

    // Generate a unique file name
    $uniqueName = uniqid() . '.' . $imageFileType;
    $target_file = $target_dir . $uniqueName;

    if ($_FILES["report"]["error"] === UPLOAD_ERR_OK) {
        // Check if the file type is allowed
        $allowedTypes = ['jpg', 'jpeg', 'png', 'gif', 'pdf'];
        if (!in_array($imageFileType, $allowedTypes)) {
            die("Invalid file type. Allowed types: JPG, JPEG, PNG, GIF, PDF.");
        }

        // Move the file to the target directory
        if (move_uploaded_file($_FILES["report"]["tmp_name"], $target_file)) {
            echo "File successfully uploaded as $uniqueName<br>";

            // Save the file info to the database
            $note = htmlspecialchars($_POST['note']);
            $patient = htmlspecialchars($_POST['patient']);
            $sql = "INSERT INTO medicalreports (note, patient, file) VALUES ('$note', '$patient', '$uniqueName')";
            if ($conn->query($sql) === TRUE) {
                header('Location: manage-lab-tests.php');
                exit;
            } else {
                echo "Database error: " . $conn->error;
            }
        } else {
            echo "Failed to move uploaded file.<br>";
        }
    } else {
        echo "File upload error: " . $_FILES["report"]["error"] . "<br>";
    }
}
?>
