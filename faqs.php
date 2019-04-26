<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <title>FAQ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylefaq.css">
    <link rel="stylesheet" href="css/navstyle.css">

  </head>
  <body>
    <?php require_once('nav-bar.php'); ?>
    <div class="container">
      <section class="cd-faq faq-temas navbar-nav-scroll ">
       <ul class="cd-faq-categories categorias navbar-nav bd-navbar-nav">
          <li class="nav-item"><a href="#sesion">Configuración de cuenta</a></li>
          <li class="nav-item"><a href="#venta">Venta</a></li>
          <li class="nav-item"><a href="#compra">Compra</a></li>
       </ul>
      </section>

       <div class="cd-faq-items">
          <ul id="sesion" class="cd-faq-group">
             <li class="cd-faq-title"><h2>Configuración de cuenta</h2></li>
             <li>
                <a class="cd-faq-trigger" href="#0"><strong>¿Cómo cambio mi contraseña?</strong></a>
                <div class="cd-faq-content">
                   RESPUESTA.
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
                <br>
             </li>

             <li>
                <a class="cd-faq-trigger" href="#0"><strong>¿Cómo crear un usuario nuevo?</strong></a>
                <div class="cd-faq-content">
                   RESPUESTA.
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
                <br>
             </li>


          </ul>

          <ul id="venta" class="cd-faq-group">
            <li class="cd-faq-title"><h2>Venta</h2></li>
            <li>
              <a class="cd-faq-trigger" href="#0"><strong>¿Cómo publico un producto?</strong></a>
              <div class="cd-faq-content">
                RESPUESTA.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
             </div>
             <br>
           </li>
          </ul>

          <ul id="compra" class="cd-faq-group">
            <li class="cd-faq-title"><h2>Compra</h2></li>
            <li>
              <a class="cd-faq-trigger" href="#0"><strong>¿PREGUNTA?</strong></a>
              <div class="cd-faq-content">
                RESPUESTA.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
             </div>
             <br>
           </li>
          </ul>

          <!-- ... -->
       </div>
<!-- esto lo saque de la internet -->
    </div>
  </body>
</html>
