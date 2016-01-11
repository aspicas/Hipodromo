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

	<div class="container campo_area">
		<div class="area_1">
			<form method="post" action="php/registrarInscripcion.php">
				<h1>Inscripcion</h1>
				<label>Puesto de partida</label>
				<input type="text" maxlength="2" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" name="puesto" required>
				<label>Numero del ejemplar</label>
				<input type="text" maxlength="2" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" name="nEjemplar" required>
			    <label>Posicion</label>
				<input type="text" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" maxlength="2" name="posicion" required/>
				<label>Velocidad</label>
				<input type="text" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" maxlength="2" name="velocidad" required/>
				<label> Cuerpo</label>
				<input type="text" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" name="cuerpo" required>	
				<label>Retiro</label>
				<select name="retiro" id="opcion" required>
					<option value="false">No</option>
					<option value="true">Si</option>
				</select>				
				</br>
				</br>
				<label class="enfe">Nombre de la enfermedad</label>
				 <?php 
					//<input type="text" maxlength="20" name="nomEnfe" class="enfe req" required>

				?> 
				<label> N. llamado</label>
				<input type="text" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" maxlength="2" name="nLlamado" required>

				<label>Fecha ins.</label>
				<input type="date" name="fins" required>

				<label>Monto</label>
				<input type="text" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" name="monto" required>

				<label>Fecha Limite ins.</label>
				<input type="date" placeholder="" name="flim" required>

				<label>Favorito</label>
				<select name="favorito" required>
					<option value="false">No</option>
					<option value="true">Si</option>
				</select>

				</br>
				</br>
				
				<label>Ejemplar</label>
				<select name="ejemplar" required>
					<?php 
						Connect();
						DesplegarC2Valores("select ejem_codigo,ejem_nombre from ejemplar order by ejem_nombre","EJEM_CODIGO","EJEM_NOMBRE");
						Disconnect();
					?>
				</select>
				</br>
				</br>
				<label>Carrera</label>
				<select name="carrera" required>
					<?php 
						Connect();
						DesplegarC2Valores("select carr_codigo,carr_nombre from carrera order by carr_nombre","CARR_CODIGO","CARR_NOMBRE");
						Disconnect();
					?>
				</select>
				</br>
				</br>
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
				</br>
				</br>

				<label>Jinete</label>
				<select name="jinete" required>
					<?php 
						Connect();
						DesplegarC3Valores("select jine_codigo,jine_nombre,jine_apellido from jinete order by jine_codigo","JINE_CODIGO","JINE_NOMBRE","JINE_APELLIDO");
						Disconnect();
					?>
				</select>

				</br>
				</br>
				<input type="submit" value="Registrar" name="registrar">			
	     	</form>
		</div>
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