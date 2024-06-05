<?php

include "connection.php";
session_start();
$user = $_SESSION["u"];
$netTotal = 0;

$rs = Database::search("SELECT * FROM `cart` INNER JOIN `product` ON `product`.`id` = `cart`.`product_id`
INNER JOIN `brand` ON `brand`.`brand_id`= `product`.`brand_id` 
INNER JOIN `condition` ON `condition`.`con_id` = `product`.`condition_con_id`
INNER JOIN `category` ON `category`.`cat_id` = `product`.`category_id`
INNER JOIN `product_img` ON `product_img`.`product_id` = `product`.`id`
INNER JOIN `size` ON `size`.`size_id`= `product`.`size_id` WHERE `cart`.`user_id`='" . $user["id"] . "'");

$num = $rs->num_rows;

if ($num > 0) {
    // Load Cart

    for ($i = 0; $i < $num; $i++) {

        $d = $rs->fetch_assoc();
        $total = $d["price"] * $d["cart_qty"];
        $netTotal += $total;

?>

        <div class="col-11 border border-3 border-dark rounded-5 cart_div">

            <div class="row">

                <div class="col-2 p-3 d-none d-md-block">

                    <img id="i2" class="rounded-5 mx-auto d-block productimgupload productimg" src="<?php echo $d["img_path"]; ?>">

                </div>

                <div class="col-md-4">

                    <span class="fs-2 fw-bold"><?php echo $d["name"]; ?></span><br>
                    <span class="fs-3 fw-bold"><?php echo $d["brand_name"]; ?></span><br>
                    <span class="fs-3 fw-bold"><?php echo $d["size_name"]; ?></span><br>
                    <span class="fs-1 fw-bold text-warning mt-2">Rs : <?php echo $d["price"]; ?>.00</span>

                </div>

                <div class="col-lg-3 mt-5 d-flex justify-content-center gap-2">

                    <button class="btn btn-light btn-sm fw-bold fs-3" style="max-height: 50px;" onclick="decrementCartQty(<?php echo $d['cart_id'] ?>);">-</button>
                    <input type="number" id="qty<?php echo $d['cart_id'] ?>" class="form-control text-center fs-3 fw-bold" style="max-height: 50px; max-width: 100px;" value="<?php echo $d["cart_qty"]; ?>" disabled>
                    <button class="btn btn-light btn-sm fw-bold fs-3" style="max-height: 50px;" onclick="incrementCartQty(<?php echo $d['cart_id'] ?>);">+</button>
                    <span class="fs-4 ms-5 fw-bold text-primary mt-3 link-danger">Rs : <?php echo ($d["price"]*$d["cart_qty"]) ?>.00</span>


                </div>
                <div class="col-lg-2 ms-5 me-3 mt-3">

                    <div class="row justify-content-center">

                        <div class="col-md-12 mt-4 mb-4">

                            <button class="btn h-100 w-100 p-2 border border-3 border-dark shadow-lg fw-bold fs-3 rounded-5 addcart_Btn">Buy Now</button>

                        </div>
                        <div class="col-2 ">
                            <i class="fa-solid fa-heart fa-beat fs-1 fw-bold mt-2"></i>

                        </div>
                        <div class="col-2 ">
                            <i class="fa-solid fa-trash fa-shake fs-1 fw-bold mt-2 ms-3" onclick="removeCart(<?php echo $d['cart_id'] ?>);"></i>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    <?php

    }


    ?>

    <div class="row justify-content-end me-5">

        <p class="fs-3 fw-bold text-end mt-2 text-white">Number Of Items :-&nbsp;&nbsp;<span class="fs-3"><?php echo $num ?></span> </p>
        <p class="fs-2 fw-bold text-end  text-white">Delivery Fee :- <span class="fs-3"><?php echo $d["delivery_cost"]; ?>.00</span> </p>
        <p class="fs-2 fw-bold text-end text-white">Total :- <span class="fs-3 text-warning">Rs : <?php echo ($netTotal + $d["delivery_cost"]) ?> .00</span> </p>

    </div>

    <div class="row justify-content-end me-3">

        <div class="col-lg-4 border border-dark border-4 rounded-5 shadow-lg bg-warning">

            <p class="fs-1 fw-bold text-center mt-2">Check Out</p>

        </div>

    </div>

<?php

} else {

    echo("Cart is Empty");



}


?>