    <?php include "connection.php"; ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Home | Halgahawatta hardaware</title>

        <link rel="stylesheet" href="bootstrap.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="icon" href="#" />

    </head>

    <body class="home_body" onload="loadeProduct(0);">

        <div class="container-fluid">

            <div class="row header_body">

                <div class="col-12">

                    <div class="row">

                        <?php

                        session_start();
                        if (isset($_SESSION["u"])) {

                        ?>

                            <div class="col-lg-12 d-none d-lg-block">

                                <div class="row justify-content-end mt-4">

                                    <div class="col-1">

                                        <span class="fw-bold text-light link-warning fs-3">Home</span>

                                    </div>
                                    <div class="col-1">

                                        <span class="fw-bold text-light link-warning fs-3">Newsroom</span>

                                    </div>
                                    <div class="col-2">

                                        <span class="fw-bold text-light link-warning fs-3">Contact Us </span>

                                    </div>

                                </div>

                            </div>

                        <?php

                        } else {

                        ?>
                            <div class="col-4">

                                <a href="index.php"> <i class="fa-solid fa-right-to-bracket fs-1 text-white link-warning p-1 mt-2"></i></a> <span class="fs-2 text-white fw-bold link-warning">Login / Register </span>

                            </div>

                            <div class="col-8">

                                <div class="row justify-content-end mt-3">

                                    <div class="col-1">

                                        <span class="fw-bold text-light link-warning fs-3">Home</span>

                                    </div>
                                    <div class="col-2">

                                        <span class="fw-bold text-light link-warning fs-3">Newsroom</span>

                                    </div>
                                    <div class="col-1">

                                        <span class="fw-bold text-light link-warning fs-3">Shop</span>

                                    </div>
                                    <div class="col-2">

                                        <span class="fw-bold text-light link-warning fs-3">Contact Us </span>

                                    </div>

                                </div>

                            </div>

                        <?php

                        }

                        ?>

                    </div>

                </div>

                <hr class="fs-2 border-warning border border-4 mt-3">

            </div>

            <!-- Header -->

            <?php include "header.php"; ?>
            <!-- Header -->

            <div class="row">

                <div class="col-12 mb-2">

                    <div class="row justify-content-center gap-2" id="spid">

                        <!-- Loaded Product in homeSearchProductProcess.php -->

                    </div>

                </div>

            </div>

            <div class="col-12 p-4">

                <!-- Carousel -->
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">

                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <img src="resource/carousel/carousel 7.jpg " class="d-block carousel_img" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="resource/carousel/carousel 8.jpg" class="d-block carousel_img" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="resource/carousel/carousel 4.jpg " class="d-block carousel_img" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="resource/carousel/carousel 2.jpg" class="d-block carousel_img" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="resource/carousel/carousel 1.jpg" class="d-block carousel_img" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="resource/carousel/carousel 3.jpg" class="d-block carousel_img" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="resource/carousel/carousel 5.jpg" class="d-block carousel_img" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="resource/carousel/carousel 9.jpg" class="d-block carousel_img" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="resource/carousel/carousel 6.jpg" class="d-block carousel_img" alt="...">
                        </div>

                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">

                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>

                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">

                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>

                    </button>

                </div>
                <!-- Carousel -->

            </div>

        </div>

        <div class="row justify-content-center">

            <div class="col-11 mb-4">

                <p class="text-center newproduct_row w-100 h-100 mb-3">New Product</p>

            </div>


            <div class="row">

                <div class="col-12 mb-2">

                    <div class="row justify-content-center gap-2">

                        <!-- New Product Img -->

                        <?php

                        $product_rs = Database::search("SELECT * FROM `product` WHERE `statues`='1' ORDER BY `datetime_add` DESC LIMIT 5 ");
                        $product_num = $product_rs->num_rows;

                        for ($i = 0; $i < $product_num; $i++) {

                            $product_data = $product_rs->fetch_assoc();

                        ?>

                            <div class="col-lg-2 col-md-4 col-10 border border-2 rounded-5 border-dark bg-white shadow-lg">

                                <div class="row justify-content-center">

                                    <?php

                                    $img_rs = Database::search("SELECT * FROM `product_img` WHERE `product_id`='" . $product_data["id"] . "' ");
                                    $img_data = $img_rs->fetch_assoc();

                                    ?>

                                    <div class="col-8 border border-2 border-dark shadow-lg mt-2 home_imgbody">

                                        <img src="<?php echo ($img_data["img_path"]); ?>" class="home_img rounded-5">

                                    </div>

                                </div>

                                <div class="row justify-content-center">

                                    <div class="col-10 text-center mt-2">

                                        <span class="fs-3 fw-bold recent_text_1"><?php echo ($product_data["name"]); ?></span><br>
                                        <span class="fs-2 fw-bold recent_text_2">Rs. <?php echo ($product_data["price"]); ?>.00 </span><br>
                                        <span class="fs-4 fw-bold qty">Discount <?php echo ($product_data["Discount"]); ?></span>

                                    </div>

                                    <div class="col-10 mt-2">

                                        <a href=<?php echo "viewProduct.php?pid=" . ($product_data['id']); ?>> <button class="btn01 fs-4 fw-bold w-100 h-100 p-2 rounded-5 border-dark shadow-lg border border-2">Add To Cart </button> </a>

                                    </div>

                                    <div class="col-10 mt-2 mb-4">

                                        <button class="btn03 fs-4 fw-bold w-100 h-100 p-2 rounded-5 shadow-lg">
                                            <i class="fa-solid fa-eye-slash fs-3"></i> &nbsp; <i class="fa-solid fa-cart-plus fs-3"></i> &nbsp; <i class="fa-solid fa-heart-circle-plus fs-3"></i></button>

                                    </div>

                                </div>

                            </div>

                        <?php

                        }

                        ?>

                        <!--New Product Image -->

                    </div>

                </div>

            </div>

        </div>

        <!-- Image row 2 -->

        <div class="row justify-content-center">

            <div class="col-11 mb-4">

                <p class="text-center newproduct_row w-100 h-100 mb-3">Choose Your Products</p>

            </div>

            <div class="row">

                <div class="col-12 mb-2">

                    <div class="row justify-content-center gap-2" id="pid">

                        <!-- Loade Product in loadeHomeProductProcess.php -->

                    </div>


                </div>

            </div>

        </div>
        <!-- Image row 2 -->

    

        <script src="bootstrap.js"></script>
        <script src="bootstrap.bundle.js"></script>
        <script src="script.js"></script>
        <?php include "footer.php" ?>
    </body>

    </html>