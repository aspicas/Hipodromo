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
	<link rel="stylesheet" type="text/css" href="css/index_style.css">
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	
	<?php include "navbar.php" ?>

	<div class="container space">
		<h3 class="center">Modificar carrera</h3>
		<form class="form-horizontal" method="post" action="php/registrarCarrera.php">
			<div class="form-group">
				<label class="col-sm-offset-3 col-sm-9">Carrera,Categoria,Fecha,N/C,Lote,Distancia,Variante,Longitud,Hora,Dia</label>
				<label for="haras" class="col-sm-3 control-label">Carrera</label>
				<div class="col-sm-9">
					<select name="codigo" required>
						<?php 
							Connect();
							DesplegarC11Valores("select carr_codigo,carr_nombre,carr_categoria,carr_fecha,carr_num_carrera,carr_lote,carr_distancia,carr_variante, pist_longitud, hora_inicio, hora_dia from carrera, pista, hora where fk_pist = pist_codigo and fk_hora = hora_codigo order by carr_codigo","CARR_CODIGO","CARR_NOMBRE","CARR_CATEGORIA","CARR_FECHA","CARR_NUM_CARRERA","CARR_LOTE","CARR_DISTANCIA","CARR_VARIANTE","PIST_LONGITUD","HORA_INICIO","HORA_DIA");
							Disconnect();
						?>
					</select>
				</div>				
			</div>
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
					<button type="submit" class="btn btn-default" name="modificar">Modificar</button>
				</div>
			</div>
		</form>
	</div>
</body>
</html>