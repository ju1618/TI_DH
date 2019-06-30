<?php

// Incluimos el controlador del registro-login
	require_once 'register-login-controller.php';

	require_once 'data/db/conection.php';
	// require_once 'data/db/migracion.php';

	// Si está logueda la persona la redirijo al profile
	if ( isLogged() ) {
		header('location: perfilusuario.php');
		exit;
	}



	require_once 'data/db/save.php';


//Paises del select
 $countries = [
 		'ar' => 'Argentina',
 		'bo' => 'Bolivia',
 		'br' => 'Brasil',
 		'co' => 'Colombia',
 		'cl' => 'Chile',
 		'ec' => 'Ecuador',
 		'pa' => 'Paraguay',
 		'pe' => 'Perú',
 		'uy' => 'Uruguay',
 		've' => 'Venezuela',
 	];

// Si entra por GET va a dar error, entonces creo la variable
$errorsInRegister = [];
// Voy a persitir lo siguiente
$id='';
$username = '';
$name = '';
$lastname = '';
$email = '';
$countryFromPost = '';




//Si es post se seteó?
if ($_POST) {
      // Variables de persistencia , que reciben lo que viene de post
      $username = trim($_POST['username']);
      $name = trim($_POST['name']);
      $lastname = trim($_POST['lastname']);
      $email = trim($_POST['email']);
      $countryFromPost = $_POST['country'];
			$imgAvatar=$_POST['avatar'];

      // funcion que nos retorna los errores que se hayan presentado
      $errorsInRegister = registerValidate();

      // Si no hay errores en el registro entonces guardo la imagen y los datos
      if ( !$errorsInRegister ) {

      			// // Guardo la imagen y obtengo el nombre aleatorio creado
      			$imgName = saveImage();
            // //
      			// // // Creo en $_POST una posición "avatar" para guardar el nombre de la imagen
      			$imgAvatar = $imgName;

      			// Guardo al usuario en el archivo JSON, y me devuelve al usuario que guardó en array
      			$theUser = saveUser();

      			// Al momento en que se registar vamos a mantener la sesión abierta
      			setcookie('userLoged', $theUser['email'], time() + 3000);

      			// Logueo al usuario
      			login($theUser);
      		}
      	}


 ?>
﻿<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrate!</title>
    <!-- Etiqueta meta -->
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <!-- LLamda a font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Llamada a bootstrap y relacionados -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script>
		$(document).on('ready', function() {
			$('#show-hide-passwd').on('click', function(e) {
				e.preventDefault();
				var current = $(this).attr('action');
				if (current == 'hide') {
					$(this).prev().attr('type','text');
					$(this).removeClass('fas fa-eye-slash').addClass('fas fa-eye').attr('action','show');
				}
				if (current == 'show') {
					$(this).prev().attr('type','password');
					$(this).removeClass('fas fa-eye').addClass('fas fa-eye-slash').attr('action','hide');
				}
			})
		})
	</script>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script>
	$(document).on('ready', function() {
		$('#show-hide-repasswd').on('click', function(e) {
			e.preventDefault();
			var current = $(this).attr('action');
			if (current == 'hide') {
				$(this).prev().attr('type','text');
				$(this).removeClass('fas fa-eye-slash').addClass('fas fa-eye').attr('action','show');
			}
			if (current == 'show') {
				$(this).prev().attr('type','password');
				$(this).removeClass('fas fa-eye').addClass('fas fa-eye-slash').attr('action','hide');
			}
		})
	})
</script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet">
    <!-- Enlazo mi hoja de estilo -->
    <link rel="stylesheet" href="css/styles-registro.css">
		<link rel="stylesheet" href="css/styles-footer.css">

  </head>
  <body>
      <div class="mi-contenedor">
          <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <h1><img src="images/logo.png" height="45px" width="55px" alt="logo"><strong>  market palace</strong></h1>
                        <div class="mis-descripciones">
                          <p>Un lugar donde encontrás todo lo que querés</p>
                        </div>
                    </div>
                </div>

                <!-- Aca va a ir el contenedor del form -->
                <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-6 offset-md-3 mi-form-contenedor">
                            <!-- Como si fuera el 'header' del formulario -->
                            <div class="mi-cabecera-form">
                                  <div class="mi-contenido-izquierdo">
                                        <h3>Encontra eso que buscas</h3>
                                        <p>Crea tu cuenta aqui!</p>
                                  </div>
                                  <div class="mi-contenido-derecho">
                                        <i class="far fa-user-circle"></i>
                                  </div>
                            <!-- Aca va a ir el formulario en si       -->
                            </div>
                            <div class="mi-principal-form">
                                  <form role="form" class="" action="" method="post" enctype="multipart/form-data">


																			<!-- <input type="hidden" name="id" value="<?php echo $oneUser['id'] ?>"> -->

                                      <!-- Agrupamientos de los inputs, usamos unas clases propias de bootstrap -->
                                      <div class="form-group">
                                            <input type="text" name="username" value="<?= $username; ?>" placeholder="Ingresa tu usuario..." class="form-control <?= isset($errorsInRegister['username']) ? 'is-invalid' : null ?>" id="username-form">
																						<div class="invalid-feedback">
          				                                <?= isset($errorsInRegister['username']) ? $errorsInRegister['username'] : null; ?>
        				                            </div>
                                      </div>
                                      <div class="form-group">
                                            <input type="password" name="password" value="" placeholder="Ingresa tu password..." class="form-control <?= isset($errorsInRegister['password']) ? 'is-invalid' : null ?>" id="password-form">
																						<i id="show-hide-passwd" action="hide" class="fas fa-eye-slash mi-check" aria-hidden="true"></i>
																						<div class="invalid-feedback">
          				                                <?= isset($errorsInRegister['password']) ? $errorsInRegister['password'] : null; ?>
        				                            </div>
                                      </div>
                                      <div class="form-group">
                                            <input type="password" name="rePassword" value="" placeholder="Repite tu password..." class="form-control <?= isset($errorsInRegister['rePassword']) ? 'is-invalid' : null ?>" id="password-form">
																						<i id="show-hide-repasswd" action="hide" class="fas fa-eye-slash mi-check" aria-hidden="true"></i>
																						<div class="invalid-feedback">
          				                                <?= isset($errorsInRegister['rePassword']) ? $errorsInRegister['rePassword'] : null; ?>
        				                            </div>
                                      </div>
                                      <div class="form-group">
                                            <input type="text" name="name" value="<?= $name; ?>" placeholder="Ingresa tu nombre..." class="form-control <?= isset($errorsInRegister['name']) ? 'is-invalid' : null ?>" id="name-form">
                                            <div class="invalid-feedback">
          				                                <?= isset($errorsInRegister['name']) ? $errorsInRegister['name'] : null; ?>
        				                            </div>
                                      </div>
                                      <div class="form-group">
                                            <input type="text" name="lastname" value="<?= $lastname; ?>" placeholder="Ingresa tu apellido..." class="form-control <?= isset($errorsInRegister['lastname']) ? 'is-invalid' : null ?>" id="lastname-form">
                                            <div class="invalid-feedback">
          				                                <?= isset($errorsInRegister['lastname']) ? $errorsInRegister['lastname'] : null; ?>
        				                            </div>
                                      </div>
                                      <div class="form-group">
                                            <input type="text" name="email" value="<?= $email; ?>" placeholder="Ingresa tu email..." class="form-control <?= isset($errorsInRegister['email']) ? 'is-invalid' : null ?>" id="email-form">
                                            <div class="invalid-feedback">
          				                                <?= isset($errorsInRegister['email']) ? $errorsInRegister['email'] : null; ?>
        				                            </div>
                                      </div>
                                      <div class="form-group">
                                        <label><b>País de nacimiento:</b></label>
								                                <select

									                                       name="country"
									                                       class="form-control <?= isset($errorsInRegister['country']) ? 'is-invalid' : null; ?>"
								                                >
									                              <option value="">Elegí un país</option>
									                              <?php foreach ($countries as $code => $country): ?>
										                            <option
											                           value="<?= $code ?>"
											                          <?= $code == $countryFromPost ? 'selected' : null; ?>
										                            >
											                          <?= $country ?>
										                            </option>
									                              <?php endforeach; ?> -->
								                                </select>
								                                <div class="invalid-feedback">
          				                              <?= isset($errorsInRegister['country']) ? $errorsInRegister['country'] : null; ?>
        				                                </div>
							                        </div>
                                      <!-- </div> -->
                                      <div class="form-group">
                                        <label><b>Imagen de perfil:</b></label>
								                                  <div class="custom-file">
									                                           <input
										                                                   type="file"
									 	                                                   name="avatar"
										                                                   class="custom-file-input <?= isset($errorsInRegister['avatar']) ? 'is-invalid' : null; ?>"
									                                           >
									                                           <label class="custom-file-label">Choose file...</label>
									                                 <div class="invalid-feedback">
	          				                                    <?= isset($errorsInRegister['avatar']) ? $errorsInRegister['avatar'] : null; ?>
	        				                                 </div>
								                                   </div>
                                      </div>
                                      <button type="submit" name="button" class=" btn btn-primary mi-boton">Ingresar</button>
                                  </form>
                            </div>
                      </div>
                </div>
                <!-- <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12 mis-redes-sociales">
                          <p>También estamos en las redes!</p>
                          <div class="mis-botones-redes">
                            <a class="mi-boton-redsocial" href="#">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a class="mi-boton-redsocial" href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="mi-boton-redsocial" href="#">
                                <i class="fab fa-twitter-square"></i>
                            </a>
                          </div>
                      </div>
                </div> -->
               </div>
		             <!-- <footer class="mi-footer"><h5 class="mi-texto-footer">© 2017-2019 Company, Inc.</h5></footer> -->
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 mi-sidebar">
            <ul class="nav navbar-nav list-inline">
                <li class="list-inline-item"><a class="" href="index.php"><i class="fas fa-home"></i></a></li>
                <li class="list-inline-item"><a class="" href="faqs.php"><i class="fas fa-question"></i></li>
                <li class="list-inline-item"><a class="" href="#"><i class="fas fa-headset"></i></li>
								<li class="list-inline-item"><a class="" href="perfilusuario.php"><i class="fas fa-user-alt"></i></a></li>
            </ul>
          </div>
      </div>
  </body>
	<?php require_once('footer.php'); ?>
</html>
