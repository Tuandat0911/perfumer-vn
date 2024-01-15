<?php
    session_start();
    $username = "";
    if(isset ($_SESSION['username'])) {
        $username = $_SESSION['username'];
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfume Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light" style="border-radius: 5px; background-color: blueviolet; color: white">
        <div class="container-fluid">
            <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
            >
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <a class="navbar-brand mt-2 mt-lg-0" href="#">
                    <button class="btn btn-outline-warning" style="font-weight: bold">Logo</button>
                </a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: white">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: white">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: white">Projects</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex align-items-center">
                <a class="text-reset me-3" href="#">
                    <i class="fas fa-shopping-cart"></i>
                </a>
                <div class="dropdown">
                    <?php
                    if ($username == "") {
                        ?>
                        <button class="btn btn-warning" onclick="window.location.href='login.php'">
                            Login
                        </button>
                        <?php
                    } else {
                        ?>
                        <button class="btn btn-warning" id="navbarDropdownMenuAvatar" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $username; ?>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                            <li>
                                <a class="dropdown-item" href="logout.php" style="color: red; font-weight: bold">Logout</a>
                            </li>
                        </ul>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar -->

</div>

<div class="container-fluid" style="margin-top: 80px">
    <div class="row">
        <div class="col-12 col-md-2 d-none d-md-block">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner" style="border-radius: 5px">
                    <div class="carousel-item active">
                        <img src="image/bg_home_4.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="image/bg_home_5.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="image/bg_home_6.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="col-12 col-md-10">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner" style="border-radius: 5px">
                    <div class="carousel-item active">
                        <img src="image/bg_home_1.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="image/bg_home_2.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="image/bg_home_3.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>


<!--product-->
<div class="container-fluid">
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-10">
            <h2 style=" text-align: center;
                    margin-bottom: -35px;
                    margin-top: 50px;
                    font-size:32px;
                    color:#626a67;"
            >SẢN PHẨM CỦA CHÚNG TÔI</h2>
        </div>
    </div>
</div>

<!-- Section-->
<div class="container-fluid">
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-10">
            <section class="py-5">
                <div class="container px-4 px-lg-5 mt-5">
                    <div class="row gx-4 gx-lg-5  row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4   justify-content-center">
                        <div class="col mb-5">
                            <div class="card h-100">
                                <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                                <img class="card-img-top" src="image/lipo-6-her_1-300x300.jpg" alt="..." />
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fw-border">Product Name</h5>
                                    </div>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div><i class="fa fa-star" style="color: #ffde38;"></i></div>
                                        <div><i class="fa fa-star" style="color: #ffde38;"></i></div>
                                        <div><i class="fa fa-star" style="color: #ffde38;"></i></div>
                                        <div><i class="fa fa-star" style="color: #ffde38;"></i></div>
                                        <div><i class="fa fa-star" style="color: #ffde38;"></i></div>
                                    </div>
                                    <span class="text-muted text-decoration-line-through">10.000.000<sup>đ</sup></span><sup>đ</sup>
                                </div>
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center">
                                        <a class="btn btn-outline-dark mt-auto" href="#">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-5">
                            <div class="card h-100">
                                <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                                <img class="card-img-top" src="image/lipo-6-her_1-300x300.jpg" alt="..." />
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fw-border">Product Name</h5>
                                    </div>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div><i class="fa fa-star" style="color: #ffde38;"></i></div>
                                        <div><i class="fa fa-star" style="color: #ffde38;"></i></div>
                                        <div><i class="fa fa-star" style="color: #ffde38;"></i></div>
                                        <div><i class="fa fa-star" style="color: #ffde38;"></i></div>
                                        <div><i class="fa fa-star" style="color: #ffde38;"></i></div>
                                    </div>
                                    <span class="text-muted text-decoration-line-through">10.000.000<sup>đ</sup></span><sup>đ</sup>
                                </div>
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center">
                                        <a class="btn btn-outline-dark mt-auto" href="#">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-5">
                            <div class="card h-100">
                                <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                                <img class="card-img-top" src="image/lipo-6-her_1-300x300.jpg" alt="..." />
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fw-border">Product Name</h5>
                                    </div>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div><i class="fa fa-star" style="color: #ffde38;"></i></div>
                                        <div><i class="fa fa-star" style="color: #ffde38;"></i></div>
                                        <div><i class="fa fa-star" style="color: #ffde38;"></i></div>
                                        <div><i class="fa fa-star" style="color: #ffde38;"></i></div>
                                        <div><i class="fa fa-star" style="color: #ffde38;"></i></div>
                                    </div>
                                    <span class="text-muted text-decoration-line-through">10.000.000<sup>đ</sup></span><sup>đ</sup>
                                </div>
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center">
                                        <a class="btn btn-outline-dark mt-auto" href="">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-5">
                            <div class="card h-100">
                                <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                                <img class="card-img-top" src="image/lipo-6-her_1-300x300.jpg" alt="..." />
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fw-border">Product Name</h5>
                                    </div>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div><i class="fa fa-star" style="color: #ffde38;"></i></div>
                                        <div><i class="fa fa-star" style="color: #ffde38;"></i></div>
                                        <div><i class="fa fa-star" style="color: #ffde38;"></i></div>
                                        <div><i class="fa fa-star" style="color: #ffde38;"></i></div>
                                        <div><i class="fa fa-star" style="color: #ffde38;"></i></div>
                                    </div>
                                    <span class="text-muted text-decoration-line-through">10.000.000<sup>đ</sup></span><sup>đ</sup>
                                </div>
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center">
                                        <a class="btn btn-outline-dark mt-auto" href="#">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

</body>
</html>
