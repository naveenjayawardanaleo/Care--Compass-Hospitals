<?php include 'inc/header.php'; ?>



<section class="breadcrumb-head">
    <div class="container">
        <div class="col-md-12">
            <h1>Patitent Login Portal</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Login</li>
                </ol>
            </nav>
        </div>
    </div>
</section>


<section class="section">
    <div class="container">
        <div class="row d-flex justify-content-center ">
            <div class="col-md-4">
                <form method="post" action="login-process.php">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <h2>Login Form</h2>
                            <div class="underline"></div>
                        </div>
                        <div class="col-md-12">



                            <label class="form-label ">Email address</label>

                            <input type="email" class="form-control rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">

                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control rounded-0" name="password" placeholder="Password">
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success btn-compass secondary ">Submit</button>
                            <p class="mt-3 error-message"><?php
                            
                            if (isset($_SESSION["error"])) {
                                echo $_SESSION["error"];  // Display the error message
                                unset($_SESSION["error"]);  // Remove session variable
                            }
                            
                            
                            
                            ?></p>
                        </div>
                    </div>


                </form>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <h5>Login Instructions</h5>
                <ol>
                    <li>Enter your email and password,</li>
                    
                    <li>then click  <strong>"Login"</strong></li>
                </ol>

                <h5>Important:</h5>
                <ul>
                    <li>Keep your login details confidential</li>
                    <li>Ensure your password remains secure</li>
                </ul>

                <p><strong>Need help?</strong> Contact:</p>
                <ul>
                    <li>General: <a href="mailto:info@carecompass.lk">general@carecompass.lk</a></li>
                    
                </ul>
            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelector("form").addEventListener("submit", function(event) {
            let email = document.querySelector("input[name='email']").value.trim();
            let password = document.querySelector("input[name='password']").value.trim();
            let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (email === "") {
                alert("Email address is required.");
                event.preventDefault();
                return;
            }

            if (!emailPattern.test(email)) {
                alert("Please enter a valid email address.");
                event.preventDefault();
                return;
            }

            if (password === "") {
                alert("Password is required.");
                event.preventDefault();
                return;
            }

            if (password.length < 6) {
                alert("Password must be at least 6 characters long.");
                event.preventDefault();
                return;
            }
        });
    });
</script>

<?php include 'inc/footer.php'; ?>