<?php include 'inc/header.php'; ?>

<section class="mt-5">
    <div class="container-fluid ">

        <div class="row">
            <?php include 'inc/sidebar.php'; ?>
            <div class="col-md-8">

                <h3>Medical Reports</h3>
                <hr class="mb-5">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Patient</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT medicalreports.Id, medicalreports.note, users.full_name AS full_name, medicalreports.patient, medicalreports.file FROM medicalreports JOIN users ON medicalreports.patient = users.Id";
                        $result = $conn->query($sql);



                        if ($result->num_rows > 0) {

                            $x=1;
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo '
                                    <tr>
                                        <th>'.$x.'</th>
                                        <th>' . $row['full_name'] . '</th>
                                        <td>' . $row['note'] . '</td>
                                        <td class="d-flex ">
                                            <a href="reports/' . $row['file'] . '" class="btn btn-primary rounded-0 mx-2" target="_blank">View</a>

                                           
                                            
                                            
                                            <form action="edit-medical-records.php" method="post">

                                                <input type="text" name="record-owner" value="' . $row['Id'] . '" class="d-none">
                                                <button type="submit" class="btn btn-success rounded-0 mx-2">Edit</button>

                                            </form>



                                            <form action="delete-medical-records.php" method="post">

                                                <input type="text" name="record-owner" value="' . $row['Id'] . '" class="d-none">
                                                <button type="submit" class="btn btn-danger rounded-0 mx-2">Delete</button>

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