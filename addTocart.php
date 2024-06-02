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
        <title>Sigal Product View</title>
    </head>

    <body>

        <?php include "connection.php"; ?>

        <div class="container-fluid vh-100">

            <?php include "adminNaveBar.php"; ?>

            <div class="row justify-content-center p-3">
                
                <div class="col-12 shadow-lg rounded-5 cart_body">
                    
                    <div class="row justify-content-center p-3">
                        
                        <!-- Rows  -->
                        <div class="col-11 border border-3 border-dark rounded-5 cart_div">

                            <div class="row">

                                <div class="col-3 p-3 d-none d-md-block">

                                    <img id="i2" class="rounded-5 mx-auto d-block productimgupload productimg" src="data:image/png;base64,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">
    
                                </div>

                                <div class="col-md-2 mt-5">

                                    <span class="fs-1 fw-bold">Product Name</span>

                                </div>
                                <div class="col-md-2 mt-5">

                                    <span class="fs-1 fw-bold cart_prduct_price">Price</span>

                                </div>
                                <div class="col-md-4 me-3">

                                    <div class="row justify-content-center">

                                        <div class="col-md-12 mt-4 mb-4">

                                            <button class="btn h-100 w-100 p-2 border border-3 border-dark shadow-lg fw-bold fs-3 rounded-5 addcart_Btn">Buy Now</button>

                                        </div>
                                        <div class="col-2 ">

                                            <img width="50" height="50" src="https://img.icons8.com/ios-glyphs/30/filled-like.png" alt="filled-like" />

                                        </div>
                                        <div class="col-2 ">

                                            <img class="offset-8" width="50" height="50" src="https://img.icons8.com/ios-glyphs/30/filled-trash.png" alt="filled-trash" />

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                        <!-- Rows  -->
                        <!-- Rows  -->
                        <div class="col-11 m-2 border border-3 border-dark rounded-5 cart_div">

                            <div class="row">

                                <div class="col-3 p-3 d-none d-md-block">

                                    <img id="i2" class="rounded-5 mx-auto d-block productimgupload productimg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAAJw0lEQVR4nO2aeVCTZx7HM+12F7kCgYQrBDxCELXquJ7d6gqKKCBUF69V6LFtZ7szu3/ttH9tRkHuO9zIKWciUK+6rtvZ3XEVj4oCxkDCGZJwQwso2CrfnTes1qpVQhLeN/B+Zz4zhIQZnt/neX7P8yRhMOjQoUOHDh06dOjQoUOHDh06dOjQeUWCVHANVuNUsBojwRpgXqPW1qBmtwqCWSt+kAaDpA9cQzmGiNoYXYB25pM/WFCRIDXEsyGAbjuan5GgxnfGF0CBmRZMYWgBGloA6bMwmF4B5BcimG5B5BcjmAToPUBDC6AcYd2PIBkeQtuYCuPj7Vpax1QQDw9pn6NXgMZ4xY8dGMOD8Q5gou2lEM8Rr6FbkMY4xZ/8mcI/C/EaQ0mg9wDNj23nVTP/ee6PdyDUAO2IFqCZKgTR86db/CdUDg/RAoIN1H7ax1Q6CyA2ZnoFaAwjYFyH9vPshkwL0BhGgC79/9l9gBagMYwA4sxPtyASEdObMLmE0cdQ07qIRdMXMRhNArG5vmrjNVTxCeiLmObFohA3XOKSRZzzieMpAfEz8TtD3H5NXoB/+yNsqXuAjVdHsal2FL+tH8furknSW9icFxCkAjZeG4Xnl30QVP8Ur9P9WhFkF3TOCtitmsSar4chqOp9Je9cN1x/pgU8mfldk1h9aRgep3qnxcbaUdILO2dWQKByEisvDoF/qlcnTEUCpQUEdDzGivMD4Et6ZsTGq9SXQFkBxEln2dl+LBH36MUGikugpAD/tkfaU82Syh6DsOEKdSVQTsDOlh8gqO7F4opug7LhyohOrW9r/Th+c2MM794Yg3fjhNHuGZQSsEP+PfhVvVhU0W0U1r9GQpAa2Fz3AKsuDuLtC4N4+6tB7R604tyA9mfvhvG5K2C77CGWSHqwqLzbqKz/78slBKkntSenVReHsPLvLwpYfnYAy870492b9+eeAO+7E9o2sbBMMyusf05CkGoSG6+MYNU/hl4rYNnpfoNe9kgXQCzrRWXdWFiqmVXWXx55esMmNunVRPGnKcDLgBJIFbD59gO4l2rgXkIOa/89gg2XR7S3bF0FeH3Zh3eujZmuAOKE4V6ihttJcvGs6ZuxgKU1fdikpwRSBBCbHdmFd3tWQnXfjAUQf7updsx0BBAbIK9YTTkEVb0zFuBZRUgYRbB6EkGqxwjqejSF8ocpnjxWPda+hjQBv/7Xt+AVqSiLByFBFwHVvfCs6oFArIFHpQob/jOA3R0TCGwfn6LtwRT/f0w8p6Xz+ykxqsezI4C44Ky+NATXQhXl4Ut6Xy+AKH6VBp4SFQSVKgjKleCXdoBf0o51X/cgQD7ychSjCGwZQ2Drfa0YQobRBRAXnBUXBsEtUJkMfEnvywWc7oNXdTeWVqmxVNwFQUUnPMra4VHSBn6xAvxCORYXNGPtBSV23Rt8AX/ZEPybhuHf9O1TIUYXQLyjyS3oMjn4kp6fCjhDFF8NL4kKnmIlPMvbIChtAf+kAvwiGRbm/xO8vBy45ArhmPMZHHKPgJO9D+ysfXDMOQxuwWdYXHEUK88VYvPV69gpHdDKMLoAl/wumCqLK3u0Apaf7sGyag2WSpRYWtkBz/JWCErk4BffAK9QBOf8T+GYdwAOJ/bDIXcfODkhYGf/DuysvbDP3Av7jD2wS38PrLRgsERBsE3dDU5WGLxqMsFK8eMaV0BeF0yWE0osKu3Ccu3MJ4rfDs+yFnicvA334gQ4Fx2BU+FBOOUf1FmATUogbJICwUz0f8iM35VpGR9gbxQBzieUMElyO+GU3QanTAUWFrbCS1t8BZacrAK3+GM4F/8ezkWHDCAgAMwEf1jH7xywiPM7YHABTrlKmCTZbXDMUMAxTQbHVCncc6VwL0kEt+QIXE4eNoKAXbCK2wmrGL8sRvaatwwnIEcJkyOrDY7pCjiKmuCYIoVDch24+X8DtzTU+AJi/WAZveM8QxhgbhABjjmdMCmy2+GQoYCDSAaHVCkckm7DpUAI17LQ2RMQ4wfzaN9LDGHIL/UW4JDdCZMhqwOc9BZwRE3gpNwDO6kBznlx4JWHzboAi+gdsIjanqm/gCxiYCZCRis4Irm2+JzERjhlVIBX8T6JAnxhFum7Xy8BnMwOmAQZ7WCLFGCnyMBObAQ7qRZu5X8kXcCCyG2DlsItMz+icjKIwZkAaS1gpzSDnSgFO74eLnkJcKv8YMYCbvQ04Umuae7NWIB55HaYH9+WPmMB7IwOUJ70drBTFbBPlsE+gZj9l8Gr/FgvAc9HPwE+D82it/FmJMA+vR2UJ60VdinNsEuUwi7uDpxy0+Em/pBCArZhQYR31MwEpBEDpDipLbBLksEuvhF2sXXglf+ZcgLMwn1UDHHImzoLsBO1g/Iky8FKuAdWbAPYSV/BXfIR5QQsiPAhVsE63QWktoHSpLSCldgEVvxdsGLuwCkrh7ICzMK3fqGzAFZKGyhNcgts42Wwjb0L26jb4BZEUFbAr8K3SnQWYJvSBkqTpIBNvAw2sY2wiaoDr/SvlBVgFr61QXcBya2gNIly2MRJYRPTAJvIW3Cv/NO0BNzsk8NQqVVJp7kCvPt1FmCT1ApKkyAHM1YKZlQ9mMdvwV3y6bQEGDrTWgHHtk7oLiCxFZQmXg5mjBTMyHowI+agAGZCCyhNXDOso+/COrIe1uHfTLsFXe/98a0GfXNVddd4Lcg6oQWUJq4Z1jFSWEXWwyr8G7jOtU3YOr4FlCZODutoKayOEwJuwSV/jh1DLeMUI1ZxClCWWDmsoqSwjKiH5bFb4KRnU1aA2THvz3UWYBUrr7GKJQZKYaLuwfJ4AyyP1cEm5hxlBSw46rNWdwExMoFFjHzIMkYByhIpg2VEIyyO3oaF8CZcy/5CPQHh3p0MofANxkxiFq5wNY9uFptHN39nES0H5YhqgkVEI8yP3YG58CY4GalUFBDJmC9ZUvUHLk/84UPKCIjwmVgQ4e3CmE/hiT/I1EfAtW7Z0+LX6v2RpI+IMd/CFX/Ecqt8v5/0D+WPbx/Q60N5U45bRdgB0gVEbQ9hzOfwysOyyBJgHumbRvb4yY845E1eeWjN7AvwPccQbvkF2cOnRJzOfGLuWhZ6frYEWET7nTXYl3PnStZkf/IWtzQ0cxa+np5Gz/xXxLXkyH6X4sP9BhcQt6vPMtZvfm+4041z0RE7p+JD6U5Fhyb0FpAQMMGM3yWyTvBlTfsfoDMVbmGoi2PhgSjHvINKXQUwUwKUzMSASFaC//y64TKMEaHwDYfcg+sccvd/wcndJ2HnhDSws/YOsjP3PLTP2PPQPv29Qbu04HpbUbDEVhT0uV1ywNqZvrH2P2XRxOmB+SmeAAAAAElFTkSuQmCC">
    
                                </div>

                                <div class="col-md-2 mt-5">

                                    <span class="fs-1 fw-bold">Product Name</span>

                                </div>
                                <div class="col-md-2 mt-5">

                                    <span class="fs-1 fw-bold cart_prduct_price">Price</span>

                                </div>
                                <div class="col-md-4 me-3">

                                    <div class="row justify-content-center">

                                        <div class="col-md-12 mt-4 mb-4">

                                            <button class="btn h-100 w-100 p-2 border border-3 border-dark shadow-lg fw-bold fs-3 rounded-5 addcart_Btn">Buy Now</button>

                                        </div>
                                        <div class="col-2 ">

                                            <img width="50" height="50" src="https://img.icons8.com/ios-glyphs/30/filled-like.png" alt="filled-like" />

                                        </div>
                                        <div class="col-2 ">

                                            <img class="offset-8" width="50" height="50" src="https://img.icons8.com/ios-glyphs/30/filled-trash.png" alt="filled-trash" />

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                        <!-- Rows  -->
                        
                    </div>
                    
                </div>                
            </div>

        </div>

    </body>

    </html>

<?php

} else {

    header("location:adminLogin.php");

    // echo ("Invalide Admin User");
}


?>