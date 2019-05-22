<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mi perfil</title>
    <!--Vinculción externa de CSS-->
<link rel="stylesheet" href="css/perfilstyles.css">
<link rel="stylesheet" href="css/navstyle.css">
    <!--Bootstrap CDN-->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <?php require_once('nav-bar.php'); ?>
      <ul class="navbar-nav ml-auto" style="display: flex; align-items: center;">
				<!-- Preguntamos si NO está logueado el usuario para mostrar los enlaces Register y Login -->
									<li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
					<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
							</ul>
    <div class="contenedorprincipal">
       <div class="contenedor1">
          <br>
          <center><img class="fotousuario" src="images/imagen.png" alt="foto del usuario"></center>
          <br>
          <br>
                <h1><center>Mi Perfil</center></h1>
                <br>
            <h2>Hola Usuario!!!</h2>
          <br>
          <br>
          <a class="item" href="#MisDatos">Mis Datos</a>
          <br>
          <br>
          <a class="item" href="#compras">Compras</a>
          <br>
          <br>
          <a class="item" href="#facturas">Facturación</a>
          <br>
          <br>
          <a class="item" href="#cambiopass">Contraseña</a>
      </div>
      <div class="contenedor2">
          <br>
          <h2 id = "MisDatos"><em><strong><center>Mis datos</center></strong></em></li></h2>
          <br>
          <p><strong>Nombre y Apellido:</strong> Usuario</p>
          <br>
          <p><strong>Dirección:</strong> Av. Rivadavia 4000</p>
          <br>
          <p><strong>Ciudad:</strong> Capital Federal</p>
          <br>
          <p><strong>Provincia:</strong> Buenos Aires</p>
          <br>
      </div>
      <div class="contenedor3">
         <br>
         <h2 id="compras"><em><strong><center>Compras</center></strong></em></li></h2>
         <br>
         <center><img class="productocomprado" src="images/mate-de-madera-colorido.jpg" alt="producto comprado"></center>
         <p>Mate de madera colorido</p>
         <p>Cantidad: 2</p>
         <p>Precio: $250</p>
         <p>Total: 2 x $250 = $500</p>
         <br>
      </div>
      <div class="contenedor4">
         <br>
         <h2 id="facturas"><em><strong><center>Facturación</center></strong></em></li></h2>
         <img class="facturadecompra" src="images/facturamp.png" alt="factura de compra">
      </div>
      <div class="contenedor5">
         <br>
         <h2 id="cambiopass"><em><strong><center>Contraseña</center></strong></em></h2>
         <br>
         <a href="#reset">Reestablecer contraseña</a>
         <br>
         <br>
         <a href="#cambiarpass">Cambiar contraseña</a>
         <br>
         <br>
         <a class="dropdown-item" href="logout.php">Salir</a>
      </div>
   </div>

   <?php require_once('footer.php'); ?>
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script> <script src="js/bootstrap.min.js"></script>
 </body>
</html>
