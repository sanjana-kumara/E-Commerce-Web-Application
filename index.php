<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Halgahawatta Hardware</title>
    <link rel="icon" href="#">
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>

<body class="main-body">

    <div class="container-fluid vh-100 ">

        <div class="row">

            <!-- header -->
            <div class="col-12">

                <p class="text-center mt-5 title01 fw-bold"> Welcome to Halgahawatta Hardware </p>

            </div>
            <!-- header -->

            <!-- content -->
            <div class="row">

                <div class="col-6 d-none d-lg-block background"></div>

                <div class="col-lg-6 col-12">

                    <!-- signupbox -->
                    <div class="row">

                        <div class="col-lg-11 d-none" id="signUpBox">

                            <div class="row justify-content-center g-2">

                                <div class="col-12 mt-3">

                                    <p class="title02">Create New Account</p>

                                </div>

                                <div class="col-11 d-none" id="msgDiv1">

                                    <div class="alert alert-danger" role="alert" id="msg1"></div>

                                </div>

                                <div class="col-6 lable-text-color">

                                    <label class="form-label fs-4">First Name</label>
                                    <input type="text" class="form-control" placeholder="ex:- Kamal" id="fname" />

                                </div>

                                <div class="col-5 lable-text-color ">

                                    <label class="form-label fs-4">Last Name</label>
                                    <input type="text" class="form-control" placeholder="ex:- Perera" id="lname" />

                                </div>

                                <div class="col-11 lable-text-color">

                                    <label class="form-label fs-4">Email</label>
                                    <input type="email" class="form-control" placeholder="ex:- Kamalperera@gmail.com" id="email" />

                                </div>

                                <div class="col-11 lable-text-color">

                                    <label class="form-label fs-4">Username</label>
                                    <input type="text" class="form-control" placeholder="ex:- Kamalperera" id="uname" />

                                </div>

                                <div class="col-11 lable-text-color ">

                                    <label class="form-label fs-4">Password</label>
                                    <input type="password" class="form-control" placeholder="ex:- **********" id="password" />

                                </div>

                                <div class="col-11 lable-text-color">

                                    <label class="form-label fs-4">Mobile</label>
                                    <input type="text" class="form-control" placeholder="ex:- 0714568963" id="mobile" />

                                </div>

                                <div class="col-11 col-lg-6 d-grid mt-3 shadow-lg rounded-4">

                                    <button class="btn btn-primary fs-4 fw-bold shadow-lg rounded-4" onclick="signUp();">Sign Up</button>

                                </div>

                                <div class="col-11 col-lg-5 d-grid mt-3 shadow-lg rounded-4">

                                    <button class="btn btn-dark fs-4 fw-bold" onclick="changeView();">Already have an account? <br> Sign In</button>

                                </div>

                            </div>

                        </div>

                        <!-- signupbox -->

                        <!-- signinbox -->

                        <div class="col-lg-11" id="signInBox">

                            <div class="row justify-content-center g-2 mt-5">

                                <div class="col-12 mt-3">

                                    <p class="title02">Sign In</p>

                                </div>

                                <?php

                                $email = "";
                                $password = "";

                                if (isset($_COOKIE["email"])) {
                                    $email = $_COOKIE["email"];
                                }

                                if (isset($_COOKIE["password"])) {
                                    $password = $_COOKIE["password"];
                                }

                                ?>

                                <div class="col-10 d-none" id="msgDiv2">

                                    <div class="alert alert-danger" role="alert" id="msg2"></div>

                                </div>

                                <div class="col-10">

                                    <label class="form-label lable-text-color fs-4 ">Email</label>
                                    <input type="email" class="form-control" id="email2" value="<?php echo $email; ?>" />

                                </div>

                                <div class="col-10">

                                    <label class="form-label lable-text-color fs-4">Password</label>
                                    <input type="password" class="form-control" id="password2" value="<?php echo $password; ?>" />
                                </div>

                                <div class="col-5">

                                    <div class="form-check">

                                        <input class="form-check-input mt-2" type="checkbox" id="rememberme" />
                                        <label class="form-check-label lable-text-color fs-4" for="rememberme">Remember Me</label>

                                    </div>

                                </div>

                                <div class="col-5 text-end">

                                    <a href="#" class="link-primary fs-4" onclick="forgotPassword();">Forgot Password?</a>

                                </div>

                                <div class="col-10 col-lg-5 d-grid mt-3">

                                    <button class="btn btn-primary fs-4 fw-bold shadow-lg rounded-4" onclick="signIn();">Sign In</button>

                                </div>

                                <div class="col-10 col-lg-5 d-grid mt-3">

                                    <button class="btn btn-danger fs-5 fw-bold shadow-lg rounded-4" onclick="changeView();">Halgahawatta Hardware? <br> Join Now</button>

                                </div>

                            </div>

                        </div>

                    </div>
                    <!-- signinbox -->

                </div>

            </div>

            <!-- content -->
            <!-- modal -->

            <div class="modal" tabindex="-1" id="forgetModel">

                <div class="modal-dialog">

                    <div class="modal-content">

                        <div class="modal-header">

                            <h5 class="modal-title">Forgot Password</h5>

                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                        </div>

                        <div class="modal-body">

                            <div class="row g-3">

                                <div class="col-6">

                                    <label class="form-label">New Password</label>

                                    <div class="input-group mb-3">

                                        <input type="password" class="form-control" id="np" />

                                        <button id="npb" class="btn btn-outline-secondary" type="button" onclick="showpassword1();">Show</button>

                                    </div>

                                </div>

                                <div class="col-6">

                                    <label class="form-label">Re-type Password</label>

                                    <div class="input-group mb-3">

                                        <input type="password" class="form-control" id="np1" />
                                        <button id="npb1" class="btn btn-outline-secondary" type="button" onclick="showpassword2();">Show</button>

                                    </div>

                                </div>

                                <div class="col-12">

                                    <label class="form-label">Verification Code</label>
                                    <input type="text" class="form-control" id="vcode" />

                                </div>

                            </div>

                        </div>

                        <div class="modal-footer">

                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" onclick="resetpassword();">Reset</button>

                        </div>

                    </div>

                </div>

            </div>
            <!-- modal -->
            <!-- footer -->
            <div class="col-12 fixed-bottom d-none d-lg-block">

                <p class="text-center text-light fs-4 fw-bold">&copy; 2024 Halgahawatta Hardware.lk || All Rights Reserved. </p>

            </div>
            <!-- footer -->

        </div>

    </div>

    <script src="bootstrap.js"></script>
    <script src="script.js"></script>
</body>

</html>