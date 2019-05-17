<!-- puedo crear un archivo con arrays de productos y llamarlos tanto en el index como en el detalle de los productos con: nombre, imagen, descripcion y ID. -->
<?php
  $pdtos = [
    [
      "id" => 1,
      "nombre" => "Sarasa",
      "descrip" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
    ],
    [
      "id" => 2,
      "nombre" => "Sarasa sdfsdfsdfsd",
      "descrip" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
    ]
  ];

  if (isset($_GET["id"]) && $_GET["id"] <= count($pdtos)) {
    foreach ($pdtos as $onePdto) {
      if ($onePdto["id"] == $_GET["id"]) {
        $elegido = $onePdto;
      }
    }
    var_dump($elegido);
  }else{
    echo "No existe un producto con ese ID";
  }
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <title>Detalle de Producto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/navstyle.css">
    <link rel="stylesheet" href="css/style-detalle.css">
  </head>
  <body>
      <div class="mi-contenedor">
          <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 offset-md-3">
                        <h1 class="mi-marca"><img src="images/logo.png" height="45px" width="55px" alt="logo"><strong>  market palace</strong></h1>
                        <div class="mis-descripciones">
                          <p>Un lugar donde encontrás todo lo que querés</p>
                        </div>
                    </div>
                </div>
                <!-- Aca va a ir el contenedor del form -->
                <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-6 offset-md-3 mi-detalle-contenedor">
                            <!-- Como si fuera el 'header' del detalle -->
                            <div class="mi-cabecera-detalle">
                                <h3> Detalle de Producto</h3>
                            </div>
                            <!-- Aca va a ir el contenido en si       -->
                            <div class="mi-principal-detalle">
                              <!--       Titulo       -->
                              <h4 class="text-center">Mate con diseño</h4>
                              <!--       imagen       -->
                              <img src="images/mate-de-madera-colorido.jpg" class="img-fluid rounded mx-auto imagen-producto" alt="mate-diseño">
                              <!--       detalle        -->
                              <div class="">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                              </div>
                              <!--          botón voler          -->
                              <a class=" btn btn-primary mi-boton" href="index-proyecto2.php">Volver</a>
                          </div>
                      </div>
                </div>

  <?php require_once('footer.php'); ?>

  </body>
</html>
