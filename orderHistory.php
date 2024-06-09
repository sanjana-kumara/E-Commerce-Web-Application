<?php

session_start();
$user = $_SESSION["u"];
include "connection.php";

if (isset($user)) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Order History | Halgahawatta hardaware</title>

    </head>

    <body>

        <?php include "header.php"  ?>

        <div class="container mt-5">

            <div class="row">



                <?php

                $rs = Database::search("SELECT * FROM `order_history` WHERE `user_id`='" . $user["id"] . "' ");
                $num = $rs->num_rows;

                if ($num > 0) {
                    // Not Empty
                ?>
                    <div class="mt-4 mb-3 ">

                        <h3 class="fs-1 fw-bold">Order History</h3>

                    </div>

                    <?php

                    for ($i = 0; $i < $num; $i++) {

                        $d = $rs->fetch_assoc();

                    ?>

                        <!-- card -->

                        <div class="p-3 border border-3 rounded-3 bg-body-tertiary mb-4">

                            <div>
                                <h5>Order ID <span class="text-info"><?php echo $d["order_id"] ?></span></h5>
                                <p><?php echo $d["order_date"] ?></p>
                            </div>

                            <div class="ps-5 pe-5">

                                <table class="table fw-bold table-light table-hover">

                                    <thead>

                                        <tr>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Price</th>
                                        </tr>

                                    </thead>

                                    <tbody>

                                    <?php
                                    
                                    $rs2 = Database::search("SELECT * FROM `product` INNER JOIN `order_items` ON
                                    `product`.`id` = `order_items`.`product_id` WHERE 
                                    `order_items`.`order_history_oh_id` = '".$d["oh_id"]."' ");

                                    $num2 = $rs2->num_rows;

                                    for ($x=0; $x < $num2; $x++) { 
                                        $d2 = $rs2->fetch_assoc();

                                        ?>
                                        
                                        <tr>
                                            <td><?php echo $d2["name"] ?></td>
                                            <td><?php echo $d2["oi_qty"] ?></td>
                                            <td><?php echo ( $d2["price"] * $d2["oi_qty"]) ?></td>
                                        </tr>
                                        
                                        <?php
                                        
                                    }

                                    ?>
                                    
                                    </tbody>

                                </table>

                            </div>

                            <div class="row">

                            <div class="d-flex justify-content-end pe-5">

                                <p class="fw-bold fs-4">Delivery Fee : <span class="text-danger fs-5 fw-bold"><?php echo $d2["delivery_cost"] ?></span></p>

                            </div>
                            <div class="d-flex justify-content-end pe-5">

                                <h5 class="fw-bold fs-2">Total : <span class="text-warning fs-3 fw-bold"><?php echo $d["amount"] ?></span></h5>

                            </div>
                            
                            </div>
                            

                        </div>
                        <!-- card -->

                    <?php

                    }

                    ?>



                <?php
                } else {
                    // Empty
                ?>

                    <div class="col-12 text-center mt-5 mb-4">

                        <p class="fs-1 fw-bold">You Have not Ordered anything Yet !</p>
                        <a href="home.php" class="btn btn-primary fs-3 fw-bold"> Continue Shopping ... </a>

                    </div>

                <?php
                }


                ?>

            </div>

            
            </div>
            
            <?php include "footer.php";  ?>
    </body>

    </html>

<?php
} else {
    header("location:index.php");
}


?>