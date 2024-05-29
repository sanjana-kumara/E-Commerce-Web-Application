<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Halgahawatta Hardware Admin Panel</title>
</head>

<body>

    <div class="row bg-primary">

        <div class="col-2">

            <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
                <i class="bi bi-list fs-1 fw-bold text-warning"></i>
            </button>

            <div class="offcanvas offcanvas-start bg-dark text-white" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
                <div class="offcanvas-header">

                    <div class="row">


                        <?php

                        // session_start();

                        if (isset($_SESSION["ad"])) {

                            $data = $_SESSION["ad"];
                        ?>
                            <div class="col-4 mt-4 ms-1"><img src="resource/user.png"></div>
                            <div class="row col-7 mt-5 me-2">
                                <div class="fs-3 text-center"> <?php echo $data["user_name"]; ?> </div>
                                <div class="col-8"> <?php echo $data["email"]; ?> </div>
                            </div>

                        <?php

                        } else {

                        ?>

                            <div>
                                <a href="adminLogin.php"><button class="btn btn-primary fs-4 ms-5">Please Login Now</button></a>
                            </div>

                        <?php
                        }


                        ?>

                        <hr class="mt-3">
                    </div>

                    <button type="button" class="btn btn-warning btn-close fs-3 fw-bold mb-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="row">
                        <div class="col-10">
                            <div class="list-group">
                                <a href="admindashBoard.php" class="bg-black border-dark text-bg-danger text-center list-group-item list-group-item-light fs-3 mb-3">Dashboard</a>
                                <a href="adminUserManagement.php" class="bg-black border-dark text-bg-danger text-center list-group-item list-group-item-light fs-3 mb-3">User Management</a>
                                <a href="admimProductManagement.php" class="bg-black border-dark text-bg-danger text-center list-group-item list-group-item-light fs-3 mb-3">Product Management</a>
                                <a href="adminStockManagement.php" class="bg-black border-dark text-bg-danger text-center list-group-item list-group-item-light fs-3 mb-3">Stock Management</a>
                                <a href="#" class="bg-black border-dark text-bg-danger text-center list-group-item list-group-item-light fs-3">Oder Management</a>
                            </div>
                        </div>
                    </div>

                </div>

                <?php

                if (isset($_SESSION["ad"])) {

                    $data = $_SESSION["ad"];
                ?>
                    <button class="btn btn-danger col-10 offcanvas-bottom fs-4 fw-bold ms-3 mb-3" onclick="logOut();">Logout</button>
                    <button class="btn btn-success col-10 offcanvas-bottom fs-4 fw-bold ms-3 mb-3" onclick="custlogin();">Customer Login</button>

                <?php

                } else {

                ?>

                    <div>
                        <a href="adminLogin.php"><button class="btn btn-primary fs-4 ms-5">Please Login Now</button></a>
                    </div>

                <?php

                }


                ?>

            </div>
        </div>

        <div class="col-9 col-lg-4 text-center mt-2">
            <div class="row">
                <span class="text-warning fs-1 fw-bold ">Welcome Admin</span>
            </div>
        </div>

        <div class="d-none d-lg-block col-lg-6 mt-2">
            <div class="col-12 justify-content-center d-flex">
                <input type="text" class="form form-control" placeholder="Search" id="">
                <button class="btn btn-outline-warning col-3 ms-2 me-3 fw-bold fs-3">Search</button>
            </div>
        </div>

    </div>

    <script src="script.js"></script>
    <script src="bootstrap.bundle.js"></script>
</body>

</html>