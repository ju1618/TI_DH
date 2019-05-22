<?php

require_once "productos.php";

$error="";

// logica para asignar al producto seleccionado por lo que viene por GET
if (isset($_GET["id"]) && $_GET["id"] <= count($pdtos)) {
  foreach ($pdtos as $onePdto) {
    if ($onePdto["id"] == $_GET["id"]) {
      $elegido = $onePdto;
    }
  }
}else{
  $error="<strong> No existe un producto con ese ID </strong>";
}

 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/product-c.css">
    <meta charset="utf-8">

    <title></title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="10000">
                  <!-- <div class="row">
                    <div id="prueba" class="col-12 col-md-4 col-lg-2"> -->
                      <div class="card-deck">
                        <div class="card" style="width: 18rem;">
                          <img src="images/butaca-madera.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title"><?= $elegido["nombre"] ?></h5>
                            <a href="#" id="details" class="btn btn-outline-success">Detalles</a>
                          </div>
                        </div>


                        <div class="card" style="width: 18rem;">
                          <img src="images/butaca-madera.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <a href="#" id="details" class="btn btn-outline-success">Detalles</a>
                          </div>
                        </div>


                        <div class="card" style="width: 18rem;">
                          <img src="images/butaca-madera.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <a href="#" id="details" class="btn btn-outline-success">Detalles</a>
                          </div>
                        </div>


                        <div class="card" style="width: 18rem;">
                          <img src="images/butaca-madera.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <a href="#" id="details" class="btn btn-outline-success">Detalles</a>
                          </div>
                        </div>

                      </div>
                    <!-- </div> -->
                  <!-- <img src="..." class="d-block w-100" alt="..."> -->
                <!-- </div> -->
                </div>
                <div class="carousel-item" data-interval="2000">
                  <div class="card" style="width: 18rem;">
                    <img src="images/butaca-madera.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <a href="#" id="details" class="btn btn-outline-success">Detalles</a>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  ggg
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                 <span class="carousel-control-prev-icon btn-outline-dark" aria-hidden="true"></span>
                 <span class="sr-only">Previous</span>
              </a>

              <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                <span class="carousel-control-next-icon btn-outline-dark" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
    </div>
  </div>

    <br><br><br><br>


  </body>
</html>
