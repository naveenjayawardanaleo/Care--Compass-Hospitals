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
<hr>

<?php

include 'db.php';

$sql = "SELECT Id, Fullname, Email FROM Users WHERE Id='" . $_SESSION['user_id'] . "'";
$result = $conn->query($sql);

// echo $result["Id"];

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc()['Fullname'];
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

                        <a class="nav-link  primary text-white text-left rounded-0 mb-2 py-3" href="appoinment-history.php">Appoinment History</a>

                        <a class="nav-link  secondary text-white text-left rounded-0 mb-2 py-3" href="account-details.php">Account Details</a>

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
                                        <th scope="col">Description</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- <tr>
                                        <th scope="row">1</th>
                                        <td>Medical Test of Eye</td>
                                        <td>2024/12/30</td>
                                        <td>
                                            <a href="reports/Medical Record.pdf" class="btn btn-primary" download>Download</a>
                                            <a href="reports/Medical Record.pdf" class="btn btn-success" target="_blank">View</a>
                                        </td>
                                    </tr> -->

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