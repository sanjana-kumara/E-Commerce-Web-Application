<?php

include "connection.php";

if (isset($_GET["sub"])) {
    
    $cat_id = $_GET["sub"];

    $cat_rs = Database::search("SELECT * FROM `category` WHERE `id`='".$cat_id."' ");
    $cat_num = $cat_rs->num_rows;

    for ($i=0; $i < $cat_num ; $i++) { 
        
        $cat_data = $cat_rs->fetch_assoc();

        $sub_cat_rs = Database::search("SELECT * FROM `sub_category` INNER JOIN `category` ON `category`.`id` = `sub_category`.`category_id` WHERE `category`.id = '".$cat_data["id"]."' ");

        $sub_cat_data = $sub_cat_rs->fetch_assoc();

        ?>
        
        <option value="<?php echo $sub_cat_data["id"];?>"><?php echo $sub_cat_data["sub_cat_name"];?></option>

        
        <?php

    }

}

?>