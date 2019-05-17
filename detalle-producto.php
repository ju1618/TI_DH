
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
                      <div class="col-xs-12 col-sm-12 col-md-6 offset-md-3 mi-form-contenedor">
                            <!-- Como si fuera el 'header' del detalle -->
                            <div class="mi-cabecera-detalle">
                              <div class="mi-contenido-izquierdo">
                                    <h3> Detalle de Producto</h3>
                              </div>
                            </div>
                            <!-- Aca va a ir el contenido en si       -->
                            <div class="mi-principal-detalle">
                              <div class="mi-contenido-izquierdo">
                                <h4>Nombre del Producto</h4>
                              </div>
                              <!--       imagen       -->
                                <img src="images/mate-de-madera-colorido.jpg" alt="mate-diseño">
                              <!--       detalle        -->
                              <div class="">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                              </div>
                              <!--          boton voler          -->
                              <a class=" btn btn-primary mi-boton" href="index-proyecto2.php">Volver</a>
                          </div>
                      </div>
                </div>

  <?php require_once('footer.php'); ?>

  </body>
</html>
