<?php require("partials/header.php"); ?>
		<div class="fondo"></div>
		<div class="container-fluid contenedor">
			<div class="row"> 
				<div class="col-xs-9 col-sm-5 col-md-5 col-lg-3 datosUser ">
					<div class="avatar">
						<img src="" id="avatar" class="img-avatar hide">
						<span id="iconAvatar" class="glyphicon 	glyphicon-camera icon"></span>
					</div>
					<div class="User">
						<a href="formEditarPerfil.php?id=<?php echo $usuarioid;?>" id="nombreUsuario" class="nombreUsuario">Nombre Usuario</a><Br>
						<span id="userName" class="userName">@UserName</span>
						<div class="row">
							<span id="usuarioid" type="hidden" class="hide"><?php echo $usuarioid;?></span>
							<div class="col-xs-4 col-md-4 col-lg-4">
								<span class="span-titulo">TWEETS</span>
								<span id="cantidadTweets" class="span-valor">0</span>
							</div>
							<div class="col-xs-4 col-md-4 col-lg-4">
								<span class="span-titulo">SIGUIENDO</span>
								<span id="cantidadSiguiendo" class="span-valor">0</span>
							</div>
							<div class="col-xs-4 col-md-4 col-lg-4">
								<span class="span-titulo">SEGUIDORES</span>
								<span id="cantidadSeguidores" class="span-valor">0</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-8 col-md-6 col-lg-5 contenedor-tweets ">
					<div id="TweetBox" class="TweetBox">
						 <form class="form-horizontal" id="form-comentario">
							<textarea maxlength="140" placeholder="¿Qué está pasando?" type="text" class="form-control input-tweet" id="inputTweet"></textarea>
							<div class="form-group">
								<button id="btnTwittear" value="addComentario" type="submit" class="btn btn-primary pull-right button-tweet hide"> 
									<span class="glyphicon glyphicon-pencil"></span>
					                <span class="">Twittear</span>
								</button>
								<span id="contador" class="contadorTweet pull-right hide">140</span>
							</div>
						</form>
					</div>
					<div id="contenedor-Tweets"></div>
				</div>
				<div class="col-xs-12 col-sm-8 col-md-3 col-lg-3 copyRight">
					 <span>Nicolas Baduel Copyright © - UTN Pogramación Avanzada II - 2015</span>
				</div>
			</div>
		</div>
	</body>
	
</html>
<link rel="stylesheet" href="assets/css/menuInicio.css">
<script src="assets/js/vendor/jquery-1.11.3.min.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>
<script src="assets/js/menuInicio.js"></script>

