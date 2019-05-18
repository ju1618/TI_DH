<!-- PROBAR CON ESTO https://getbootstrap.com/docs/4.3/components/collapse/ -->
<?php  $nombreDeSeccion = FAQ ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">

    <?php   require_once 'head.php' ?>
    <link rel="stylesheet" href="css/stylefaq.css">
  </head>

  <body class="faq-cuerpo">

    <?php require_once('nav-bar.php'); ?>
    <!-- Inicio de nav interno de FAQ--->
      <nav class="navbar navbar-dark fixed-top faq-temas justify-content-center">
        <div class="justify-content-center">
           <ul class="navbar-nav mr-auto faq-categorias nav-pills nav-justified">
            <li class="nav-item">
              <a class="nav-link" href="#sesion">Configuración de cuenta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#publicar">Publicar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#compra">Compra</a>
            </li>
         </ul>
        </div>
      </nav>
      <!-- FIN de nav interno FAQ -->

    <div class="faq-container">

       <div class="cd-faq-items">
         <ul>
             <li class="cd-faq-title cd-faq-group" id="sesion"><h2>Configuración de cuenta</h2></li>
               <li>
                  <div class="cd-faq-trigger faq-pregunta" href="#0"><h4>¿Cómo crear un usuario nuevo?</h4></div>
                  <div class="cd-faq-content faq-respuesta">
                    Podés crear una cuenta rápidamente haciendo <strong><a class="nav-link active"  href="registrer.php">click acá</a></strong>.
                    <br>La única información que te vamos a pedir es una cuenta de correo electrónico válida y que elijas una contraseña.
                    <br>Luego de ingresar la información, te vamos a enviar un correo con un enlace para que puedas activar tu cuenta.
                    <br>Si necesitas ayuda con alguno de los pasos, contactanos.
                  </div>
                  <br>
               </li>
               <li>
                  <div class="cd-faq-trigger faq-pregunta" href="#0"><h4>¿Cómo cambio mi contraseña?</h4></div>
                  <div class="cd-faq-content faq-respuesta">
                    ¡Modificar tu contraseña es muy fácil! Sólo tenés que seguir estos simples pasos:
                    <ol>
                      <li>Si es que no iniciaste sesión, ingresá a tu <strong><a class="nav-link active"  href="login.php">cuenta</a></strong>.</li>
                      <li>Una vez que estés dentro de tu cuenta, hacé clic en "Mi Perfil".</li>
                      <li>En el campo "Contraseña" hacé clic en "Cambiar".</li>
                      <li>Ingresá y confirmá tu nueva contraseña, hacé clic en "Enviar" y ¡Listo!.</li>
                    </ol>
                    <br>Si luego de realizar todos los pasos, no pudiste cambiar tu contraseña, por favor contactate con nuestro equipo de Soporte.
                  </div>
                  <br>
               </li>

            <li class="cd-faq-title cd-faq-group" id="publicar"><h2>Publicar</h2></li>
            <li>
              <div class="cd-faq-trigger faq-pregunta" href="#0"><h4>¿Cómo publico un producto?</h4></div>
              <div class="cd-faq-content faq-respuesta">
                Para poder publicar y gestionar tus avisos correctamente, necesitás registrar tu correo.

                Si aún no lo hiciste, Ingresá al siguiente <strong><a class="nav-link active" href="registrer.php">link</a></strong> y completá los datos.
                <strong>Pasos para publicar tu anuncio:</strong>
                <ol>
                  <li>Seleccioná "Ingresar" en el menú de navegación, en el margen superior, y completá los campos con tu mail y contraseña.</li>
                  <li>Hacé clic en el botón "Vender".</li>
                  <li>Seleccioná la categoría a la que corresponde tu producto o servicio.</li>
                  <li>Añadí un título, fotos, y una descripción, contale a todos por qué tu anuncio es diferente. No olvides verificar tu información personal para que los compradores puedan contactarte.</li>
                  <li>Agregá fotos de buena calidad, así como también un título y descripción atractivos.</li>
                  <li>Hacé clic en "Publicar" al final de la página.</li>
                  <li>¡Ya casi está listo! Tu anuncio va a estar disponible en muy pronto. Te vamos a enviar un email para confirmarte cuando esté online.</li>
                </ol>
            </div>
             <br>
           </li>

            <li class="cd-faq-title cd-faq-group"id="compra"><h2>Compra</h2></li>
            <li>
              <div class="cd-faq-trigger faq-pregunta" href="#0"><h4>¿Cómo elegir a qué vendedor comprarle?</h4></div>
              <div class="cd-faq-content faq-respuesta">
                Si estás buscando un <b>servicio</b>, te recomendamos que leas las opiniones de las personas que ya lo contrataron. Y si querés comprar un auto o un inmueble, siempre es bueno llamar al anunciante para coordinar una visita y sacarte todas las dudas sobre lo que querés comprar.
                <br><strong>Leé en detalle la publicación</strong>
                <br>Revisá atentamente toda la publicación: prestá atención a la descripción y a las fotos para estar seguro de las condiciones de venta que propone el vendedor.
                Si el producto es nuevo, asegurate de que tenga garantía y que puedas devolverlo en caso de ser necesario.
              </div>
             <br>
           </li>
          </ul>
       </div>
    </div>

    <?php require_once('footer.php'); ?>
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script> <script src="js/bootstrap.min.js"></script>
  </body>
</html>
