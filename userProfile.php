<?php

include "connection.php";

session_start();
if (isset($_SESSION["u"])) {

    $u_id = $_SESSION["u"]["id"];
    $u_rs = Database::search("SELECT * FROM `user` WHERE `id` = '" . $u_id . "' ");
    $u_img_rs = Database::search("SELECT * FROM `profile_img` WHERE `user_id`='" . $u_id . "' ");
    $user_data = $u_rs->fetch_assoc();
    $user_img_data = $u_img_rs->fetch_assoc();


?>

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

            <div class="row header_body">

                <div class="col-12">

                    <div class="row">

                        <div class="col-12 d-none d-lg-block">

                            <div class="row justify-content-end mt-4">

                                <div class="col-lg-1">

                                    <span class="fw-bold text-light link-warning fs-3">Home</span>

                                </div>
                                <div class="col-lg-1">

                                    <span class="fw-bold text-light link-warning fs-3">Newsroom</span>

                                </div>
                                <div class="col-lg-2">

                                    <span class="fw-bold text-light link-warning fs-3">Contact Us </span>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <hr class="fs-2 border-warning border border-4 mt-3">

            </div>


            <?php include "header.php" ?>

            <div class="row col-12">


                <div class="col-3 d-none d-lg-block">

                    <div class="row justify-content-center">

                        <div class="col-9 mt-5 me-3">

                            <?php

                            if (empty($user_img_data["img_path"])) {

                            ?>

                                <img src="resource/usericon.png" class="shadow-lg me-5" style="border-radius: 100px; width:350px; height: 350px;" id="img">

                            <?php

                            } else {

                            ?>

                                <img src="<?php echo $user_img_data["img_path"]; ?>" class="shadow-lg me-5" style="border-radius: 100px; width:350px; height: 350px;" id="img">

                            <?php

                            }


                            ?>


                        </div>

                        <div class="col-12">

                            <div class="row">

                                <div class="col-10 text-center mb-3">

                                    <span class="mt-2 fs-1 fw-bold text-primary"> <?php echo $user_data["fname"] . " " . $user_data["lname"]; ?> </span>
                                    <span class="mt-2 fs-4 fw-bold shadow-lg tex_color"> <?php echo $user_data["email"]; ?> </span>

                                    <input type="file" class="d-none" id="profileImage">
                                    <label for="profileImage" class="btn btn-warning fs-4 fw-bold mt-4 rounded-5" onclick="uploadeProfileImg();">Uploade Profile Image </label>

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

                                    <input type="text" id="fn" class="form-control fs-4 fw-bold" placeholder="First Name" value="<?php echo $user_data["fname"]; ?>">

                                </div>

                                <div class="col-5">

                                    <input type="text" id="ln" class="form-control fs-4 fw-bold" placeholder="Last Name" value="<?php echo $user_data["lname"]; ?>">

                                </div>

                                <div class="col-5">

                                    <input type="text" id="un" class="form-control fs-4 fw-bold disabled" placeholder="User Name" value="<?php echo $user_data["username"]; ?>" disabled>

                                </div>

                                <div class="col-5">

                                    <div class="input-group">

                                        <input type="password" id="pass" class="form-control fs-4 fw-bold" placeholder="Password" value="<?php echo $user_data["password"]; ?>" readonly>
                                        <span class="input-group-text bg-dark" id="passicon" onclick="showpasswordicon();">
                                        <i class="fa-sharp fa-solid fa-eye fw-bold text-white fs-4" ></i>
                                        </span>

                                    </div>

                                </div>

                                <div class="col-10">

                                    <input type="text" id="em" class="form-control fs-4 fw-bold" placeholder="User Email Address" value="<?php echo $user_data["email"]; ?>">

                                </div>
                                <div class="col-10">

                                    <input type="text" id="ln1" class="form-control fs-4 fw-bold" placeholder="Address Line 01" value="<?php echo $user_data["address_line_01"]; ?>"><br>
                                    <input type="text" id="ln2" class="form-control fs-4 fw-bold" placeholder="Address Line 02" value="<?php echo $user_data["address_line_02"]; ?>">

                                </div>
                                <div class="col-5">

                                    <input type="text" id="city" class="form-control fs-4 fw-bold" placeholder="City" value="<?php echo $user_data["city"]; ?>">

                                </div>

                                <div class="col-5">

                                    <input type="text" id="dis" class="form-control fs-4 fw-bold" placeholder="District" value="<?php echo $user_data["District"]; ?>">

                                </div>
                                <div class="col-5">

                                    <input type="text" id="pc" class="form-control fs-4 fw-bold" placeholder="Postal Code" value="<?php echo $user_data["Postal_code"]; ?>">

                                </div>

                                <div class="col-5">

                                    <input type="text" id="mn" class="form-control fs-4 fw-bold" placeholder="Mobile Number" value="<?php echo $user_data["mobile"]; ?>">

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="row justify-content-center">

                        <div class="col-10 ms-5 mb-4">

                            <button class="header_body fs-3 fw-bold rounded-5 p-2 w-75 h-100 text-white p-3 link-warning" onclick="updateUserDeatils();"> Save Changes </button>

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

<?php

} else {

    header("location:index.php");
}


?>