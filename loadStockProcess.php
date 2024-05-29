<?php

include "connection.php";

$pageno = 0;
$page = $_POST["p"];
// echo($page);

if (0 != $page) {
    $pageno = $page;
} else {
    $pageno = 1;
}

$q = "SELECT * FROM `product` ORDER BY `quantity` ASC";
$rs = Database::search($q);
$num = $rs->num_rows;
// echo($num);

$result_per_page = 8;
$num_of_pages = ceil($num / $result_per_page);
// echo($num_of_pages);

$page_results = ($pageno - 1) * $result_per_page;
// echo($page_results);

$q2 = $q . " LIMIT $result_per_page OFFSET $page_results";
$rs2 = Database::search($q2);
$num2 = $rs2->num_rows;
// echo($num2);

if ($num == 0) {
    // Not Avalibale stock
    echo ("No Product Here... ");
} else {
    // Loade Stock
?>

    <div class="col-12">

        <div class="row justify-content-center p-4 gap-3">

            <?php

            for ($x = 0; $x < $num2; $x++) {

                $product_data = $rs2->fetch_assoc();

            ?>


                <div class="border border-3 border-dark shadow-lg ms-md-4 bg-light rounded-5 img_body">

                    <div class="row justify-content-center">

                        <?php

                        $img_rs = Database::search("SELECT * FROM `product_img` WHERE `product_id`='" . $product_data["id"] . "' ");
                        $img_data = $img_rs->fetch_assoc();

                        ?>

                        <div class="col-lg-8 ms-md-2 mt-2 mb-4">

                            <img class="mt-2 border border-3 border-dark rounded-4 shadow-lg h-100 w-100" src="<?php echo ($img_data["img_path"]); ?>" alt="img">

                        </div>

                    </div>

                    <div class="row justify-content-center text-center">

                        <div class="col-10">

                            <span class="fs-1 fw-bold recent_text_1"> <?php echo ($product_data["name"]); ?> </span>

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

                            <a href=<?php echo "singleProductview.php?pid=" . ($product_data['id']); ?>><button class="fs-4 stock_imgbtn_1 w-75 shadow-lg">View Product</button></a>

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

    <!-- pagination -->

    <div class="row justify-content-center">

        <div class="col-2 d-none d-md-block">

            <div class="row col-4 h-100 w-100">

                <nav aria-label="Page navigation example">

                    <ul class="pagination fw-bold fs-3">

                        <li class="page-item">
                            <a class="page-link fs-3" <?php if ($pageno <= 1) {
                                                            echo ("#");
                                                        } else {
                                                        ?> onclick="loadStock(<?php echo ($pageno - 1) ?>);" <?php
                                                                                                            }
                                                                                                                ?>>Previous</a>
                        </li>

                        <?php

                        for ($i = 1; $i <= $num_of_pages; $i++) {

                            if ($i == $pageno) {
                        ?>

                                <li class="page-item active"><a class="page-link fs-3" onclick="loadStock(<?php echo $i ?>);"><?php echo $i ?></a></li>

                            <?php
                            } else {
                            ?>

                                <li class="page-item "><a class="page-link fs-3" onclick="loadStock(<?php echo $i ?>);"><?php echo $i ?></a></li>

                        <?php
                            }
                        }

                        ?>

                        <li class="page-item">
                            <a class="page-link fs-3" <?php if ($pageno >= $num_of_pages) {
                                                            echo ("#");
                                                        } else {
                                                        ?> onclick="loadStock(<?php echo ($pageno + 1) ?>);" <?php
                                                                                                            }
                                                                                                                ?>>Next</a>
                        </li>

                    </ul>

                </nav>

            </div>

        </div>

    </div>

<?php
}
