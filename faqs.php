<!-- PROBAR CON ESTO https://getbootstrap.com/docs/4.3/components/collapse/ -->
<!-- probar hacer un foreach para mostrar las preguntas y respuestas y tener un array con preguntas y respuesas en otro archivo -->
<?php  $nombreDeSeccion = FAQ ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">

    <?php   require_once 'head.php' ?>
    <link rel="stylesheet" href="css/stylefaq.css">
  </head>

  <body class="faq-cuerpo">

    <?php require_once('nav-bar.php'); ?>
    <!-- Inicio de nav interno de FAQ    NOTA: lo saque xq no puedo resolver el tema de que se va al 0 del viewport--->

      <!-- <nav class="navbar navbar-dark fixed-top faq-temas justify-content-center">
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
      </nav> -->
<!--                  FIN de nav interno FAQ                  -->

<!--                        inicio de contenido FAQ            -->

<!-- NOTA:
1. ponerle una clase a los titulos h4 para ponerles de fondo el fucsia y seguir con la misma estetica. que ocupe todo el ancho
2. arreglar el margin top del <body>
3. cambiar la estetica de los titulos desplegables
4. cambiar los fondos de los titulos desplegables por el mismo del fondo o hacerlos trasnparentes
</body>
-->

<div class="accordion" id="sesion">
  <h4>Configuracion de Cuenta</h4>
  <div class="card">
    <div class="card-header" id="headingUsuarioNuevo">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#usuarioNuevo" aria-expanded="true" aria-controls="collapseUsuarioNuevo">
          <h5>¿Cómo crear un usuario nuevo?</h5>
        </button>
      </h2>
    </div>

    <div id="usuarioNuevo" class="collapse show" aria-labelledby="headingUsuarioNuevo" data-parent="#sesion">
      <div class="card-body">
        Podés crear una cuenta rápidamente haciendo <strong><a class="nav-link active"  href="registrer.php">click acá</a></strong>
        La única información que te vamos a pedir es una cuenta de correo electrónico válida y que elijas una contraseña.
        Luego de ingresar la información, te vamos a enviar un correo con un enlace para que puedas activar tu cuenta.
        Si necesitas ayuda con alguno de los pasos, contactanos.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingCambioContrasenia">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#cambioContrasenia" aria-expanded="false" aria-controls="collapseCambioContrasenia">
          <h5>¿Cómo cambio mi contraseña?</h5>
        </button>
      </h2>
    </div>
    <div id="cambioContrasenia" class="collapse" aria-labelledby="headingCambioContrasenia" data-parent="#sesion">
      <div class="card-body">
        ¡Modificar tu contraseña es muy fácil! Sólo tenés que seguir estos simples pasos:
        <ol>
          <li>Si es que no iniciaste sesión, ingresá a tu <strong><a class="nav-link active"  href="login.php">cuenta</a></strong></li>
          <li>Una vez que estés dentro de tu cuenta, hacé clic en "Mi Perfil".</li>
          <li>En el campo "Contraseña" hacé clic en "Cambiar".</li>
          <li>Ingresá y confirmá tu nueva contraseña, hacé clic en "Enviar" y ¡Listo!.</li>
        </ol>
        <br>Si luego de realizar todos los pasos, no pudiste cambiar tu contraseña, por favor contactate con nuestro equipo de Soporte.
      </div>
    </div>
  </div>
</div>

<div class="accordion" id="publicar">
  <h4>Publicar</h4>
  <div class="card">
    <div class="card-header" id="headingComoPublicar">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#comoPublicar" aria-expanded="false" aria-controls="collapseComoPublicar">
          <h5>¿Cómo publico un producto?</h5>
        </button>
      </h2>
    </div>
    <div id="comoPublicar" class="collapse" aria-labelledby="headingComoPublicar" data-parent="#sesion">
      <div class="card-body">
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
    </div>
  </div>
</div>

<div class="accordion" id="compra">
  <h4>Compra</h4>
  <div class="card">
    <div class="card-header" id="headingAQuienComprar">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#aQuienComprar" aria-expanded="false" aria-controls="collapseAQuienComprar">
          <h5>¿Cómo elegir a qué vendedor comprarle?</h5>
        </button>
      </h2>
    </div>
    <div id="aQuienComprar" class="collapse" aria-labelledby="headingAQuienComprar" data-parent="#compra">
      <div class="card-body">
        Si estás buscando un <b>servicio</b>, te recomendamos que leas las opiniones de las personas que ya lo contrataron. Y si querés comprar un auto o un inmueble, siempre es bueno llamar al anunciante para coordinar una visita y sacarte todas las dudas sobre lo que querés comprar.
        <br><strong>Leé en detalle la publicación</strong>
        <br>Revisá atentamente toda la publicación: prestá atención a la descripción y a las fotos para estar seguro de las condiciones de venta que propone el vendedor.
        Si el producto es nuevo, asegurate de que tenga garantía y que puedas devolverlo en caso de ser necesario.
      </div>
    </div>
  </div>
</div>

<!--                       FIN de contenido  FAQ                -->


    <?php require_once('footer.php'); ?>
    
  </body>
</html>
