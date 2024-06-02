<?php

include "connection.php";

if (isset($_GET["pid"])) {

    $pid = $_GET["pid"];

    $rs = Database::search("SELECT * FROM `product` WHERE `id` ='" . $pid . "' ");
    $num = $rs->num_rows;

    if ($num == 1) {

        $product_rs = Database::search(" SELECT * FROM `product` INNER JOIN `category` ON `product`.`category_id`=`category`.`cat_id` INNER JOIN 
        `sub_category` ON `sub_category`.`category_id`=`category`.`cat_id` INNER JOIN `brand` ON `brand`.`brand_id` = `product`.`brand_id`
        INNER JOIN `size` ON `size`.`size_id`=`product`.`size_id` INNER JOIN `condition` ON `condition`.`con_id`=`product`.`condition_con_id` WHERE `id`='" . $pid . "' ");

        $product_data = $product_rs->fetch_assoc();

        


?>

        <!DOCTYPE html>
        <html lang="en">

        <head>

            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
            <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />
            <link rel="stylesheet" href="bootstrap.css">
            <link rel="stylesheet" href="style.css">
            <title>Halgahawatta Hardware Admin Product Management</title>

        </head>

        <body class="addminBody">


            <div class="container-fluid vh-100">


                <?php include "adminNaveBar.php"; ?>

                <!-- Alert Box -->
                <div class="row">

                    <div class="d-none" id="msgDiv">

                        <div class="col-12 text-center mt-4 alert alert-danger border border-2 border-dark shadow-lg" id="msg" onclick="reload();"></div>

                    </div>

                </div>
                <!-- Alert Box -->

                <div class="row col-12 ">

                    <div class="m-1">

                        <div class="row justify-content-center">

                            <div class="col-11 border border-dark border-3 rounded-5 shadow-lg userlist">

                                <div class="row justify-content-center">

                                    <div class="col-lg-5 m-2 mt-3">

                                        <h2 class="text-center fs-1 fw-bold text-light"> Update Product </h2>

                                    </div>

                                </div>

                                <div class="row justify-content-center gap-2">

                                    <div class="col-lg-5 me-lg-3 ">

                                        <div class="row justify-content-center">

                                            <div class="col-11">

                                                <div class="mt-4">

                                                    <input type="text" class="form form-control border border-3 border-dark shadow-lg fs-4 fw-bold prmainput" placeholder="Product Name" id="pname" value="<?php echo $product_data["name"]; ?>" disabled>

                                                </div>

                                                <div class="mt-4">

                                                    <div class="form-floating">
                                                        <textarea class="form form-control border border-3 border-dark shadow-lg fs-4 fw-bold prmainput" placeholder="Leave a comment here" id="description" style="height: 100px">
                                                        <?php echo $product_data["description"]; ?></textarea>
                                                    </div>

                                                </div>

                                                <div class="mt-4">

                                                    <input type="text" class="form form-control border border-3 border-dark shadow-lg fs-4 fw-bold prmainput" placeholder="Enter Price" id="pprice" value="<?php echo $product_data["price"]; ?>">

                                                </div>

                                                <div class="mt-4">

                                                    <input type="text" class="form form-control border border-3 border-dark shadow-lg fs-4 fw-bold prmainput" placeholder="Enter Quantity" id="pqty" value="<?php echo $product_data["quantity"]; ?>">

                                                </div>
                                                <div class="mt-4 mb-4">

                                                    <input type="text" class="form form-control border border-3 border-dark shadow-lg fs-4 fw-bold prmainput" placeholder="Enter Delivery Cost " id="pdiliver" value="Rs.<?php echo $product_data["delivery_cost"]; ?>.00">

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-lg-5 ">

                                        <div class="row justify-content-center">

                                            <div class="col-11 ">

                                                <div class="mt-4">

                                                    <select class="form-select form-control fs-4 border-3 border-dark shadow-lg fw-bold prmainput" aria-label="Default select example" id="pcatname" onchange="loadSubCat();" disabled>

                                                        <option selected><?php echo $product_data["cat_name"]; ?></option>

                                                        <?php

                                                        $cat_name = Database::search("SELECT * FROM `category` ");
                                                        $cat_num = $cat_name->num_rows;

                                                        for ($i = 0; $i < $cat_num; $i++) {

                                                            $cat_data = $cat_name->fetch_assoc();

                                                        ?>

                                                            <option value="<?php echo $cat_data["cat_id"]; ?>"><?php echo $cat_data["cat_name"]; ?></option>

                                                        <?php

                                                        }

                                                        ?>

                                                    </select>

                                                </div>

                                                <div class="mt-4">

                                                    <select class="form-select form-control fs-4 border-3 border-dark shadow-lg fw-bold prmainput" aria-label="Default select example" id="psubcatname" disabled>

                                                        <option selected><?php echo $product_data["sub_cat_name"]; ?></option>

                                                        <?php

                                                        $sub_cat_rs = Database::search("SELECT * FROM `sub_category` INNER JOIN `category` ON `category`.`cat_id` = `sub_category`.`category_id` WHERE `category`.`cat_id` = '" . $cat_data["cat_id"] . "' ");
                                                        $sub_cat_num = $sub_cat_rs->num_rows;

                                                        for ($i = 0; $i < $sub_cat_num; $i++) {

                                                            $sub_cat_data = $sub_cat_rs->fetch_assoc();

                                                        ?>

                                                            <option value="<?php echo $sub_cat_data["sub_cat_id"]; ?>"><?php echo $sub_cat_data["sub_cat_name"]; ?></option>

                                                        <?php

                                                        }


                                                        ?>


                                                    </select>

                                                </div>

                                                <div class="mt-4 form form-control border border-3 border-dark shadow-lg fs-4 fw-bold prmainput">

                                                    <div class="row justify-content-center">

                                                        <h2 class="text-center fw-bold mb-2">Select Product Condition</h2>

                                                        <div class="col-md-3 col-5">

                                                            <div class="form-check">

                                                                <?php

                                                                if ($product_data["condition_con_id"] == 1) {

                                                                ?>

                                                                    <input class="form-check-input fs-2 mt-2" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked disabled>
                                                                    <label class="form-check-label fw-bold fs-5 mt-2" for="flexRadioDefault1"> Original </label>

                                                                <?php

                                                                }else {
                                                                    
                                                                    ?>
                                                                    
                                                                    <input class="form-check-input fs-2 mt-2" type="radio" name="flexRadioDefault" id="flexRadioDefault1" disabled>
                                                                    <label class="form-check-label fw-bold fs-5 mt-2" for="flexRadioDefault1"> Original </label>

                                                                    <?php
                                                                    
                                                                }

                                                                ?>



                                                            </div>

                                                        </div>

                                                        <div class="col-md-2 col-5">

                                                            <div class="form-check">

                                                                <?php

                                                                if ($product_data["condition_con_id"] == 2) {

                                                                ?>

                                                                    <input class="form-check-input fs-2 mt-2" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked disabled>
                                                                    <label class="form-check-label fw-bold fs-5 mt-2" for="flexRadioDefault1"> Local </label>

                                                                <?php

                                                                }else {
                                                                    
                                                                    ?>
                                                                    
                                                                    <input class="form-check-input fs-2 mt-2" type="radio" name="flexRadioDefault" id="flexRadioDefault1" disabled>
                                                                    <label class="form-check-label fw-bold fs-5 mt-2" for="flexRadioDefault1"> Local </label>

                                                                    <?php
                                                                    
                                                                }

                                                                ?>

                                                            </div>

                                                        </div>

                                                    </div>


                                                </div>
                                                <div class="mt-4 mb-4">

                                                    <input type="text" class="form form-control border border-3 border-dark shadow-lg fs-4 fw-bold prmainput" placeholder="Discount" id="pdiscount" value="Discount :- <?php echo $product_data["Discount"];?>">

                                                </div>

                                                <div class="row">

                                                    <div class="col-6">

                                                        <div class="mb-4">

                                                            <select class="form-select form-control fs-5 fs-4 border-3 border-dark shadow-lg fw-bold prmainput" aria-label="Default select example" id="pcatname" onload="loadSubCat();" disabled>

                                                                <option selected><?php echo $product_data["brand_name"]; ?></option>

                                                                <?php

                                                                $brand_name = Database::search("SELECT * FROM `brand` ");
                                                                $brand_num = $brand_name->num_rows;

                                                                for ($i = 0; $i < $brand_num; $i++) {

                                                                    $brand_data = $brand_name->fetch_assoc();

                                                                ?>

                                                                    <option value="<?php echo $brand_data["brand_id"]; ?>"><?php echo $brand_data["brand_name"]; ?></option>

                                                                <?php

                                                                }

                                                                ?>

                                                            </select>

                                                        </div>

                                                    </div>
                                                    <div class="col-6">

                                                        <div class="mb-4">

                                                            <select class="form-select form-control fs-5 fs-4 border-3 border-dark shadow-lg fw-bold prmainput" aria-label="Default select example" id="pcatname" onload="loadSubCat();" disabled>

                                                                <option selected><?php echo $product_data["size_name"]; ?></option>

                                                                <?php

                                                                $size_name = Database::search("SELECT * FROM `size` ");
                                                                $size_num = $size_name->num_rows;

                                                                for ($i = 0; $i < $size_num; $i++) {

                                                                    $size_data = $size_name->fetch_assoc();

                                                                ?>

                                                                    <option value="<?php echo $size_data["size_id"]; ?>"><?php echo $size_data["size_name"]; ?></option>

                                                                <?php

                                                                }

                                                                ?>

                                                            </select>

                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="row justify-content-center">

                                        <div class="col-11 mb-2">
                                            <div class="row justify-content-center ">

                                            <?php
                                            
                                            $img[0] ="resource\icons8-add-image-96.png";
                                            $img[1] ="resource\icons8-add-image-96.png";
                                            $img[2] ="resource\icons8-add-image-96.png";
                                            $img[3] ="resource\icons8-add-image-96.png";
                                            
                                            $product_img_rs = Database::search("SELECT * FROM `product_img` WHERE `product_id`='".$product_data["id"]."' ");
                                            $product_img_num = $product_img_rs->num_rows;

                                            for ($q=0; $q < $product_img_num; $q++) { 
                                               
                                                $product_img_data = $product_img_rs->fetch_assoc();

                                                $img[$q] = $product_img_data["img_path"];

                                            }

                                            ?>

                                                <div class="col-2 me-3 border border-3 border-dark shadow-lg productimg text-center rounded-5">

                                                    <img id="i0" class="rounded mx-auto d-block productimgupload" src="<?php echo $img[0]; ?>">

                                                </div>
                                                <div class="col-2 me-3 border border-3 border-dark shadow-lg productimg text-center rounded-5">

                                                    <img id="i1" class="rounded mx-auto d-block productimgupload" src="<?php echo $img[1]; ?>">

                                                </div>
                                                <div class="col-2 me-3 border border-3 border-dark shadow-lg productimg text-center rounded-5">

                                                    <img id="i2" class="rounded mx-auto d-block productimgupload" src="<?php echo $img[2]; ?>">

                                                </div>
                                                <div class="col-2 me-3 border border-3 border-dark shadow-lg productimg text-center rounded-5">

                                                    <img id="i3" class="rounded mx-auto d-block productimgupload" src="<?php echo $img[3]; ?>">

                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-12 mb-2 mt-3">

                                            <div class="row justify-content-center">

                                                <div class="col-lg-5">

                                                    <input type="file" class="d-none" id="imgUploader" multiple />
                                                    <label for="imgUploader" class="btn btn-warning w-100 fs-4 fw-bold" onclick="changeProductImage();">Update Product Image</label>

                                                </div>

                                            </div>


                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="col-12 mb-3">

                                            <div class="row justify-content-center">

                                                <div class="col-lg-5">

                                                    <button class="btn btn-primary w-100 fs-4 fw-bold" onclick="changeProductDeatiles();">Update Product </button>

                                                </div>

                                            </div>


                                        </div>

                                    </div>

                                </div>


                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </body>

        </html>

<?php

    } else {

        ?>
        
        <script>

            alert ("Please Select Product");
            window.location = "adminStockManagement.php";


        </script>

        <?php
        
    }
} else {

    ?>
        
    <script>

        alert ("Please Signin To System");
        window.location = "adminLogin.php";


    </script>

    <?php

}


?>