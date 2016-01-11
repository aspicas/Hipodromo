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
				<h1>Carrera</h1>
				<label> Puesto de partida</label>
				<input type="number" name="usuario" required>
			    <label id="c1">Posicion</label>
				<input type="number" maxlength="2" name="nombre" required/>
				<label>Velocidad</label>
				<input type="number" maxlength="2" name="apellido" required/>
				<label> Cuerpo</label>
				<input type="text" placeholder="" name="clave" required>	
				<label>Retiro</label>
				<select name="opcion" id="opcion" required>
					<option value="no">No</option>
					<option value="si">Si</option>
				</select>
				</br>
				</br>
				<label> N. llamado</label>
				<input type="number" maxlength="2" name="NLlamado" required>

				<label>Fecha ins.</label>
				<input type="date" placeholder="" name="fecha" required>

				<label>Monto</label>
				<input type="number" name="NLlamado" required>

				<label>Fecha Limite ins.</label>
				<input type="date" placeholder="" name="fecha" required>

				<label>Favorito</label>
				<select name="opcion" id="opcion" required>
					<option value="no">No</option>
					<option value="si">Si</option>
				</select>

				</br>
				</br>

				<input type="submit" value="Registrar" name="registrar">			
	     	</form>
		</div>
	</div>

	
	
</body>
</html>