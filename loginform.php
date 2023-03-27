<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login from</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-light d-flex">
    <div class="container p-5 ">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 col-lg-4 col-xs-12 ">
                <div class="border border-3 bg-primary border-primary"></div>
                <div class="card shadow rounded-0">
                    <div class="card-body">
                        <div class="mb-3 mt-md-4 px-md-3 px-xs-1">
                            <h2 class="fw-bold mb-2 text-center">LOG IN</h2>
                            <p class="mb-2 text-center" style="font-weight: 500;">&bull;</p>
                            <p class="mb-3 text-center" style="font-weight: 600;<?php echo $_SESSION["msgType"] == 'Error' ? 'color: red;' : 'color:green;'?>">&emsp;<?php echo $_SESSION["message"] ?>&emsp;</p>
                            <div class="mb-3">
                                <form action="model.php" method="POST">
                                    <div class="form-group mb-3" controlId="formBasicEmail">
                                        <label for="email" class="form-label">
                                            Email address:
                                        </label>
                                        <input class="form-control" type="email" id="email" required placeholder="Username" name="email" />
                                    </div>

                                    <div class="form-group mb-3" controlId="formBasicPassword">
                                        <label for="password" class="form-label">Password:</label>
                                        <input type="password" class="form-control" id="password" required placeholder="Password" name="password" />
                                    </div>

                                    <br>

                                    <div class="d-grid w-50 mx-auto">
                                        <input class="btn btn-primary rounded-0" type="submit" name="login" value="Log in"
                                        </input>
                                    </div>
                                </form>
                                <div class="container">
                                    <br><br>
                                </div>
                                <div class="mt-3">
                                    <p class="mb-0  text-center">
                                        Don't have an account?&nbsp;
                                        <a href="index.php?page=registration" class="nav-link d-inline text-primary fw-bold"> Register </a>
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