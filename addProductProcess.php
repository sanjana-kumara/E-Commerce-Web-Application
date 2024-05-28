<?php

session_start();
include "connection.php";

$email = $_SESSION["ad"]["email"];

$pname = $_POST["pn"];
$pdescription = $_POST["pd"];
$price = $_POST["pr"];
$quantity = $_POST["qty"];
$delivery_cost = $_POST["dc"];
$category_name = $_POST["cn"];
$sub_category_name = $_POST["scn"];
$condition = $_POST["con"];
$discount = $_POST["dis"];
$branad_name = $_POST["br"];
$size = $_POST["sz"];



$d = new DateTime();
$tz = new DateTimeZone("Asia/Colombo");
$d->setTimezone($tz);
$date = $d->format("Y-m-d H:i:s");


Database::iud("INSERT INTO `product`(`name`,`description`,`price`,`quantity`,`delivery_cost`,`Discount`,`datetime_add`,`statues`,`category_id`,`brand_id`,`size_id`)
VALUES ('".$pname."','".$pdescription."','".$price."','".$quantity."','".$delivery_cost."','".$discount."','".$date."','1','".$category_name."','".$branad_name."','".$size."') ");

echo("Successfully Add this Product");

$product_id = Database::$connection->insert_id;

$length = sizeof($_FILES);

if ($length <= 4 && $length > 0) {

    $allowed_file_types = array("image/jpeg", "image/png", "image/svg+xml");

    for ($x = 0; $x < $length; $x++) {

        if (isset($_FILES["image" . $x])) {

            $image_files = $_FILES["image" . $x];
            $file_extenstion = $image_files["type"];

            if (in_array($file_extenstion, $allowed_file_types)) {

                $new_img_extenstion;

                if ($file_extenstion == "image/jpeg") {
                    $new_img_extenstion = "" . "jpeg";
                } elseif ($file_extenstion == "image/png") {
                    $new_img_extenstion = "" . "png";
                } elseif ($file_extenstion == "image/svg+xml") {
                    $new_img_extenstion = "" . "svg";
                }

                $file_name = "resource//product_img//". $pname . "_" . $x . "_" . uniqid() . $new_img_extenstion;
                move_uploaded_file($image_files["tmp_name"], $file_name);

                Database::iud("INSERT INTO `product_img`(`img_path`,`product_id`) VALUES ('" . $file_name . "','" . $product_id . "') ");

            } else {

                echo ("Inaviled image Type");
            }
        }

    }

    echo("Successfully Image Add");

} else {

    echo ("Inavaid img Type");
}
