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
                            <input type="email" class="form-control fw-bold fs-5" type="text" placeholder="Enter Username" id="adminUsername" />
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control fw-bold fs-5" type="text" placeholder="Enter Password" id="adminUserpassword" />
                        </div>

                        <div class="form-group d-none">
                            <div class="_btn_04 bg-danger">
                                <a href="#">Admin Verification </a>
                            </div>
                        </div>
                        <div class="form-group" onclick="adminLogin();">
                            <div class="_btn_04">
                                <a href="#">Admin Login</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="_btn_04 bg-success">
                                <a href="#">Customer Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
    <script src="bootstrap.bundle.js"></script>
</body>

</html>