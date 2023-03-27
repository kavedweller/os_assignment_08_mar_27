<?php session_start() ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login success</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body class="bg-light d-flex">
<div class="container p-5 ">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-8 col-lg-6 col-xs-12 ">
            <div class="border border-4 bg-primary border-primary"></div>
            <div class="card shadow rounded-0">
                <div class="card-body">
                    <div class="mb-3 mt-md-4 px-md-3 px-xs-1">
                        <h2 class="fw-bold mb-2 mt-5 text-center">WELCOME</h2>
                        <h3 class="mb-2 text-center" style="font-weight: 500;"><?php echo $_SESSION["userFirstName"] ?>
                            !</h3>

                        <div class="mb-3">
                            <div class="container">

                            </div>
                            <div class="container">
                                <br><br>
                            </div>
                            <div class="mt-3">
                                <p class="mb-0  text-center">
                                    &nbsp;
                                    <a href="index.php?page=logout" class="nav-link d-inline text-primary fw-bold">
                                        Log-out </a>
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
