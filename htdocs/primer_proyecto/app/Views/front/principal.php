<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/mi-estilo.css">

    <title>Euforia</title>
  </head>
  <body>
     <header>
  <!--Nav-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="assets/img/logo.png" class="d-block w-50" alt="img"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" onclick="mostrarInicio()">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Contacto</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Mas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Ofertas</a></li>
            <li><a class="dropdown-item" href="#">Mas vendidos</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Proxima Temporada</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!--End nav-->
    </header>
    <!--Carousel-->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/Remera.jpg" class="d-block w-100" alt="img">
    </div>
    <div class="carousel-item">
      <img src="assets/img/remeras.jpg" class="d-block w-100" alt="img">
    </div>
    <div class="carousel-item">
      <img src="assets/img/buzos.jpg" class="d-block w-100" alt="...">
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
<!--End of Carousel-->
<section id="inicio">
    <!--Carousel-->
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <!--Cards-->
<div class="card-group">
  <div class="card">
    <img src="assets/img/1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">VANS</h5>
      <p class="card-text">Chomba Old Money</p>
      <p class="card-text"><small class="text-muted">$ 50</small></p>
    </div>
  </div>
  <div class="card">
    <img src="assets/img/2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">VANS</h5>
      <p class="card-text">Remera Basica Casual</p>
      <p class="card-text"><small class="text-muted">$ 75</small></p>
    </div>
  </div>
  <div class="card">
    <img src="assets/img/3.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">VANS</h5>
      <p class="card-text">Rompe Vientos</p>
      <p class="card-text"><small class="text-muted">$ 150</small></p>
    </div>
  </div>
</div>
<!--End Cards-->
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <!--Cards-->
<div class="card-group">
  <div class="card">
    <img src="assets/img/4.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">VANS</h5>
      <p class="card-text">Chomba Old Money</p>
      <p class="card-text"><small class="text-muted">$ 50</small></p>
    </div>
  </div>
  <div class="card">
    <img src="assets/img/5.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">VANS</h5>
      <p class="card-text">Remera Basica Casual</p>
      <p class="card-text"><small class="text-muted">$ 75</small></p>
    </div>
  </div>
  <div class="card">
    <img src="assets/img/6.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">VANS</h5>
      <p class="card-text">Rompe Vientos</p>
      <p class="card-text"><small class="text-muted">$ 150</small></p>
    </div>
  </div>
</div>
<!--End Cards-->
    </div>
    <div class="carousel-item">
      <!--Cards-->
<div class="card-group">
  <div class="card">
    <img src="assets/img/7.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">VANS</h5>
      <p class="card-text">Chomba Old Money</p>
      <p class="card-text"><small class="text-muted">$ 50</small></p>
    </div>
  </div>
  <div class="card">
    <img src="assets/img/8.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">VANS</h5>
      <p class="card-text">Remera Basica Casual</p>
      <p class="card-text"><small class="text-muted">$ 75</small></p>
    </div>
  </div>
  <div class="card">
    <img src="assets/img/9.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">VANS</h5>
      <p class="card-text">Rompe Vientos</p>
      <p class="card-text"><small class="text-muted">$ 150</small></p>
    </div>
  </div>
</div>
<!--End Cards-->
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--End of Carousel-->
</section>
<div>
  <!-- Footer -->
<footer class="text-center text-lg-start bg-body-tertiary text-muted">
  <!-- Section: Social media -->
  <section class="social-logs d-flex justify-content-center border-bottom">
    <div>
      <a href="" class="me-4 text-reset a-log">
        <img src="assets/img/whatsapp.png" alt="" class="social-log">
      </a>
      <a href="" class="me-4 text-reset">
        <img src="assets/img/instagram.png" alt="" class="social-log">
      </a>
      <a href="https://www.instagram.com/" class="me-4 text-reset">
        <img src="assets/img/instagram.png" alt="" class="social-log">
      </a>
      <a href="" class="me-4 text-reset">
        <img src="assets/img/instagram.png" alt="" class="social-log">
      </a>
    </div>
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i><img src="assets/img/logo.png" class="d-block w-50" alt="img">
          </h6>
          <p>
            Somos una empresa dedicada al comercio electronico con sede  en Corrientes Capital, y precencia en el NEA.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Productos
          </h6>
          <p>
            <a href="#!" class="text-reset">Hombres</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Mujeres</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Zapatillas</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Accesorios</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Menu
          </h6>
          <p>
            <a href="#!" class="text-reset">Incio</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Productos</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Contacto</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Trabaja con Nosotros</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contacto</h6>
          <p><i class="fas fa-home me-3"></i> Ctes, Corrientes, Arg</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
              euforia@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2024 Copyright:
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="principal.js"></script>
  </body>
</html>