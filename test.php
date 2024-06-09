<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap.css" rel="stylesheet">
    <title>Home | Halgahawatta hardaware</title>
</head>

<body class="body1">

    <div>
        <div class="slideshow-container">

            <div class="">

                <img src="resource/fevicol.jpg" alt="it1">

            </div>

            <div class="mySlides fade">
                <img src="https://i0.wp.com/hardwaremart.lk/wp-content/uploads/2021/10/11-250x105-1.png?resize=150%2C63&ssl=1" alt="11-250x105" width="148" height="62">
            </div>

            <div class="mySlides fade">
                <img src="https://i0.wp.com/hardwaremart.lk/wp-content/uploads/2021/10/unnamed.jpg?resize=150%2C105&ssl=1" alt="unnamed" width="148" height="103">
            </div>

            <div class="mySlides fade">
                <img src="https://i0.wp.com/hardwaremart.lk/wp-content/uploads/2021/10/0.jpg?resize=150%2C150&ssl=1" alt="0" width="148" height="148">
            </div>

            <div class="mySlides fade">
                <img src="https://i0.wp.com/hardwaremart.lk/wp-content/uploads/2021/10/7-250x88-1.jpg?resize=150%2C53&ssl=1" alt="7-250x88" width="148" height="52">
            </div>

            <div class="mySlides fade">
                <img src="https://i0.wp.com/hardwaremart.lk/wp-content/uploads/2021/10/12-250x94-1.png?resize=150%2C56&ssl=1" alt="12-250x94" width="148" height="55">
            </div>

            <div class="mySlides fade">
                <img src="https://i0.wp.com/hardwaremart.lk/wp-content/uploads/2021/10/AP-logo1-250x63-1.png?resize=150%2C38&ssl=1" alt="AP-logo1-250x63" width="148" height="37">
            </div>

            <div class="mySlides fade">
                <img src="https://i0.wp.com/hardwaremart.lk/wp-content/uploads/2021/10/Arpico-250x124-1.jpg?resize=150%2C74&ssl=1" alt="Arpico-250x124" width="148" height="73">
            </div>

            <div class="mySlides fade">
                <img src="https://i0.wp.com/hardwaremart.lk/wp-content/uploads/2021/10/browns-for-web-250x159-1.jpg?resize=150%2C95&ssl=1" alt="browns-for-web-250x159" width="148" height="94">
            </div>

            <div class="mySlides fade">
                <img src="https://i0.wp.com/hardwaremart.lk/wp-content/uploads/2021/10/1.png?resize=150%2C59&ssl=1" alt="1" width="148" height="58">
            </div>

            <div class="mySlides fade">
                <img src="https://i0.wp.com/hardwaremart.lk/wp-content/uploads/2021/10/3-250x192-1.png?resize=150%2C115&ssl=1" alt="3-250x192" width="148" height="113">
            </div>

            <div class="mySlides fade">
                <img src="https://i0.wp.com/hardwaremart.lk/wp-content/uploads/2021/10/4-250x96-1.jpg?resize=150%2C58&ssl=1" alt="4-250x96" width="148" height="57">
            </div>

            <div class="mySlides fade">
                <img src="https://i0.wp.com/hardwaremart.lk/wp-content/uploads/2021/10/6-250x137-1.png?resize=150%2C82&ssl=1" alt="6-250x137" width="148" height="81">
            </div>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>

        <script src="script.js"></script>
    </div>

</body>

</html>

// let slideIndex = 0;
// showSlides();

// function showSlides() {
// let i;
// let slides = document.getElementsByClassName("mySlides");
// let dots = document.getElementsByClassName("dot");
// for (i = 0; i < slides.length; i++) { // slides[i].style.display="none" ; // } // slideIndex++; // if (slideIndex> slides.length) {slideIndex = 1}
    // for (i = 0; i < dots.length; i++) { // dots[i].className=dots[i].className.replace(" active", "" ); // } // slides[slideIndex-1].style.display="block" ; // dots[slideIndex-1].className +=" active" ; // setTimeout(showSlides, 2000); // Change image every 2 seconds // } <!-- Admin User Management -->


    <div class="row justify-content-center">
            <div class="umanagement">
                <div class="text-center text-light mt-3">
                    <p class="fs-1 fw-bold">All User 's </p>
                </div>
                <div class="d-none d-lg-block col-5 col-lg-6 mt-lg-1 mt-2 d-flex offset-4" id="search">
                    <form class="d-flex">
                        <input type="text" class="form-control me-3" placeholder="Enter Id Number OR Uname">
                        <button class="btn btn-outline-warning col-2 me-2 rounded-5">Search</button>
                    </form>
                </div>
        <?php
        $rs = Database::search("SELECT * FROM `user` WHERE `user_type_id`='2' ");
        $num = $rs->num_rows;
        ?>

        <div class="row justify-content-center">
            <div class="col-11 ms-3 ">
                <table class="table table-secondary table-striped fw-bold">
                    <thead>
                        <tr class="text-center">
                            <th class="fw-bold fs-3 "></th>
                            <th class="fw-bold fs-3">Id</th>
                            <th class="fw-bold fs-3">Username</th>
                            <th class="fw-bold fs-3">Email</th>
                            <th class="fw-bold fs-3">Mobile</th>
                            <th class="fw-bold fs-3">Status</th>
                            <th></th>
                        </tr>
                        <hr>
                    </thead>
                    <?php

                    for ($i = 0; $i < $num; $i++) {

                        $data = $rs->fetch_assoc();

                    ?>

                        <tbody>
                            <tr class="text-center">
                                <th class="fs-5 "><img src="resource/user.png" class="Aduserimg"></th>
                                <th class="fs-5"><?php echo $i + 1; ?></th>
                                <td class="fs-5"><?php echo $data['username']; ?></td>
                                <td class="fs-5"><?php echo $data['email']; ?></td>
                                <td class="fs-5"><?php echo $data['mobile']; ?></td>
                                <td class="fs-5">

                                    <?php

                                    if ($data['statues'] == 1) {
                                        echo ("Active");
                                    ?>
                                <td><button class="btn btn-danger fs-5" id="stbtn<?php echo $data['id']; ?>" onclick="status('<?php echo $data['id']; ?>');">Deactivate</button></td>

                            <?php
                                    } else {
                                        echo ("Deactive");
                            ?>
                                <td><button class="btn btn-success fs-5" id="stbtn<?php echo $data['id']; ?>" onclick="status('<?php echo $data['id']; ?>');">Activate</button></td>
                            <?php
                                    }

                            ?>


                            </td>
                            </tr>
                        </tbody>

                    <?php
                    }

                    ?>

                </table>
            </div>
        </div>

        <!-- Admin User Management -->

        // $rs = Database::search("SELECT * FROM `product` WHERE `statues`='".$status."' "); 
// $num = $rs->num_rows;

// if ($num == 1) {

//     $d = $rs->fetch_assoc();

//     if ($d['statues'] == 1) {
//         // Deactivate
        
//         // Database::iud("UPDATE `user` SET `statues`='0' WHERE `statues`='".$status."' ");
//         echo("Deactive");    

//     } else if ($d['statues'] == 0) {
//         // Activate
        
//         // Database::iud("UPDATE `user` SET `statues`='1' WHERE `statues`='".$status."' ");
//         echo("Active");

//     }
  
       
    
// } else {

//     echo("invalide");
        
// }

<!-- loade Product Stock -->
<div class="col-12">

                    <div class="row justify-content-center p-4 gap-3">

                    <?php 
                            
                            $product_rs = Database::search("SELECT * FROM `product` ORDER BY `quantity` ASC"); 
                            $product_num = $product_rs->num_rows;

                            for($x = 0; $x < $product_num ; $x++ ){

                                $product_data = $product_rs->fetch_assoc();

                                ?>
                                                           

                                <div class="border border-3 border-dark shadow-lg ms-md-4 bg-light rounded-5 img_body">

                                    <div class="row justify-content-center">

                                        <?php 
                                        
                                            $img_rs = Database::search("SELECT * FROM `product_img` WHERE `product_id`='".$product_data["id"]."' ");
                                            $img_data = $img_rs->fetch_assoc();                                            

                                        ?>

                                        <div class="col-lg-8 ms-md-2 mt-2 mb-4">
                                            
                                            <img class="mt-2 border border-3 border-dark rounded-4 shadow-lg h-100 w-100" src="<?php echo($img_data["img_path"]); ?>" alt="img">

                                        </div>

                                    </div>

                                    <div class="row justify-content-center text-center">

                                        <div class="col-10">

                                            <span class="fs-1 fw-bold recent_text_1"> <?php echo ($product_data["name"]); ?> </span>

                                        </div>
                                        <div class="col-10 ">

                                            <span class="fs-2 fw-bold recent_text_2">Rs. <?php echo ($product_data["price"]); ?>.00 </span>

                                        </div>
                                        <div class="col-10">

                                            <span class="fs-4 fw-bold recent_text_3"> <?php echo ($product_data["quantity"]); ?> Items In Stock </span>

                                        </div>
                                        <div class="col-10 mb-3 mt-3">

                                            <a href="updateProduct.php"><button class="fs-4 stock_imgbtn w-75 shadow-lg">Update Product</button></a>

                                        </div>
                                        <div class="col-10 mb-3">

                                        <a href="viewProduct.php"><button class="fs-4 stock_imgbtn_1 w-75 shadow-lg">View Product</button></a>

                                        </div>

                                    </div>

                                </div>


                                <?php

                            }
                            
                            ?>
                        
                    </div>

                </div>

                <!-- pagination -->
    
                <div class="row justify-content-center">
    
                    <div class="col-2 d-none d-md-block">
    
                        <div class="row col-4 h-100 w-100">
    
                            <nav aria-label="Page navigation example">
    
                                <ul class="pagination fw-bold fs-3">
    
                                    <li class="page-item disabled">
                                        <a class="page-link fs-3">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link fs-3" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link fs-3" href="#">2</a></li>
                                    <li><a class="page-link fs-3">......</a></li>
                                    <li class="page-item"><a class="page-link fs-3" href="#">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link fs-3" href="#">Next</a>
                                    </li>
    
                                </ul>
    
                            </nav>
    
                        </div>
    
                    </div>
    
                </div>


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
        <title>Sigal Product View</title>
    </head>

    <body>

        <?php include "connection.php"; ?>

        <div class="container-fluid vh-100">

            <?php include "adminNaveBar.php"; ?>

            <div class="row">

                <div class="col-12">

                    <div class="row justify-content-center mt-3 mb-3">

                        <div class="col-lg-4 mt-3 ms-md-4">

                            <div class="row">

                                <div class="col-12 mb-2">

                                    <img class="border border-3 border-dark rounded-4 shadow-lg w-100 h-100" src="resource/background 1.png" alt="img">

                                </div>

                            </div>

                            <div class="row ">

                                <div class="col-4">

                                    <img class="border border-3 border-dark rounded-4 shadow-lg w-100 h-100" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAAJw0lEQVR4nO2aeVCTZx7HM+12F7kCgYQrBDxCELXquJ7d6gqKKCBUF69V6LFtZ7szu3/ttH9tRkHuO9zIKWciUK+6rtvZ3XEVj4oCxkDCGZJwQwso2CrfnTes1qpVQhLeN/B+Zz4zhIQZnt/neX7P8yRhMOjQoUOHDh06dOjQoUOHDh06dOjQeUWCVHANVuNUsBojwRpgXqPW1qBmtwqCWSt+kAaDpA9cQzmGiNoYXYB25pM/WFCRIDXEsyGAbjuan5GgxnfGF0CBmRZMYWgBGloA6bMwmF4B5BcimG5B5BcjmAToPUBDC6AcYd2PIBkeQtuYCuPj7Vpax1QQDw9pn6NXgMZ4xY8dGMOD8Q5gou2lEM8Rr6FbkMY4xZ/8mcI/C/EaQ0mg9wDNj23nVTP/ee6PdyDUAO2IFqCZKgTR86db/CdUDg/RAoIN1H7ax1Q6CyA2ZnoFaAwjYFyH9vPshkwL0BhGgC79/9l9gBagMYwA4sxPtyASEdObMLmE0cdQ07qIRdMXMRhNArG5vmrjNVTxCeiLmObFohA3XOKSRZzzieMpAfEz8TtD3H5NXoB/+yNsqXuAjVdHsal2FL+tH8furknSW9icFxCkAjZeG4Xnl30QVP8Ur9P9WhFkF3TOCtitmsSar4chqOp9Je9cN1x/pgU8mfldk1h9aRgep3qnxcbaUdILO2dWQKByEisvDoF/qlcnTEUCpQUEdDzGivMD4Et6ZsTGq9SXQFkBxEln2dl+LBH36MUGikugpAD/tkfaU82Syh6DsOEKdSVQTsDOlh8gqO7F4opug7LhyohOrW9r/Th+c2MM794Yg3fjhNHuGZQSsEP+PfhVvVhU0W0U1r9GQpAa2Fz3AKsuDuLtC4N4+6tB7R604tyA9mfvhvG5K2C77CGWSHqwqLzbqKz/78slBKkntSenVReHsPLvLwpYfnYAy870492b9+eeAO+7E9o2sbBMMyusf05CkGoSG6+MYNU/hl4rYNnpfoNe9kgXQCzrRWXdWFiqmVXWXx55esMmNunVRPGnKcDLgBJIFbD59gO4l2rgXkIOa/89gg2XR7S3bF0FeH3Zh3eujZmuAOKE4V6ihttJcvGs6ZuxgKU1fdikpwRSBBCbHdmFd3tWQnXfjAUQf7updsx0BBAbIK9YTTkEVb0zFuBZRUgYRbB6EkGqxwjqejSF8ocpnjxWPda+hjQBv/7Xt+AVqSiLByFBFwHVvfCs6oFArIFHpQob/jOA3R0TCGwfn6LtwRT/f0w8p6Xz+ykxqsezI4C44Ky+NATXQhXl4Ut6Xy+AKH6VBp4SFQSVKgjKleCXdoBf0o51X/cgQD7ychSjCGwZQ2Drfa0YQobRBRAXnBUXBsEtUJkMfEnvywWc7oNXdTeWVqmxVNwFQUUnPMra4VHSBn6xAvxCORYXNGPtBSV23Rt8AX/ZEPybhuHf9O1TIUYXQLyjyS3oMjn4kp6fCjhDFF8NL4kKnmIlPMvbIChtAf+kAvwiGRbm/xO8vBy45ArhmPMZHHKPgJO9D+ysfXDMOQxuwWdYXHEUK88VYvPV69gpHdDKMLoAl/wumCqLK3u0Apaf7sGyag2WSpRYWtkBz/JWCErk4BffAK9QBOf8T+GYdwAOJ/bDIXcfODkhYGf/DuysvbDP3Av7jD2wS38PrLRgsERBsE3dDU5WGLxqMsFK8eMaV0BeF0yWE0osKu3Ccu3MJ4rfDs+yFnicvA334gQ4Fx2BU+FBOOUf1FmATUogbJICwUz0f8iM35VpGR9gbxQBzieUMElyO+GU3QanTAUWFrbCS1t8BZacrAK3+GM4F/8ezkWHDCAgAMwEf1jH7xywiPM7YHABTrlKmCTZbXDMUMAxTQbHVCncc6VwL0kEt+QIXE4eNoKAXbCK2wmrGL8sRvaatwwnIEcJkyOrDY7pCjiKmuCYIoVDch24+X8DtzTU+AJi/WAZveM8QxhgbhABjjmdMCmy2+GQoYCDSAaHVCkckm7DpUAI17LQ2RMQ4wfzaN9LDGHIL/UW4JDdCZMhqwOc9BZwRE3gpNwDO6kBznlx4JWHzboAi+gdsIjanqm/gCxiYCZCRis4Irm2+JzERjhlVIBX8T6JAnxhFum7Xy8BnMwOmAQZ7WCLFGCnyMBObAQ7qRZu5X8kXcCCyG2DlsItMz+icjKIwZkAaS1gpzSDnSgFO74eLnkJcKv8YMYCbvQ04Umuae7NWIB55HaYH9+WPmMB7IwOUJ70drBTFbBPlsE+gZj9l8Gr/FgvAc9HPwE+D82it/FmJMA+vR2UJ60VdinNsEuUwi7uDpxy0+Em/pBCArZhQYR31MwEpBEDpDipLbBLksEuvhF2sXXglf+ZcgLMwn1UDHHImzoLsBO1g/Iky8FKuAdWbAPYSV/BXfIR5QQsiPAhVsE63QWktoHSpLSCldgEVvxdsGLuwCkrh7ICzMK3fqGzAFZKGyhNcgts42Wwjb0L26jb4BZEUFbAr8K3SnQWYJvSBkqTpIBNvAw2sY2wiaoDr/SvlBVgFr61QXcBya2gNIly2MRJYRPTAJvIW3Cv/NO0BNzsk8NQqVVJp7kCvPt1FmCT1ApKkyAHM1YKZlQ9mMdvwV3y6bQEGDrTWgHHtk7oLiCxFZQmXg5mjBTMyHowI+agAGZCCyhNXDOso+/COrIe1uHfTLsFXe/98a0GfXNVddd4Lcg6oQWUJq4Z1jFSWEXWwyr8G7jOtU3YOr4FlCZODutoKayOEwJuwSV/jh1DLeMUI1ZxClCWWDmsoqSwjKiH5bFb4KRnU1aA2THvz3UWYBUrr7GKJQZKYaLuwfJ4AyyP1cEm5hxlBSw46rNWdwExMoFFjHzIMkYByhIpg2VEIyyO3oaF8CZcy/5CPQHh3p0MofANxkxiFq5wNY9uFptHN39nES0H5YhqgkVEI8yP3YG58CY4GalUFBDJmC9ZUvUHLk/84UPKCIjwmVgQ4e3CmE/hiT/I1EfAtW7Z0+LX6v2RpI+IMd/CFX/Ecqt8v5/0D+WPbx/Q60N5U45bRdgB0gVEbQ9hzOfwysOyyBJgHumbRvb4yY845E1eeWjN7AvwPccQbvkF2cOnRJzOfGLuWhZ6frYEWET7nTXYl3PnStZkf/IWtzQ0cxa+np5Gz/xXxLXkyH6X4sP9BhcQt6vPMtZvfm+4041z0RE7p+JD6U5Fhyb0FpAQMMGM3yWyTvBlTfsfoDMVbmGoi2PhgSjHvINKXQUwUwKUzMSASFaC//y64TKMEaHwDYfcg+sccvd/wcndJ2HnhDSws/YOsjP3PLTP2PPQPv29Qbu04HpbUbDEVhT0uV1ywNqZvrH2P2XRxOmB+SmeAAAAAElFTkSuQmCC">

                                </div>
                                <div class="col-4">

                                    <img class="border border-3 border-dark rounded-4 shadow-lg w-100 h-100" src="data:image/png;base64,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">

                                </div>
                                <div class="col-4">

                                    <img class="border border-3 border-dark rounded-4 shadow-lg w-100 h-100" src="data:image/png;base64,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">

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-6 mt-3 ms-md-4">

                            <div class="row justify-content-center">

                                <div class="col-md-4 mt-3">

                                    <span class="fs-1 fw-bold">Product Name</span>

                                </div>

                                <div class="col-lg-12 mt-3">

                                    <div class="row justify-content-center">

                                        <div class="col-lg-4">

                                            <img class="star" src="resource/star.png">
                                            <img class="star" src="resource/star.png">
                                            <img class="star" src="resource/star.png">
                                            <img class="star" src="resource/star.png">
                                            <img class="star" src="resource/star.png">

                                        </div>

                                        <div class="col-lg-5">

                                            <span class="fs-1 fw-bold bran_text1">No | Customer Rating</span>

                                        </div>

                                    </div>

                                </div>
                                <div class="col-lg-12 mt-3">

                                    <div class="row justify-content-center">

                                        <div class="col-lg-4">

                                            <span class="fs-2 fw-bold bran_text1">Brand : </span> <span class="fs-2 fw-bold bran_text2"> Brand Name </span>

                                        </div>

                                        <div class="col-lg-5">

                                            <span class="fs-2 fw-bold bran_text1">Condition : </span> <span class="fs-2 fw-bold bran_text2"> Original / Local </span>

                                        </div>

                                        <hr class="mt-3 border border-dark border-2 opacity-100">

                                    </div>

                                </div>
                                <div class="row justify-content-center text-center">

                                    <div class="col-12 mt-3">

                                        <span class="fs-1 fw-bold price">LKR 200.00</span>

                                    </div>
                                    <div class="col-12 mt-3">

                                        <span class="fs-1 fw-bold text-decoration-line-through">5000.00</span><span class="fs-1 fw-bold"> Discount 20%</span>

                                    </div>
                                    <div class="col-12 mt-3">

                                        <span class="fs-1 fw-bold de_cost"> Delivery Cost = 250.00 </span>

                                    </div>
                                    <div class="col-12 mt-3 text-center">

                                        <div class="row">

                                            <div class="col-12 text-center">

                                                <span class="fs-1 fw-bold qty"> Quantity </span>                                          

                                                <span class="fs-1 fw-bold"> 1 </span>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-12 mt-3 text-center mb-3">

                                        <div class="row">

                                            <div class="col-lg-6">

                                                <button class="btn w-75 h-100 fw-bold fs-3 border rounded-5 border-3 border-dark shadow-lg buy_now_btn"> Buy Now </button>

                                            </div>

                                            <div class="col-lg-6">

                                                <a href="addTocart.php"><button class="btn w-75 h-100 fw-bold fs-3 border rounded-5 border-3 border-dark shadow-lg btn_addto__cart"> Add To Cart </button></a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="row justify-content-center">

                    <div class="col-10 p-3 mt-2 rounded-4 stock_se_input">

                        <div class="row">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="fs-1 fw-bold nav-link active" aria-current="page" href="#">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="fs-1 fw-bold nav-link" href="#">Customers Reviews</a>
                                </li>
                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </body>

    </html>

<?php


// Header


<?php
session_start();
if (isset($_SESSION["u"])) {
?>

    <div class="row">

        <div class="col-12 header_body">

            <div class="row">

                <div class="col-8 d-flex justify-content-center">

                    <span class="fw-bold mt-3 tex01">Halgahawatta Hardware</span>

                </div>

                <?php

                include "connection.php";

                if (isset($_SESSION["u"])) {

                    $data = $_SESSION["u"];

                    $img_rs = Database::search("SELECT * FROM `profile_img` WHERE `user_id`='" . $data["id"] . "' ");
                    $img_data = $img_rs->fetch_assoc();

                ?>
                    <div class="col-4 mt-3 mb-2">

                        <div class="row">

                            <div class="col-7">

                                <div class="row">

                                    <div class="col-md-4">

                                        <button class="usericon border border-3 border-dark shadow-lg mt-2" data-bs-toggle="dropdown" data-bs-auto-close="outside" style="background-image:url('<?php echo $img_data["img_path"] ?>');"></button>

                                        <ul class="dropdown-menu bg-black">

                                            <li><a class="dropdown-item text-white fs-4 fw-bold" href="home.php">Shop &nbsp; <i class="material-icons">&#xe563;</i></a></li>
                                            <li><a class="dropdown-item text-white fs-5 fw-bold" href="userProfile.php">My Account &nbsp; <i class="material-icons">&#xe813;</i></a></li>
                                            <li><a class="dropdown-item text-white fs-5 fw-bold" href="#">My Oder &nbsp; <i class="material-icons">&#xeb3f;</i></a></li>
                                            <li><a class="dropdown-item text-white fs-5 fw-bold" href="#">My Reviews &nbsp;<i class="material-icons">&#xe83a;</i></a></li>
                                            <li><a class="dropdown-item text-white fs-5 fw-bold" href="#" onclick="logOut2();">Log Out &nbsp;<i class="material-icons">&#xe8c6;</i></a></li>

                                        </ul>

                                    </div>

                                    <div class="col-8 mt-2 d-none d-md-block">

                                        <span class="fs-3 fw-bold mt-3 text-white"><?php echo $data["username"]; ?></span><br>
                                        <span class="fs-6 fw-bold mt-3 tex_color"><?php echo $data["email"]; ?></span>

                                    </div>

                                </div>

                            </div>

                            <div class="col-4 d-none d-md-block">

                                <button class="carticon border border-3 border-dark shadow-lg mt-2"></button>

                            </div>

                        </div>

                    </div>

            </div>

        <?php

                } else {
                }


        ?>

        <div class="row justify-content-center">

            <div class="col-md-11">

                <div class="row justify-content-center">

                    <!-- <div class="col-1 mb-3">

                    <button class="btn btn-warning" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                        <i class="bi bi-list fs-1 fw-bold text-white"></i>
                    </button>

                    <div class="offcanvas offcanvas-start bg-dark text-white fw-bold" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">

                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdrop with scrolling</h5>
                            <button type="button" class="btn-close bg-warning" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>

                        <div class="offcanvas-body">
                            <p>Try scrolling the rest of the page to see this option in action.</p>
                        </div>

                    </div>

                </div> -->

                    <div class="col-md-11 mt-2 mb-4">

                        <div class="row">

                            <div class="col-md-8 mt-2">

                                <input type="text" class="form-control w-100 h-100 fs-4 fw-bold" placeholder="Type Here...">

                            </div>

                            <div class="col-md-4 gap-3">

                                <button class="rounded-4 h-100 w-50 btn01 me-2 fs-3 fw-bold"> Search </button>
                                <button class="rounded-4 h-100 w-25 btn02 fs-3 fw-bold text-light shadow-lg"> Filter </button>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        </div>

    </div>

<?
} else {
?>

    <div class="row">

        <div class="col-12 header_body">

            <div class="row">

                <div class="col-8 d-flex justify-content-center">

                    <span class="fw-bold mt-3 tex01">Halgahawatta Hardware</span>

                </div>

                <div class="col-4 mt-3 mb-2">

                    <div class="row">

                        <div class="col-7">

                            <div class="row">


                                <div class="col-md-3">

                                    <button class="usericon border border-3 border-dark shadow-lg mt-2" data-bs-toggle="dropdown" data-bs-auto-close="outside" style="background-image:url('<?php echo $img_data["img_path"] ?>');"></button>

                                    <ul class="dropdown-menu bg-black">

                                        <li><a class="dropdown-item text-white fs-4 fw-bold" href="home.php">Shop &nbsp; <i class="material-icons">&#xe563;</i></a></li>
                                        <li><a class="dropdown-item text-white fs-5 fw-bold" href="userProfile.php">My Account &nbsp; <i class="material-icons">&#xe813;</i></a></li>
                                        <li><a class="dropdown-item text-white fs-5 fw-bold" href="#">My Oder &nbsp; <i class="material-icons">&#xeb3f;</i></a></li>
                                        <li><a class="dropdown-item text-white fs-5 fw-bold" href="#">My Reviews &nbsp;<i class="material-icons">&#xe83a;</i></a></li>
                                        <li><a class="dropdown-item text-white fs-5 fw-bold" href="#" onclick="logOut2();">Log Out &nbsp;<i class="material-icons">&#xe8c6;</i></a></li>

                                    </ul>

                                </div>

                                <div class="col-9 mt-2 d-none d-md-block">

                                    <span class="fs-4 fw-bold mt-3 text-white">Halgahawatta Hardware</span><br>
                                    <span class="fs-3 fw-bold mt-3 tex_color">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Welcome !!! </span>

                                </div>




                            </div>

                        </div>

                        <div class="col-4 d-none d-md-block">

                            <button class="carticon border border-3 border-dark shadow-lg mt-2"></button>

                        </div>

                    </div>

                </div>

            </div>


            <div class="row justify-content-center">

                <div class="col-md-11">

                    <div class="row justify-content-center">

                        <div class="col-md-11 mt-2 mb-4">

                            <div class="row">

                                <div class="col-md-8 mt-2">

                                    <input type="text" class="form-control w-100 h-100 fs-4 fw-bold" placeholder="Type Here...">

                                </div>

                                <div class="col-md-4 gap-3">

                                    <button class="rounded-4 h-100 w-50 btn01 me-2 fs-3 fw-bold"> Search </button>
                                    <button class="rounded-4 h-100 w-25 btn02 fs-3 fw-bold text-light shadow-lg"> Filter </button>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
<?php
}


?>