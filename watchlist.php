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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="style.css">
        <title>Watchlist | Halgahawatta Hardware</title>
    </head>

    <body>

        <div class="container-fluid vh-100">

            <?php include "header.php"; ?>

            <div class="row justify-content-center p-3">

                <div class="col-12 shadow-lg rounded-5 cart_body">

                    <div class="row justify-content-center p-3" id="cartBody">

                        <?php

                        $rs = Database::search("SELECT * FROM `product` INNER JOIN `watchlist` ON `product`.`id`=`watchlist`.`product_id`
                            INNER JOIN `brand` ON `brand`.`brand_id`= `product`.`brand_id` 
                            INNER JOIN `condition` ON `condition`.`con_id` = `product`.`condition_con_id`
                            INNER JOIN `category` ON `category`.`cat_id` = `product`.`category_id`
                            INNER JOIN `product_img` ON `product_img`.`product_id` = `product`.`id`
                            INNER JOIN `size` ON `size`.`size_id`= `product`.`size_id` WHERE `watchlist`.`user_id` ='" . $data["id"] . "' ");

                        $num = $rs->num_rows;

                        for ($i = 0; $i < $num; $i++) {

                            $d = $rs->fetch_assoc();
                        ?>

                            <div class="col-11 border border-3 border-dark rounded-5 cart_div">

                                <div class="row">

                                    <div class="col-2 p-3 d-none d-md-block">

                                        <img id="i2" class="rounded-5 mx-auto d-block productimgupload productimg" src="<?php echo $d["img_path"]; ?>">

                                    </div>

                                    <div class="col-md-4">

                                        <span class="fs-2 fw-bold">Name</span><br>
                                        <span class="fs-3 fw-bold">Brand Name</span><br>
                                        <span class="fs-3 fw-bold">Size</span><br>
                                        <span class="fs-1 fw-bold text-warning mt-2">Rs : 2000.00</span>

                                    </div>

                                    <div class="col-lg-5 ms-5 me-3 mt-3">

                                        <div class="row ">

                                            <div class="col-lg-12 mt-4 mb-4 ">

                                                <div class="col-md-12 mt-4 mb-4 d-flex justify-content-end">

                                                    <button class="btn h-100 w-100 p-2 border border-3 border-dark shadow-lg fw-bold fs-3 rounded-5 addcart_Btn me-2" disabled>Buy Now</button>
                                                    <button class="btn h-100 w-100 p-2 border border-3 border-dark shadow-lg fw-bold fs-3 rounded-5 btn-warning me-2">Add to Cart</button>
                                                    <button class="btn h-100 w-100 p-3 border border-3 border-dark shadow-lg fw-bold fs-4 rounded-5 btn-primary">Continue Shopping </button>
                                                    <i class="fa-solid fa-trash fa-shake fs-1 fw-bold mt-2 ms-3" onclick="removeWatchlist(<?php echo $d['product_id'] ?>);"></i>

                                                </div>


                                            </div>


                                        </div>

                                    </div>

                                </div>

                            </div>

                        <?php
                        }

                        ?>



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