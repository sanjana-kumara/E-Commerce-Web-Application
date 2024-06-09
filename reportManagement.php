<?php

session_start();

if (isset($_SESSION["ad"])) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />
        <link rel="stylesheet" href="bootstrap.css">
        <link rel="stylesheet" href="style.css">
        <title>Report Managemnt | Halgahawatta Hardware Admin Dashboard</title>
    </head>

    <body class="addminBody">

        <?php include "adminNaveBar.php"; ?>

        <div class="container-fluid vh-100">

            <div class="row justify-content-center mt-5">

                <div class="col-4 mt-5 ">

                    <div class="row">

                        <a href="adminStockReport.php">
                            <div class="col-10 btn btn-warning rounded-5 shadow-lg p-4 fs-1 fw-bold">Stock Report</div>
                        </a>
                    </div>

                </div>

            </div>
            <div class="row justify-content-center">

                <div class="col-4 mt-5 ">

                    <div class="row">

                        <a href="adminProductReport.php">
                            <div class="col-10 btn btn-warning rounded-5 shadow-lg p-4 fs-1 fw-bold">Product Report</div>
                        </a>

                    </div>

                </div>

            </div>
            <div class="row justify-content-center">

                <div class="col-4 mt-5 ">

                    <div class="row">

                        <a href="adminUserReport.php">
                            <div class="col-10 btn btn-warning rounded-5 shadow-lg p-4 fs-1 fw-bold">User Report</div>
                        </a>

                    </div>

                </div>

            </div>

        </div>

        <script src="script.js"></script>
        <script src="bootstrap.bundle.js"></script>
    </body>

    </html>

<?php
} else {
    header("location:adminLogin.php");
}

?>