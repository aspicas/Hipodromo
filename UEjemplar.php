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
		<h3 class="center">Modificar Ejemplar</h3>
		<form class="form-horizontal" method="post" action="php/registrarEjemplar.php">
			<div class="form-group">
				<label class="col-sm-offset-3 col-sm-9">Nombre,Fecha,Sexo,Tatuaje,Pelaje,</label>
				<label for="haras" class="col-sm-3 control-label">Ejemplar</label>
				<div class="col-sm-9">
					<select name="codigo" required>
						<?php 
							Connect();
							DesplegarC6Valores("select ejem_codigo,ejem_nombre,ejem_fecha_nac,ejem_sexo,ejem_tatuaje,ejem_pelaje from ejemplar order by ejem_codigo","EJEM_CODIGO","EJEM_NOMBRE","EJEM_FECHA_NAC","EJEM_SEXO","EJEM_TATUAJE","EJEM_PELAJE");
							Disconnect();
						?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="nombre" class="col-sm-3 control-label">Nombre *</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
				</div>
			</div>
			<div class="form-group">
				<label for="pelaje" class="col-sm-3 control-label">Pelaje *</label>
				<div class="col-sm-9">
					<select name="pelaje" required>
							<option></option>
							<option value="C">Castaño</option>
							<option value="A">Alazan</option>
							<option value="Z">Zaino</option>
							<option value="T">Tordillo</option>
						</select>
				</div>
			</div>
			<div class="form-group">
				<label for="fnac" class="col-sm-3 control-label">Fecha Nacimiento *</label>
				<div class="col-sm-9">
					<input type="date" class="form-control" name="fnac" required>
				</div>
			</div>
			<div class="form-group">
				<label for="sexo" class="col-sm-3 control-label">Sexo *</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="sexo" value="C" id="macho" required> Caballo							
					</label>
					<label class="radio-inline">
						<input type="radio" name="sexo" value="Y" id="hembra" required> Yegua
					</label>					
				</div>
			</div>
			<div class="form-group">
				<label for="tatuaje" class="col-sm-3 control-label">Tatuaje *</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" name="tatuaje" placeholder="Tatuaje" required>
				</div>
			</div>
			<div class="form-group">
				<label for="raza" class="col-sm-3 control-label">Raza</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" name="raza" placeholder="Raza">
				</div>
			</div>
			<div class="form-group">
				<label for="padre" class="col-sm-3 control-label">Padre del ejemplar</label>
				<div class="col-sm-9">
					<!--<input type="text" class="form-control" name="padre" placeholder="Padre">-->
					<?php 
						Connect();
						DesplegarPadre("select ejem_codigo, ejem_nombre from ejemplar where ejem_sexo='C'");
						Disconnect();
					?>
				</div>
			</div>
			<div class="form-group">
				<label for="madre" class="col-sm-3 control-label">Madre del ejemplar</label>
				<div class="col-sm-9">
					<!--<input type="text" class="form-control" name="madre" placeholder="Madre">-->
					<?php
						Connect();
						DesplegarMadre("select ejem_codigo, ejem_nombre from ejemplar where ejem_sexo='Y'");
						Disconnect();
					?>
				</div>
			</div>
			<div class="form-group">
				<label for="haras" class="col-sm-3 control-label">Nombre del Haras *</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" name="haras" placeholder="Nombre del Haras" required>
				</div>
			</div>
			<div class="form-group">
				<label for="pais" class="col-sm-3 control-label">Pais *</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" name="pais" placeholder="Pais donde se ubica el haras" required>
				</div>
			</div>
			<div class="form-group">
				<label for="estado" class="col-sm-3 control-label">Estado *</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" name="estado" placeholder="Estado donde se ubica el haras" required>
				</div>
			</div>
			<div class="form-group">
				<label for="municipio" class="col-sm-3 control-label">Municipio *</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" name="municipio" placeholder="Municipio donde se ubica el haras" required>
				</div>
			</div>
			<div class="form-group">
				<label for="parroquia" class="col-sm-3 control-label">Parroquia *</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" name="parroquia" placeholder="Parroquia donde se ubica el haras" required>
				</div>
			</div>
			<div class="form-group">
				<label for="puesto" class="col-sm-3 control-label">Numero de puesto *</label>
				<div class="col-sm-9">
					<input class="form-control" name="puesto" placeholder="Numero de puesto" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required>
				</div>
			</div>
			<div class="form-group">				
				<div class="col-sm-offset-4 col-sm-4">
					<label for="fini" class="col-sm-3 control-label">Fecha * Inicio </label>
					<div class="col-sm-9">
						<input type="date" class="form-control" name="fini" required>
					</div>
				</div>
				<div class="col-sm-4">
					<label for="ffin" class="col-sm-3 control-label">Fecha Fin</label>
					<div class="col-sm-9">
						<input type="date" class="form-control" name="ffin">
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="caballeriza" class="col-sm-3 control-label">Numero de la caballeriza*</label>
				<div class="col-sm-9">
					<input class="form-control" name="caballeriza" placeholder="Numero de la caballeriza" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required>
				</div>
			</div>
			<div class="form-group">
				<label for="vete" class="col-sm-3 control-label">Veterinario</label>
				<div class="col-sm-3">					
					<?php
						Connect();
						DesplegarVeterinario("select * from veterinario");
						Disconnect();
					?>
				</div>
				<label for="entr" class="col-sm-3 control-label">Entrenador</label>
				<div class="col-sm-3">
					<?php 						
						Connect();
						DesplegarEntrenador("select * from ENTRENADOR");
						Disconnect();
					?>
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