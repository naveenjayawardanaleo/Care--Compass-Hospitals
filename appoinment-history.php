<?php include 'inc/header.php'; ?>

<!-- <section class="breadcrumb-head">
    <div class="container">
        <div class="col-md-12">
            <h1>Dashboard</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </nav>
        </div>
    </div>
</section> -->

<?php

include 'db.php';

$sql = "SELECT Id, full_name, email FROM users WHERE Id='" . $_SESSION['user_id'] . "'";
$result = $conn->query($sql);

// echo $result["Id"];

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc()['full_name'];
} else {
    echo 'no data';
}

?>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex align-items-start ">
                    <div class="nav flex-column nav-pills me-3 text-left w-25" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link primary text-white text-left rounded-0 mb-2 py-3" href="dashboard.php">Dashboard</a>

                        <a class="nav-link primary  text-white text-left rounded-0 mb-2 py-3" href="medical-records.php">Medical Records</a>

                        <a class="nav-link  primary text-white text-left rounded-0 mb-2 py-3" href="lab-test-results.php">Lab Test Results</a>

                        <a class="nav-link  secondary text-white text-left rounded-0 mb-2 py-3" href="appoinment-history.php">Appoinment History</a>


                        <a class="nav-link bg-danger text-left rounded-0 text-white mb-2 py-3" href="logout.php">Logout</a>




                    </div>
                    <div class="tab-content w-75 " id="v-pills-tabContent">
                        <div class="tab-pane fade show active secondary p-5" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                            <h5>Patient Name:
                                <?=
                                $user
                                ?>
                            </h5>

                            <table class="table  table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th>Patient Name</th>
                                        <th scope="col">Name of Service</th>
                                        <th scope="col">Time/Date</th>
                                        <th scope="col">Note</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT appoinment.*, users.full_name AS patient_name, services.title AS service_name 
                                        FROM appoinment
                                        JOIN users ON users.Id = appoinment.PatientId 
                                        JOIN services ON services.Id = appoinment.DrId 
                                        WHERE users.Id = '" . $_SESSION['user_id'] . "'";

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

                                                    <td>';

                                            if ($row['Decision'] == 1) {
                                                
                                                echo '
                                                
                                                
                                                <a href="payment.php?appointment_id='.$row['Id'].'" class="btn btn-success">Pay Now</a>';
                                            } else if ($row['Decision'] == 0) {
                                                echo 'Rejected';
                                            } else {
                                                echo 'pending';
                                            }
                                            echo '</td>
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
            </div>
        </div>
    </div>
</section>





<?php include 'inc/footer.php'; ?>