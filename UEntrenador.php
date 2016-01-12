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
		<h3 class="center">Modificar entrenador</h3>
		<form class="form-horizontal" method="post" action="php/entrenador.php">
			<div class="form-group">
				<label class="col-sm-offset-3 col-sm-9">Nombre,Apellido</label>
				<label class="col-sm-3 control-label">Entrenador</label>
				<div class="col-sm-9">
					<select name="codigo" required>
						<?php 
							Connect();
							DesplegarC3Valores("select entr_codigo, entr_nombre, entr_apellido from entrenador","ENTR_CODIGO","ENTR_NOMBRE","ENTR_APELLIDO");
							Disconnect();
						?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Nombre</label>
				<div class="col-sm-9">
					<input title="Se requiere un nombre " type="text" placeholder="" name="nombre" required/>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label">Apellido</label>
				<div class="col-sm-9">
					<input title="se requiere el apellido" type="text" placeholder="" name="apellido" required/>
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