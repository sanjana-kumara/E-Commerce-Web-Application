<?php

session_start();
include "connection.php";

if (isset($_SESSION["ad"])) {

    $rs = Database::search("SELECT * FROM `brand` INNER JOIN `product` ON `product`.`brand_id` = `brand`.`brand_id` 
    INNER JOIN `product_img` ON `product_img`.`product_id` = `product`.`id` ORDER BY `product`.`id` ASC ");
    $num = $rs->num_rows;

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="bootstrap.css">
        <link rel="stylesheet" href="style.css">
        <title>Admin Stock Report Managemnt | Halgahawatta Hardware Admin Dashboard</title>
    </head>

    <body class="addminBody">

        <div class="container-fluid">

            <div class="row">

                <div class="col-2 mt-5 ms-5">
                    <a href="reportManagement.php"><i class="fa-solid fa-backward fa-beat fs-1 fw-bold link-primary"> </i></a>
                </div>

                <div class="col-8 mt-5 ms-5 d-flex justify-content-center">
                    <span class="col-5 fs-1 fw-bold">Product Report</span>
                </div>

            </div>

            <div class="row justify-content-center">

                <div class="col-11">

                    <table class="table table-secondary table-hover mt-5 border border-3 border-black shadow-lg">

                        <thead>

                            <tr class="text-center">

                                <th class="fs-3 fw-bold">Product Id</th>
                                <th class="fs-3 fw-bold">Product Name</th>
                                <th class="fs-3 fw-bold">Brand Name</th>
                                <th class="fs-3 fw-bold">Description</th>
                                <th class="fs-3 fw-bold"></th>

                            </tr>

                        </thead>
                        <tbody>

                            <?php

                            for ($i = 0; $i < $num; $i++) {
                                $d = $rs->fetch_assoc();

                            ?>

                                <tr class="text-center">

                                    <td class="fs-5 fw-bold"><?php echo $d["id"] ?></td>
                                    <td class="fs-5 fw-bold"><?php echo $d["name"] ?></td>
                                    <td class="fs-5 fw-bold"><?php echo $d["brand_name"] ?></td>
                                    <td class="fs-5 fw-bold"><?php echo $d["description"] ?></td>
                                    <td class="fs-5 fw-bold"><img src="<?php echo $d["img_path"] ?>" height="150px"></td>

                                </tr>

                            <?php

                            }

                            ?>

                        </tbody>

                    </table>

                    <div class="col-12 d-flex justify-content-end">

                        <div class="btn btn-warning btn-outline-dark w-25 p-2 fs-4 fw-bold shadow-lg rounded-5 " onclick="window.print()">Print</div>

                    </div>

                </div>

            </div>


        </div>

    </body>

    </html>

<?php
} else {

    header("location:adminLogin.php");
}


?>