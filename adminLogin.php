<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" />

    <title>Halgahawatta Hardware Admin</title>

</head>

<body class="admin_body">

    <div class="container-fluid vh-100 d-flex justify-content-center">

        <div class="row align-content-center">

            <div class="adminlogin_body1">

                <div class="d-none" id="msgDiv">

                    <div class="alert alert-danger" id="msg"></div>

                </div>

                <div class="col-md-12">

                    <div class="form-03-main">

                        <div class="logo">
                            <img src="resource/user.png" />
                        </div>

                        <h2 class="fw-bold">Welcome Admin</h2>

                        <div class="form-group">

                            <input type="text" class="form-control fw-bold fs-5" type="text" placeholder="Enter Username" id="uname" />

                        </div>

                        <div class="form-group">

                            <input type="email" class="form-control fw-bold fs-5" type="text" placeholder="Enter Email" id="e" />

                        </div>

                        <div class="form-group">

                            <button type="button" class="p-3 btn btn-danger rounded-5 border border-3 border-dark shadow-lg w-100" onclick="adminVerification();">

                                <a href="#" class="text-white fw-bold fs-5">Admin Verification </a>

                            </button>

                        </div>

                        <div class="form-group" onclick="adminLogin();">

                            <button type="button" class="d-none btn btn-primary rounded-5 w-100 rounded-5 border border-3 border-dark shadow-lg">

                                <a href="#" class="text-white fw-bold fs-5">Admin Login</a>

                            </button>

                            <div class="form-group">

                                <button type="button" class="p-3 btn btn-success rounded-5 w-100 rounded-5 border border-3 border-dark shadow-lg">

                                    <a href="index.php" class="text-white fw-bold fs-5">Customer Login</a>

                                </button>

                            </div>

                        </div>

                    </div>

                </div>
                <!-- Modal -->

                <div class="modal fade" id="adminVerificationModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

                    <div class="modal-dialog">

                        <div class="modal-content">

                            <div class="modal-header">

                                <h1 class="modal-title fs-5" id="exampleModalLabel"> Admin Verification</h1>

                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>

                            </div>

                            <div class="modal-body">
                            
                            <div class="row">

                            <div class="col-10">
                                
                                <input type="text" class="form-control" placeholder="Enter Admin Verification Code" id="vcode">

                            </div>

                            </div>

                            </div>

                            <div class="modal-footer">

                                <button type="button" class="btn btn-warning" onclick="verify();">Email Verify</button>
                                
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>


                            </div>

                        </div>

                    </div>

                </div>
                <!--  -->
            </div>

        </div>

        <script src="script.js"></script>
        <script src="bootstrap.bundle.js"></script>
</body>

</html>