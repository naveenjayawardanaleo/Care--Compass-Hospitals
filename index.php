<?php include 'inc/header.php'; ?>





<section>
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/your health our priority.jpg" class="d-block w-100" alt="...">
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="boxofsearch ">
        <div class="container">
            <div class="row">
                <form action="services.php" method="get" class=" d-flex justify-content-center">

                    <div class="col-md-10 d-flex justify-content-center primary py-5 ">

                        <input type="text" class="form-control w-75 mx-2 br-0 rounded-0 py-3"
                            placeholder="Search your Service" name="query">
                        <button class="btn btn-success secondary rounded-0 py-3" type="submit">Search Now</button>




                    </div>
                </form>

            </div>
        </div>

    </div>
</section>

<section class="section pt-0">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="specialist-treatment.php">
                    <img src="img/specialist treatments.jpg" class="w-100" alt="specialist treatments">

                </a>
            </div>
            <div class="col-md-4">
                <a href="laboratory-tests.php">
                    <img src="img/laboratory tests.jpg" class="w-100" alt="laboratory tests">

                </a>
            </div>
            <div class="col-md-4">
                <a href="emergency-care.php">
                    <img src="img/emergency care.jpg" class="w-100" alt="emergency care">

                </a>
            </div>
        </div>
    </div>
</section>
<section class="primary section appointment make-appointment ">
    <div class="container-fluid ">

        <?php
        if (isset($_SESSION['user_id'])) {

            include 'db.php';

            $sql = "SELECT Id, full_name, email, telephone FROM users WHERE Id='" . $_SESSION['user_id'] . "'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $name = $row['full_name'];
                $email = $row['email'];
                $telephone = $row['telephone'];
            } else {
                echo 'No data';
                exit();
            }
        ?>

            <div class="row">
                <div class="col-md-6 appoinment-bg"></div>
                <div class="col-md-6">
                    <div class="py-5 px-5 ">
                        <h2 class="text-white">Make An Appointment <br> Apply For Treatments</h2>
                        <div class="underline"></div>

                        <form method="post" action="appointment-process.php">
                            <div class="row g-3">
                                <h6 class="text-white  mt-5 mb-0">Patient Information</h6>

                                <input type="text" value="<?= $_SESSION['user_id'] ?>" name="patitentId" hidden>

                                <div class="col-md-12">
                                    <label for="" class="form-label">Full Name</label>
                                    <input type="text" class="form-control rounded-0" placeholder="<?php echo htmlspecialchars($name); ?>" disabled aria-label="First name">
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label">Telephone</label>
                                    <input type="text" class="form-control rounded-0" placeholder="<?php echo htmlspecialchars($telephone); ?>" disabled aria-label="Last name">
                                </div>

                                <div class="col-md-6">
                                    <label for="" class="form-label">Email Address</label>
                                    <input type="text" class="form-control rounded-0" placeholder="<?php echo htmlspecialchars($email); ?>" disabled aria-label="First name">
                                </div>


                                <h6 class="text-white mt-4 mb-0">Appointment Information</h6>
                                <div class="col-md-6">
                                    <label for="doctor" class="form-label">Select Doctor/Specialty</label>
                                    <select class="form-select rounded-0" id="doctor" name="doctor">
                                        <?php
                                        $sql = "SELECT Id, full_name FROM doctors WHERE decision='1' AND is_deleted='0'";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo '<option value="' . $row['Id'] . '">' . htmlspecialchars($row['full_name']) . '</option>';
                                            }
                                        } else {
                                            echo '<option>No doctors available</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="date" class="form-label">Preferred Date and Time</label>
                                    <input type="datetime-local" class="form-control rounded-0" id="date" name="appointment_date">
                                </div>
                                <div class="col-md-12">
                                    <textarea name="note" class="form-control rounded-0" rows="4" placeholder="Additional notes"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success secondary btn-compass">Book Appointment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        <?php
        } else {
        ?>

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form method="post" action="login-process.php">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <h5 class="text-warning">**You must log in to make an appointment**</h5>
                                <h2 class="text-white">Login Form</h2>
                                <div class="underline"></div>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Email address</label>
                                <input type="email" class="form-control rounded-0" placeholder="Enter email" name="email">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control rounded-0" name="password" placeholder="Password">
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success btn-compass secondary">Submit</button>
                                <br><br>
                                <a href="register.php" class="text-white text-decoration-none"> If your are not registered, click here to register.</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        <?php
        }
        ?>

    </div>
</section>
<section class="section ">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-5">
                <h4 class="color-primary fs-1">Featured <span class="color-secondary">Services</span> </h4>

                <img src="img/care-compass-underline.webp" class="underline-image" alt="">
            </div>

        </div>
        <div class="row">

            <?php
            include 'db.php';

            $sql = "SELECT Id, title, description, price, Image FROM services LIMIT 8";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {

                    echo '
                    <div class="col-md-3 mb-3">
                        <div class="card secondary rounded-0 border">
                            <img src="' . htmlspecialchars($row['Image']) . '" class="w-100 card-img-top" alt="...">
                            <div class="card-body py-4">
                                <h5 class="card-title text-white text-center mb-3 text-secondary">' . htmlspecialchars($row['title']) . '</h5>
                                
                                
                                <p class=" text-white text-center ">' . htmlspecialchars($row['description']) . '</p>
                                
                                <h5 class=" text-white text-center ">LKR ' . htmlspecialchars($row['price']) . '</h5>
                                <div class="text-center ">
                                    <a href="appointments.php" class="btn btn-primary btn-compass primary ">Make Appoinment</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    ';
                }
            }

            ?>

        </div>



        <div class="text-center mt-5">
            <a href="services.php" class="btn btn-primary btn-compass primary ">Find More Services</a>
        </div>
    </div>
</section>
<section class="primary pt-5 ">
    <div class="container sethescope">
        <div class="row  align-items-center ">
            <div class=" col-md-6 ">
                <img src=" img/tesi_img.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-6">
                <div class="testimonials-content    ">
                    <h2 class="text-white">Customer Testimonial</h2>
                    <div class="underline"></div>

                    <div class="owl-carousel owl-theme owl-testimonails mt-4 ">

                        <?php
                        include 'db.php';

                        $sql = "SELECT Id, full_name, telephone, headline, note, decision FROM testimonials  WHERE decision='1'";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo '' . ($row['decision'] == 1 ? '
                        <div class="item ">

                            <h4 class="text-white">' . $row['headline'] . '</h4>

                            <p class="text-white mt-3 text-justified">' . $row['note'] . '</p>

                            <h5 class="text-white">' . $row['full_name'] . '</p>
                        </div>
                        ' : '') . '';
                            }
                        }

                        ?>
                    </div>
                </div>
            </div>
        </div>
</section>
<section class="section ">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-5">
                <h4 class="color-primary fs-1">Featured <span class="color-secondary">Doctors</span> </h4>
                <img src="img/care-compass-underline.webp" class="underline-image" alt="">
            </div>
        </div>
        <div class="row">
            <div class="owl-carousel owl-theme owl-doctor0-carousel ">
                <?php
                include 'db.php';
                $sql = "SELECT full_name, qualification, specialty, img FROM doctors WHERE is_deleted=0 ORDER BY Id DESC LIMIT 6";
                $result = $conn->query($sql);



                while ($row = $result->fetch_assoc()) {
                    echo
                    '
                   <div class="item">
                        <div class="card primary rounded-0 border ">

                        ';
                    if ($row['img'] == null) {
                        echo '<img src="img/doctors/default.png" class="w-100 card-img-top" alt="...">';
                    } else {
                        echo '<img src="img/doctors/' . $row['img'] . '" class="w-100 card-img-top" alt="...">';
                    }
                    echo '
                            <div class="card-body py-4 doctors-page-pattern">
                                <h5  class="text-center text-white mb-3">' . $row['specialty'] . '</h5>

                                <h6 class="card-title text-white text-center ">' . $row['full_name'] . ' <br> (' . $row['qualification'] . ')</h6>
                                
                            </div>
                        </div>
                    </div>
                
                ';
                }

                $conn->close();

                ?>

            </div>

            <div class="owl-carousel owl-theme owl-doctor1-carousel mt-3">
                <?php
                include 'db.php';
                $sql = "SELECT full_name, qualification, specialty, img FROM doctors WHERE is_deleted = 0  LIMIT 6";
                $result = $conn->query($sql);



                while ($row = $result->fetch_assoc()) {
                    echo
                    '
                   <div class="item">
                        <div class="card primary rounded-0 border ">

                        ';
                    if ($row['img'] == null) {
                        echo '<img src="img/doctors/default.png" class="w-100 card-img-top" alt="...">';
                    } else {
                        echo '<img src="img/doctors/' . $row['img'] . '" class="w-100 card-img-top" alt="...">';
                    }
                    echo '
                            <div class="card-body py-4 doctors-page-pattern">
                                <h5  class="text-center text-white mb-3">' . $row['specialty'] . '</h5>

                                <h6 class="card-title text-white text-center ">' . $row['full_name'] . ' <br> (' . $row['qualification'] . ')</h6>
                                
                            </div>
                        </div>
                    </div>
                
                ';
                }

                $conn->close();

                ?>

            </div>
            <div class="text-center mt-4">
                <a href="doctors.php" class="btn btn-primary btn-compass primary ">Find More Doctors</a>
            </div>
        </div>
    </div>
</section>
<script>
    var menu_tab = document.getElementById('index');



    menu_tab.classList.add('active');
</script>

<?php include 'inc/footer.php'; ?>