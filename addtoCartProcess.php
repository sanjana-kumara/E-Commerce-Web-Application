<?php

include "connection.php";
session_start();

$user = $_SESSION["u"];

$pid = $_POST["p"];
$qty = $_POST["q"];

// echo($pid);
// echo($qty);

$rs = Database::search("SELECT * FROM `product` WHERE `id`='" . $pid . "' ");
$num = $rs->num_rows;

if ($num > 0) {

    $d = $rs->fetch_assoc();
    $product_qty = $d["quantity"];

    $rs_2 = Database::search("SELECT * FROM `cart` WHERE `user_id`='" . $user["id"] . "' AND `product_id`='" . $pid . "' ");
    $num_2 = $rs_2->num_rows;

    if ($num_2 > 0) {
        // Update

        $d2 = $rs_2->fetch_assoc();
        $newQty = $qty + $d2["cart_qty"];

        if ($product_qty >= $newQty) {
            // Update Query

            Database::iud("UPDATE `cart` SET `cart_qty`='" . $newQty . "' WHERE `cart_id`='" . $d2["cart_id"] . "' ");
            echo ("Cart Item Update Successfully");

            // header("location:addTocart.php");
        } else {
            echo ("Qutatiy hass been exceeded!");
        }
    } else {
        // Insert
        if ($product_qty >= $qty) {
            // Update Query
            Database::iud("INSERT INTO `cart` (`cart_qty`,`user_id`,`product_id`) VALUES ('" . $qty . "','" . $user["id"] . "','" . $pid . "') ");
            echo ("Cart Item Added Successfully");
        } else {
            echo ("Qutatiy hass been exceeded!");
        }
    }
} else {

    echo ("Your Stock Is Not Found");
}
