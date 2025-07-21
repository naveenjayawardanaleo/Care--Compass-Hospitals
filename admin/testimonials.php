<?php include 'inc/header.php'; ?>

<section class="mt-5">
    <div class="container-fluid ">

        <div class="row">
            <?php include 'inc/sidebar.php'; ?>
            <div class="col-md-8">

                <h3>Testimonials</h3>
                <hr class="mb-5">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Telephone</th>
                            <th scope="col">Headline</th>
                            <th scope="col">Description</th>
                            <th scope="col">Decision</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT Id, full_name, telephone, headline, decision, note  FROM  testimonials  ORDER BY Id DESC";
                        $result = $conn->query($sql);



                        if ($result->num_rows > 0) {
                            $x = 1;
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo '
                                    <tr>
                                        <th>'.$x.'</th>
                                        <th>' . $row['full_name'] . '</th>
                                        <td>' . $row['telephone'] . '</td>
                                        <td>' . $row['headline'] . '</td>
                                        <td>' . $row['note'] . '</td>
                                        <td>
                                        
                                            '.($row['decision'] == 1 ? 'Approved': 'Rejected').'
                                        </td>
                                        <td class="d-flex ">
                                           
                                            <form action="testimonial-process.php" method="post">

                                              <input type="text" class="form-control d-none" name="testimonial_id" value="' . $row['Id'] . '">
                                                <div class="form-check">
                                                <input class="form-check-input" type="radio" name="decision" value="1"
                                                ' . ($row['decision'] == 1 ? 'checked' : '') . '>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Approve
                                                </label>
                                                </div>
                                                <div class="form-check">
                                                <input class="form-check-input" type="radio" name="decision" value="0" 
                                                ' . ($row['decision'] == 0 ? 'checked' : '') . '>
                                                
                                                
                                            
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Reject
                                                </label>
                                                </div>
                                                
                                                
                                                <button type="submit" class="btn btn-primary rounded-0 mx-2">Submit</button>

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