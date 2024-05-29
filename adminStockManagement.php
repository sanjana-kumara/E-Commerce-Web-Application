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

    <body onload="loadStock(0);">

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

                            <div class="row justify-content-center p-3 gap-3">

                                <?php

                                $product_rs = Database::search("SELECT * FROM `product` ORDER BY `datetime_add` DESC LIMIT 8 ");
                                $product_num = $product_rs->num_rows;

                                for ($x = 0; $x < $product_num; $x++) {

                                    $product_data = $product_rs->fetch_assoc();

                                ?>


                                    <div class="col-md-3 border border-3 border-dark shadow-lg ms-md-4 bg-light rounded-5 img_body">

                                        <div class="row justify-content-center">

                                            <?php

                                            $img_rs = Database::search("SELECT * FROM `product_img` WHERE `product_id`='" . $product_data["id"] . "' ");
                                            $img_data = $img_rs->fetch_assoc();

                                            ?>

                                            <div class="col-lg-7 ms-md-2 mt-2 mb-4">

                                                <img class="mt-2 border border-3 border-dark rounded-4 shadow-lg h-100 w-100" src="<?php echo ($img_data["img_path"]); ?>" alt="img">

                                            </div>

                                        </div>

                                        <div class="row justify-content-center text-center">

                                            <div class="col-10">

                                                <span class="fs-3 fw-bold recent_text_1"> <?php echo ($product_data["name"]); ?> </span>

                                            </div>
                                            <div class="col-10 ">

                                                <span class="fs-2 fw-bold recent_text_2">Rs. <?php echo ($product_data["price"]); ?>.00 </span>

                                            </div>
                                            <div class="col-10">

                                                <span class="fs-4 fw-bold recent_text_3"> <?php echo ($product_data["quantity"]); ?> Items In Stock </span>

                                            </div>
                                            <div class="col-10 mb-3 mt-3">

                                                <a href="updateProduct.php"><button class="fs-4 stock_imgbtn w-75 shadow-lg">Update Product</button></a>

                                            </div>
                                            <div class="col-10 mb-3">

                                                <a href=<?php echo "singleProductview.php?pid=".($product_data['id']); ?>><button class="fs-4 stock_imgbtn_1 w-75 shadow-lg" >View Product</button></a>

                                            </div>

                                            <?php

                                            $btn_status = $product_data["statues"];

                                            if ($btn_status == 0) {
                                            ?>

                                                <div class="col-10 mb-3">

                                                    <a href="#"><button class="fs-4 stock_imgbtn_2 w-75 shadow-lg" id="block<?php echo $product_data['id']; ?>" onclick="productblock('<?php echo $product_data['id']; ?>');">Block Product</button></a>

                                                </div>

                                            <?php

                                            } elseif ($btn_status == 1) {

                                            ?>

                                                <div class="col-10 mb-3">

                                                    <a href="#"><button class="fs-4 stock_imgbtn_3 w-75 shadow-lg" id="block<?php echo $product_data['id']; ?>" onclick="productblock('<?php echo $product_data['id']; ?>');">Active Product</button></a>

                                                </div>

                                            <?php

                                            }

                                            ?>


                                        </div>

                                    </div>


                                <?php

                                }

                                ?>

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

                                    <input type="text" class="border border-2 border-dark shadow-lg form-control h-100 fs-3 fw-bold stock_se_input" placeholder="Product Name" id="product" onkeyup="searchProduct(0)">

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

            <div class="row" id="pid">
            
            <!-- Loaded Product From loadeStockProcess.php -->

            </div>


        </div>

    </body>

    </html>

<?php

} else {

    echo ("Invalide Admin User");
}


?>