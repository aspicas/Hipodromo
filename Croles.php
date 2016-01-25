
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
		<form class="form-horizontal" method="post" action="php/CRUDTelefono.php">
			<div class="form-group">
				<label class="col-sm-offset-3 col-sm-9">Roles</label>
				<div class="form-group">
					<label class="col-sm-3 control-label">Opciones</label>
					<div class="col-sm-9">
						<select name="opcion" id="opcion" required>
							<option>Seleccionar</option>
							<option value="crear">Crear</option>
							<option value="modificar">Modificar</option>
							<option value="eliminar">Eliminar</option>
						</select>
					</div>				
				</div>
				<label for="haras" class="eliminar modificar col-sm-3 control-label">Rol actual</label>
				<div class="col-sm-9">
					<select class="eliminar modificar req" name="codigo" required>
						<option>Seleccionar</option>
						
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="crear col-sm-3 control-label">Rol</label>
				<div class="col-sm-9">
					<input class="crear req" type="text" class="form-control" name="telefono" required>
				</div>
				<br>
				<label class="crear modificar col-sm-3 control-label" name="telefono">Permiso</label>
				<select class="crear modificar req" name="codigo" required>
							<option>Seleccionar</option>
							
						</select>
			</div>			
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9">
					<button type="submit" class="btn btn-default" name="realizar">Realizar</button>
				</div>
			</div>
		</form>
	</div>
	<script>
		$(document).ready(function () {
			$(".crear").hide();
			$(".modificar").hide();
			$(".eliminar").hide();
			$(".req").removeAttr("required");
			$('#opcion').on('change', function() {
			  if (this.value == "crear") {			  	
			  	$(".modificar").hide();
			  	$(".eliminar").hide();
			  	$(".req").removeAttr("required");
			  	$(".crear").show();
			  	$(".crear").attr("required", "required");
			  }
			  else if (this.value == "modificar"){
			  	$(".crear").hide();
			  	$(".eliminar").hide();
			  	$(".req").removeAttr("required");
			  	$(".modificar").show();
			  	$(".modificar").attr("required", "required");
			  }
			  else if (this.value == "eliminar") {
			  	$(".crear").hide();
				$(".modificar").hide();
				$(".eliminar").show();
				$(".req").removeAttr("required");
				$(".eliminar").attr("required", "required");
			  }
			  else {
			  	$(".crear").hide();
				$(".modificar").hide();
				$(".eliminar").hide();
				$(".req").removeAttr("required");
			  };			  
			});
		});
	</script>
</body>
</html>