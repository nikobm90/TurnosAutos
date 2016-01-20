<?php require("partials/header.php"); ?>
	<div class="message">
		  <div class="row">
		    <span class="message-text">El nombre de usuario y la contraseña que ingresaste no coinciden con nuestros registros.<Br> Por favor, revisa e inténtalo de nuevo.</span>
		    <a id="mensajeClose" role="button" class="glyphicon glyphicon-remove remover" href="#"></a>
		  </div>
	</div>
	
	<div class="container contenedor">
			<form class="form-horizontal" method="post" action="actions/actions.php" id="form-Login">
		          	            
		        <div class="form-group">
		        	<div class="row">
						<div class="col-xs-6 col-md-6 col-lg-6 columna">
							<h1 class="tituloForm">Inicia sesión en Twitter</h1>
						</div>
		        		<div class="col-xs-6 col-md-6 col-lg-6 columna">
		        			<input name="idLogin" id="userId" placeholder="Télefono, Correo o Usuario" type="text" class="form-control">
		        		</div>
		        		<div class="col-xs-6 col-md-6 col-lg-6 columna">
		        			<input  name="passwordLogin" id="password" placeholder="Contraseña" class="form-control col-margen" type="password">	
		        		</div>
		        		<div class="col-xs-10 col-md-10 col-lg-10 columna col-margen">
		        			<button type="submit" name="action" value="validar" class="btn btn-primary">Iniciar sesión</button>
		        			<label class="remember">
					        	<input type="checkbox" value="1" name="remember_me" checked="checked">
					        	<span>Recordar mis datos</span>
					      	</label>
					      	<span class="separator">·</span>
					      	<a class="forgot" href="#">¿Olvidaste tu contraseña?</a>
		        		</div>	
		        	</div>
		        </div>        
	        </form>	
	        <div class="row registro">
		        <p>¿Eres nuevo en Twitter?
		  			<a id="registrarse" href="index.php">Regístrate ahora »</a>
				</p>
	        </div>
	</div>

	</body>

</html>
  <link rel="stylesheet" href="assets/css/errorLogin.css">
  <script src="assets/js/vendor/jquery-1.11.3.min.js"></script>
  <script src="assets/js/vendor/bootstrap.min.js"></script>
  <script src="assets/js/errorLogin.js"></script>