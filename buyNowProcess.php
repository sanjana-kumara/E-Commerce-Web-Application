<?php

include "connection.php";
session_start();
$user = $_SESSION["u"];

if (isset($_POST["payment"])) {

    $payment = json_decode($_POST["payment"], true);

    $date = new DateTime();
    $date->setTimezone(new DateTimeZone("Asia/Colombo"));
    $time = $date->format("Y-m-d H-i-s");

    Database::iud("INSERT INTO `order_history` (`order_id`,`order_date`,`amount`,`user_id`) 
    VALUES ('" . $payment["order_id"] . "','" . $time . "','" . $payment["amount"] . "','" . $user["id"] . "') ");

    $orderHistoryId = Database::$connection->insert_id;

    // Log order history ID
    error_log("Order History ID (buy now): " . $orderHistoryId);

    Database::iud("INSERT INTO `order_items`(`oi_qty`,`order_history_oh_id`,`product_id`)
    VALUES ('" . $payment["qty"] . "','" . $orderHistoryId . "','" . $payment["p_id"] . "') ");

    $rs = Database::search("SELECT * FROM `product` WHERE `id`='" .  $payment["p_id"] . "' ");
    $d = $rs->fetch_assoc();

    $newQty = $d["quantity"] - $payment["qty"];
    
    Database::iud("UPDATE `product` SET `quantity`='" . $newQty . "' WHERE `id`='" . $payment["p_id"] . "' ");
    echo ("Success");

    $order = array();
    // $order["resp"] = "Success";
    $order["order_id"] = $orderHistoryId;

    echo json_encode($order);


    
}
