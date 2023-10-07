<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <title>Alpha Bridge Movers & Packers</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <!--navgation bar-->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Alpha Bridge Movers And Packers</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="CargoPacking.php">Cargo packing staff</a></li>
                            <li><a class="dropdown-item" href="ResidentialPS.php">Residential packaging and shifting service</a></li>
                            <li><a class="dropdown-item" href="CommercialPS.php">Commercial packaging and shifting service</a></li>
                            <li><a class="dropdown-item" href="Disposal.php">Disposal service</a></li>
                            <li><a class="dropdown-item" href="Carpentry.php">Carpentry service</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="Blogs.php">Blogs</a>
                    </li>

                </ul>
                <div class="mx-2">
                    <a href="login.php" class="btn btn-primary" role="button">Get Quote</a>
                </div>

            </div>
        </div>
    </nav>

    <!--Slide Image-->

    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img\img1.jpg" class="d-block w-100 img-fluid " alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1> Best Service</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img\img4.jpg" class="d-block w-100 img-fluid " alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="innerSlide"> Safe Management</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img\img3.jpg" class="d-block w-100 img-fluid " alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="innerSlide"> Professional Workers</h1>
                </div>
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

    <!--Blog-->

    <div class="container my-4">
        <div class="row mb-2">
            <div class="col-md-6 ">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <h3 class="mb-0">Cargo packing</h3>
                        <div class="mb-1 text-muted">Dec 12, 2020</div>
                        <p class="card-text mb-auto">This Companies Cargo packageing system is very oraganised.</p>
                        <a href="Blogs.php" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img img-fluid" width="200" height="250" src="img\cargopack_1.jpeg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <h3 class="mb-0">Residential packaging and shifting </h3>
                        <div class="mb-1 text-muted">Nov 11, 2021</div>
                        <p class="mb-auto">All the stuffs are very careful and professional. Their packaging system is very well oraganised.</p>
                        <a href="Blogs.php" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <div class="col-auto d-none d-lg-block">
                            <img class="bd-placeholder-img img-fluid" width="200" height="250" src="img\Recidental_1.jpeg" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-6 ">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <h3 class="mb-0">Commercial Packaging and Shifting </h3>
                        <div class="mb-1 text-muted">Dec 2, 2021</div>
                        <p class="card-text mb-auto">All the important files and furnitures are well cared. Other electronic devices were taken care properly.</p>
                        <a href="Blogs.php" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img img-fluid" width="200" height="250" src="img\Commercial_1.jpeg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">

                        <h3 class="mb-0">Carpentry service</h3>
                        <div class="mb-1 text-muted">Jan 11, 2022</div>
                        <p class="mb-auto">The carpenters arrived in time. They also did their work precisely.</p>
                        <a href="Blogs.php" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img img-fluid" width="200" height="250" src="img\Carpentry_1.jpeg" alt="">
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--Footer-->

    <div class="footer_ab container-fluid">
        <footer class="mt-auto">
            <div class="row">

                <div class="col-md-6 mt-5 footertext">
                    <h5>Contact</h5>
                    <div class="my-4 ">
                        <i class="fa fa-phone-square" aria-hidden="true"> 01748700219</i><br>
                        <i class="fa fa-envelope" aria-hidden="true"> info@abmp.com</i><br>
                        <i class="fa fa-map-marker mt-1" aria-hidden="true"> House # 67, Road # 20, Block - B,
                            Banani, Dhaka 1212</i><br>
                    </div>
                </div>

                <div class="col-md-6 mt-5 footertext ">
                    <h5>USeful Links</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="index.php" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="index.php" class="nav-link p-0 text-muted">Sevices</a></li>
                        <li class="nav-item mb-2"><a href="about.php" class="nav-link p-0 text-muted">About</a></li>
                        <li class="nav-item mb-2"><a href="Blogs.php" class="nav-link p-0 text-muted">Blogs</a></li>
                    </ul>
                </div>


            </div>

            <div class="container">
                <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                    <div class="col-md-4 d-flex align-items-center">
                        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                            <svg class="bi" width="30" height="24">
                                <use xlink:href="#bootstrap"></use>
                            </svg>
                        </a>
                        <span class="text-muted">© 2022 Company, Inc</span>
                    </div>

                    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                        <div class="col-2">
                            <a class="btn btn-primary btn-lg btn-floating" style="background-color: #0077b5;" href="https://www.linkedin.com/" role="button"><i class="fa fa-linkedin"></i></a><br>
                        </div>
                        <div class="col-2">
                            <a class="btn btn-primary btn-lg btn-floating" style="background-color: #4267B2;" href="https://www.facebook.com/" role="button"><i class="fa fa-facebook"></i></a><br>
                        </div>
                        <div class="col-2">
                            <a class="btn btn-primary btn-lg btn-floating" style="background-color: #00acee;" href="https://www.twitter.com/ " role="button"><i class="fa fa-twitter"></i></a><br>
                        </div>
                    </ul>
                </footer>
            </div>
        </footer>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>