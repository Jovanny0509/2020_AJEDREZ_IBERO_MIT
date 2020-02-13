<?
/******************************************
@author: IBERO-MIT-PILARES
@desc: Módulo de inicio
******************************************/?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>AJEDREZ IBERO-MIT-PILARES/</title> 
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--CSS-->
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/index.css">
	</head>
	<body>
	<!--Modal para registrar usuario-->
	<div class="modal fade" id="registroUsuario" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  	<div class="modal-dialog" role="document">
		    <div class="modal-content">
		      	<div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Registrar nuevo usuario</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
		      	</div>
		      	<div class="modal-body">
		      		<div id="formulario">
			      		<div class="form-group">
			      			<label for="nombre">Nombre: </label>
							<input  type="text" class="form-control registro" id="nombre" name="nombre" placeholder="Nombre" />
						</div>
						<div class="form-group">
			      			<label for="usuario">Usuario: </label>
							<input type="text" class="form-control registro" id="usuario" name="usuario" placeholder="Usuario" />
						</div>
						<div class="form-group">
			      			<label for="password">Contraseña: </label>
							<input type="password" class="form-control registro" id="password" placeholder="Contraseña" />
						</div>
						<div class="form-group">
			      			<label for="password2">Confirmar Contraseña: </label>
							<input type="password" class="form-control registro" id="password2" placeholder="Contraseña" />
						</div>
						<div class="form-group">
			      			<label for="email">E-mail: </label>
							<input type="text" class="form-control registro" id="email" name="email" placeholder="Confirmar" />
						</div>
						<div class="form-group">
			      			<p>Discapacidad visual</p>
							<input type="checkbox" class="form-control registro" id="discapacidad" name="discapacidad" value="1" />Si<br>
						</div>
						<div class="modal-footer">
			        		<input type="button" value="Crear" id="crearUsuario" class="btn btn-danger btn-block"/>
		      			</div>
					</div>
		      	</div>
		    </div>
		</div>
	</div>
	<!--Termina modal para registrar usuario-->
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-heading">
				<h2 class="text-center">AJEDREZ</h2>
			</div>
			<div class="modal-body">
				<!--Login-->
				<form action="autenticarUsuario.php" method="post">
					<div class="form-group">
						<input type="text" class="form-control auth" name="usuarioAuth" id="usuarioAuth" placeholder="Usuario" />
					</div>
					<div class="form-group">
						<input type="password" class="form-control auth" name="passwordAuth" id="passwordAuth" placeholder="Contraseña" />
					</div>
					<div class="form-group text-center">
						<button id="ingresar" type="submit" class="btn btn-danger btn-block">Ingresar</button>
					</div>
				</form>
				<!--Botón para registrarse-->
				<div class="form-group text-center">
					<button type="submit" class="btn btn-link" data-toggle="modal" id="registrar" data-target="#registroUsuario">Regístrate</button>
				</div>
			</div>
		</div>
	</div>
	<!--Scripts-->
	<script src="js/jquery/jquery-3.4.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="js/index.js"></script>
	</body>
</html>