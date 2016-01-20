<?php require("partials/header.php"); ?>
	
	<?php	
	    $var_nombreCompleto = isset($_POST["nombreCompleto"]) ? $_POST["nombreCompleto"] : null;
	    $var_mail = isset($_POST["mail"]) ? $_POST["mail"] : null;
	    $var_password = isset($_POST["password"]) ? $_POST["password"] : null;	    
	?>
	
	<div class="container contenedor">
			<form class="form-horizontal" method="post" action="actions/actions.php" id="form-Registro">        
		        	<div class="row centrar">
		        		<div class="form-group">
			        		<div class="col-xs-12 col-md-12 col-lg-12">
								<h1 class="tituloForm">Únete hoy a Twitter.</h1>
							</div>
						</div>
						<div class="form-group">
			        		<div class="col-xs-7 col-md-7 col-lg-7 columna">
			        			<input value=<?php echo $var_nombreCompleto; ?> name="nombreCompleto" id="nombreCompleto" placeholder="Nombre Completo" type="text" class="form-control">
			        			<span class="hide glyphicon glyphicon-remove form-control-feedback icon"></span>
		            			<span class="help-block"></span>	        			
			        		</div>
		        		</div>
						<div class="form-group">
			        		<div class="col-xs-7 col-md-7 col-lg-7 columna">
			        			<input name="telefono" id="telefono" placeholder="Télefono" type="tel" class="form-control">
			        			<span class="hide glyphicon glyphicon-remove form-control-feedback icon"></span>
	                			<span class="help-block"></span>	        			
			        		</div>
			        	</div>
			        	<div class="form-group">
			        		<div class="col-xs-7 col-md-7 col-lg-7 columna">
			        			<input value=<?php echo $var_mail; ?> name="mail" id="mail" placeholder="Correo Electronico" type="email" class="form-control">
			        			<span class="hide glyphicon glyphicon-remove form-control-feedback icon"></span>
	                			<span class="help-block"></span>	        			
			        		</div>
		        		</div>
		        		<div class="form-group">
			        		<div class="col-xs-7 col-md-7 col-lg-7 columna">
			        			<input value=<?php echo $var_password; ?> name="password" id="password" placeholder="Contraseña" class="form-control" type="password">
			        			<span class="hide glyphicon glyphicon-remove form-control-feedback icon"></span>
	                			<span class="help-block"></span>
			        		</div>
			        	</div>
			        	<div class="form-group">
			        		<div class="col-xs-7 col-md-7 col-lg-7 columna">
			        			<input  name="userName" id="userName" placeholder="Nombre de Usuario" class="form-control" type="text">
			        			<span class="hide glyphicon glyphicon-remove form-control-feedback icon"></span>
	                			<span class="help-block"></span>
			        		</div>
			        	</div>
			        	<div class="form-group">
			        		<div class="col-xs-7 col-md-7 col-lg-7 columna">
			        			<button  type="submit"  name="action" value="nuevoUser" class="btn btn-primary form-control ">Registrate</button>		        			
			        		</div>
			        	</div>	
		        	</div>
		              
	        </form>	
	       
	</div>

	</body>

</html>
 <link rel="stylesheet" href="assets/css/formRegistro.css">
 <script src="assets/js/vendor/jquery-1.11.3.min.js"></script>
 <script src="assets/js/vendor/bootstrap.min.js"></script>
 <script src="assets/js/formRegistro.js"></script>
 