<?php

include "connection.php";

$pageno = 0;
$page = $_POST["pg"];
$product = $_POST["p"];

if (0 != $page) {
    $pageno = $page;
} else {
    $pageno = 1;
}

$q = "SELECT * FROM `product` WHERE `name` LIKE '%$product%'";
$rs = Database::search($q);
$num = $rs->num_rows;

$result_per_page = 8;
$num_of_page = ceil($num / $result_per_page);
// echo($num_of_page);

$page_results = ($pageno - 1) * $result_per_page;

$q2 = $q . " LIMIT $result_per_page OFFSET $page_results";
$rs2 = Database::search($q2);
$num2 = $rs2->num_rows;
// echo ($num2);

if ($num2 == 0) {
    //    No Result

?>

    <div class="d-flex flex-column align-items-center mt-5">
        <h1 class="fw-bold">Search No Result</h5>
            <p class="fs-2 fw-bold">We're Sorry, We cannot find any matches for your search ter...</p>
    </div>

<?php

} else {
    // Load Result
?>


    <?php

    for ($x = 0; $x < $num; $x++) {
        $product_data = $rs->fetch_assoc();
    ?>
        <!-- card -->

                <div class="border border-3 border-dark shadow-lg ms-md-5 bg-light mt-3 rounded-5 img_body justify-content-center">

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

                            <a href=<?php echo "singleProductview.php?pid=".($product_data['id']); ?>><button class="fs-4 stock_imgbtn_1 w-75 shadow-lg">View Product</button></a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- card -->

    <?php
    }

    ?>


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
                                                        ?> onclick="searchProduct(<?php echo ($pageno - 1) ?>);" <?php
                                                                                                            }
                                                                                                                ?>>Previous</a>
                        </li>

                        <?php

                        for ($i = 1; $i <= $num_of_page; $i++) {

                            if ($i == $pageno) {
                        ?>

                                <li class="page-item active"><a class="page-link fs-3" onclick="searchProduct(<?php echo $i ?>);"><?php echo $i ?></a></li>

                            <?php
                            } else {
                            ?>

                                <li class="page-item "><a class="page-link fs-3" onclick="searchProduct(<?php echo $i ?>);"><?php echo $i ?></a></li>

                        <?php
                            }
                        }

                        ?>

                        <li class="page-item">
                            <a class="page-link fs-3" <?php if ($pageno >= $num_of_page) {
                                                            echo ("#");
                                                        } else {
                                                        ?> onclick="searchProduct(<?php echo ($pageno + 1) ?>);" <?php
                                                                                                            }
                                                                                                                ?>>Next</a>
                        </li>

                    </ul>

                </nav>

            </div>

        </div>

    </div>

    <!-- pagination -->

<?php

}


?>