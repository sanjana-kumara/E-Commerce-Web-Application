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

    <?php include "connection.php"; ?>

    <!-- Admin User Management -->

    <div class="container-fluid vh-100">


        <?php include "adminNaveBar.php"; ?>

        <div class="row">

            <div class="col-12" style="background-color: rgba(174, 172, 172, 0.73);">

                <div class="row justify-content-center">

                    <div class="col-11 mt-3 mb-3">

                        <div class="row">

                            <div class="fs-1 text-center p-3 border border-black border-2 shadow-lg" style="background-color: rgba(68, 68, 68, 1);">

                                <span class="fs-1 fw-bold text-light">All User's</span>

                                <div class="row justify-content-end mt-3">

                                    <div class="col-4 text-center d-none d-md-block">

                                        <input type="text" class="form form-control" placeholder="Enter User Name OR Email">

                                    </div>
                                    <div class="col-2 text-center d-none d-md-block">

                                        <button class="btn btn-outline-warning fs-4 me-5 w-100">Search</button>

                                    </div>

                                </div>

                                <?php
                                $rs = Database::search("SELECT * FROM `user` WHERE `user_type_id`='2' ");
                                $num = $rs->num_rows;
                                ?>

                                <div class="row justify-content-center">

                                    <div class="mt-4 mb-4">

                                        <table class="table table-hover">

                                            <thead>

                                                <tr class="table-secondary">

                                                    <th class="fs-3 fw-bold d-none d-md-block">#</th>
                                                    <th class="fs-3 fw-bold ">Id</th>
                                                    <th class="fs-3 fw-bold d-none d-md-block">Uname</th>
                                                    <th class="fs-3 fw-bold">Email</th>
                                                    <th class="fs-3 fw-bold d-none d-md-block">Mobile</th>
                                                    <th class="fs-3 fw-bold">Status</th>
                                                    <th class="fs-3 fw-bold d-none d-md-block">#</th>

                                                </tr>

                                            </thead>

                                            <?php

                                            for ($i = 0; $i < $num; $i++) {

                                                $data = $rs->fetch_assoc();

                                            ?>

                                                <tbody>

                                                    <tr class="table-secondary">

                                                        <td class="fs-3 d-none d-md-block"><img src="resource/user.png" class="Aduserimg"></th>
                                                        <td class="fs-3"><?php echo $i + 1; ?></td>
                                                        <td class="fs-3 d-none d-md-block"><?php echo $data['username']; ?></td>
                                                        <td class="fs-3"><?php echo $data['email']; ?></td>
                                                        <td class="fs-3 d-none d-md-block"><?php echo $data['mobile']; ?></td>
                                                        <td class="fs-3">

                                                            <?php

                                                            if ($data['statues'] == 1) {
                                                                echo ("Active");
                                                            ?>
                                                        <td class="fs-3 d-none d-md-block"><button class="btn btn-danger fs-5" id="stbtn<?php echo $data['id']; ?>" onclick="status('<?php echo $data['id']; ?>');">Deactivate</button></td>

                                                    <?php
                                                            } else {
                                                                echo ("Deactive");
                                                    ?>
                                                        <td class="fs-3 d-none d-md-block"><button class="btn btn-success fs-5" id="stbtn<?php echo $data['id']; ?>" onclick="status('<?php echo $data['id']; ?>');">Activate</button></td>
                                                    <?php
                                                            }

                                                    ?>

                                                </tbody>


                                            <?
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


    <!-- Admin User Management -->

    <script src="script.js"></script>
    <script src="bootstrap.bundle.js"></script>
</body>

</html>