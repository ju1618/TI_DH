<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/style-index.css">
    <link rel="stylesheet" href="css/navstyle.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="ionicons/css/ionicons.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
  </head>
  <body>
    <!-- <div class="container">
      <div class="desplegable-nav">

      <article class="main-header">
        <header>
          <nav class="main-nav">
            <div class="main-nav-container">
              <img class="menu-img" src="ionicons/png/512/grid.png" alt="menu">
            </div>
            <ul>
              <li>
                <a  href="#"><span class="icon ion-person-add">  Registrarse</span></a>
              </li>
              <li>
                <a href="#">Iniciar Sesión</a>
              </li>

              <li>
                <a href="#">Preguntas Frecuentes</a>
              </li>

              <li>
                <a href="#"><span class="ion-information-circled">  Quiénes Somos</a>
              </li>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </ul>
          </nav>
        </header>
      </article>
      </div> -->
      <nav class="main-nav navbar navbar-expand-sm navbar-expand-md navbar-dark flex-column flex-md-row bd-navbar fixed-top">
        <a class= "navbar-brand" href="#HOME">
          <img class="logo navbar-brand" src="images/logo1.png" alt="logo tu empresa">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class= "nav-link" href="index-proyecto.php">Home </a>
            </li>
            <li class="nav-item active">
              <a class= "nav-link" href="#">Productos</a>
            </li>
            <li class="nav-item active">
              <a class= "nav-link" href="faqs.php">FAQ</a>
            </li>
            <li class="nav-item">
              <a class= "nav-link" href="#">Registrarse</a>
            </li>
            <li class="nav-item" >
              <a class= "nav-link" href="#">Ingresar</a>
            </li>
            <li class="nav-item">
              <a class= "nav-link" href="#">Perfil</a>
            </li>
            <!-- // info de contacto -->
          </ul>
        </div>
      </nav>
      <br><br>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1" ></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2" ></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/rebajas-carousel.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="ionicons/png/512/android-call.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="ionicons/png/512/android-earth.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <br><br>
      <div class="main-content-product">


        <div class="row" id="content-product">
          <div class="col-sm-1 col-md-2 col-lg-4">
          <img src="images/mate-de-madera-colorido.jpg" alt="mate-diseño">
          <h2>Nombre del producto</h2>
          <a href="#"><span>Detalles</span></a>
          </div>

        </div>
        <div class="row" id="content-product">
          <div class="col-sm-1 col-md-2 col-lg-4">
          <img src="images/mate-de-madera-colorido.jpg" alt="mate-diseño">
          <h2>Nombre del producto</h2>
          <a href="#"><span>Detalles</span></a>
          </div>

        </div>
        <div class="row" id="content-product">
          <div class="col-sm-1 col-md-2 col-lg-4">
          <img src="images/mate-de-madera-colorido.jpg" alt="mate-diseño">
          <h2>Nombre del producto</h2>
          <a href="#"><span>Detalles</span></a>
          </div>

        </div>
      </div>
      <div class="up-link">
        <a href="#">  <img src="images/top-button.png" alt="to-top"></a>
      </div>

      <br>
      <br>
      <footer class="container mx-auto">
          <p class="float-left">&copy; 2017-2019 Company, Inc. &middot; <a href="#">Home</a> &middot;
          <p class="float-right"><a href="#">Back to top</a></p>
      </footer>
        <!-- <footer class="main-content-footer">

          <div class="content-footer">
            <nav class="main-footer-nav">
              <ul id="contact">
                <li> <a href="tel:12345678">Contactanos</a> </li>
                <li> <a id="redes" href="https://twitter.com/?lang=es">  <span class="icon ion-social-twitter"></span> </a> </li>
                <li> <a id="redes" href="https://es-la.facebook.com/">  <span class="icon ion-social-facebook"></span> </a> </li>
                <li> <a id="redes" href="https://www.instagram.com/?hl=es-la">  <span class="icon ion-social-instagram"></span> </a> </li>
                <li> <a id="redes" href="https://ar.pinterest.com/">  <span class="icon ion-social-pinterest"></span> </a> </li>
              </ul>
            </nav>
          </div>

        </footer> -->

    </div>
  </body>
</html>
