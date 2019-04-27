<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <title>Mi perfil</title>
    <!--Vinculción externa de CSS-->
<link rel="stylesheet" href="css/perfilstyles.css">
<link rel="stylesheet" href="css/navstyle.css">
    <!--Bootstrap CDN-->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <?php require_once('nav-bar.php'); ?>
    <div class="container">
      <div class="contenedor1">
        <center><img class="fotousuario" src="images/imagen.png" alt="foto del usuario"></center>
         <br>
         <br>
        <h1>Mi cuenta</h1>
        <h2>Hola, Tomás!!!</h2>
        <br>
        <br>
          <a href="#MisDatos">Mis Datos</a>
          <br>
          <br>
          <a href="#compras">Compras</a>
          <br>
          <br>
          <a href="#facturas">Facturación</a>
          <br>
      </div>
      <div class="contenedor2">
          <h2 id = "MisDatos"><em><strong>Mis datos</strong></em></li></h2>
          <br>
          <p><strong>Nombre y Apellido:</strong> Tomás Gomez</p>
          <br>
          <p><strong>Dirección:</strong> Av. Rivadavia 4000</p>
          <br>
          <p><strong>Ciudad:</strong> Capital Federal</p>
          <br>
          <p><strong>Provincia:</strong> Buenos Aires</p>
          <br>
      </div>
      <div class="contenedor3">
        <h2 id="compras"><em><strong>Compras</strong></em></li></h2>
        <img class="productocomprado" src="images/mate-de-madera-colorido.jpg" alt="producto comprado">
        <p>Mate de madera colorido</p>
        <p>Cantidad: 2</p>
        <p>Precio: $250</p>
        <p>Total: 2 x $250 = $500</p>
        <br>
      </div>
   </div>
   <?php require_once('footer.php'); ?>
  </body>
</html>
