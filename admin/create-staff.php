<?php include 'inc/header.php'; ?>
<?php
   include 'db.php';



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $membername = $_POST['full_name'];
    $memberpassword = $_POST['password']; 
    $role = $_POST['role'];

    echo $username;

 

    $sql = "INSERT INTO staff (username, password, role, is_deleted) 
            VALUES ('$membername', '$memberpassword', '$role', 0)";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>




<section class="mt-5">
    <div class="container-fluid ">

        <div class="row">
            <?php include 'inc/sidebar.php'; ?>
            <div class="col-md-8">

                <h2 class="mb-4 text-center">Add User</h2>
                <form action="" method="POST" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label class="form-label">User Name:</label>
                        <input type="text" name="full_name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password:</label>
                        <input type="text" name="password" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">role:</label>
                        <select name="role" class="form-select" required>
                            <option value="1">Staff</option>

                            <option value="0">Admin</option>
                        </select>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary px-4">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>
<?php include 'inc/footer.php'; ?>