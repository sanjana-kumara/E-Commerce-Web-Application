<?php

include "connection.php";
session_start();
$user = $_SESSION["u"];

if (isset($_POST["payment"])) {
    
    $payment = json_decode($_POST["payment"],true);
    echo("Success Json");

    $date = new DateTime();
    $date->setTimezone(new DateTimeZone("Asia/Colombo"));
    $time = $date->format("Y-m-d H-i-s");

    Database::iud("INSERT INTO `order_history` (`order_id`,`order_date`,`amount`,`user_id`) 
    VALUES ('".$payment["order_id"]."','".$time."','".$payment["amount"]."','".$user["id"]."') ");

echo("Success oder history");


    $orderHistoryId = Database::$connection->insert_id;

    $rs = Database::search("SELECT * FROM `cart` WHERE `user_id`='".$user["id"]."' ");
    $num = $rs->num_rows;

    for ($i=0; $i < $num; $i++) { 
        // Order Items Insert
        $d = $rs->fetch_assoc();

        Database::iud("INSERT INTO `order_items`(`oi_qty`,`order_history_oh_id`,`product_id`)
        VALUES ('".$d["cart_qty"]."','".$orderHistoryId."','".$d["product_id"]."') ");
    echo("Success oder items");
        
        

        $rs2 = Database::search("SELECT * FROM `product` WHERE `id`='".$d["product_id"]."' ");
        $d2 = $rs2->fetch_assoc();

        $newQty = $d2["quantity"] - $d["cart_qty"];
        Database::iud("UPDATE `product` SET `quantity`='".$newQty."' WHERE `id`='".$d["product_id"]."' ");

    echo("Success Qty update");


    }

    Database::iud("DELETE FROM `cart` WHERE `user_id`='".$user["id"]."' ");
    // echo("Success");

    $order = array();
    $order["resp"] = "Success";
    $order["order_id"] = $orderHistoryId;

    echo json_encode($order);

}

?>