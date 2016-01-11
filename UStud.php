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
		<h3 class="center">Modificar Stud</h3>
		<form class="form-horizontal" method="post" action="php/registrarStud.php">
			<div class="form-group">
				<label for="haras" class="col-sm-3 control-label">Stud</label>
				<div class="col-sm-9">
					<select name="codigo" required>
						<?php 
							Connect();
							DesplegarC2Valores("select stud_codigo, stud_nombre from stud order by stud_codigo","STUD_CODIGO","STUD_NOMBRE");
							Disconnect();
						?>
					</select>
				</div>
			</div>
			<div class="form-group">
					<label class="col-sm-3 control-label">Nombre:</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Nombre del stud" maxlength="20" name="nombre" required>
					</div>
				</div>				
				<div class="form-group">
					<label class="col-sm-3 control-label">Fecha creacion:</label>
					<div class="col-sm-9">
						<input type="date" class="form-control" name="fecha" required>
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