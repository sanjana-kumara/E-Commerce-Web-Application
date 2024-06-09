<?php

include "connection.php";

$brand = $_POST["bn"];

// echo($brand);

if (empty($brand)) {
    echo("Please Enter Your Brand");
} else if(strlen($brand) > 20){
    echo("Brand Name have been 20 Characters Only");
}else {
    
    $rs = Database::search("SELECT * FROM `brand` WHERE `brand_name`='".$brand."' ");
    $num = $rs->num_rows;

    if ($num == 1) {
        echo("This Brand Name Is Already Existis");
    } else {
        echo("Succes");

        Database::iud("INSERT INTO `brand`(`brand_name`) VALUES ('".$brand."') ");
        
    }
    

}


?>