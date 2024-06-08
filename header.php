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
    <title>Halgahawatta Hardware Admin Panel</title>
</head>

<body>

    <?php


    if (isset($_SESSION["u"])) {

        $data = $_SESSION["u"];

    ?>

        <div class="row">

            <div class="col-12 header_body">

                <div class="row">

                    <div class="col-8 d-flex justify-content-center">

                        <span class="fw-bold mt-3 tex01">Halgahawatta Hardware</span>

                    </div>

                    <div class="col-4 mt-3 mb-2">

                        <div class="row">

                            <div class="col-7">

                                <div class="row">

                                    <div class="col-md-4">

                                        <button class="usericon border border-3 border-dark shadow-lg mt-2" data-bs-toggle="dropdown" data-bs-auto-close="outside" style="background-image:url('<?php

                                                                                                                                                                                                $img_rs = Database::search("SELECT * FROM `profile_img` WHERE `user_id`='" . $data["id"] . "' ");
                                                                                                                                                                                                $img_data = $img_rs->fetch_assoc();

                                                                                                                                                                                                echo $img_data["img_path"] ?>');"></button>

                                        <ul class="dropdown-menu bg-black">

                                            <li><a class="dropdown-item link-warning text-white fs-4 fw-bold mt-2" href="userProfile.php"><i class="fa-solid fa-user fa-bounce fs-4 mt-2"></i>&nbsp;&nbsp;&nbsp; My Profile </a>
                                            <li><a class="dropdown-item link-warning text-white fs-4 fw-bold" href="home.php"><i class="fa-sharp fa-solid fa-shop fa-beat fs-5"></i>&nbsp;&nbsp;&nbsp;Shop </a>
                                                <hr class="border border-3 border-white">

                                                <?php

                                                $product_rs = Database::search("SELECT * FROM `cart` WHERE `user_id`='" . $data["id"] . "' ");
                                                $product_num = $product_rs->num_rows;

                                                if ($product_num == 0) {
                                                ?>

                                            <li><a class="dropdown-item link-warning text-white fs-4 fw-bold" href="addTocart.php"><i class="fa-solid fa-cart-plus fa-beat fs-4"></i>&nbsp;&nbsp;&nbsp;Cart </a>


                                            <?php

                                                } else {
                                            ?>

                                            <li><a class="dropdown-item link-warning text-white fs-4 fw-bold" href="addTocart.php"><i class="fa-solid fa-cart-plus fa-beat fs-4">

                                                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                                            <?php echo $product_num; ?><span class="visually-hidden">unread messages</span>
                                                        </span>

                                                    </i>&nbsp;&nbsp;&nbsp;Cart </a>


                                            <?php
                                                }


                                            ?>

                                            <li><a class="dropdown-item link-warning text-white fs-4 fw-bold mt-2" href="watchlist.php"><i class="fa-solid fa-heart-circle-plus fa-bounce fs-4"></i>&nbsp;&nbsp;&nbsp;Watchlist </a>
                                            <li><a class="dropdown-item link-warning text-white fs-4 fw-bold" href="orderHistory.php "><i class="fa-solid fa-list-check fa-beat fs-4"></i>&nbsp;&nbsp;&nbsp;Order History </a>
                                            <li><a class="dropdown-item link-warning text-white fs-4 fw-bold" href="#"><i class="fa-solid fa-tag fa-beat fs-4"></i>&nbsp;&nbsp;&nbsp;Offers % </a>
                                            <li><a class="dropdown-item text-white link-warning fs-4 fw-bold mt-2" href="#"><i class="fa-solid fa-star fa-bounce fs-4"></i>&nbsp;&nbsp;&nbsp;My Reviews </a>
                                                <hr class="border border-3 border-white">
                                            <li><a class="dropdown-item link-warning text-white fs-4 fw-bold" href="#" onclick="logOut2();"><i class="fa-solid fa-arrow-right-from-bracket fa-beat fs-4"></i>&nbsp;&nbsp;&nbsp;Log Out </a>

                                        </ul>

                                    </div>

                                    <div class="col-8 mt-2 d-none d-md-block">

                                        <span class="fs-3 fw-bold mt-3 text-white">&nbsp;&nbsp;<?php echo $data["username"]; ?></span><br>
                                        <span class="fs-6 fw-bold mt-3 tex_color"><?php echo $data["email"]; ?></span>

                                    </div>

                                </div>

                            </div>

                            <div class="col-2 d-none d-md-block">

                                <?php

                                if ($product_num == 0) {
                                ?>
                                    <a href="addTocart.php"><button type="button" class="btn-primary position-relative carticon border border-3 border-dark shadow-lg mt-2"></button></a>

                                <?php

                                } else {
                                ?>

                                    <a href="addTocart.php"><button type="button" class="btn-primary position-relative carticon border border-3 border-dark shadow-lg mt-2">

                                            <span class="position-absolute fw-bold text-dark fs-3 bg-warning top-0 start-100 translate-middle badge rounded-pill">

                                                <?php echo $product_num; ?>

                                                <span class="visually-hidden">unread messages</span>

                                            </span>

                                        </button>

                                    </a>


                                <?php
                                }

                                ?>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="row justify-content-center">

                    <div class="col-md-11">

                        <div class="row justify-content-center">

                            <div class="col-md-11 mt-2 mb-4">

                                <div class="row">

                                    <div class="col-md-8 mt-2">

                                        <input type="text" class="form-control w-100 h-100 fs-4 fw-bold" placeholder="Type Here..." id="homeproduct" onkeyup="homeSearch(0);">

                                    </div>

                                    <div class="col-md-4 gap-3">

                                        <button class="rounded-4 h-100 w-50 btn01 me-2 fs-3 fw-bold"> Search </button>
                                        <a href="advancedSearch.php"><button class="rounded-4 h-100 w-25 btn02 fs-3 fw-bold text-light shadow-lg"> Filter </button></a>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    <?php

    } else {

    ?>

        <div class="row">

            <div class="col-12 header_body">

                <div class="row">

                    <div class="col-8 d-flex justify-content-center">

                        <span class="fw-bold mt-3 tex01">Halgahawatta Hardware</span>

                    </div>

                    <div class="col-4 mt-3 mb-2">

                        <div class="row">

                            <div class="col-7">

                                <div class="row">

                                    <div class="col-md-4">

                                        <button class="usericon border border-3 border-dark shadow-lg mt-2" data-bs-toggle="dropdown" data-bs-auto-close="outside"></button>

                                        <ul class="dropdown-menu bg-black">

                                            <li><a class="dropdown-item link-warning text-white fs-4 fw-bold mt-2" href="userProfile.php"><i class="fa-solid fa-user fa-bounce fs-4 mt-2"></i>&nbsp;&nbsp;&nbsp; My Profile </a>
                                            <li><a class="dropdown-item link-warning text-white fs-4 fw-bold" href="home.php"><i class="fa-sharp fa-solid fa-shop fa-beat fs-5"></i>&nbsp;&nbsp;&nbsp;Shop </a>
                                                <hr class="border border-3 border-white">
                                            <li><a class="dropdown-item link-warning text-white fs-4 fw-bold" href="#"><i class="fa-solid fa-cart-plus fa-beat fs-4"></i>&nbsp;&nbsp;&nbsp;Cart </a>
                                            <li><a class="dropdown-item link-warning text-white fs-4 fw-bold mt-2" href="#"><i class="fa-solid fa-heart-circle-plus fa-bounce fs-4"></i>&nbsp;&nbsp;&nbsp;Watchlist </a>
                                            <li><a class="dropdown-item link-warning text-white fs-4 fw-bold" href="#"><i class="fa-solid fa-list-check fa-beat fs-4"></i>&nbsp;&nbsp;&nbsp;Purchased History </a>
                                            <li><a class="dropdown-item link-warning text-white fs-4 fw-bold" href="#"><i class="fa-solid fa-tag fa-beat fs-4"></i>&nbsp;&nbsp;&nbsp;Offers % </a>
                                            <li><a class="dropdown-item text-white link-warning fs-5 fw-bold mt-2" href="#"><i class="fa-solid fa-star fa-bounce fs-4"></i>&nbsp;&nbsp;&nbsp;My Reviews </a>
                                                <hr class="border border-3 border-white">
                                            <li><a class="dropdown-item link-warning text-white fs-5 fw-bold" href="#" onclick="logOut2();"><i class="fa-solid fa-arrow-right-from-bracket fa-beat fs-4"></i>&nbsp;&nbsp;&nbsp;Log Out </a>

                                        </ul>

                                    </div>

                                    <div class="col-8 mt-4 d-none d-md-block">

                                        <span class="fs-3 fw-bold mt-3 text-white">&nbsp;&nbsp;WELOCOME </span><br>
                                        <span class="fs-6 fw-bold mt-3 tex_color">Halgahawatta Hardware</span>

                                    </div>

                                </div>

                            </div>

                            <div class="col-4 d-none d-md-block">

                                <button class="carticon border border-3 border-dark shadow-lg mt-2"></button>

                            </div>

                        </div>

                    </div>

                </div>


                <div class="row justify-content-center">

                    <div class="col-md-11">

                        <div class="row justify-content-center">

                            <div class="col-md-11 mt-2 mb-4">

                                <div class="row">

                                    <div class="col-md-8 mt-2">

                                        <input type="text" class="form-control w-100 h-100 fs-4 fw-bold" placeholder="Type Here...">

                                    </div>

                                    <div class="col-md-4 gap-3">

                                        <button class="rounded-4 h-100 w-50 btn01 me-2 fs-3 fw-bold"> Search </button>
                                        <a href="advancedSearch.php"><button class="rounded-4 h-100 w-25 btn02 fs-3 fw-bold text-light shadow-lg"> Filter </button></a>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    <?php

    }


    ?>

    <script src="script.js"></script>
    <script src="bootstrap.bundle.js"></script>

</body>

</html>