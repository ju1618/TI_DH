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
      <nav class="navbar navbar-expand-sm navbar-expand-md navbar-dark faq-temas">
        <button class="navbar-toggler" type="button" >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse">
           <ul class="navbar-nav mr-auto categorias">
            <li class="nav-item">
              <a class="nav-link" href="#sesion">Configuración de cuenta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#publicacion">Publicar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#compra">Compra</a>
            </li>
         </ul>
        </div>
      </nav>

       <div class="cd-faq-items">
         <ul>
             <li class="cd-faq-title cd-faq-group" id="sesion"><h2>Configuración de cuenta</h2></li>
               <li>
                  <div class="cd-faq-trigger pregunta" href="#0"><h4>¿Cómo crear un usuario nuevo?</h4></div>
                  <div class="cd-faq-content respuesta">
                    Podés crear una cuenta rápidamente haciendo <a class="nav-link"  href="#registrarse">click acá</a>.
                    <br>La única información que te vamos a pedir es una cuenta de correo electrónico válida y que elijas una contraseña.
                    <br>Luego de ingresar la información, te vamos a enviar un correo con un enlace para que puedas activar tu cuenta.
                    <br>Si necesitas ayuda con alguno de los pasos, contactanos.
                  </div>
                  <br>
               </li>
               <li>
                  <div class="cd-faq-trigger pregunta" href="#0"><h4>¿Cómo cambio mi contraseña?</h4></div>
                  <div class="cd-faq-content respuesta">
                    ¡Modificar tu contraseña es muy fácil! Sólo tenés que seguir estos simples pasos:
                    <ol>
                      <li>Si es que ya no iniciaste sesión, ingresá a tu <a class="nav-link"  href="#ingresar">cuenta</a>.</li>
                      <li>Una vez que estés dentro de tu cuenta, hacé clic en "Mi Perfil".</li>
                      <li>En el campo "Contraseña" hacé clic en "Cambiar".</li>
                      <li>Ingresá y confirmá tu nueva contraseña, hacé clic en "Enviar" y ¡Listo!.</li>
                    </ol>
                    <br>Si luego de realizar todos los pasos, no pudiste cambiar tu contraseña, por favor contactate con nuestro equipo de Soporte.
                  </div>
                  <br>
               </li>

            <li class="cd-faq-title cd-faq-group" id="publicacion"><h2>Publicación</h2></li>
            <li>
              <div class="cd-faq-trigger pregunta" href="#0"><h4>¿Cómo publico un producto?</h4></div>
              <div class="cd-faq-content respuesta">
                Para poder publicar y gestionar tus avisos correctamente, necesitás registrar tu correo.

                Si aún no lo hiciste, Ingresá al siguiente <a class="nav-link" href="#registro">link</a> y completá los datos.
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
              <div class="cd-faq-trigger pregunta" href="#0"><h4>¿Cómo elegir a qué vendedor comprarle?</h4></div>
              <div class="cd-faq-content respuesta">
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

  </body>
</html>
