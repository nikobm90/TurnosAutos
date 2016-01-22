<?php require("partials/header.php"); ?>

<div class="container login">
	<div class="row">
		<div class="col-md-6 divTexto">
        	<h1>Bienvenido a SAT.</h1>
        	<p>Conéctate con tus amigos y otras personas fascinantes. Obtén actualizaciones instantáneas de las cosas que te interesan. Mira los eventos que se están desarrollando, en tiempo real, desde todos los ángulos.</p>
    	</div>
    	<div class="col-md-3 divForm">
	        <form class="form-horizontal" method="post" action="actions/actions.php" id="form-Login">		          	            
		        <div class="form-group has-feedback formIngresar">
		             <input name="idLogin" id="userId" placeholder="Télefono, Correo o Usuario" type="text" class="form-control">
		                
	           		<table class="flex-table password-signin">
				      <tbody>
					      <tr>
					        <td class="flex-table-primary">
					          <div class="password flex-table-form">
					            <input  name="passwordLogin" id="password" placeholder="Contraseña" type="password" class="form-control margenTextbox" >
					          </div>
					        </td>
					        <td class="flex-table-secondary">
					          <button type="submit" name="action" value="validar" class="btn btn-primary margenTextbox">Iniciar sesión</button>
					        </td>
					      </tr>
				      </tbody>
				    </table>				    
					<div class="remember">
					      <label class="remember">
					        <input type="checkbox" value="1" name="remember_me" checked="checked">
					        <span>Recordar mis datos</span>
					      </label>
					      <span class="separator">·</span>
					      <a class="forgot" href="#">¿Olvidaste tu contraseña?</a>
					</div>
		        </div>
			</form>
    	</div>
	</div>
</div>

<?php require("partials/footer.php"); ?>

<script src="assets/js/vendor/jquery-1.11.3.min.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>
        
