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
            
            <div class="row justify-content-center">
 
                <div class="col-10 mt-2 d-none" id="msgDiv">

                    <div class="alert alert-danger border border-2 border-dark shadow-lg" id="msg"></div>

                </div>

            </div>

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

                                    <input type="text" class="form form-control border border-3 border-dark shadow-lg fs-4 fw-bold prmainput" placeholder="Enter Brand Name" id="">

                                </div>

                                <div class="col-8 mt-4 mb-3">

                                    <button class="btn w-100 border border-3 border-dark rounded-5 fw-bold fs-4 prmabtn">Add Brand</button>

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

                                    <select class="form-select form-control fs-4 fs-5 border-3 border-dark shadow-lg fw-bold prmainput" aria-label="Default select example">
                                        <option selected>Select Category</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>

                                </div>
                                <div class="col-10 mt-4">

                                    <input type="text" class="form form-control border border-3 border-dark shadow-lg fs-4 fs-5 fw-bold prmainput" placeholder="Enter Sub Category Name" id="">

                                </div>

                                <div class="col-8 mt-4 mb-3">

                                    <button class="btn w-100 border border-3 border-dark rounded-5 fw-bold fs-5 fs-4 prmabtn">Add Sub Category</button>

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

                                    <input type="text" class="form form-control border border-3 border-dark shadow-lg fs-4 fw-bold prmainput" placeholder="Enter Brand Name" id="">

                                </div>

                                <div class="col-8 mt-4 mb-3">

                                    <button class="btn w-100 border border-3 border-dark rounded-5 fw-bold fs-4 prmabtn">Add Brand</button>

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

                                                <input type="text" class="form form-control border border-3 border-dark shadow-lg fs-4 fw-bold prmainput" placeholder="Product Name" id="">

                                            </div>

                                            <div class="mt-4">

                                                <div class="form-floating">
                                                    <textarea class="form form-control border border-3 border-dark shadow-lg fs-4 fw-bold prmainput" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                                    <label class="fs-4 fw-bold" for="floatingTextarea2">Product Description</label>
                                                </div>

                                            </div>

                                            <div class="mt-4">

                                                <input type="text" class="form form-control border border-3 border-dark shadow-lg fs-4 fw-bold prmainput" placeholder="Enter Price" id="">

                                            </div>

                                            <div class="mt-4">

                                                <input type="text" class="form form-control border border-3 border-dark shadow-lg fs-4 fw-bold prmainput" placeholder="Enter Quantity" id="">

                                            </div>
                                            <div class="mt-4 mb-4">

                                                <input type="text" class="form form-control border border-3 border-dark shadow-lg fs-4 fw-bold prmainput" placeholder="Enter Delivery Cost " id="">

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-5 ">

                                    <div class="row justify-content-center">

                                        <div class="col-11 ">

                                            <div class="mt-4">

                                                <select class="form-select form-control fs-4 border-3 border-dark shadow-lg fw-bold prmainput" aria-label="Default select example">

                                                    <option selected>Select Category Name</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>

                                                </select>

                                            </div>

                                            <div class="mt-4">

                                                <select class="form-select form-control fs-4 border-3 border-dark shadow-lg fw-bold prmainput" aria-label="Default select example">

                                                    <option selected>Select Sub Category Name</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>

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

                                                <input type="text" class="form form-control border border-3 border-dark shadow-lg fs-4 fw-bold prmainput" placeholder="Discount" id="">

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="row justify-content-center">

                                    <div class="col-11 mb-2">
                                        <div class="row justify-content-center ">

                                            <div class="col-2 me-3 border border-3 border-dark shadow-lg productimg text-center rounded-5">

                                                <img src="" class="rounded mx-auto d-block">
                                                <label class="fs-5 fw-bold mt-5">Upload Product Img</label>

                                            </div>
                                            <div class="col-2 me-3 border border-3 border-dark shadow-lg productimg text-center rounded-5">

                                                <img src="" class="rounded mx-auto d-block">
                                                <label class="fs-5 fw-bold mt-5">Upload Product Img</label>

                                            </div>
                                            <div class="col-2 me-3 border border-3 border-dark shadow-lg productimg text-center rounded-5">

                                                <img src="" class="rounded mx-auto d-block">
                                                <label class="fs-5 fw-bold mt-5">Upload Product Img</label>

                                            </div>
                                            <div class="col-2 me-3 border border-3 border-dark shadow-lg productimg text-center rounded-5">

                                                <img src="" class="rounded mx-auto d-block">
                                                <label class="fs-5 fw-bold mt-5">Upload Product Img</label>

                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-12 mb-2 mt-3">

                                        <div class="row justify-content-center">

                                            <div class="col-lg-5">

                                                <button class="btn btn-warning w-100 fs-4 fw-bold">Upload Product Image</button>

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