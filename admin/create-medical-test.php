<?php include 'inc/header.php'; ?>

<section class="mt-5">
    <div class="container-fluid ">

        <div class="row">
            <?php include 'inc/sidebar.php'; ?>
            <div class="col-md-8">

                <h3>Create Medical Reports</h3>
                <hr class="mb-5">

                <form action="medical-test-process.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="" class="form-label">Description</label>
                        <textarea type="text" class="form-control" name="note" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Select Patient</label>

                        <select class="form-select" name="patient" aria-label="Default select example" required>
                        <option selected disabled>Select Patient</option>
                            <?php 

                                $sql = "SELECT Id, full_name FROM users";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo '
                                        
                                        
                                        
                                            <option value="' . $row['Id'] . '">' . $row['full_name'] . '</option>
                                           
                                        
                                        ';
                                    
                                    
                                    }
                                }
                            ?>
                            
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Medical Report</label> <br>
                        <input type="file" class="form-control-file" name="report" id="" required>

                    </div>
                    <button type="submit" name="submit" value="Upload" class="btn btn-primary rounded-0">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include 'inc/footer.php'; ?>