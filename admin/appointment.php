<?php include 'inc/header.php'; ?>

<section class="mt-5">
    <div class="container-fluid ">

        <div class="row">
            <?php include 'inc/sidebar.php'; ?>
            <div class="col-md-8">

                <h3>Appoinment</h3>
                <hr class="mb-5">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Image</th>
                            <th scope="col">Specialty</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT appoinment.*, users.full_name AS patient_name, services.title AS service_name 
                            FROM appoinment
                            JOIN users ON users.Id = appoinment.PatientId 
                            JOIN services ON services.Id = appoinment.DrId 
                               ORDER BY Id DESC";

                        $result = $conn->query($sql);
                        $counter = 1; // Counter for row numbers

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo '
                                                <tr>
                                                    <th scope="row">' . $counter++ . '</th>
                                                    <td>' . htmlspecialchars($row['patient_name']) . '</td>
                                                    <td>' . htmlspecialchars($row['service_name']) . '</td>

                                                    <td>' . htmlspecialchars($row['DateTime']) . '</td>
                                                    <td>' . htmlspecialchars($row['Note']) . '</td>

                                                    

                                                    <td class="d-flex ">
                                           
                                                            <form action="appointment-process.php" method="post">

                                                            <input type="text" class="form-control d-none" name="doctor_id" value="' . $row['Id'] . '">
                                                                <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="decision" value="1"
                                                                ' . ($row['Decision'] == 1 ? 'checked' : '') . '>
                                                                <label class="form-check-label" for="flexRadioDefault2">
                                                                        Approve

                                                                        </label>
                                                                </div>
                                                                <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="decision" value="0" 
                                                                ' . ($row['Decision'] == 0 ? 'checked' : '') . '>
                                                                
                                                                
                                                            
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    Reject
                                                                </label>
                                                                </div>
                                                                
                                                                
                                                                <button type="submit" class="btn btn-primary rounded-0 mx-2">Submit</button>

                                                            </form>


                                                        </td>
                                                </tr>';
                            }
                        } else {
                            echo '<tr><td colspan="4">No appointments found.</td></tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php include 'inc/footer.php'; ?>