<?php

include "connection.php";

$cat_name = $_POST["cn"];

// echo ($cat_name);

if (empty($cat_name)) {
    echo("Please Enter Category Name");
} else if(strlen($cat_name) > 50){
    echo("Category Name Must be Less Than 50 Characters");
}else {
    
    $rs = Database::search("SELECT * FROM `category` WHERE `cat_name`='".$cat_name."'  ");
    $num = $rs->num_rows;

    if ( $num == 1) {
        echo ("This Category Nam Already Exsitis");
    } else {
    
        echo("Success");

        Database::iud("INSERT INTO `category`(`cat_name`) VALUES ('".$cat_name."') ");

    }
    

}


?>