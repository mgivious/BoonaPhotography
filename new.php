
<?php
  require_once "contact.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>PhotoShow Website</title>
</head>

<body>
    <!-- nav bar  -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="images/camera.jpeg" alt="camera"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#About">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#Beach">Beach Parties</a></li>
                            <li><a class="dropdown-item" href="#Weddings">Weddings</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#birthday">BirthDay Parties</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#Contact">Contact Us</a>
                    </li>

                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- main body content -->
    <div class="container-fluid">
        <div id="carouselExampleDark" class="carousel carousel-red slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="1000">
                    <img src="images/wed3.jpg" class="d-block w-100" alt="wed3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>wedding parties both inside and abroad</h5>

                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="images/photo2.jpg" class="d-block w-100" alt="photo1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>clear PhotoShot pictures with high quality cameras</h5>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="images/birth6.jpg" class="d-block w-100" alt="birth6">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>clear shoots of birthday parties</h5>

                    </div>

                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="images/beach4.jpg" class="d-block w-100" alt="beach4">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>clear shoots of beach parties</h5>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <button class="carousel-control-prev " type="button " data-bs-target="#carouselExampleDark " data-bs-slide="prev ">
      <span class="carousel-control-prev-icon " aria-hidden="true "></span>
      <span class="visually-hidden ">Previous</span>
    </button>
    <button class="carousel-control-next " type="button " data-bs-target="#carouselExampleDark " data-bs-slide="next ">
      <span class="carousel-control-next-icon " aria-hidden="true "></span>
      <span class="visually-hidden ">Next</span>
    </button>
    </div>

    <!-- main content -->


    <a id="Weddings">
        <section class="my-4">
            <div>
                <h2>Wedding parties</h2>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/wed2.jpg" alt="wed2" class="img-fluid" pb-3 width="3960px" height="2640px">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/wed5.jpg" alt="wed7" class="img-fluid" pb-3 width="3960px" height="2640px">
                    </div>
                    <div class=" col-lg-4 col-md-4 col-12 ">
                        <img src="images/wed6.jpg " alt="wed6 " class="img-fluid " pb-3 width="3960px " height="2640px">
                    </div>
                </div>

                <div>

        </section>
    </a>


    <a id="Beach">
        <section class="my-4">
            <div class="container-fluid">
                <div class="py-4">
                    <h2>Beach parties</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/beach2.jpg" alt="beach3" class="img-fluid" pb-3>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/wed7.jpg" alt="beach1" class="img-fluid" pb-3>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/beach2.jpg" alt="beach2" class="img-fluid" pb-3>
                    </div>
                </div>

            </div>
        </section>
    </a>

    <a id="birthday">
        <section class="my-4">

            <div class="py-4">

                <h2>Birthday parties</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/beach1.jpg" alt="birth5" class="img-fluid" pb-3>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/birth3.jpg" alt="birth2" class="img-fluid " pb-3>
                </div>
                <div class="col-lg-4 col-md-4 col-12 ">
                    <img src="images/photo4.jpg " alt="birth4 " class="img-fluid " pb-3>
                </div>
            </div>
            </div>
        </section>
    </a>

    <a id="Contact">
        <section class="my-4">
            <div class="py-4">
                <h2 class="text-center">Contact Us</h2>
            </div>
            <div class="w-50 m-auto">
                <form action="new.php" method="post">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="Name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">Email:</label>
                        <input type="text" name="Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">Number:</label>
                        <input type="text" name="Number" class="form-control">
                    </div>
                    <button type="submit" name="submit" class="btn btn-success">Submit</button>
                </form>
            </div>


        </section>
    </a>

    <a id="About">
        <section class="my-4">

            <div class="py-4">
                <h2 class="text-center">About Us</h2>
            </div>
            <div class="container-fluid">
                <h2 class="text-center">Boona Photographers</h2>
                <div class="text-center">
                    <p>
                        As a company we have very many experience photographers all over parts of the world with quality machines to produce best pictures. With an experience of ten years we have been able to produce best pictures with the best machines which are exported best
                        companies all over the world
                    </p>
                </div>
        </section>
    </a>

    <!-- footer code -->
    <footer class="text-center text-white fixed-bottom " style="background-color: black; ">
        <!-- Copyright -->
        <div class="text-center p-3 " style="background-color: black; ">
            © 2020 Copyright:
            <a class="text-white " href="https://mdbootstrap.com/ ">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js " integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p " crossorigin="anonymous "></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js " integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF " crossorigin="anonymous "></script>

</html>