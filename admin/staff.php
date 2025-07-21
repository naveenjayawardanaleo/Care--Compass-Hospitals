<?php include 'inc/header.php'; ?>

<section class="mt-5">
    <div class="container-fluid ">

        <div class="row">
            <?php include 'inc/sidebar.php'; ?>
            <div class="col-md-8">

                <h3>Staff </h3>
                <hr class="mb-5">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Full Name</th>

                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT Id, username, password, is_deleted, role FROM staff WHERE is_deleted=0 ORDER BY Id DESC";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            $x = 1;
                            while ($row = $result->fetch_assoc()) {
                                echo '
                                    <tr>
                                        <th>' . $x . '</th>
                                        <td>' . $row['username'] . '</td>
                                        <td>
                                          ';
                                        
                                          if ($row['role'] == 0) {
                                            echo 'Admin';
                                        } else {
                                            echo 'Staff';
                                        }

                                        echo '
                                        
                                        
                                        
                                        </td>
                                     
                                        <td class="d-flex">

                                                
                                            <form method="POST" action="delete-staff.php" onsubmit="return confirm(\'Are you sure you want to delete this doctor?\');">
                                                <input type="hidden" name="staff_id" value="' . $row['Id'] . '">
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                ';
                                $x++;
                            }
                        }
                        ?>





                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php include 'inc/footer.php'; ?>