<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Halgahawatta Hardware Admin Panel</title>
</head>

<body>

    <div class="container-fluid">

        <div class="row">

            <div class="col-12 header_body">

                <div class="row">

                    <div class="col-8 d-flex justify-content-center">

                        <span class="fw-bold mt-3 tex01">Halgahawatta Hardware</span>

                    </div>

                    <div class="col-4 mt-3 mb-2">

                        <div class="row">

                            <div class="col-7">

                                <div class="row">

                                    <div class="col-md-4">

                                        <button class="usericon border border-3 border-dark shadow-lg mt-2" data-bs-toggle="dropdown"></button>

                                        <ul class="dropdown-menu bg-black">

                                            <li><a class="dropdown-item text-white fs-4 fw-bold" href="#">Shop &nbsp; <i class="material-icons">&#xe563;</i></a></li>
                                            <li><a class="dropdown-item text-white fs-5 fw-bold" href="#">My Account &nbsp; <i class="material-icons">&#xe813;</i></a></li>
                                            <li><a class="dropdown-item text-white fs-5 fw-bold" href="#">My Oder &nbsp; <i class="material-icons">&#xeb3f;</i></a></li>
                                            <li><a class="dropdown-item text-white fs-5 fw-bold" href="#">My Reviews &nbsp;<i class="material-icons">&#xe83a;</i></a></li>
                                            <li><a class="dropdown-item text-white fs-5 fw-bold" href="#">Log Out &nbsp;<i class="material-icons">&#xe8c6;</i></a></li>

                                        </ul>

                                    </div>

                                    <div class="col-8 mt-2 d-none d-md-block">

                                        <span class="fs-3 fw-bold mt-3 text-white">Sanjana Kumara</span><br>
                                        <span class="fs-6 fw-bold mt-3 tex_color">sanjananisalkumara@gmail.com </span>

                                    </div>

                                </div>

                            </div>

                            <div class="col-4 d-none d-md-block">

                                <button class="carticon border border-3 border-dark shadow-lg mt-2"></button>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="row justify-content-center">

                    <div class="col-md-11">

                        <div class="row justify-content-center">

                            <!-- <div class="col-1 mb-3">

                                <button class="btn btn-warning" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                                    <i class="bi bi-list fs-1 fw-bold text-white"></i>
                                </button>

                                <div class="offcanvas offcanvas-start bg-dark text-white fw-bold" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">

                                    <div class="offcanvas-header">
                                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdrop with scrolling</h5>
                                        <button type="button" class="btn-close bg-warning" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                    </div>

                                    <div class="offcanvas-body">
                                        <p>Try scrolling the rest of the page to see this option in action.</p>
                                    </div>

                                </div>

                            </div> -->

                            <div class="col-md-11 mt-2 mb-4">

                                <div class="row">

                                    <div class="col-md-8 mt-2">

                                        <input type="text" class="form-control w-100 h-100 fs-4 fw-bold" placeholder="Type Here...">
 
                                    </div>
                                    
                                    <div class="col-md-4 gap-3">

                                        <button class="rounded-4 h-100 w-50 btn01 me-2 fs-3 fw-bold"> Search </button>
                                        <button class="rounded-4 h-100 w-25 btn02 fs-3 fw-bold text-light shadow-lg"> Filter </button>

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