<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Care Compass Hospital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">



</head>
<?php session_start() ;
?>
<body>
    <section>
        <div class="container">
            <div class="row d-flex justify-content-center  align-items-center vh-100">
                <div class="col-md-4 text-center">
                    <div class="text-center">
                        <img src="../img/care-compass-hostpital.png" class="w-75" alt="">

                    </div>
                    <h3 class="my-3 text-uppercase">Staff Login</h3>

                    
                    <form method="post" action="login-process.php">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">User</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="user" id="inputEmail3">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary text-uppercase">Login</button>

                        <p class="mt-3 error-message"><?php
                            
                            if (isset($_SESSION["error"])) {
                                echo $_SESSION["error"];  // Display the error message
                                unset($_SESSION["error"]);  // Remove session variable
                            }
                            ?>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>