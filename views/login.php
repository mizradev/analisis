<?php
	error_reporting(0);
    
    require_once 'model/conexion.php'; //conexion a la base de datos
	require_once 'controllers/login.php'; //validacion a la base de datos
?>
<!DOCTYPE html>
<html>
<head>
	<title>registro de calificcones</title>
 	<link rel="stylesheet" type="text/css" href="assetss/logine/login.css">
	 <link rel="icon" type="image/png" sizes="16x16" href="views/assets/images/logo.png">

</head>
<body>




<div class="container">



         <br><h4 class="d-flex   justify-content-center  links ">GRUPO 2</h4>
	<div class="d-flex justify-content-center h-75">
		<div class="card">
	          	

			<div class="card-header"><img src="views/assets/images/logol.png" width="110" height="110" align="right">
			  <h3>Iniciar Sesión</h3>
			</div>
			<div class="card-body">
			
				<form action="" method="POST"> <!------ enviar al controlador---------->				
				<div class="d-flex justify-content-left links">USUARIO:</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name= "username" placeholder="Usuario">
						
					</div>
					<div class="d-flex justify-content-left links">CONTRASEÑA:</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" name="password" placeholder="Contraseña">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Recordar Contraseña
					</div>
				

					<div class="form-group">
						<input type="submit" value="ENTRAR" class="btn float-right login_btn">
					</div>
					
				</form>
			</div>
			<div class="card-footer">
			     	<div class="d-flex justify-content-center">
					
				</div>
				<div class="alert text-warning"><?php echo isset($alert) ? $alert:''; ?></div>
					  
			</div>
		</div>
	</div>
	<footer class="footer text-center">
        <span>© 2020 I Periodo, Grupo numero 2, Lenguaje de la Programacion IV | 
          <a href="https://www.unah.edu.hn/">Universidad Nacional Autonoma de Honduas.<i class=""></i></a></span>
      </footer>
</div>

</body>
</html>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->