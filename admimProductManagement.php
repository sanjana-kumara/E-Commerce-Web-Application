<?php

session_start();
if (isset($_SESSION["ad"])) {

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

        <?php include "connection.php"; ?>

        <div class="container-fluid vh-100">


            <?php include "adminNaveBar.php"; ?>

            <!-- Alert Box -->
            <div class="row">

                <div class="d-none" id="msgDiv">

                    <div class="col-12 text-center mt-4 alert alert-danger border border-2 border-dark shadow-lg" id="msg" onclick="reload();"></div>

                </div>

            </div>
            <!-- Alert Box -->

            <div class="row">

                <div class="col-12 col-lg-6 mt-2">

                    <div class="row justify-content-center">

                        <div class="col-10">

                            <div class="row justify-content-center">

                                <div class="col-10 mt-4">

                                    <input type="text" class="form form-control border border-3 border-dark shadow-lg fs-4 fw-bold prmainput" placeholder="Enter Category Name" id="catname">

                                </div>

                                <div class="col-8 mt-4 mb-3">

                                    <button class="btn w-100 border border-3 border-dark rounded-5 fw-bold fs-4 prmabtn" onclick="catName();">Add Category</button>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-12 col-lg-6 mt-2">

                    <div class="row justify-content-center">

                        <div class="col-10">

                            <div class="row justify-content-center">

                                <div class="col-10 mt-4">

                                    <input type="text" class="form form-control border border-3 border-dark shadow-lg fs-4 fw-bold prmainput" placeholder="Enter Brand Name" id="brand">

                                </div>

                                <div class="col-8 mt-4 mb-3">

                                    <button class="btn w-100 border border-3 border-dark rounded-5 fw-bold fs-4 prmabtn" onclick="brand();">Add Brand</button>

                                </div>

                            </div>


                        </div>

                    </div>

                </div>

            </div>

            <div class="row">

                <div class="col-12 col-lg-6 mt-3">

                    <div class="row justify-content-center">

                        <div class="col-10">

                            <div class="row justify-content-center">

                                <div class="col-10 mt-4">

                                    <select id="catopt" class="form-select form-control fs-4 fs-5 border-3 border-dark shadow-lg fw-bold prmainput" aria-label="Default select example">

                                        <?php

                                        $rs = Database::search("SELECT * FROM `category` ");
                                        $num = $rs->num_rows;

                                        ?>

                                        <option selected>Select Category</option>

                                        <?php

                                        for ($i = 0; $i < $num; $i++) {

                                            $data = $rs->fetch_assoc();

                                        ?>

                                            <option value="<?php echo $data["id"]; ?>"><?php echo $data["cat_name"]; ?></option>

                                        <?php

                                        }

                                        ?>

                                    </select>

                                </div>

                                <div class="col-10 mt-4">

                                    <input type="text" class="form form-control border border-3 border-dark shadow-lg fs-4 fs-5 fw-bold prmainput" placeholder="Enter Sub Category Name" id="subcat_name">

                                </div>

                                <div class="col-8 mt-4 mb-3">

                                    <button class="btn w-100 border border-3 border-dark rounded-5 fw-bold fs-5 fs-4 prmabtn" onclick="sub_cat();">Add Sub Category</button>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-12 col-lg-6 mt-3">

                    <div class="row justify-content-center">

                        <div class="col-10">

                            <div class="row justify-content-center">

                                <div class="col-10 mt-4">

                                    <input type="text" class="form form-control border border-3 border-dark shadow-lg fs-4 fw-bold prmainput" placeholder="Enter Size" id="size">

                                </div>

                                <div class="col-8 mt-4 mb-3">

                                    <button class="btn w-100 border border-3 border-dark rounded-5 fw-bold fs-4 prmabtn" onclick="size();">Add Size</button>

                                </div>

                            </div>


                        </div>

                    </div>

                </div>

            </div>

            <div class="row col-12 ">

                <div class="m-1">

                    <div class="row justify-content-center">

                        <div class="col-11 border border-dark border-3 rounded-5 shadow-lg userlist">

                            <div class="row justify-content-center">

                                <div class="col-lg-5 m-2 mt-3">

                                    <h2 class="text-center fs-1 fw-bold text-light"> Add Product </h2>

                                </div>

                            </div>

                            <div class="row justify-content-center gap-2">

                                <div class="col-lg-5 me-lg-3 ">

                                    <div class="row justify-content-center">

                                        <div class="col-11">

                                            <div class="mt-4">

                                                <input type="text" class="form form-control border border-3 border-dark shadow-lg fs-4 fw-bold prmainput" placeholder="Product Name" id="pname">

                                            </div>

                                            <div class="mt-4">

                                                <div class="form-floating">
                                                    <textarea class="form form-control border border-3 border-dark shadow-lg fs-4 fw-bold prmainput" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                                    <label class="fs-4 fw-bold" for="floatingTextarea2" id="pdescription">Product Description</label>
                                                </div>

                                            </div>

                                            <div class="mt-4">

                                                <input type="text" class="form form-control border border-3 border-dark shadow-lg fs-4 fw-bold prmainput" placeholder="Enter Price" id="pprice">

                                            </div>

                                            <div class="mt-4">

                                                <input type="text" class="form form-control border border-3 border-dark shadow-lg fs-4 fw-bold prmainput" placeholder="Enter Quantity" id="pqty">

                                            </div>
                                            <div class="mt-4 mb-4">

                                                <input type="text" class="form form-control border border-3 border-dark shadow-lg fs-4 fw-bold prmainput" placeholder="Enter Delivery Cost " id="pdiliver">

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-5 ">

                                    <div class="row justify-content-center">

                                        <div class="col-11 ">

                                            <div class="mt-4">

                                                <select class="form-select form-control fs-4 border-3 border-dark shadow-lg fw-bold prmainput" aria-label="Default select example" id="pcatname" onchange="loadSubCat();">

                                                    <option selected>Select Category Name</option>

                                                    <?php

                                                    $cat_name = Database::search("SELECT * FROM `category` ");
                                                    $cat_num = $cat_name->num_rows;

                                                    for ($i = 0; $i < $cat_num; $i++) {

                                                        $cat_data = $cat_name->fetch_assoc();

                                                    ?>

                                                        <option value="<?php echo $cat_data["id"]; ?>"><?php echo $cat_data["cat_name"]; ?></option>

                                                    <?php

                                                    }

                                                    ?>

                                                </select>

                                            </div>

                                            <div class="mt-4">

                                                <select class="form-select form-control fs-4 border-3 border-dark shadow-lg fw-bold prmainput" aria-label="Default select example" id="psubcatname">

                                                    <option selected>Select Sub Category Name</option>

                                                    <?php

                                                    $sub_cat_rs = Database::search("SELECT * FROM `sub_category` INNER JOIN `category` ON `category`.`id` = `sub_category`.`category_id` WHERE `category`.id = '" . $cat_data["id"] . "' ");
                                                    $sub_cat_num = $sub_cat_rs->num_rows;

                                                    for ($i = 0; $i < $sub_cat_num; $i++) {

                                                        $sub_cat_data = $sub_cat_rs->fetch_assoc();

                                                    ?>

                                                        <option value="<?php echo $sub_cat_data["id"]; ?>"><?php echo $sub_cat_data["sub_cat_name"]; ?></option>

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

                                                            <input class="form-check-input fs-2 mt-2" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                            <label class="form-check-label fw-bold fs-5 mt-2" for="flexRadioDefault1"> Original </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-2 col-5">

                                                        <div class="form-check">

                                                            <input class="form-check-input fs-2 mt-2" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                            <label class="form-check-label fw-bold fs-5 mt-2" for="flexRadioDefault1"> Local </label>

                                                        </div>

                                                    </div>

                                                </div>


                                            </div>
                                            <div class="mt-4 mb-4">

                                                <input type="text" class="form form-control border border-3 border-dark shadow-lg fs-4 fw-bold prmainput" placeholder="Discount" id="pdiscount">

                                            </div>

                                            <div class="row">

                                                <div class="col-6">

                                                    <div class="mb-4">

                                                        <select class="form-select form-control fs-5 fs-4 border-3 border-dark shadow-lg fw-bold prmainput" aria-label="Default select example" id="pcatname" onload="loadSubCat();">

                                                            <option selected>Select Brand Name</option>

                                                            <?php

                                                            $brand_name = Database::search("SELECT * FROM `brand` ");
                                                            $brand_num = $brand_name->num_rows;

                                                            for ($i = 0; $i < $brand_num; $i++) {

                                                                $brand_data = $brand_name->fetch_assoc();

                                                            ?>

                                                                <option value="<?php echo $brand_data["id"]; ?>"><?php echo $brand_data["name"]; ?></option>

                                                            <?php

                                                            }

                                                            ?>

                                                        </select>

                                                    </div>

                                                </div>
                                                <div class="col-6">

                                                    <div class="mb-4">

                                                        <select class="form-select form-control fs-5 fs-4 border-3 border-dark shadow-lg fw-bold prmainput" aria-label="Default select example" id="pcatname" onload="loadSubCat();">

                                                            <option selected>Select Size Name</option>

                                                            <?php

                                                            $size_name = Database::search("SELECT * FROM `size` ");
                                                            $size_num = $size_name->num_rows;

                                                            for ($i = 0; $i < $size_num; $i++) {

                                                                $size_data = $size_name->fetch_assoc();

                                                            ?>

                                                                <option value="<?php echo $size_data["id"]; ?>"><?php echo $size_data["name"]; ?></option>

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

                                            <div class="col-2 me-3 border border-3 border-dark shadow-lg productimg text-center rounded-5">

                                                <img id="i0" class="rounded mx-auto d-block productimgupload" src="data:image/png;base64,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">
                                                <label class="fs-5 fw-bold mt-5">Upload Product Img</label>

                                            </div>
                                            <div class="col-2 me-3 border border-3 border-dark shadow-lg productimg text-center rounded-5">

                                                <img id="i1" class="rounded mx-auto d-block productimgupload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAAJw0lEQVR4nO2aeVCTZx7HM+12F7kCgYQrBDxCELXquJ7d6gqKKCBUF69V6LFtZ7szu3/ttH9tRkHuO9zIKWciUK+6rtvZ3XEVj4oCxkDCGZJwQwso2CrfnTes1qpVQhLeN/B+Zz4zhIQZnt/neX7P8yRhMOjQoUOHDh06dOjQoUOHDh06dOjQeUWCVHANVuNUsBojwRpgXqPW1qBmtwqCWSt+kAaDpA9cQzmGiNoYXYB25pM/WFCRIDXEsyGAbjuan5GgxnfGF0CBmRZMYWgBGloA6bMwmF4B5BcimG5B5BcjmAToPUBDC6AcYd2PIBkeQtuYCuPj7Vpax1QQDw9pn6NXgMZ4xY8dGMOD8Q5gou2lEM8Rr6FbkMY4xZ/8mcI/C/EaQ0mg9wDNj23nVTP/ee6PdyDUAO2IFqCZKgTR86db/CdUDg/RAoIN1H7ax1Q6CyA2ZnoFaAwjYFyH9vPshkwL0BhGgC79/9l9gBagMYwA4sxPtyASEdObMLmE0cdQ07qIRdMXMRhNArG5vmrjNVTxCeiLmObFohA3XOKSRZzzieMpAfEz8TtD3H5NXoB/+yNsqXuAjVdHsal2FL+tH8furknSW9icFxCkAjZeG4Xnl30QVP8Ur9P9WhFkF3TOCtitmsSar4chqOp9Je9cN1x/pgU8mfldk1h9aRgep3qnxcbaUdILO2dWQKByEisvDoF/qlcnTEUCpQUEdDzGivMD4Et6ZsTGq9SXQFkBxEln2dl+LBH36MUGikugpAD/tkfaU82Syh6DsOEKdSVQTsDOlh8gqO7F4opug7LhyohOrW9r/Th+c2MM794Yg3fjhNHuGZQSsEP+PfhVvVhU0W0U1r9GQpAa2Fz3AKsuDuLtC4N4+6tB7R604tyA9mfvhvG5K2C77CGWSHqwqLzbqKz/78slBKkntSenVReHsPLvLwpYfnYAy870492b9+eeAO+7E9o2sbBMMyusf05CkGoSG6+MYNU/hl4rYNnpfoNe9kgXQCzrRWXdWFiqmVXWXx55esMmNunVRPGnKcDLgBJIFbD59gO4l2rgXkIOa/89gg2XR7S3bF0FeH3Zh3eujZmuAOKE4V6ihttJcvGs6ZuxgKU1fdikpwRSBBCbHdmFd3tWQnXfjAUQf7updsx0BBAbIK9YTTkEVb0zFuBZRUgYRbB6EkGqxwjqejSF8ocpnjxWPda+hjQBv/7Xt+AVqSiLByFBFwHVvfCs6oFArIFHpQob/jOA3R0TCGwfn6LtwRT/f0w8p6Xz+ykxqsezI4C44Ky+NATXQhXl4Ut6Xy+AKH6VBp4SFQSVKgjKleCXdoBf0o51X/cgQD7ychSjCGwZQ2Drfa0YQobRBRAXnBUXBsEtUJkMfEnvywWc7oNXdTeWVqmxVNwFQUUnPMra4VHSBn6xAvxCORYXNGPtBSV23Rt8AX/ZEPybhuHf9O1TIUYXQLyjyS3oMjn4kp6fCjhDFF8NL4kKnmIlPMvbIChtAf+kAvwiGRbm/xO8vBy45ArhmPMZHHKPgJO9D+ysfXDMOQxuwWdYXHEUK88VYvPV69gpHdDKMLoAl/wumCqLK3u0Apaf7sGyag2WSpRYWtkBz/JWCErk4BffAK9QBOf8T+GYdwAOJ/bDIXcfODkhYGf/DuysvbDP3Av7jD2wS38PrLRgsERBsE3dDU5WGLxqMsFK8eMaV0BeF0yWE0osKu3Ccu3MJ4rfDs+yFnicvA334gQ4Fx2BU+FBOOUf1FmATUogbJICwUz0f8iM35VpGR9gbxQBzieUMElyO+GU3QanTAUWFrbCS1t8BZacrAK3+GM4F/8ezkWHDCAgAMwEf1jH7xywiPM7YHABTrlKmCTZbXDMUMAxTQbHVCncc6VwL0kEt+QIXE4eNoKAXbCK2wmrGL8sRvaatwwnIEcJkyOrDY7pCjiKmuCYIoVDch24+X8DtzTU+AJi/WAZveM8QxhgbhABjjmdMCmy2+GQoYCDSAaHVCkckm7DpUAI17LQ2RMQ4wfzaN9LDGHIL/UW4JDdCZMhqwOc9BZwRE3gpNwDO6kBznlx4JWHzboAi+gdsIjanqm/gCxiYCZCRis4Irm2+JzERjhlVIBX8T6JAnxhFum7Xy8BnMwOmAQZ7WCLFGCnyMBObAQ7qRZu5X8kXcCCyG2DlsItMz+icjKIwZkAaS1gpzSDnSgFO74eLnkJcKv8YMYCbvQ04Umuae7NWIB55HaYH9+WPmMB7IwOUJ70drBTFbBPlsE+gZj9l8Gr/FgvAc9HPwE+D82it/FmJMA+vR2UJ60VdinNsEuUwi7uDpxy0+Em/pBCArZhQYR31MwEpBEDpDipLbBLksEuvhF2sXXglf+ZcgLMwn1UDHHImzoLsBO1g/Iky8FKuAdWbAPYSV/BXfIR5QQsiPAhVsE63QWktoHSpLSCldgEVvxdsGLuwCkrh7ICzMK3fqGzAFZKGyhNcgts42Wwjb0L26jb4BZEUFbAr8K3SnQWYJvSBkqTpIBNvAw2sY2wiaoDr/SvlBVgFr61QXcBya2gNIly2MRJYRPTAJvIW3Cv/NO0BNzsk8NQqVVJp7kCvPt1FmCT1ApKkyAHM1YKZlQ9mMdvwV3y6bQEGDrTWgHHtk7oLiCxFZQmXg5mjBTMyHowI+agAGZCCyhNXDOso+/COrIe1uHfTLsFXe/98a0GfXNVddd4Lcg6oQWUJq4Z1jFSWEXWwyr8G7jOtU3YOr4FlCZODutoKayOEwJuwSV/jh1DLeMUI1ZxClCWWDmsoqSwjKiH5bFb4KRnU1aA2THvz3UWYBUrr7GKJQZKYaLuwfJ4AyyP1cEm5hxlBSw46rNWdwExMoFFjHzIMkYByhIpg2VEIyyO3oaF8CZcy/5CPQHh3p0MofANxkxiFq5wNY9uFptHN39nES0H5YhqgkVEI8yP3YG58CY4GalUFBDJmC9ZUvUHLk/84UPKCIjwmVgQ4e3CmE/hiT/I1EfAtW7Z0+LX6v2RpI+IMd/CFX/Ecqt8v5/0D+WPbx/Q60N5U45bRdgB0gVEbQ9hzOfwysOyyBJgHumbRvb4yY845E1eeWjN7AvwPccQbvkF2cOnRJzOfGLuWhZ6frYEWET7nTXYl3PnStZkf/IWtzQ0cxa+np5Gz/xXxLXkyH6X4sP9BhcQt6vPMtZvfm+4041z0RE7p+JD6U5Fhyb0FpAQMMGM3yWyTvBlTfsfoDMVbmGoi2PhgSjHvINKXQUwUwKUzMSASFaC//y64TKMEaHwDYfcg+sccvd/wcndJ2HnhDSws/YOsjP3PLTP2PPQPv29Qbu04HpbUbDEVhT0uV1ywNqZvrH2P2XRxOmB+SmeAAAAAElFTkSuQmCC">
                                                <label class="fs-5 fw-bold mt-5">Upload Product Img</label>

                                            </div>
                                            <div class="col-2 me-3 border border-3 border-dark shadow-lg productimg text-center rounded-5">

                                                <img id="i2" class="rounded mx-auto d-block productimgupload" src="data:image/png;base64,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">
                                                <label class="fs-5 fw-bold mt-5">Upload Product Img</label>

                                            </div>
                                            <div class="col-2 me-3 border border-3 border-dark shadow-lg productimg text-center rounded-5">

                                                <img id="i3" class="rounded mx-auto d-block productimgupload" src="data:image/png;base64,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">
                                                <label class="fs-5 fw-bold mt-5">Upload Product Img</label>

                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-12 mb-2 mt-3">

                                        <div class="row justify-content-center">

                                            <div class="col-lg-5">

                                                <input type="file" class="d-none" id="imgUploader" multiple />
                                                <label for="imgUploader" class="btn btn-warning w-100 fs-4 fw-bold" onclick="uploadeProductImage();">Upload Product Image</label>

                                            </div>

                                        </div>


                                    </div>

                                </div>
                                <div class="row">

                                    <div class="col-12 mb-3">

                                        <div class="row justify-content-center">

                                            <div class="col-lg-5">

                                                <button class="btn btn-primary w-100 fs-4 fw-bold">Submit Product </button>

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
    echo ("Invalide Admin User");
}


?>