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

	<div class="campo_area">
		<div class="area_1">
			<form method="post" action="php/registrarUsuario.php">	
				<h1>Apuesta</h1>
				<label>Tipo de apuesta:</label>
				<input type="text" maxlength="20" placeholder="Nombre de la apuesta">

				<label>Apuesta Mínima:</label>
				<input type="text" maxlength="8" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" placeholder="Monto">
				<span>NOTA: se trabaja con moneda nacional (BsF)</span>
				<label>Regla:</label>
				<textarea></textarea>	

				<input type="submit" value="Apostar" name="registrar">			
	     	</form>
		</div>
	</div>

	
	
</body>
</html>