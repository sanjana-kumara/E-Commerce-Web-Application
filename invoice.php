<?php

session_start();
include "connection.php";
$user = $_SESSION["u"];
$orderHistoryId = $_GET["orderId"];

$rs = Database::search("SELECT * FROM `order_history` WHERE `oh_id`='" . $orderHistoryId . "' AND `user_id`='".$user."' ");
$num = $rs->num_rows;

if ($num > 0) {

    $d = $rs->fetch_assoc();

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Invoice | Halgahawatta hardaware</title>
        <link rel="stylesheet" href="bootstrap.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>

    <body>

        <div class="container text-end mt-3">
            <a href="home.php"><button class="btn btn-outline-primary fs-4 text-black fw-bold">Home</button></a>
        </div>

        <div class="container mt-3 mb-4">

            <div class="border border-3 border-black p-5 rounded-5">

                <div class="row">

                    <div class="col-5">

                        <h3>Order Id #<?php echo $d["order_id"] ?></h3>
                        <h5><?php echo $d["order_date"] ?></h5>

                    </div>

                    <div class="col-7">

                        <h1 class="fw-bold me-5 fs-1">I N V O I C I E</h1>
                        <h4 class="text-end">Halgahawatta Hardaware</h4>
                        <h5 class="text-end">No.30, halgaha road</h5>
                        <h5 class="text-end">pahuruwela , Dompe</h5>

                    </div>

                    <div>

                        <h4 class="fw-bold"><?php echo $user["fname"] ?> <?php echo $user["lname"] ?></h4>
                        <h5><?php echo $user["mobile"] ?></h5>
                        <h5><?php echo $user["address_line_01"] ?></h5>
                        <h5><?php echo $user["address_line_02"] ?></h5>

                    </div>

                    <div class="ps-5 pe-5 mt-5">

                        <table class="table table-hover border border-4 border-black">

                            <thead>
                                <tr>

                                    <th scope="col">Product Name</th>
                                    <th scope="col">Brand Name</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">size</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Price</th>

                                </tr>


                            </thead>
                            <tbody>

                                <?php

                                $rs2 = Database::search("SELECT * FROM `order_items` 
                                INNER JOIN `product` ON `product`.`id` = `order_items`.`product_id` 
                                INNER JOIN `category` ON `category`.`cat_id` = `product`.`category_id`
                                INNER JOIN `brand` ON `brand`.`brand_id` = `product`.`brand_id` 
                                INNER JOIN `size` ON `size`.size_id = `product`.`size_id` 
                                WHERE `order_items`.`order_history_oh_id` = '" . $orderHistoryId . "' ;");

                                $num2 = $rs2->num_rows;

                                for ($x = 0; $x < $num2; $x++) {
                                    $d2 = $rs2->fetch_assoc();

                                ?>

                                    <tr>

                                        <th scope="col"><?php echo $d2["name"] ?></th>
                                        <th scope="col"><?php echo $d2["brand_name"] ?></th>
                                        <th scope="col"><?php echo $d2["cat_name"] ?></th>
                                        <th scope="col"><?php echo $d2["size_name"] ?></th>
                                        <th scope="col"><?php echo $d2["oi_qty"] ?></th>
                                        <th scope="col">Rs. <?php echo ($d2["price"] * $d2["oi_qty"]) ?>.00</th>

                                    </tr>

                                <?php

                                }

                                ?>

                            </tbody>

                        </table>

                    </div>

                    <div class="text-end mt-5 pe-5 ">

                        <h6>Number Of Items : <span class="text-muted fw-bold fs-5"><?php echo $num2 ?></span></h6>
                        <h6>Delivery Fee : <span class="text-muted fw-bold fs-5"><?php echo $d2["delivery_cost"] ?></span></h6>
                        <h3>Total : <span class="text-muted fs-3 fw-bold"><?php echo $d["amount"] ?></span></h3>

                    </div>

                </div>

            </div>

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
    header("location:home.php");
}


?>