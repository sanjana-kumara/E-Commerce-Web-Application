<?php

include "connection.php";

$pageno = 0;
$page = $_POST["p"];

if (0 != $page) {
    $pageno = $page;
} else {
    $pageno = 1;
}

$q = "SELECT * FROM `product` WHERE `statues`='1' ORDER BY `id` ASC";
$rs = Database::search($q);
$num = $rs->num_rows;

$result_per_page = 10;
$num_of_page = ceil($num / $result_per_page);

$page_of_result = ($pageno - 1) * $result_per_page;

$q2 = $q . " LIMIT $result_per_page OFFSET $page_of_result";
$rs2 = Database::search($q2);
$num2 = $rs2->num_rows;
// echo($num2);

if ($num2 == 0) {
    // not avalable Product

    echo ("No Product Here... ");
} else {
    // Load Product

    // $product_rs = Database::search("SELECT * FROM `product` ORDER BY `datetime_add` ASC ");
    // $product_num = $product_rs->num_rows;

    for ($i = 0; $i < $num2; $i++) {

        $product_data = $rs2->fetch_assoc();

?>

        <div class="col-lg-2 col-md-4 col-10 border border-2 rounded-5 border-dark bg-white shadow-lg">

            <div class="row justify-content-center">

                <?php

                $img_rs = Database::search("SELECT * FROM `product_img` WHERE `product_id`='" . $product_data["id"] . "' ");
                $img_data = $img_rs->fetch_assoc();

                ?>

                <div class="col-8 rounded-5 border border-2 border-dark shadow-lg mt-2 home_imgbody">

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

                <a href=<?php echo "viewProduct.php?pid=".($product_data['id']); ?>> <button class="btn01 fs-4 fw-bold w-100 h-100 p-2 rounded-5 border-dark shadow-lg border border-2">Add To Cart </button> </a> 

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

    <!-- Choose Your Products Img -->

    <!-- Pagination -->

    <div class="row justify-content-center">

        <div class="col-2">

            <nav aria-label="Page navigation example">

                <ul class="pagination">

                    <li class="page-item">
                        <a class="page-link fs-3" aria-label="Previous" <?php

                                                                        if ($pageno <= 1) {
                                                                            echo ("#");
                                                                        } else {
                                                                        ?> onclick="loadeProduct(<?php echo ($pageno - 1) ?>);" <?php
                                                                                                                            }


                                                                                                                                ?>>
                            <span aria-hidden="flase" class="fs-3">&laquo;</span>
                        </a>
                    </li>

                    <?php

                    for ($z = 1; $z <= $num_of_page; $z++) {

                        if ($z == $pageno) {

                    ?>

                            <li class="page-item active">
                                <a class="page-link fs-3" onclick="loadeProduct(<?php echo $z ?>);"><?php echo $z ?></a>
                            </li>

                        <?php

                        } else {

                        ?>

                            <li class="page-item">
                                <a class="page-link fs-3" onclick="loadeProduct(<?php echo $z ?>);"><?php echo $z ?></a>
                            </li>

                    <?php

                        }
                    }

                    ?>

                    <!-- <li class="page-item"><a class="page-link fs-3" href="#">3</a></li> -->
                    <li class="page-item">
                        <a class="page-link fs-3" href="#" aria-label="Next" <?php

                                                                                if ($pageno >= $num_of_page) {
                                                                                    echo ("#");
                                                                                } else {
                                                                                ?> onclick="loadeProduct(<?php echo ($pageno + 1) ?>);" <?php
                                                                                                                                    }


                                                                                                                                        ?>>
                            <span aria-hidden="true" class="fs-3">&raquo;</span>
                        </a>
                    </li>

                </ul>
            </nav>

        </div>

    </div>

    <!-- Pagination -->

<?php

}


?>