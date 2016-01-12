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
		<h3 class="center">Modificar apuesta</h3>
		<form class="form-horizontal" method="post" action="php/registrarApuesta.php">
			<div class="form-group">
				<label class="col-sm-offset-3 col-sm-9">Nombre,Minima,Regla</label>
				<label for="haras" class="col-sm-3 control-label">Apuesta</label>
				<div class="col-sm-9">
					<select name="codigo" required>
						<?php 
							Connect();
							DesplegarC4Valores("select apue_codigo,apue_nombre,apue_minimo,apue_regla from apuesta order by apue_codigo","APUE_CODIGO","APUE_NOMBRE","APUE_MINIMO","APUE_REGLA");
							Disconnect();
						?>
					</select>
				</div>
			</div>
			<div class="form-group">
					<label class="col-sm-3 control-label">Nombre:</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Nombre de la apuesta" maxlength="20" name="nombre" required>
					</div>
				</div>				
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
					<button type="submit" class="btn btn-default" name="modificar">Modificar</button>
				</div>
			</div>
		</form>
	</div>
</body>
</html>