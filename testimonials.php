<?php include 'inc/header.php'; ?>
<section class="breadcrumb-head">
    <div class="container">
        <div class="col-md-12">
            <h1>Testimonials</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Testimonials</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section class=" section ">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-5">
                <h4 class="color-primary fs-1">Customer <span class="color-secondary">Honest</span> Reviews</h4>
                <img src="img/care-compass-underline.webp" class="underline-image" alt="">
            </div>

            <?php

            include 'db.php';
            $sql = "SELECT Id, full_name, telephone, headline, note, decision FROM testimonials  WHERE decision='1'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo '' . ($row['decision'] == 1 ? '
                
                    <div class="col-md-6  text-center mb-4 ">
                        <div class="p-5 primary">

                            <img src="img/5-stars.webp" class="w-25"/>
                        
                            <h4 class="text-dark">' . $row['headline'] . '</h4>

                            <p class="text-dark mt-3 ">' . $row['note'] . '</p>

                            <h5 class="text-dark">' . $row['full_name'] . '</p>


                        </div>

                    </div>' : '') . '';
                }
            }

            ?>


        </div>

    </div>
</section>

<section class=" section appointment  m-0" style="">
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
                <div class="col-md-6 " style="background-image: url(img/happy-patients.jpg);"></div>
                <div class="col-md-6">
                    <div class="py-5 px-5">
                        <h2 class="mb-3">Write your Honest Feedback...</h2>
                        <form action="testimonial-process.php" method="post">
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label text-black">Full Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="fullname">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label text-black">Telephone</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="telephone">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label text-black">Headline</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="headline">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label text-black">Feedback</label>
                                <div class="col-sm-10">
                                    <textarea name="feedback" id="" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">&nbsp;</label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-success secondary btn-compass ">Submit Feedback</button>
                                </div>
                            </div>

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
                                <h5 class="text-warning">**You must log in to create a Testimonials**</h5>
                                <h2 class="text-white">Login Form</h2>
                                <div class="underline"></div>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label  text-black">Email address</label>
                                <input type="email" class="form-control rounded-0" placeholder="Enter email" name="email">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label  text-black">Password</label>
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
    var menu_tab = document.getElementById('testimonials');



    menu_tab.classList.add('active');
</script>
<?php include 'inc/footer.php'; ?>