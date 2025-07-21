<?php include 'inc/header.php'; ?>

<section class="section">
    <div class="container">
        <div class="row d-flex justify-content-center ">
            <div class="col-md-4">
                <form method="post" action="register-process.php" id="register-form" onsubmit="return registerform()">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <h2>Register Form</h2>
                            <div class="underline"></div>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Full name</label>
                            <input type="text" class="form-control rounded-0" name="full_name" id="full_name">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Email Address</label>
                            <input type="text" class="form-control rounded-0" name="email" id="email">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Telephone</label>
                            <input type="text" class="form-control rounded-0" name="telephone" id="telephone">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control rounded-0" name="password" id="txtPassword">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" class="form-control rounded-0" name="confirm_password" id="confirmtxtPassword">
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success btn-compass secondary">Submit</button>
                            <p id="error-message"></p>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <h5>Registration Instructions</h5>
                <ol>
                    <li>Fill in your personal information:
                        <ul>
                            <li>Full name</li>
                            <li>Email address</li>
                            <li>Phone number (optional)</li>
                        </ul>
                    </li>
                    <li>Create your password:
                        <ul>
                            <li>At least 8 characters long</li>
                            <li>Include numbers and letters</li>
                            <li>Use special characters (<code>!@#$%</code>) for better security</li>
                        </ul>
                    </li>
                    <li>Confirm your password</li>
                    <li>Accept Terms & Conditions</li>
                    <li>Click <strong>"Register"</strong></li>
                </ol>

                <p class="important">IMPORTANT:</p>
                <ul>
                    <li>Use a valid email address - you'll need to verify it</li>
                    <li>Choose a password you haven't used on other sites</li>
                    <li>Never share your login details with anyone</li>
                </ul>

                <div class="contact">
                    <p>Need help? Contact</p>
                    <ul>
                        <li>General: <a href="mailto:info@carecompass.lk">info@carecompass.lk</a></li>
                        <li id="demo">Support: <a href="mailto:support@carecompass.lk">support@carecompass.lk</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function registerform() {
        var full_name = document.getElementById("full_name").value.trim();
        var email = document.getElementById("email").value.trim();
        var telephone = document.getElementById("telephone").value.trim();
        var txtPassword = document.getElementById("txtPassword").value;
        var confirmtxtPassword = document.getElementById("confirmtxtPassword").value;
        var message = document.getElementById("error-message");
        var errors = [];

        if (!full_name) {
            errors.push("Full Name is Empty");
        }
        if (!email) {
            errors.push("Email Address is Empty");
        }
        if (txtPassword !== confirmtxtPassword) {
            errors.push("Password not matched!");
        }

        if (errors.length > 0) {
            message.innerHTML = errors.join(", ");
            return false;
        }

        return true; // Allow form submission
    }
</script>

<?php include 'inc/footer.php'; ?>
