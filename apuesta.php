<!DOCTYPE>
<html>
<head>
	<title>Hipodromo la Rinconada</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" width="device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/registro.css">	
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<?php include "navbar.php" ?>

	<div class="container">		
			<form class="form-horizontal" method="post" action="php/registrarApuesta.php">	
				<h1>Crear Apuesta</h1>
				<div class="form-group">
					<label class="col-sm-3 control-label">Nombre:</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Nombre de la apuesta" maxlength="20" name="nombre" required>
					</div>
				</div>
				<span>NOTA: se trabaja con moneda nacional (BsF)</span>
				<p></p>
				<div class="form-group">
					<label class="col-sm-3 control-label">Apuesta Mínima:</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" maxlength="5" placeholder="Monto" maxlength="20" name="minimo" required>
					</div>
				</div>				
				<div class="form-group">
					<label class="col-sm-3 control-label">Regla:</label>
					<div class="col-sm-9">
						<textarea rows="2" cols="40" maxlength="150" name="regla" required></textarea>						
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-3 col-sm-9">
						<input class="botonregistar" type="submit" value="crear" name="crear">
					</div>
				</div>
	     	</form>
	</div>	
</body>
</html>