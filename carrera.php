<?php 
include 'php/oracledb.php';
?>
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
			<form class="form-horizontal" method="post" action="php/registrarCarrera.php">	
				<h1 class="center">Registrar Carrera</h1>
			    <div class="form-group">
					<label class="col-sm-3 control-label">Nombre:</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="nombre" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Categoria:</label>
					<div class="col-sm-9">
						<select name="categoria" required/>
							<option value="copa">Copa</option>
							<option value="normal">Normal</option>
							<option value="clasico">Clásico</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Fecha:</label>
					<div class="col-sm-9">
						<input type="date" name="fecha" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Numero de carrera:</label>
					<div class="col-sm-9">
						<input onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" name="numCarr" maxlength="2" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Lote:</label>
					<div class="col-sm-9">
						<input type="text" name="lote" required/>		
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Distancia:</label>
					<div class="col-sm-9">
						<input onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" maxlength="4" name="distancia" required/>	
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Variante:</label>
					<div class="col-sm-9">
						<input onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" maxlength="4" name="variante" required/>	
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Pista:</label>
					<div class="col-sm-9">
						<select name="pista" required>							
							<option>Longitud</option>
							<?php
								Connect();
								DesplegarC2Valores("select PIST_CODIGO, PIST_LONGITUD from pista order by pist_longitud","PIST_CODIGO","PIST_LONGITUD");
								Disconnect();
							?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Hora:</label>
					<div class="col-sm-3">
						<select name="inicio" required>
							<?php 
								Connect();
								DesplegarC1Valores("select distinct hora_inicio from hora order by hora_inicio","HORA_INICIO");
								Disconnect();
							?>
						</select>
					</div>
					<div class="col-sm-3">
						<select name="dia" required>							
							<?php 
								Connect();								
								DesplegarC1Valores("select distinct hora_dia from hora order by hora_dia desc","HORA_DIA");								
								Disconnect();
							?>
						</select>
					</div>
				</div>				
				<div class="form-group">
					<div class="col-sm-offset-3 col-sm-9">
						<input class="botonregistar" type="submit" value="registrar" name="registrar">
					</div>
				</div>				
     		</form>
	</div>
</body>
</html>