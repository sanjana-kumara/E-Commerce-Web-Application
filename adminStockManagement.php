<?php

include "connection.php";

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
        <link rel="stylesheet" href="style.css">
        <title>Stock Management</title>

    </head>

    <body>

        <div class="container-fluid">

            <?php include "adminNaveBar.php"; ?>

            <div class="row">

                <div class="col-12">

                    <div class="row justify-content-center">

                        <div class="col-lg-10 border border-3 border-black mt-3 p-2 recentStock_body">

                            <div class="row justify-content-center">

                                <div class="col-md-5 text-center mb-2">

                                    <span class="fw-bold fs-1"> Recent Stock </span>

                                </div>

                            </div>

                            <div class="row justify-content-center p-3">

                                <!-- Imgage 1 -->

                                <div class="col-md-3 border border-3 border-dark shadow-lg ms-md-4 bg-light rounded-5 img_body">

                                    <div class="row">

                                        <div class="col-lg-5 ms-md-2 mt-2 ">

                                            <img class="mt-2 border border-3 border-dark rounded-4 shadow-lg" src="https://via.placeholder.com/300" alt="img">

                                        </div>

                                    </div>

                                    <div class="row justify-content-center text-center">

                                        <div class="col-10">

                                            <span class="fs-1 fw-bold recent_text_1"> Product name </span>

                                        </div>
                                        <div class="col-10 ">

                                            <span class="fs-2 fw-bold recent_text_2"> Price </span>

                                        </div>
                                        <div class="col-10">

                                            <span class="fs-4 fw-bold recent_text_3"> 10 Items In Stock </span>

                                        </div>
                                        <div class="col-10 mb-3 mt-3">

                                            <a href="viewProduct.php"><button class="fs-4 stock_imgbtn w-75 shadow-lg">Update Product</button></a>

                                        </div>
                                        <div class="col-10 mb-3">

                                            <button class="fs-4 stock_imgbtn_1 w-75 shadow-lg">View Product</button>

                                        </div>

                                    </div>

                                </div>

                                <!-- Imgage 1 -->
                                <!-- Imgage 1 -->

                                <div class="col-md-3 border border-3 border-dark shadow-lg ms-md-4 bg-light rounded-5 img_body">

                                    <div class="row">

                                        <div class="col-lg-5 ms-md-2 mt-2 ">

                                            <img class="mt-2 border border-3 border-dark rounded-4 shadow-lg" src="https://via.placeholder.com/300" alt="img">

                                        </div>

                                    </div>

                                    <div class="row justify-content-center text-center">

                                        <div class="col-10">

                                            <span class="fs-1 fw-bold recent_text_1"> Product name </span>

                                        </div>
                                        <div class="col-10 ">

                                            <span class="fs-2 fw-bold recent_text_2"> Price </span>

                                        </div>
                                        <div class="col-10">

                                            <span class="fs-4 fw-bold recent_text_3"> 10 Items In Stock </span>

                                        </div>
                                        <div class="col-10 mb-3 mt-3">

                                            <button class="fs-4 stock_imgbtn w-75 shadow-lg">Update Product</button>

                                        </div>
                                        <div class="col-10 mb-3">

                                            <button class="fs-4 stock_imgbtn_1 w-75 shadow-lg">View Product</button>

                                        </div>

                                    </div>

                                </div>

                                <!-- Imgage 1 -->
                                <!-- Imgage 1 -->

                                <div class="col-md-3 border border-3 border-dark shadow-lg ms-md-4 bg-light rounded-5 img_body">

                                    <div class="row">

                                        <div class="col-lg-5 ms-md-2 mt-2 ">

                                            <img class="mt-2 border border-3 rounded-4 border-dark shadow-lg" src="https://via.placeholder.com/300" alt="img">

                                        </div>

                                    </div>

                                    <div class="row justify-content-center text-center">

                                        <div class="col-10">

                                            <span class="fs-1 fw-bold recent_text_1"> Product name </span>

                                        </div>
                                        <div class="col-10 ">

                                            <span class="fs-2 fw-bold recent_text_2"> Price </span>

                                        </div>
                                        <div class="col-10">

                                            <span class="fs-4 fw-bold recent_text_3"> 10 Items In Stock </span>

                                        </div>
                                        <div class="col-10 mb-3 mt-3">

                                            <button class="fs-4 stock_imgbtn w-75 shadow-lg">Update Product</button>

                                        </div>
                                        <div class="col-10 mb-3">

                                            <button class="fs-4 stock_imgbtn_1 w-75 shadow-lg">View Product</button>

                                        </div>

                                    </div>

                                </div>

                                <!-- Imgage 1 -->
                                <!-- Imgage 1 -->

                                <div class="col-md-3 border border-3 border-dark shadow-lg ms-md-4 bg-light rounded-5 img_body">

                                    <div class="row">

                                        <div class="col-lg-5 ms-md-2 mt-2 ">

                                            <img class="mt-2 border border-3 rounded-4 border-dark shadow-lg" src="https://via.placeholder.com/300" alt="img">

                                        </div>

                                    </div>

                                    <div class="row justify-content-center text-center">

                                        <div class="col-10">

                                            <span class="fs-1 fw-bold recent_text_1"> Product name </span>

                                        </div>
                                        <div class="col-10 ">

                                            <span class="fs-2 fw-bold recent_text_2"> Price </span>

                                        </div>
                                        <div class="col-10">

                                            <span class="fs-4 fw-bold recent_text_3"> 10 Items In Stock </span>

                                        </div>
                                        <div class="col-10 mb-3 mt-3">

                                            <button class="fs-4 stock_imgbtn w-75 shadow-lg">Update Product</button>

                                        </div>
                                        <div class="col-10 mb-3">

                                            <button class="fs-4 stock_imgbtn_1 w-75 shadow-lg">View Product</button>

                                        </div>

                                    </div>

                                </div>

                                <!-- Imgage 1 -->

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="row">

                <div>

                    <div class="row justify-content-center">

                        <div class="col-11">

                            <div class="row justify-content-end mt-3">

                                <div class="col-4 d-none d-md-block">

                                    <input type="text" class="border border-2 border-dark shadow-lg form-control h-100 fs-3 fw-bold stock_se_input" placeholder="Product Name">

                                </div>
                                <div class="col-2 d-none d-md-block">

                                    <button class="btn border border-2 border-dark shadow-lg w-100 h-100 fs-3 rounded-5 fw-bold stock_se_btn">Search</button>

                                </div>
                                <div class="col-12 col-md-2">

                                    <select class="border border-2 border-dark shadow-lg form form-select form-control fs-4 fw select_body text-center">
                                        <option class="select_body1"> Short By </option>
                                        <option class="select_body1"> Out Of Stock </option>
                                        <option class="select_body1"> Out Of Stock </option>
                                    </select>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="row">

                <div class="col-12">

                    <div class="row justify-content-center p-4">

                        <!-- Imgage 1 -->

                        <div class="col-md- border border-3 border-dark shadow-lg ms-md-4 bg-light rounded-5 img_body">

                            <div class="row">

                                <div class="col-lg-5 ms-md-2 mt-2 ">

                                    <img class="mt-2 border border-3 border-dark rounded-4 shadow-lg" src="https://via.placeholder.com/300" alt="img">

                                </div>

                            </div>

                            <div class="row justify-content-center text-center">

                                <div class="col-10">

                                    <span class="fs-1 fw-bold recent_text_1"> Product name </span>

                                </div>
                                <div class="col-10 ">

                                    <span class="fs-2 fw-bold recent_text_2"> Price </span>

                                </div>
                                <div class="col-10">

                                    <span class="fs-4 fw-bold recent_text_3"> 10 Items In Stock </span>

                                </div>
                                <div class="col-10 mb-3 mt-3">

                                    <button class="fs-4 stock_imgbtn w-75 shadow-lg">Update Product</button>

                                </div>
                                <div class="col-10 mb-3">

                                    <button class="fs-4 stock_imgbtn_1 w-75 shadow-lg">View Product</button>

                                </div>

                            </div>

                        </div>

                        <!-- Imgage 1 -->
                        <!-- Imgage 1 -->

                        <div class="col-md-2 border border-3 border-dark shadow-lg ms-md-4 bg-light rounded-5 img_body">

                            <div class="row">

                                <div class="col-lg-5 ms-md-2 mt-2 ">

                                    <img class="mt-2 border border-3 border-dark rounded-4 shadow-lg" src="https://via.placeholder.com/300" alt="img">

                                </div>

                            </div>

                            <div class="row justify-content-center text-center">

                                <div class="col-10">

                                    <span class="fs-1 fw-bold recent_text_1"> Product name </span>

                                </div>
                                <div class="col-10 ">

                                    <span class="fs-2 fw-bold recent_text_2"> Price </span>

                                </div>
                                <div class="col-10">

                                    <span class="fs-4 fw-bold recent_text_3"> 10 Items In Stock </span>

                                </div>
                                <div class="col-10 mb-3 mt-3">

                                    <button class="fs-4 stock_imgbtn w-75 shadow-lg">Update Product</button>

                                </div>
                                <div class="col-10 mb-3">

                                    <button class="fs-4 stock_imgbtn_1 w-75 shadow-lg">View Product</button>

                                </div>

                            </div>

                        </div>

                        <!-- Imgage 1 -->
                        <!-- Imgage 1 -->

                        <div class="col-md-2 border border-3 border-dark shadow-lg ms-md-4 bg-light rounded-5 img_body">

                            <div class="row">

                                <div class="col-lg-5 ms-md-2 mt-2 ">

                                    <img class="mt-2 border border-3 rounded-4 border-dark shadow-lg" src="https://via.placeholder.com/300" alt="img">

                                </div>

                            </div>

                            <div class="row justify-content-center text-center">

                                <div class="col-10">

                                    <span class="fs-1 fw-bold recent_text_1"> Product name </span>

                                </div>
                                <div class="col-10 ">

                                    <span class="fs-2 fw-bold recent_text_2"> Price </span>

                                </div>
                                <div class="col-10">

                                    <span class="fs-4 fw-bold recent_text_3"> 10 Items In Stock </span>

                                </div>
                                <div class="col-10 mb-3 mt-3">

                                    <button class="fs-4 stock_imgbtn w-75 shadow-lg">Update Product</button>

                                </div>
                                <div class="col-10 mb-3">

                                    <button class="fs-4 stock_imgbtn_1 w-75 shadow-lg">View Product</button>

                                </div>

                            </div>

                        </div>

                        <!-- Imgage 1 -->
                        <!-- Imgage 1 -->

                        <div class="col-md-2 border border-3 border-dark shadow-lg ms-md-4 bg-light rounded-5 img_body">

                            <div class="row">

                                <div class="col-lg-5 ms-md-2 mt-2 ">

                                    <img class="mt-2 border border-3 rounded-4 border-dark shadow-lg" src="https://via.placeholder.com/300" alt="img">

                                </div>

                            </div>

                            <div class="row justify-content-center text-center">

                                <div class="col-10">

                                    <span class="fs-1 fw-bold recent_text_1"> Product name </span>

                                </div>
                                <div class="col-10 ">

                                    <span class="fs-2 fw-bold recent_text_2"> Price </span>

                                </div>
                                <div class="col-10">

                                    <span class="fs-4 fw-bold recent_text_3"> 10 Items In Stock </span>

                                </div>
                                <div class="col-10 mb-3 mt-3">

                                    <button class="fs-4 stock_imgbtn w-75 shadow-lg">Update Product</button>

                                </div>
                                <div class="col-10 mb-3">

                                    <button class="fs-4 stock_imgbtn_1 w-75 shadow-lg">View Product</button>

                                </div>

                            </div>

                        </div>

                        <!-- Imgage 1 -->
                        <!-- Imgage 1 -->

                        <div class="col-md-2 border border-3 border-dark shadow-lg ms-md-4 bg-light rounded-5 img_body">

                            <div class="row">

                                <div class="col-lg-5 ms-md-2 mt-2 ">

                                    <img class="mt-2 border border-3 rounded-4 border-dark shadow-lg" src="https://via.placeholder.com/300" alt="img">

                                </div>

                            </div>

                            <div class="row justify-content-center text-center">

                                <div class="col-10">

                                    <span class="fs-1 fw-bold recent_text_1"> Product name </span>

                                </div>
                                <div class="col-10 ">

                                    <span class="fs-2 fw-bold recent_text_2"> Price </span>

                                </div>
                                <div class="col-10">

                                    <span class="fs-4 fw-bold recent_text_3"> 10 Items In Stock </span>

                                </div>
                                <div class="col-10 mb-3 mt-3">

                                    <button class="fs-4 stock_imgbtn w-75 shadow-lg">Update Product</button>

                                </div>
                                <div class="col-10 mb-3">

                                    <button class="fs-4 stock_imgbtn_1 w-75 shadow-lg">View Product</button>

                                </div>

                            </div>

                        </div>

                        <!-- Imgage 1 -->

                    </div>

                </div>

            </div>

            <!-- pagination -->

            <div class="row justify-content-center">

                <div class="col-2 d-none d-md-block">

                    <div class="row col-4 h-100 w-100">

                        <nav aria-label="Page navigation example">

                            <ul class="pagination fw-bold fs-3">

                                <li class="page-item disabled">
                                    <a class="page-link fs-3">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link fs-3" href="#">1</a></li>
                                <li class="page-item"><a class="page-link fs-3" href="#">2</a></li>
                                <li><a class="page-link fs-3">......</a></li>
                                <li class="page-item"><a class="page-link fs-3" href="#">5</a></li>
                                <li class="page-item">
                                    <a class="page-link fs-3" href="#">Next</a>
                                </li>

                            </ul>

                        </nav>

                    </div>

                </div>

            </div>

            <!-- pagination -->

        </div>

    </body>

    </html>

<?php

} else {

    echo ("Invalide Admin User");
}


?>