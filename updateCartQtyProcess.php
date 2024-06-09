<?php

include "connection.php";

$cartId = $_POST["c"];
$newqty = $_POST["q"];
// echo($newqty);

$rs = Database::search("SELECT * FROM `cart` INNER JOIN `product` ON `product`.`id` = `cart`.`product_id` WHERE `cart`.`cart_id`= '".$cartId."' ");

$num = $rs->num_rows;

if ($num > 0) {
    // Cart item Foun
    $d = $rs->fetch_assoc();

    if ($d["quantity"] >= $newqty) {
        
        Database::iud("UPDATE `cart` SET `cart_qty`='".$newqty."' WHERE `cart_id`='".$cartId."' ");
        echo("Success");

    } else {
        
        echo("Your Product Quantity Exceeded!");

    }
    

}else {
    
    echo("Cart Items Not Found...");

}

?>