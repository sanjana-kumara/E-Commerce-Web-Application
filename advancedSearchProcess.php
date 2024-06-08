<?php

include "connection.php";

$search_text = $_POST["t"];
$category = $_POST["cat"];
$sub_category = $_POST["subcat"];
$brand = $_POST["b"];
$condition = $_POST["con"];
$size = $_POST["si"];
$price_from = $_POST["pf"];
$price_to = $_POST["pt"];
$sort = $_POST["s"];

$query = "SELECT * FROM `product`";
$status = 0;

if ($sort == 0) {

    if (!empty($search_text)) {
        $query .= " WHERE `name` LIKE '" % $search_text % "'";
        $status = 1;
    }

    $catid = 0;
    if ($category == 0 && $sub_category != 0) {

        $category_rs = Database::search("SELECT * FROM `sub_category` INNER JOIN `category` ON category.cat_id = sub_category.category_id WHERE `sub_cat_id`= '" . $sub_category . "' ");
        $category_num = $category_rs->num_rows;
        for ($i = 0; $i < $category_num; $i++) {
            $category_data = $category_rs->fetch_assoc();
            $catid = $category_data["sub_cat_id"];
        }
        if ($status == 0) {
            $query .= " WHERE `category_id`='" . $catid . "'";
            $status = 1;
        } elseif ($status != 0) {
            $query .= " AND `category_id`='" . $catid . "'";
        }
    }

    if ($category != 0 && $sub_category == 0) {

        $category_rs = Database::search("SELECT * FROM `sub_category` INNER JOIN `category` ON category.cat_id = sub_category.category_id WHERE `cat_id`= '" . $category . "' ");
        $category_num = $category_rs->num_rows;
        for ($i = 0; $i < $category_num; $i++) {
            $category_data = $category_rs->fetch_assoc();
            $catid = $category_data["cat_id"];
        }
        if ($status == 0) {
            $query .= " WHERE `category_id`='" . $catid . "'";
            $status = 1;
        } elseif ($status != 0) {
            $query .= " AND `category_id`='" . $catid . "'";
        }
    }

    if ($category != 0 && $sub_category != 0) {

        $category_rs = Database::search("SELECT * FROM `category` INNER JOIN `sub_category` ON category.cat_id = sub_category.category_id WHERE `cat_id`= '" . $category . "' AND `sub_cat_id`= '" . $sub_category . "' ");
        $category_num = $category_rs->num_rows;
        for ($i = 0; $i < $category_num; $i++) {
            $category_data = $category_rs->fetch_assoc();
            $catid = $category_data["sub_cat_id"];
        }
        if ($status == 0) {
            $query .= " WHERE `category_id`='" . $catid . "'";
            $status = 1;
        } elseif ($status != 0) {
            $query .= " AND `category_id`='" . $catid . "'";
        }
    }


    if ($brand != 0 && $status == 0) {
        $query .= " WHERE `brand_id`='" . $category . "'";
        $status = 1;
    } elseif ($brand != 0 && $status != 0) {
        $query .= " AND `brand_id`='" . $category . "'";
    }

    if ($condition != 0 && $status == 0) {
        $query .= " WHERE `condition_con_id`='" . $condition . "'";
        $status = 1;
    } elseif ($condition != 0 && $status != 0) {
        $query .= " AND `condition_con_id`='" . $condition . "'";
    }

    if ($size != 0 && $status == 0) {
        $query .= " WHERE `size_id`='" . $size . "'";
        $status = 1;
    } elseif ($size != 0 && $status != 0) {
        $query .= " AND `size_id`='" . $size . "'";
    }

    if (!empty($price_from) && empty($price_to)) {

        if ($status == 0) {
            $query .= " WHERE `price` >= '" . $price_from . "' ";
            $status = 1;
        } else if ($status != 0) {
            $query .= " AND `price` >= '" . $price_from . "' ";
        }
    }

    if (empty($price_from) && !empty($price_to)) {

        if ($status == 0) {
            $query .= " WHERE `price` <= '" . $price_to . "' ";
            $status = 1;
        } else if ($status != 0) {
            $query .= " AND `price` <= '" . $price_to . "' ";
        }
    }

    if (!empty($price_from) && !empty($price_to)) {

        if ($status == 0) {
            $query .= " WHERE `price` BETWEEN '" . $price_from . "' AND '" . $price_to . "' ";
            $status = 1;
        } else if ($status != 0) {
            $query .= " AND `price` BETWEEN '" . $price_from . "' AND '" . $price_to . "' ";
        }
    }
} elseif ($sort == 1) {

    if (!empty($search_text)) {
        $query .= " WHERE `name` LIKE '" % $search_text % "' ORDER BY `price` ASC";
        $status = 1;
    }

    $catid = 0;
    if ($category == 0 && $sub_category != 0) {

        $category_rs = Database::search("SELECT * FROM `sub_category` INNER JOIN `category` ON category.cat_id = sub_category.category_id WHERE `sub_cat_id`= '" . $sub_category . "' ");
        $category_num = $category_rs->num_rows;
        for ($i = 0; $i < $category_num; $i++) {
            $category_data = $category_rs->fetch_assoc();
            $catid = $category_data["sub_cat_id"];
        }
        if ($status == 0) {
            $query .= " WHERE `category_id`='" . $catid . "' ORDER BY `price` ASC";
            $status = 1;
        } elseif ($status != 0) {
            $query .= " AND `category_id`='" . $catid . "' ORDER BY `price` ASC";
        }
    }

    if ($category != 0 && $sub_category == 0) {

        $category_rs = Database::search("SELECT * FROM `sub_category` INNER JOIN `category` ON category.cat_id = sub_category.category_id WHERE `cat_id`= '" . $category . "' ");
        $category_num = $category_rs->num_rows;
        for ($i = 0; $i < $category_num; $i++) {
            $category_data = $category_rs->fetch_assoc();
            $catid = $category_data["cat_id"];
        }
        if ($status == 0) {
            $query .= " WHERE `category_id`='" . $catid . "' ORDER BY `price` ASC";
            $status = 1;
        } elseif ($status != 0) {
            $query .= " AND `category_id`='" . $catid . "' ORDER BY `price` ASC";
        }
    }

    if ($category != 0 && $sub_category != 0) {

        $category_rs = Database::search("SELECT * FROM `category` INNER JOIN `sub_category` ON category.cat_id = sub_category.category_id WHERE `cat_id`= '" . $category . "' AND `sub_cat_id`= '" . $sub_category . "' ");
        $category_num = $category_rs->num_rows;
        for ($i = 0; $i < $category_num; $i++) {
            $category_data = $category_rs->fetch_assoc();
            $catid = $category_data["sub_cat_id"];
        }
        if ($status == 0) {
            $query .= " WHERE `category_id`='" . $catid . "' ORDER BY `price` ASC";
            $status = 1;
        } elseif ($status != 0) {
            $query .= " AND `category_id`='" . $catid . "' ORDER BY `price` ASC";
        }
    }


    if ($status == 0) {
        $query .= " WHERE `category_id`='" . $catid . "' ORDER BY `price` ASC";
        $status = 1;
    }
    if ($status != 0) {
        $query .= " AND `category_id`='" . $catid . "' ORDER BY `price` ASC";
    }


    if ($brand != 0 && $status == 0) {
        $query .= " WHERE `brand_id`='" . $category . "' ORDER BY `price` ASC";
        $status = 1;
    } elseif ($brand != 0 && $status != 0) {
        $query .= " AND `brand_id`='" . $category . "' ORDER BY `price` ASC";
    }

    if ($condition != 0 && $status == 0) {
        $query .= " WHERE `condition_con_id`='" . $condition . "' ORDER BY `price` ASC";
        $status = 1;
    } elseif ($condition != 0 && $status != 0) {
        $query .= " AND `condition_con_id`='" . $condition . "' ORDER BY `price` ASC";
    }

    if ($size != 0 && $status == 0) {
        $query .= " WHERE `size_id`='" . $size . "' ORDER BY `price` ASC";
        $status = 1;
    } elseif ($size != 0 && $status != 0) {
        $query .= " AND `size_id`='" . $size . "' ORDER BY `price` ASC";
    }

    if (!empty($price_from) && empty($price_to)) {

        if ($status == 0) {
            $query .= " WHERE `price` >= '" . $price_from . "' ORDER BY `price` ASC";
            $status = 1;
        } else if ($status != 0) {
            $query .= " AND `price` >= '" . $price_from . "' ORDER BY `price` ASC";
        }
    }

    if (empty($price_from) && !empty($price_to)) {

        if ($status == 0) {
            $query .= " WHERE `price` <= '" . $price_to . "' ORDER BY `price` ASC";
            $status = 1;
        } else if ($status != 0) {
            $query .= " AND `price` <= '" . $price_to . "' ORDER BY `price` ASC";
        }
    }

    if (!empty($price_from) && !empty($price_to)) {

        if ($status == 0) {
            $query .= " WHERE `price` BETWEEN '" . $price_from . "' AND '" . $price_to . "' ORDER BY `price` ASC";
            $status = 1;
        } else if ($status != 0) {
            $query .= " AND `price` BETWEEN '" . $price_from . "' AND '" . $price_to . "' ORDER BY `price` ASC";
        }
    }
} elseif ($sort == 2) {

    if (!empty($search_text)) {
        $query .= " WHERE `name` LIKE '" % $search_text % "' ORDER BY `price` DESC";
        $status = 1;
    }

    $catid = 0;
    if ($category == 0 && $sub_category != 0) {

        $category_rs = Database::search("SELECT * FROM `sub_category` INNER JOIN `category` ON category.cat_id = sub_category.category_id WHERE `sub_cat_id`= '" . $sub_category . "' ");
        $category_num = $category_rs->num_rows;
        for ($i = 0; $i < $category_num; $i++) {
            $category_data = $category_rs->fetch_assoc();
            $catid = $category_data["sub_cat_id"];
        }
        if ($status == 0) {
            $query .= " WHERE `category_id`='" . $catid . "' ORDER BY `price` DESC";
            $status = 1;
        } elseif ($status != 0) {
            $query .= " AND `category_id`='" . $catid . "' ORDER BY `price` DESC";
        }
    }

    if ($category != 0 && $sub_category == 0) {

        $category_rs = Database::search("SELECT * FROM `sub_category` INNER JOIN `category` ON category.cat_id = sub_category.category_id WHERE `cat_id`= '" . $category . "' ");
        $category_num = $category_rs->num_rows;
        for ($i = 0; $i < $category_num; $i++) {
            $category_data = $category_rs->fetch_assoc();
            $catid = $category_data["cat_id"];
        }
        if ($status == 0) {
            $query .= " WHERE `category_id`='" . $catid . "' ORDER BY `price` DESC";
            $status = 1;
        } elseif ($status != 0) {
            $query .= " AND `category_id`='" . $catid . "' ORDER BY `price` DESC";
        }
    }

    if ($category != 0 && $sub_category != 0) {

        $category_rs = Database::search("SELECT * FROM `category` INNER JOIN `sub_category` ON category.cat_id = sub_category.category_id WHERE `cat_id`= '" . $category . "' AND `sub_cat_id`= '" . $sub_category . "' ");
        $category_num = $category_rs->num_rows;
        for ($i = 0; $i < $category_num; $i++) {
            $category_data = $category_rs->fetch_assoc();
            $catid = $category_data["sub_cat_id"];
        }
        if ($status == 0) {
            $query .= " WHERE `category_id`='" . $catid . "' ORDER BY `price` DESC";
            $status = 1;
        } elseif ($status != 0) {
            $query .= " AND `category_id`='" . $catid . "' ORDER BY `price` DESC";
        }
    }


    if ($brand != 0 && $status == 0) {
        $query .= " WHERE `brand_id`='" . $category . "' ORDER BY `price` DESC";
        $status = 1;
    } elseif ($brand != 0 && $status != 0) {
        $query .= " AND `brand_id`='" . $category . "' ORDER BY `price` DESC";
    }

    if ($condition != 0 && $status == 0) {
        $query .= " WHERE `condition_con_id`='" . $condition . "' ORDER BY `price` DESC";
        $status = 1;
    } elseif ($condition != 0 && $status != 0) {
        $query .= " AND `condition_con_id`='" . $condition . "' ORDER BY `price` DESC";
    }

    if ($size != 0 && $status == 0) {
        $query .= " WHERE `size_id`='" . $size . "' ORDER BY `price` DESC";
        $status = 1;
    } elseif ($size != 0 && $status != 0) {
        $query .= " AND `size_id`='" . $size . "' ORDER BY `price` DESC";
    }

    if (!empty($price_from) && empty($price_to)) {

        if ($status == 0) {
            $query .= " WHERE `price` >= '" . $price_from . "' ORDER BY `price` DESC";
            $status = 1;
        } else if ($status != 0) {
            $query .= " AND `price` >= '" . $price_from . "' ORDER BY `price` DESC";
        }
    }

    if (empty($price_from) && !empty($price_to)) {

        if ($status == 0) {
            $query .= " WHERE `price` <= '" . $price_to . "' ORDER BY `price` DESC";
            $status = 1;
        } else if ($status != 0) {
            $query .= " AND `price` <= '" . $price_to . "' ORDER BY `price` DESC";
        }
    }

    if (!empty($price_from) && !empty($price_to)) {

        if ($status == 0) {
            $query .= " WHERE `price` BETWEEN '" . $price_from . "' AND '" . $price_to . "' ORDER BY `price` DESC";
            $status = 1;
        } else if ($status != 0) {
            $query .= " AND `price` BETWEEN '" . $price_from . "' AND '" . $price_to . "' ORDER BY `price` DESC";
        }
    }
} elseif ($sort == 3) {

    if (!empty($search_text)) {
        $query .= " WHERE `name` LIKE '" % $search_text % "' ORDER BY `quantity` ASC ";
        $status = 1;
    }

    $catid = 0;
    if ($category == 0 && $sub_category != 0) {

        $category_rs = Database::search("SELECT * FROM `sub_category` INNER JOIN `category` ON category.cat_id = sub_category.category_id WHERE `sub_cat_id`= '" . $sub_category . "' ");
        $category_num = $category_rs->num_rows;
        for ($i = 0; $i < $category_num; $i++) {
            $category_data = $category_rs->fetch_assoc();
            $catid = $category_data["sub_cat_id"];
        }
        if ($status == 0) {
            $query .= " WHERE `category_id`='" . $catid . "' ORDER BY `quantity` ASC";
            $status = 1;
        } elseif ($status != 0) {
            $query .= " AND `category_id`='" . $catid . "' ORDER BY `quantity` ASC";
        }
    }

    if ($category != 0 && $sub_category == 0) {

        $category_rs = Database::search("SELECT * FROM `sub_category` INNER JOIN `category` ON category.cat_id = sub_category.category_id WHERE `cat_id`= '" . $category . "' ");
        $category_num = $category_rs->num_rows;
        for ($i = 0; $i < $category_num; $i++) {
            $category_data = $category_rs->fetch_assoc();
            $catid = $category_data["cat_id"];
        }
        if ($status == 0) {
            $query .= " WHERE `category_id`='" . $catid . "' ORDER BY `quantity` ASC";
            $status = 1;
        } elseif ($status != 0) {
            $query .= " AND `category_id`='" . $catid . "' ORDER BY `quantity` ASC";
        }
    }

    if ($category != 0 && $sub_category != 0) {

        $category_rs = Database::search("SELECT * FROM `category` INNER JOIN `sub_category` ON category.cat_id = sub_category.category_id WHERE `cat_id`= '" . $category . "' AND `sub_cat_id`= '" . $sub_category . "' ");
        $category_num = $category_rs->num_rows;
        for ($i = 0; $i < $category_num; $i++) {
            $category_data = $category_rs->fetch_assoc();
            $catid = $category_data["sub_cat_id"];
        }
        if ($status == 0) {
            $query .= " WHERE `category_id`='" . $catid . "' ORDER BY `quantity` ASC";
            $status = 1;
        } elseif ($status != 0) {
            $query .= " AND `category_id`='" . $catid . "' ORDER BY `quantity` ASC";
        }
    }

    if ($brand != 0 && $status == 0) {
        $query .= " WHERE `brand_id`='" . $category . "' ORDER BY `quantity` ASC";
        $status = 1;
    } elseif ($brand != 0 && $status != 0) {
        $query .= " AND `brand_id`='" . $category . "' ORDER BY `quantity` ASC";
    }

    if ($condition != 0 && $status == 0) {
        $query .= " WHERE `condition_con_id`='" . $condition . "' ORDER BY `quantity` ASC";
        $status = 1;
    } elseif ($condition != 0 && $status != 0) {
        $query .= " AND `condition_con_id`='" . $condition . "' ORDER BY `quantity` ASC";
    }

    if ($size != 0 && $status == 0) {
        $query .= " WHERE `size_id`='" . $size . "' ORDER BY `quantity` ASC";
        $status = 1;
    } elseif ($size != 0 && $status != 0) {
        $query .= " AND `size_id`='" . $size . "' ORDER BY `quantity` ASC";
    }

    if (!empty($price_from) && empty($price_to)) {

        if ($status == 0) {
            $query .= " WHERE `price` >= '" . $price_from . "' ORDER BY `quantity` ASC";
            $status = 1;
        } else if ($status != 0) {
            $query .= " AND `price` >= '" . $price_from . "' ORDER BY `quantity` ASC";
        }
    }

    if (empty($price_from) && !empty($price_to)) {

        if ($status == 0) {
            $query .= " WHERE `price` <= '" . $price_to . "' ORDER BY `quantity` ASC";
            $status = 1;
        } else if ($status != 0) {
            $query .= " AND `price` <= '" . $price_to . "' ORDER BY `quantity` ASC";
        }
    }

    if (!empty($price_from) && !empty($price_to)) {

        if ($status == 0) {
            $query .= " WHERE `price` BETWEEN '" . $price_from . "' AND '" . $price_to . "' ORDER BY `quantity` ASC";
            $status = 1;
        } else if ($status != 0) {
            $query .= " AND `price` BETWEEN '" . $price_from . "' AND '" . $price_to . "' ORDER BY `quantity` ASC";
        }
    }
} elseif ($sort == 4) {

    if (!empty($search_text)) {
        $query .= " WHERE `name` LIKE '" % $search_text % "' ORDER BY `quantity` DESC";
        $status = 1;
    }

    $catid = 0;
    if ($category == 0 && $sub_category != 0) {

        $category_rs = Database::search("SELECT * FROM `sub_category` INNER JOIN `category` ON category.cat_id = sub_category.category_id WHERE `sub_cat_id`= '" . $sub_category . "' ");
        $category_num = $category_rs->num_rows;
        for ($i = 0; $i < $category_num; $i++) {
            $category_data = $category_rs->fetch_assoc();
            $catid = $category_data["sub_cat_id"];
        }
        if ($status == 0) {
            $query .= " WHERE `category_id`='" . $catid . "' ORDER BY `quantity` DESC";
            $status = 1;
        } elseif ($status != 0) {
            $query .= " AND `category_id`='" . $catid . "' ORDER BY `quantity` DESC";
        }
    }

    if ($category != 0 && $sub_category == 0) {

        $category_rs = Database::search("SELECT * FROM `sub_category` INNER JOIN `category` ON category.cat_id = sub_category.category_id WHERE `cat_id`= '" . $category . "' ");
        $category_num = $category_rs->num_rows;
        for ($i = 0; $i < $category_num; $i++) {
            $category_data = $category_rs->fetch_assoc();
            $catid = $category_data["cat_id"];
        }
        if ($status == 0) {
            $query .= " WHERE `category_id`='" . $catid . "' ORDER BY `quantity` DESC";
            $status = 1;
        } elseif ($status != 0) {
            $query .= " AND `category_id`='" . $catid . "' ORDER BY `quantity` DESC";
        }
    }

    if ($category != 0 && $sub_category != 0) {

        $category_rs = Database::search("SELECT * FROM `category` INNER JOIN `sub_category` ON category.cat_id = sub_category.category_id WHERE `cat_id`= '" . $category . "' AND `sub_cat_id`= '" . $sub_category . "' ");
        $category_num = $category_rs->num_rows;
        for ($i = 0; $i < $category_num; $i++) {
            $category_data = $category_rs->fetch_assoc();
            $catid = $category_data["sub_cat_id"];
        }
        if ($status == 0) {
            $query .= " WHERE `category_id`='" . $catid . "' ORDER BY `quantity` DESC";
            $status = 1;
        } elseif ($status != 0) {
            $query .= " AND `category_id`='" . $catid . "' ORDER BY `quantity` DESC";
        }
    }


    if ($brand != 0 && $status == 0) {
        $query .= " WHERE `brand_id`='" . $category . "' ORDER BY `quantity` DESC";
        $status = 1;
    } elseif ($brand != 0 && $status != 0) {
        $query .= " AND `brand_id`='" . $category . "' ORDER BY `quantity` DESC";
    }

    if ($condition != 0 && $status == 0) {
        $query .= " WHERE `condition_con_id`='" . $condition . "' ORDER BY `quantity` DESC";
        $status = 1;
    } elseif ($condition != 0 && $status != 0) {
        $query .= " AND `condition_con_id`='" . $condition . "' ORDER BY `quantity` DESC";
    }

    if ($size != 0 && $status == 0) {
        $query .= " WHERE `size_id`='" . $size . "' ORDER BY `quantity` DESC";
        $status = 1;
    } elseif ($size != 0 && $status != 0) {
        $query .= " AND `size_id`='" . $size . "' ORDER BY `quantity` DESC";
    }

    if (!empty($price_from) && empty($price_to)) {

        if ($status == 0) {
            $query .= " WHERE `price` >= '" . $price_from . "' ORDER BY `quantity` DESC";
            $status = 1;
        } else if ($status != 0) {
            $query .= " AND `price` >= '" . $price_from . "' ORDER BY `quantity` DESC";
        }
    }

    if (empty($price_from) && !empty($price_to)) {

        if ($status == 0) {
            $query .= " WHERE `price` <= '" . $price_to . "' ORDER BY `quantity` DESC";
            $status = 1;
        } else if ($status != 0) {
            $query .= " AND `price` <= '" . $price_to . "' ORDER BY `quantity` DESC";
        }
    }

    if (!empty($price_from) && !empty($price_to)) {

        if ($status == 0) {
            $query .= " WHERE `price` BETWEEN '" . $price_from . "' AND '" . $price_to . "' ORDER BY `quantity` DESC";
            $status = 1;
        } else if ($status != 0) {
            $query .= " AND `price` BETWEEN '" . $price_from . "' AND '" . $price_to . "' ORDER BY `quantity` DESC";
        }
    }
}

?>

<?php

$pageno;

if ("0" != ($_POST["page"])) {
    $pageno = $_POST["page"];
} else {
    $pageno = 1;
}

$product_rs = Database::search($query);
$product_num = $product_rs->num_rows;

$results_per_page = 6;
$number_of_pages = ceil($product_num / $results_per_page);

$page_results = ($pageno - 1) * $results_per_page;
$selected_rs = Database::search($query . " LIMIT " . $results_per_page . " OFFSET " . $page_results . "");

$selected_num = $selected_rs->num_rows;
for ($x = 0; $x < $selected_num; $x++) {
    $selected_data = $selected_rs->fetch_assoc();
?>
    <div class="col-lg-3 col-md-4 col-10 border border-2 rounded-5 border-dark bg-white shadow-lg ms-5">

        <div class="row justify-content-center">

            <?php

            $img_rs = Database::search("SELECT * FROM `product_img` WHERE `product_id`='" . $selected_data["id"] . "' ");
            $img_data = $img_rs->fetch_assoc();

            ?>

            <div class="col-11 rounded-5 col-md-10 border border-2 border-dark shadow-lg mt-2 home_imgbody">

                <img src="<?php echo ($img_data["img_path"]); ?>" class="home_img rounded-5">

            </div>

        </div>

        <div class="row justify-content-center">

            <div class="col-10 text-center mt-2">

                <span class="fs-3 fw-bold recent_text_1"><?php echo ($selected_data["name"]); ?></span><br>
                <span class="fs-2 fw-bold recent_text_2">Rs. <?php echo ($selected_data["price"]); ?>.00 </span><br>
                <span class="fs-4 fw-bold qty">Discount <?php echo ($selected_data["Discount"]); ?></span>

            </div>

            <div class="col-10 mt-2">

                <a href=<?php echo "viewProduct.php?pid=" . ($selected_data['id']); ?>> <button class="btn01 fs-4 fw-bold w-100 h-100 p-2 rounded-5 border-dark shadow-lg border border-2">Add To Cart </button> </a>

            </div>

            <div class="col-10 mt-2 mb-4">

                <button class="btn03 fs-4 fw-bold w-100 h-100 p-2 rounded-5 shadow-lg">
                    <i class="fa-solid fa-eye-slash fs-3"></i> &nbsp; <i class="fa-solid fa-cart-plus fs-3"></i> &nbsp; <i class="fa-solid fa-heart-circle-plus fs-3"></i></button>

            </div>

        </div>

    </div>
    <!--New Product Image -->

<?php
}
?>

<div class="offset-2 offset-lg-3 col-8 col-lg-6 text-center mb-3">
    <nav aria-label="Page navigation example">
        <ul class="pagination pagination-lg justify-content-center">
            <li class="page-item">
                <a class="page-link" <?php if ($pageno <= 1) {
                                            echo ("#");
                                        } else {
                                        ?> onclick="advancedSearch(<?php echo ($pageno - 1); ?>);" ; <?php
                                                                                                    } ?> aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>

            <?php
            for ($x = 1; $x <= $number_of_pages; $x++) {
                if ($x == $pageno) {
            ?>
                    <li class="page-item active">
                        <a class="page-link" onclick="advancedSearch(<?php echo ($x); ?>);"><?php echo $x; ?></a>
                    </li>
                <?php
                } else {
                ?>
                    <li class="page-item">
                        <a class="page-link" onclick="advancedSearch(<?php echo ($x); ?>);"><?php echo $x; ?></a>
                    </li>
            <?php
                }
            }
            ?>

            <li class="page-item">
                <a class="page-link" <?php if ($pageno >= $number_of_pages) {
                                            echo ("#");
                                        } else {
                                        ?> onclick="advancedSearch(<?php echo ($pageno + 1); ?>);" ; <?php
                                                                                                    } ?> aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>