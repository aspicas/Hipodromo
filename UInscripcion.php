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
		<h3 class="center">Modificar inscripcion</h3>
		<form class="form-horizontal" method="post" action="php/registrarInscripcion.php">
			<div class="form-group">
				<label class="col-sm-offset-3 col-sm-9">Carrera, Ejemplar, Hora, Dia, Nombre Jinete, Apellido Jinete</label>
				<label for="haras" class="col-sm-3 control-label">Inscripcion</label>
				<div class="col-sm-9">
					<select name="codigo" required>
						<?php 
							Connect();
							DesplegarC7Valores("select caej_codigo, carr_nombre, ejem_nombre, hora_inicio, hora_dia, jine_nombre, jine_apellido from caej cj, carrera, ejemplar, hora, jinete where cj.fk_ejem = ejem_codigo and cj.fk_carr = carr_codigo and cj.fk_hora = hora_codigo and cj.fk_jine = jine_codigo order by caej_codigo","CAEJ_CODIGO","CARR_NOMBRE","EJEM_NOMBRE","HORA_INICIO","HORA_DIA","JINE_NOMBRE","JINE_APELLIDO");
							Disconnect();
						?>
					</select>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label">Puesto de partida</label>
				<div class="col-sm-9">
					<input type="text" maxlength="2" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" name="puesto" required>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Numero del ejemplar</label>
				<div class="col-sm-9">
					<input type="text" maxlength="2" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" name="nEjemplar" required>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Posicion</label>
				<div class="col-sm-9">
					<input type="text" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" maxlength="2" name="posicion" required/>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Velocidad</label>
				<div class="col-sm-9">
					<input type="text" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" maxlength="2" name="velocidad" required/>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Cuerpo</label>
				<div class="col-sm-9">
					<input type="text" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" name="cuerpo" required>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Retiro</label>
				<div class="col-sm-9">
					<select name="retiro" id="opcion" required>
						<option value="false">No</option>
						<option value="true">Si</option>
					</select>
				</div>
			</div>
			<div class="form-group enfe">
				<label class="col-sm-3 control-label enfe">Nombre de la enfermedad</label>
				<div class="col-sm-9 enfe">
					<?php 
						//<input type="text" maxlength="20" name="nomEnfe" class="enfe req" required>
					?> 
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">N. llamado</label>
				<div class="col-sm-9">
					<input type="text" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" maxlength="2" name="nLlamado" required>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Fecha ins.</label>
				<div class="col-sm-9">
					<input type="date" name="fins" required>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Monto</label>
				<div class="col-sm-9">
					<input type="text" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" name="monto" required>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Fecha Limite ins.</label>
				<div class="col-sm-9">
					<input type="date" placeholder="" name="flim" required>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Favorito</label>
				<div class="col-sm-9">
					<select name="favorito" required>
						<option value="false">No</option>
						<option value="true">Si</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Ejemplar</label>
				<div class="col-sm-9">
					<select name="ejemplar" required>
						<?php 
							Connect();
							DesplegarC2Valores("select ejem_codigo,ejem_nombre from ejemplar order by ejem_nombre","EJEM_CODIGO","EJEM_NOMBRE");
							Disconnect();
						?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Carrera</label>
				<div class="col-sm-9">
					<select name="carrera" required>
						<?php 
							Connect();
							DesplegarC2Valores("select carr_codigo,carr_nombre from carrera order by carr_nombre","CARR_CODIGO","CARR_NOMBRE");
							Disconnect();
						?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Hora:</label>
				<div class="col-sm-1">
					<select name="inicio" required>
						<?php 
							Connect();
							DesplegarC1Valores("select distinct hora_inicio from hora order by hora_inicio","HORA_INICIO");
							Disconnect();
						?>
					</select>
				</div>
				<div class="col-sm-2">
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
				<label class="col-sm-3 control-label">Jinete</label>
				<div class="col-sm-9">
					<select name="jinete" required>
						<?php 
							Connect();
							DesplegarC3Valores("select jine_codigo,jine_nombre,jine_apellido from jinete order by jine_codigo","JINE_CODIGO","JINE_NOMBRE","JINE_APELLIDO");
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
	<script>
		$(document).ready(function () {
			$(".enfe").hide();			
			$(".req").removeAttr("required");
			$('#opcion').on('change', function() {
			  if (this.value == "true") {			  
			  	$(".enfe").show();
			  	$(".enfe").attr("required", "required");
			  }
			  else {
			  	$(".enfe").hide();				
				$(".req").removeAttr("required");
			  };			  
			});
		});
	</script>
</body>
</html>