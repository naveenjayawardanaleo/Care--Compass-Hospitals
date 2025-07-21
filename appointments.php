<?php include 'inc/header.php'; ?>
<section class="breadcrumb-head">
    <div class="container">
        <div class="col-md-12">
            <h1>Make An Appointment
            </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Appoinment</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section class="primary section appointment make-appointment m-0">
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
                    <div class="py-5 px-5">
                        <h2 class="text-white">Make An Appointment <br> Apply For Treatments</h2>
                        <div class="underline"></div>

                        <form method="post" action="appointment-process.php" id="appointmentForm">
                            <div class="row g-3">
                                <h6 class="text-white mt-5 mb-0">Patient Information</h6>

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
                                        $sql = "SELECT Id, title FROM services WHERE is_deleted='0'";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                
                                                echo '<option value="' . $row['Id'] . '">' . htmlspecialchars($row['title']) . '</option>';
                                            }
                                        } else {
                                            echo '<option>No Services available</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="date" class="form-label">Preferred Date and Time</label>
                                    <input type="datetime-local" class="form-control rounded-0" id="date" name="appointment_date">
                                </div>
                                <div class="col-md-12">
                                    <textarea id="note" name="note" class="form-control rounded-0" rows="4" placeholder="Additional notes"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success secondary btn-compass">Book Appointment</button>
                                </div>
                            </div>

                            <!-- Error messages -->
                            <div id="error-msg" class="text-danger bg-white mt-2 text-center"></div>
                        </form>
                    </div>
                </div>
            </div>

        <?php
        } else {
        ?>

            <div class="row d-flex justify-content-center">
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


<script>
    var menu_tab = document.getElementById('appoinments');

    menu_tab.classList.add('active');
</script>

<?php include 'inc/footer.php'; ?>