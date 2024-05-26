<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap.css" rel="stylesheet">
    <title>Home | Halgahawatta hardaware</title>
</head>

<body class="body1">

    <div>
        <div class="slideshow-container">

            <div class="">

                <img src="resource/fevicol.jpg" alt="it1">

            </div>

            <div class="mySlides fade">
                <img src="https://i0.wp.com/hardwaremart.lk/wp-content/uploads/2021/10/11-250x105-1.png?resize=150%2C63&ssl=1" alt="11-250x105" width="148" height="62">
            </div>

            <div class="mySlides fade">
                <img src="https://i0.wp.com/hardwaremart.lk/wp-content/uploads/2021/10/unnamed.jpg?resize=150%2C105&ssl=1" alt="unnamed" width="148" height="103">
            </div>

            <div class="mySlides fade">
                <img src="https://i0.wp.com/hardwaremart.lk/wp-content/uploads/2021/10/0.jpg?resize=150%2C150&ssl=1" alt="0" width="148" height="148">
            </div>

            <div class="mySlides fade">
                <img src="https://i0.wp.com/hardwaremart.lk/wp-content/uploads/2021/10/7-250x88-1.jpg?resize=150%2C53&ssl=1" alt="7-250x88" width="148" height="52">
            </div>

            <div class="mySlides fade">
                <img src="https://i0.wp.com/hardwaremart.lk/wp-content/uploads/2021/10/12-250x94-1.png?resize=150%2C56&ssl=1" alt="12-250x94" width="148" height="55">
            </div>

            <div class="mySlides fade">
                <img src="https://i0.wp.com/hardwaremart.lk/wp-content/uploads/2021/10/AP-logo1-250x63-1.png?resize=150%2C38&ssl=1" alt="AP-logo1-250x63" width="148" height="37">
            </div>

            <div class="mySlides fade">
                <img src="https://i0.wp.com/hardwaremart.lk/wp-content/uploads/2021/10/Arpico-250x124-1.jpg?resize=150%2C74&ssl=1" alt="Arpico-250x124" width="148" height="73">
            </div>

            <div class="mySlides fade">
                <img src="https://i0.wp.com/hardwaremart.lk/wp-content/uploads/2021/10/browns-for-web-250x159-1.jpg?resize=150%2C95&ssl=1" alt="browns-for-web-250x159" width="148" height="94">
            </div>

            <div class="mySlides fade">
                <img src="https://i0.wp.com/hardwaremart.lk/wp-content/uploads/2021/10/1.png?resize=150%2C59&ssl=1" alt="1" width="148" height="58">
            </div>

            <div class="mySlides fade">
                <img src="https://i0.wp.com/hardwaremart.lk/wp-content/uploads/2021/10/3-250x192-1.png?resize=150%2C115&ssl=1" alt="3-250x192" width="148" height="113">
            </div>

            <div class="mySlides fade">
                <img src="https://i0.wp.com/hardwaremart.lk/wp-content/uploads/2021/10/4-250x96-1.jpg?resize=150%2C58&ssl=1" alt="4-250x96" width="148" height="57">
            </div>

            <div class="mySlides fade">
                <img src="https://i0.wp.com/hardwaremart.lk/wp-content/uploads/2021/10/6-250x137-1.png?resize=150%2C82&ssl=1" alt="6-250x137" width="148" height="81">
            </div>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>

        <script src="script.js"></script>
    </div>

</body>

</html>

// let slideIndex = 0;
// showSlides();

// function showSlides() {
// let i;
// let slides = document.getElementsByClassName("mySlides");
// let dots = document.getElementsByClassName("dot");
// for (i = 0; i < slides.length; i++) { // slides[i].style.display="none" ; // } // slideIndex++; // if (slideIndex> slides.length) {slideIndex = 1}
    // for (i = 0; i < dots.length; i++) { // dots[i].className=dots[i].className.replace(" active", "" ); // } // slides[slideIndex-1].style.display="block" ; // dots[slideIndex-1].className +=" active" ; // setTimeout(showSlides, 2000); // Change image every 2 seconds // } <!-- Admin User Management -->


    <div class="row justify-content-center">
            <div class="umanagement">
                <div class="text-center text-light mt-3">
                    <p class="fs-1 fw-bold">All User 's </p>
                </div>
                <div class="d-none d-lg-block col-5 col-lg-6 mt-lg-1 mt-2 d-flex offset-4" id="search">
                    <form class="d-flex">
                        <input type="text" class="form-control me-3" placeholder="Enter Id Number OR Uname">
                        <button class="btn btn-outline-warning col-2 me-2 rounded-5">Search</button>
                    </form>
                </div>
        <?php
        $rs = Database::search("SELECT * FROM `user` WHERE `user_type_id`='2' ");
        $num = $rs->num_rows;
        ?>

        <div class="row justify-content-center">
            <div class="col-11 ms-3 ">
                <table class="table table-secondary table-striped fw-bold">
                    <thead>
                        <tr class="text-center">
                            <th class="fw-bold fs-3 "></th>
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
                                <th class="fs-5 "><img src="resource/user.png" class="Aduserimg"></th>
                                <th class="fs-5"><?php echo $i + 1; ?></th>
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