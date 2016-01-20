<?php require("partials/header.php"); ?>
		
		<div class="fondo"></div>
		<div class="container-fluid contenedorPrincipal">
			<div class="row"> 
				<div class="col-xs-9 col-sm-5 col-md-5 col-lg-3">
					<form id="uploadForm" action="actions/imagenes.php" method="post" enctype="multipart/form-data">
				        <div class="avatar">
							<div class="avatar-content">
								<img src="assets/img/persona.png" id="vistaPrevia" class="imagen-avatar hide">
								<span id="iconAvatar" class="glyphicon 	glyphicon-camera icon"></span>
								<p id="textoAvatar">Añadir una foto de perfil</p>
							</div>
						</div>
						<div class="form-group">
							<input id="usuarioid" name="usuarioID" type="hidden" class="hide" value=<?php echo $usuarioid;?>>
							<input id="archivo"class="file-imagen" name="imagen" type="file" value="seleccionar imagen" /><br/>
				        	<button class="btn btn-primary btn-imagen" type="submit" name="action" value="Upload" >
				        	 	<span class="glyphicon glyphicon-open"></span>
				                <span class="">Upload</span>
				        	</button>
						</div>           
				    </form>		
				</div>
				<div class="col-xs-12 col-sm-7 col-md-7 col-lg-9">					
					<form class="form-horizontal contenedor" method="post" action="actions/actions.php" id="form-EditarPerfil">        
				        	<div class="row centrar">
				        		<div class="form-group">
					        		<div class="col-xs-12 col-md-12 col-lg-12">
										<h1 class="tituloForm">Editar Perfil</h1>
									</div>
								</div>
								<div class="form-group">
									<input id="usuarioid" name="usuarioID" type="hidden" class="hide" value=<?php echo $usuarioid;?>>
					        		<div class="col-xs-7 col-md-7 col-lg-7 columna">
					        			<input value="" name="nombreCompleto" id="nombreCompleto" placeholder="Nombre Completo" type="text" class="form-control">
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
					        			<input value="" name="mail" id="mail" placeholder="Correo Electronico" type="email" class="form-control">
					        			<span class="hide glyphicon glyphicon-remove form-control-feedback icon"></span>
			                			<span class="help-block"></span>	        			
					        		</div>
				        		</div>
				        		<div class="form-group">
					        		<div class="col-xs-7 col-md-7 col-lg-7 columna">
					        			<input value="" name="password" id="password" placeholder="Contraseña" class="form-control" type="password">
					        			<span class="hide glyphicon glyphicon-remove form-control-feedback icon"></span>
			                			<span class="help-block"></span>
					        		</div>
					        	</div>
					        	<div class="form-group">
					        		<div class="col-xs-7 col-md-7 col-lg-7 columna">
					        			<span id="userName" class="userName">@userName</span>  
					        			<span class="hide glyphicon glyphicon-remove form-control-feedback icon"></span>
			                			<span class="help-block"></span>
					        		</div>
					        	</div>
					        	<div class="form-group">
					        		<div class="col-xs-7 col-md-7 col-lg-7 columna">
					        			<button  type="submit"  name="action" value="actualizar" class="btn btn-primary form-control ">Editar Perfil</button>		        			
					        		</div>
					        	</div>	
				        	</div>	              
			        </form>	       
				</div>
			</div>
		</div>
	</body>
</html>

<link rel="stylesheet" href="assets/css/formEditarPerfil.css">
<script src="assets/js/vendor/jquery-1.11.3.min.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>
<script src="assets/js/formEditarPerfil.js"></script>