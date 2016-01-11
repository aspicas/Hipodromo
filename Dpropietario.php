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
		<h3 class="center">Borrar propietario</h3>
		<form class="form-horizontal" method="post" action="php/propietario.php">
			<div class="form-group">
				<label for="haras" class="col-sm-3 control-label">Propietario</label>
				<div class="col-sm-9">
					<select name="codigo" required>
						<?php 
							Connect();
							DesplegarC4Valores("select prop_codigo,prop_nombre,prop_apellido,prop_cedula from propietario","PROP_CODIGO","PROP_CEDULA","PROP_NOMBRE","PROP_APELLIDO");
							Disconnect();
						?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9">
					<button type="submit" class="btn btn-default" name="borrar">Borrar</button>
				</div>
			</div>
		</form>
	</div>
</body>
</html>