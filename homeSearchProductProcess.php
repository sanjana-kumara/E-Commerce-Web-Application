<?php

include "connection.php";

$pageno = 0;
$page = $_POST["pa"];
$product = $_POST["pr"];

// echo($page);
// echo($product);

if (0 != $page) {

    $pageno = $page;
    
} else {

    $pageno = 1;
}

$q = "SELECT * FROM `product` WHERE `product`.`name` LIKE '%$product%'";
$rs = Database::search($q);
$num = $rs->num_rows;

// echo($num);

$result_per_page = 6;
$num_of_page = ceil($num / $result_per_page);

// echo($num_of_page);

$page_of_result = ($pageno - 1) * $result_per_page;
// echo($page_of_result);

$q2 = $q . " LIMIT $result_per_page OFFSET $page_of_result";
$rs2 = Database::search($q2);
$num2 = $rs2->num_rows;

// echo($num2);

if ($num2 == 0) {
    // no result

?>

    <div class="mt-5 text-center">
        <h5 class="fs-1 fw-bold">Search No Result </h5>
        <p class="fs-4 fw-bold">We Sorry, We cannot find Matchs for Your Search term ...</p>
    </div>

    <?php

} else {
    // avalable Result

    for ($y = 0; $y < $num2; $y++) {

        $product_data = $rs2->fetch_assoc();

    ?>

        <div class="col-lg-2 col-md-4 col-10 border border-2 rounded-5 border-dark bg-white shadow-lg">

            <div class="row justify-content-center">

                <?php

                $img_rs = Database::search("SELECT * FROM `product_img` WHERE `product_id`='" . $product_data["id"] . "' ");
                $img_data = $img_rs->fetch_assoc();

                ?>

                <div class="col-8 rounded-5 col-md-10 border border-2 border-dark shadow-lg mt-2 home_imgbody">

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
        <!--New Product Image -->


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
                                                        ?> onclick="homeSearch(<?php echo ($pageno - 1) ?>);" <?php
                                                                                                        }
                                                                                                            ?>>Previous</a>
                        </li>

                        <?php

                        for ($i = 1; $i <= $num_of_page; $i++) {

                            if ($i == $pageno) {
                        ?>

                                <li class="page-item active"><a class="page-link fs-3" onclick="homeSearch(<?php echo $i ?>);"><?php echo $i ?></a></li>

                            <?php
                            } else {
                            ?>

                                <li class="page-item "><a class="page-link fs-3" onclick="homeSearch(<?php echo $i ?>);"><?php echo $i ?></a></li>

                        <?php
                            }
                        }

                        ?>

                        <li class="page-item">
                            <a class="page-link fs-3" <?php if ($pageno >= $num_of_page) {
                                                            echo ("#");
                                                        } else {
                                                        ?> onclick="homeSearch(<?php echo ($pageno + 1) ?>);" <?php
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
