<?php include 'inc/header.php'; ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $qualification = $_POST['qualification'];
    $specialty = $_POST['specialty'];
    $decision = $_POST['decision'];
    $is_deleted = 0; // Default to not deleted

    // Handle Image Upload
    $img_name = $_FILES['img']['name'];
    $img_tmp = $_FILES['img']['tmp_name'];
    $img_size = $_FILES['img']['size'];

    // Get file extension
    $ext = pathinfo($img_name, PATHINFO_EXTENSION);
    $allowed_exts = array("jpg", "jpeg", "png", "gif");

    if (!in_array(strtolower($ext), $allowed_exts)) {
        die("<p style='color: red;'>Invalid file type. Only JPG, JPEG, PNG, and GIF allowed.</p>");
    }

    if ($img_size > 2 * 1024 * 1024) { // 2MB max file size
        die("<p style='color: red;'>File is too large. Max 2MB allowed.</p>");
    }

    // Generate a unique encrypted file name
    $encrypted_name = md5(uniqid(rand(), true)) . '.' . $ext;
    $img_folder = "../uploads/" . $encrypted_name;

    if (move_uploaded_file($img_tmp, $img_folder)) {
        // Insert into database
        $sql = "INSERT INTO doctors (full_name, qualification, specialty, is_deleted, decision, img) 
                VALUES ('$full_name', '$qualification', '$specialty', '$is_deleted', '$decision', '$encrypted_name')";

        if ($conn->query($sql) === TRUE) {
            echo "<p style='color: green;'>New doctor added successfully!</p>";
        } else {
            echo "<p style='color: red;'>Error: " . $sql . "<br>" . $conn->error . "</p>";
        }
    } else {
        echo "<p style='color: red;'>Failed to upload image.</p>";
    }
}

$conn->close();
?>


<section class="mt-5">
    <div class="container-fluid ">

        <div class="row">
            <?php include 'inc/sidebar.php'; ?>
            <div class="col-md-8">

                <h2 class="mb-4 text-center">Add Doctor</h2>
                <form action="" method="POST" enctype="multipart/form-data">
                    <!-- Full Name -->
                    <div class="mb-3">
                        <label class="form-label">Full Name:</label>
                        <input type="text" name="full_name" class="form-control" required>
                    </div>

                    <!-- Qualification -->
                    <div class="mb-3">
                        <label class="form-label">Qualification:</label>
                        <input type="text" name="qualification" class="form-control" required>
                    </div>

                    <!-- Specialty -->
                    <div class="mb-3">
                        <label class="form-label">Specialty:</label>
                        <input type="text" name="specialty" class="form-control" required>
                    </div>

                    <!-- Decision -->
                    <div class="mb-3">
                        <label class="form-label">Decision:</label>
                        <select name="decision" class="form-select" required>
                            <option value="0">Pending (0)</option>
                            <option value="1">Approved (1)</option>
                        </select>
                    </div>

                    <!-- Upload Image -->
                    <div class="mb-3">
                        <label class="form-label">Upload Image:</label>
                        <input type="file" name="img" class="form-control" required>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary px-4">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>
<?php include 'inc/footer.php'; ?>