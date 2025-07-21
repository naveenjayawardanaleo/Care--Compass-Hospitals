<div class="col-md-3">
    <a href="dashboard.php">
        <img src="../img/care-compass-hostpital.png" class="w-75" alt="" />
    </a>

    <hr>


    <div class="accordion accordion-flush mt-3" id="accordionFlushExample">


        <?php if ($_SESSION['user_role'] == 0) {

            echo '
        <div class="accordion-item ">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed  bg-primary text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <i class="fa-solid fa-file-medical"></i> &nbsp; Medical Reports
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <a href="create-medical-test.php" class="text-decoration-none text-dark">
                    <div class="accordion-body ">Create</div>
                </a>
                <a href="manage-medical-tests.php" class="text-decoration-none text-dark">
                    <div class="accordion-body">Manage</div>
                </a>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed bg-primary text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    <i class="fa-solid fa-notes-medical"></i> &nbsp; Lab Reports
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <a href="create-lab-test.php" class="text-decoration-none text-dark">
                    <div class="accordion-body ">Create</div>
                </a>
                <a href="manage-lab-tests.php" class="text-decoration-none text-dark">
                    <div class="accordion-body">Manage</div>
                </a>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed bg-primary text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
                    <i class="fa-solid fa-first-aid"></i> &nbsp; Appointments
                </button>
            </h2>
            <div id="flush-collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">

                <a href="appointment.php" class="text-decoration-none text-dark">
                    <div class="accordion-body">Manage</div>
                </a>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed bg-primary text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                    <i class="fa-solid fa-user-doctor"></i> &nbsp; Doctors
                </button>
            </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <a href="create-doctor.php" class="text-decoration-none text-dark">
                    <div class="accordion-body ">Create</div>
                </a>
                <a href="doctors.php" class="text-decoration-none text-dark">
                    <div class="accordion-body">Manage</div>
                </a>
            </div>
        </div>


        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed bg-primary text-white fw-normal" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    <i class="fa-solid fa-comments"></i> &nbsp; Testimonials
                </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">

                <a href="testimonials.php" class="text-decoration-none text-dark">
                    <div class="accordion-body">Manage</div>
                </a>
            </div>
        </div>


        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed bg-primary text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                    <i class="fa-solid fa-users"></i> &nbsp; Staff
                </button>
            </h2>
            <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <a href="create-staff.php" class="text-decoration-none text-dark">
                    <div class="accordion-body ">Create</div>
                </a>
                <a href="staff.php" class="text-decoration-none text-dark">
                    <div class="accordion-body">Manage</div>
                </a>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <a class="accordion-button collapsed bg-danger text-white text-decoration-none " href="logout.php">
                    <i class="fa-solid fa-sign-out"></i> &nbsp; Logout
                </a>
            </h2>

        </div>
        
        ';
        } else {
            echo '
        
        <div class="accordion-item ">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed  bg-primary text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <i class="fa-solid fa-file-medical"></i> &nbsp; Medical Reports
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <a href="create-medical-test.php" class="text-decoration-none text-dark">
                    <div class="accordion-body ">Create</div>
                </a>
                <a href="manage-medical-tests.php" class="text-decoration-none text-dark">
                    <div class="accordion-body">Manage</div>
                </a>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed bg-primary text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    <i class="fa-solid fa-notes-medical"></i> &nbsp; Lab Reports
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <a href="create-lab-test.php" class="text-decoration-none text-dark">
                    <div class="accordion-body ">Create</div>
                </a>
                <a href="manage-lab-tests.php" class="text-decoration-none text-dark">
                    <div class="accordion-body">Manage</div>
                </a>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed bg-primary text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
                    <i class="fa-solid fa-first-aid"></i> &nbsp; Appointments
                </button>
            </h2>
            <div id="flush-collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">

                <a href="appointment.php" class="text-decoration-none text-dark">
                    <div class="accordion-body">Manage</div>
                </a>
            </div>
        </div>

        


        


        
        <div class="accordion-item">
            <h2 class="accordion-header">
                <a class="accordion-button collapsed bg-danger text-white text-decoration-none " href="logout.php">
                    <i class="fa-solid fa-sign-out"></i> &nbsp; Logout
                </a>
            </h2>

        </div>
        
        ';
        } ?>



    </div>
</div>