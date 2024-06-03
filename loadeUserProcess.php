<?php

include "connection.php";

$pageno = 0;
$user_page = $_POST["u"];

if (0 != $user_page) {

    $pageno = $user_page;
} else {

    $pageno = 1;
}

$q = "SELECT * FROM `user` ORDER BY `Join_date_time` ASC";
$rs_1 = Database::search($q);
$num_1 = $rs_1->num_rows;

$result_per_page = 2;
$num_of_page = ceil($num_1 / $result_per_page);

$page_results = ($pageno - 1) * $result_per_page;

$q2 = $q . " LIMIT $result_per_page OFFSET $page_results";
$rs2 = Database::search($q2);
$num2 = $rs2->num_rows;

if ($num_1 == 0) {
    // Not Avalibale Users
    echo ("No Users Here... ");
} else {
    // Loade Users

    $rs = Database::search("SELECT * FROM `user` ");
    $num = $rs->num_rows;

    for ($i = 0; $i < $num; $i++) {

        $data = $rs->fetch_assoc();

?>

        <tr class="table-secondary">

            <td class="fs-5 d-none d-md-block"><img src="resource/user.png" class="Aduserimg"></th>
            <td class="fs-5"><?php echo $i + 1; ?></td>
            <td class="fs-5 d-none d-md-block"><?php echo $data['username']; ?></td>
            <td class="fs-5"><?php echo $data['email']; ?></td>
            <td class="fs-5 d-none d-md-block"><?php echo $data['mobile']; ?></td>
            <td class="fs-5">

                <?php

                if ($data['statues'] == 1) {

                    echo ("Active");

                ?>

            <td class="fs-3 d-none d-md-block">

                <button class="btn btn-danger fs-5" id="stbtn<?php echo $data['id']; ?>" onclick="status('<?php echo $data['id']; ?>');">Deactivate</button>
            </td>

        <?php

                } else {

                    echo ("Deactive");

        ?>

            <td class="fs-3 d-none d-md-block">

                <button class="btn btn-success fs-5" id="stbtn<?php echo $data['id']; ?>" onclick="status('<?php echo $data['id']; ?>');">Activate</button>
            </td>

        <?php

                }


        ?>

    <?php

    }

    ?>

    <!-- pagination -->

    <div class="row justify-content-center">

        <div class="col-2 d-none d-md-block">

            <div class="row col-4 h-100 w-100">

                <nav aria-label="Page navigation example">

                    <ul class="pagination fw-bold fs-3">

                        <li class="page-item">
                            <a class="page-link fs-3" <?php if ($pageno <= 1) {
                                                            echo ("#");
                                                        } else {
                                                        ?> onclick="loadUser(<?php echo ($pageno - 1) ?>);" <?php
                                                                                                                }
                                                                                                                    ?>>Previous</a>
                        </li>

                        <?php

                        for ($y = 1; $y <= $num_of_page; $y++) {

                            if ($y == $pageno) {
                        ?>

                                <li class="page-item active"><a class="page-link fs-3" onclick="loadUser(<?php echo $y ?>);"><?php echo $y ?></a></li>

                            <?php
                            } else {
                            ?>

                                <li class="page-item "><a class="page-link fs-3" onclick="loadUser(<?php echo $y ?>);"><?php echo $y ?></a></li>

                        <?php
                            }
                        }

                        ?>

                        <li class="page-item">
                            <a class="page-link fs-3" <?php if ($pageno >= $num_of_page) {
                                                            echo ("#");
                                                        } else {
                                                        ?> onclick="loadUser(<?php echo ($pageno + 1) ?>);" <?php
                                                                                                                }
                                                                                                                    ?>>Next</a>
                        </li>

                    </ul>

                </nav>

            </div>

        </div>

    </div>

    <!-- pagination -->

<?php

}

?>