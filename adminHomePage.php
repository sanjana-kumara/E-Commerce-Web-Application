<?php
session_start();
include "connection.php";

if (isset($_SESSION["ad"])) {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />
        <link rel="stylesheet" href="style.css">
        <title>Halgahawatta Hardware Admin Panel</title>
    </head>

    <body>
        <div class="container-fluid vh-100 d-flex justify-content-center">
            <div class="row align-content-center">

                <!-- Admin Navbar -->
                <div>
                    <nav class="navbar bg-primary fixed-top col-12">

                        <button class="navbar-toggler btn-light ms-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon fs-2"></span>
                        </button>
                        <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title fs-2 fw-bold" id="offcanvasDarkNavbarLabel">Admin</h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                    <li class="nav-item">
                                        <a class="nav-link text-light fs-3" href="#">User Management</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-light fs-3" href="#">Product Management</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-light fs-3" href="#">Stock Management</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-light fs-3" href="#">Oder Management</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-5 mt-lg-1 mt-2 d-flex justify-content-lg-center">
                            <h2 class="fw-bold fs-1" style="color:yellow;">Welcome Admin</h2>
                        </div>

                        <div class="d-none d-lg-block col-5 col-lg-6 mt-lg-1 mt-2 d-flex" id="search">
                            <form class="d-flex">
                                <input type="text" class="form-control me-2" placeholder="Search">
                                <button class="btn btn btn-outline-warning col-2 me-2 ">Search</button>
                            </form>
                        </div>
                    </nav>
                </div>
                <!-- Admin Navbar -->
                <!-- Admin User Management -->

                <div class="row">
                    <div class="umanagement">
                        <div class="text-center text-light ">
                            <p class="fs-1 fw-bold "> Users </p>
                        </div>
                        <!-- Admin User Management -->
                        <?php
                        $rs = Database::search("SELECT * FROM `user` WHERE `user_type_id`='2' ");
                        $num = $rs->num_rows;
                        ?>

                        <div class="row justify-content-center">
                            <div class="col-11 ms-3 ">
                                <table class="table table-active fw-bold">
                                    <thead>
                                        <tr class="text-center">
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
                                                <th class="fs-5"><?php echo $data['id']; ?></th>
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

                    </div>
                    <div class="col-6">


                    </div>
                </div>

            </div>
        </div>

        <script src="script.js"></script>
        <script src="bootstrap.bundle.js"></script>
    </body>

    </html>

<?php

} else {
    echo ("Invalide Admin user");
}


?>