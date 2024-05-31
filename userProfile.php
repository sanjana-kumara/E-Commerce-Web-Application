<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home | Halgahawatta hardaware</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="#" />

</head>

<body class="user_profile_body">

    <div class="container-fluid">

        <div class="row">

            <?php include "header.php" ?>

            <div class="col-3 d-none d-lg-block">

                <div class="row">

                    <div class="col-10 justify-content-center d-flex mt-5">

                        <img src="resource/usericon.png" class="rounded-5">

                    </div>

                    <div class="col-12">

                        <div class="row">

                            <div class="col-10 text-center mb-3">

                                <span class="mt-2 fs-1 fw-bold"> Sanjan Nisal </span>
                                <span class="mt-2 fs-4 fw-bold"> sanjananisalkumara@gmail.com </span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <div class="col-lg-9">

                <div class="row justify-content-center">

                    <div class="col-11 mt-4 p-2 border rounded-5 userlist shadow-lg mb-5">
                        
                        <div class="row justify-content-center gap-4 mb-2 mb-5">
                            
                            <span class="fw-bold fs-2 text-white text-center mt-4 mb-4">User Account Details</span>

                            <div class="col-5">

                                <input type="text" class="form-control fs-4 fw-bold" placeholder="First Name">

                            </div>

                            <div class="col-5">

                                <input type="text" class="form-control fs-4 fw-bold" placeholder="Last Name">

                            </div>

                            <div class="col-5">

                                <input type="text" class="form-control fs-4 fw-bold" placeholder="User Name">

                            </div>

                            <div class="col-5">

                                <input type="text" class="form-control fs-4 fw-bold" placeholder="Password">

                            </div>

                            <div class="col-10">
    
                                <input type="text" class="form-control fs-4 fw-bold" placeholder="User Email Address">
    
                            </div>
                            <div class="col-10">
    
                                <input type="text" class="form-control fs-4 fw-bold" placeholder="Address Line 01"><br>
                                <input type="text" class="form-control fs-4 fw-bold" placeholder="Address Line 02">
    
                            </div>
                            <div class="col-5">

                                <input type="text" class="form-control fs-4 fw-bold" placeholder="City">

                            </div>

                            <div class="col-5">

                                <input type="text" class="form-control fs-4 fw-bold" placeholder="District">

                            </div>
                            <div class="col-5">

                                <input type="text" class="form-control fs-4 fw-bold" placeholder="Postal Code">

                            </div>

                            <div class="col-5">

                                <input type="text" class="form-control fs-4 fw-bold" placeholder="Mobile Number">

                            </div>
                            
                        </div>
                        
                    </div>

                </div>

                <div class="row justify-content-center">

                    <div class="col-10 ms-5 mb-4">

                        <button class="header_body fs-3 fw-bold rounded-5 p-2 w-75 h-100 text-white p-3 link-warning"> Profile Image </button>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <script src="bootstrap.js"></script>
    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
    <?php include "footer.php" ?>

</body>

</html>