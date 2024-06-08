<?php
include "connection.php";

session_start();

if (isset($_SESSION["u"])) {

    $data = $_SESSION["u"];

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
        <title>Sigal Product View</title>
    </head>

    <body onload="loadCart();">

        <div class="container-fluid vh-100">

            <?php include "header.php"; ?>

            <div class="row justify-content-center p-3">

                <div class="col-12 shadow-lg rounded-5 cart_body">

                    <div class="row justify-content-center p-3" id="cartBody">

                        <!-- Loade Cart Items in loadeCartProcess.php -->                      

                    </div>

                </div>

            </div>


            <?php include "footer.php" ?>

        </div>

        
        <script src="bootstrap.js"></script>
        <script src="bootstrap.bundle.js"></script>
        <script src="script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>
        
    </body>

    </html>

<?php

} else {

    header("location:index.php");

    // echo ("Invalide Admin User");
}


?>