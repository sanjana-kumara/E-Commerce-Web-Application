<?php

include "connection.php";

$size = $_POST["sn"];

if (empty($size)) {
    echo("Please Enter Your Brand");
} else if(strlen($size) > 20){
    echo("Brand Name have been 20 Characters Only");
}else {
    
    $rs = Database::search("SELECT * FROM `size` WHERE `size_name`='".$size."' ");
    $num = $rs->num_rows;

    if ($num == 1) {
        echo("This Brand Name Is Already Existis");
    } else {
        echo("Succes");

        Database::iud("INSERT INTO `size`(`size_name`) VALUES ('".$size."') ");
        
    }
    

}

?>