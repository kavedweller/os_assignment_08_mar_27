<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration from</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-light d-flex">
    <div class="container p-5 ">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-8 col-lg-6 col-xs-12 ">
                <div class="border border-4 bg-primary border-primary"></div>
                <div class="card shadow rounded-0">
                    <div class="card-body">
                        <div class="mb-3 mt-md-4 px-md-3 px-xs-1">
                            <h2 class="fw-bold mb-2 mt-5 text-center">REGISTER</h2>
                            <p class="mb-2 text-center" style="font-weight: 500;">Please enter you information.</p>
                            <p class="mb-3 text-center" style="font-weight: 600;<?php echo $_SESSION["msgType"] == 'Error' ? 'color: red;' : 'color:green;'?>">&emsp;<?php echo $_SESSION["message"] ?>&emsp;</p>
                            <div class="mb-3">
                                <form action="model.php" method="POST">
                                    <div class="mb-3 row">
                                        <label for="fname" class="col-sm-4 col-form-label">First name:</label>
                                        <div class="col-sm-8">
                                            <input type="text" id="fname" class="form-control" placeholder="First name" name="fname">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="lname" class="col-sm-4 col-form-label">Last name:</label>
                                        <div class="col-sm-8">
                                            <input type="text" id="lname" class="form-control" placeholder="Last name" name="lname">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="email" class="col-sm-4 col-form-label">
                                            Email address:
                                        </label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="email" id="email" required placeholder="E-mail" name="email" />
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="password" class="col-sm-4 col-form-label">Password:</label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control" id="password" required placeholder="Password" name="password" />
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="confirm" class="col-sm-4 col-form-label">Confirm password:</label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control" id="confirm" required placeholder="Re-type password" name="confirm" />
                                        </div>
                                    </div>

                                    <br>

                                    <div class="d-grid w-50 mx-auto">
                                        <input class="btn btn-primary rounded-0" type="submit" id="register" name="register" value="Register">
                                        </input>
                                    </div>
                                </form>
                                <div class="container">
                                    <br><br>
                                </div>
                                <div class="mt-3">
                                    <p class="mb-0  text-center">
                                        Already have an account?&nbsp;
                                        <a href="index.php?page=login" class="nav-link d-inline text-primary fw-bold"> Log-in </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>