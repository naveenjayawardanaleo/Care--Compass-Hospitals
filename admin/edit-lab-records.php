<?php include 'inc/header.php'; ?>


<?php 
    $reportnumber = $_POST['record-owner'];


    $sql = "SELECT Id, note, patient, file FROM labtests WHERE Id=$reportnumber";
    $result = $conn->query($sql);
    
     // Fetch the result
     if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        // Handle the case where no record is found
        echo "Record not found.";
    }
?>
<section class="mt-5">
    <div class="container-fluid ">

        <div class="row">
            <?php include 'inc/sidebar.php'; ?>
            <div class="col-md-8">

                <h3>Edit Medical Record Number <?= $reportnumber;  ?></h3>
                <hr class="mb-5">

                <form action="edit-lab-test-process.php" method="post" enctype="multipart/form-data">


                    <input type="text" value="<?= $row["Id"]?>" name="idofreport" class="d-none">
                    <div class="mb-3">
                        <label for="" class="form-label">Description</label>
                        <textarea type="text" class="form-control" name="note" required><?= $row["note"]?></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Select Patient</label>

                        <select class="form-select" name="patient" aria-label="Default select example" required>
                        <option disabled>Select Patient</option>
                            <?php 

                                $sql = "SELECT Id, full_name FROM users";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                // output data of each row
                                    while($rowz = $result->fetch_assoc()) {

                                        echo $row['Id']; 
                                        echo '
                                        
                                            <option ';
                                            

                                            if($row['patient'] == $rowz['Id']){
                                                echo 'selected ';
                                            }
                                         echo 'value="' . $rowz['Id'] . '">' . $rowz['full_name'] . '</option>'    
                                           
                                        
                                        ;
                                    
                                    
                                    }
                                }
                            ?>
                            
                        </select>
                    </div>
                    <div class="mb-3">
                        
                        <p>Medial Test: <a href="reports/<?= $row['file']; ?>" target="_blank"><?= $row['file']; ?></a></p>

                    </div>
                    <button type="submit" name="submit" value="Upload" class="btn btn-primary rounded-0">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include 'inc/footer.php'; ?>