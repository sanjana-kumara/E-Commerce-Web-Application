<?php

include "connection.php";

$sub_cat = $_POST["sbn"];
$sub_opt = $_POST["opt"];

$opt_rs = Database::search("SELECT * FROM `category` WHERE `id`='".$sub_opt."' ");
$opt_num = $opt_rs->num_rows;

if ($opt_num == 1) {
    
    if (empty($sub_cat)) {

        echo("Please Enter Sub Category Name");
    }

    echo("Succes");

    Database::iud("INSERT INTO `sub_category`(`sub_cat_name`,`category_id`) VALUES ('".$sub_cat."','".$sub_opt."') ");

} else {

    echo("Please Select Category Name");

}


?>