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
        <title>Halgahawatta Hardware Admin Dashboard</title>
    </head>

    <body class="addminBody">

        <?php include "connection.php"; ?>

        <div class="container-fluid vh-100">

            <?php include "adminNaveBar.php"; ?>

            <div class="row">
                <div class="mt-4 text-center col-12">
                    <div class="row justify-content-center gap-3">

                        <div class="d-none d-lg-block col-lg-2 d-md-block col-md-4 border border-dark border-2 me-5 rounded-4 shadow-lg" style="background-color: rgba(209, 209, 209, 0.63);">
                            <div class="row" style="color: rgba(217, 22, 22, 1);">
                                <div class="col-12">
                                    <div class="mt-2 mb-3"> <span class="fs-1 fw-bold"> Daily User’s </span> </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3"> <span class="fs-2 fw-bold "> 15 + </span> </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3"> <span class="fs-2 fw-bold "> Total = 50 </span> </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-none d-lg-block col-lg-2 d-md-block col-md-4 border border-dark border-2 me-5 rounded-4 shadow-lg" style="background-color: rgba(209, 209, 209, 0.63);">
                            <div class="row" style="color: rgba(18, 75, 34, 1);">
                                <div class="col-12">
                                    <div class="mt-2 mb-3"> <span class="fs-1 fw-bold"> Daily Earning </span> </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3"> <span class="fs-2 fw-bold"> 15,000 + </span> </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3"> <span class="fs-2 fw-bold"> Total = 100,000 </span> </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-none d-lg-block col-lg-2 d-md-block col-md-4 border border-dark border-2 me-5 rounded-4 shadow-lg" style="background-color: rgba(209, 209, 209, 0.63);">
                            <div class="row" style="color: rgba(154, 33, 149, 1);">
                                <div class="col-12">
                                    <div class="mt-2 mb-3"> <span class="fs-1 fw-bold"> Daily Oder’s </span> </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3"> <span class="fs-2 fw-bold "> 5 + </span> </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3"> <span class="fs-2 fw-bold "> Total = 20 </span> </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-none d-lg-block col-lg-2 d-md-block col-md-3 border border-dark border-2 me-5 rounded-4 shadow-lg" style="background-color: rgba(209, 209, 209, 0.63);">
                            <div class="row" style="color: rgba(43, 62, 239, 1);">
                                <div class="col-12 mt-4">
                                    <div class="mt-2 mb-3"> <span class="fs-1 fw-bold"> Monthly Earning </span> </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <div class="mb-3"> <span class="fs-2 fw-bold"> 50,000 </span> </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-none d-lg-block col-lg-2 d-md-block col-md-3 border border border-dark border-2 rounded-4 shadow-lg" style="background-color: rgba(209, 209, 209, 0.63);">
                            <div class="row" style="color: rgba(126, 54, 54, 1);">
                                <div class="col-12 mt-4">
                                    <div class="mt-2 mb-3"> <span class="fs-1 fw-bold"> Monthly Oder’s </span> </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <div class="mb-3"> <span class="fs-2 fw-bold"> 1000 + </span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 mt-5">
                    <div class="row">
                        <div class="col-12">

                            <div class="row">
                                <h2 class="text-center fw-bold fs-1 mt-2">Recent User’s</h2>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-lg-11 col-md-10 mb-3 userlist rounded-4 border border-dark border- shadow-lg">
                                    <div class="row text-light justify-content-center">
                                        <div class="col-11 col-md-10 mt-3 mb-3">

                                            <?php
                                            $rs = Database::search("SELECT * FROM `user`");
                                            $num = $rs->num_rows;
                                            ?>
                                            <table class="table fw-bold table-hover text-center">
                                                <thead>
                                                    <tr class="table-secondary">
                                                        <th class="fw-bold fs-3">Id</th>
                                                        <th class="fw-bold fs-3 d-none d-md-block">Username</th>
                                                        <th class="fw-bold fs-3">Email</th>
                                                        <th class="fw-bold fs-3">Status</th>
                                                    </tr>
                                                    <hr>
                                                </thead>
                                                <?php

                                                for ($i = 0; $i < $num; $i++) {

                                                    $data = $rs->fetch_assoc();

                                                ?>

                                                    <tbody>
                                                        <tr class="mt-2">
                                                            <th class="fs-5"><?php echo $data['id']; ?></th>
                                                            <td class="fs-5 d-none d-md-block"><?php echo $data['username']; ?></td>
                                                            <td class="fs-5"><?php echo $data['email']; ?></td>
                                                            <td class="fs-5">

                                                                <?php

                                                                if ($data['statues'] == 1) {
                                                                    echo ("Active");
                                                                } else {
                                                                    echo ("Deactive");
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

<?php

} else {
    
    header("location:adminLogin.php");

}

?>