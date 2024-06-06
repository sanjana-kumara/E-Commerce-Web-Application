<?php

include "connection.php";
session_start();

$user = $_SESSION["u"];

$productList = array(); 
$qtyList = array();

if (isset($_POST["cart"]) && $_POST["cart"] == "true") {
    // echo("From TO Cart");

    $rs = Database::search("SELECT * FROM `cart` WHERE `user_id`='".$user["id"]."' ");
    $num = $rs->num_rows;

    for ($i=0; $i < $num; $i++) { 
       
        $d = $rs->fetch_assoc();

        $productList[] = $d["product_id"];
        $qtyList[] = $d["cart_qty"];
        
    }

} else {

    // buy now

    $productList = $_POST["pid"];
    $qtyList = $_POST["qty"];

}

$merchantId = "1225151";
$merchantSecret = "Mjc3Mzg0NDkwMzQyOTkwMDMxMzU5MTYzNjA2MTc5MzU0MDMxMQ==";
$itmes = "";
$netTotal = 0;
$currency = "LKR";
$orderId = uniqid();

for ($x=0; $x < sizeof($productList); $x++) { 
    
    $rs2 = Database::search("SELECT * FROM `product` WHERE `product`.`id`='".$productList[$x]."' ");
    $d2 = $rs2->fetch_assoc();
    $productQty = $d2["quantity"];

    if ($productQty >= $qtyList[$x]) {
        // Success

        $itmes .= $d2["name"];

        if ($x != sizeof($productList) - 1) {
            
            $itmes .=", ";

        }

        $netTotal += (intval($d2["price"]) * intval($qtyList[$x]));

    } else {
        
        echo("Product has No Avalable Stock");

    }
    

}

// delivery Fee
$netTotal += $d2["delivery_cost"];

$hash = strtoupper(
    md5(
        $merchantId . 
        $orderId . 
        number_format($netTotal, 2, '.', '') . 
        $currency .  
        strtoupper(md5($merchantSecret)) 
    ) 
);

$payment = array();
$payment["sandbox"] = true;
$payment["merchant_id"] = $merchantId;
$payment["first_name"] = $user["fname"];
$payment["last_name"] = $user["lname"];
$payment["email"] = $user["email"];
$payment["phone"] = $user["mobile"];
$payment["address"] = $user["address_line_01"];
$payment["city"] = $user["address_line_02"];
$payment["country"] = "Sri Lanka";
$payment["order_id"] = $orderId;
$payment["items"] = $itmes;
$payment["currency"] = $currency;
$payment["amount"] = number_format($netTotal, 2, '.', '');
$payment["hash"] = $hash;
$payment["return_url"] = "";
$payment["cancel_url"] = "";
$payment["notify_url"] = "";

echo json_encode($payment);

?>