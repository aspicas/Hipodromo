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

	<div class="campo_area">
		<div class="area_1">
			<form method="post" action="php/registrarUsuario.php">	
				<h1>Registrar</h1>
				<label> Nombre de Usuario</label>
				<input type="text" name="usuario" required>
			    <label id="c1">Nombre:</label>
				<input title="Se requiere un nombre " type="text" placeholder="" name="nombre" required/>
				<label> Apellido:</label>
				<input title="se requiere el apellido" type="text" placeholder="" name="apellido" required/>
				<label> Contrasena:</label>
				<input type="password" placeholder="" name="clave" required>			
				<label>Registrar como</label>
				<select name="opcion" id="opcion" required>
					<option value="empty"></option>
					<option value="propietario">Propietario</option>
					<option value="entrenador">Entrenador</option>
					<option value="veterinario">Veterinario</option>
					<option value="jinete">Jinete</option>
					<option value="invitado">Invitado</option>
				</select>
				
				<p></p>

				<label class="prop jine">Cedula:</label>			
				<input class="prop jine req" maxlength="8" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" name="ci" required/>
				<label class="prop jine">Fecha de nacimiento :</label>
				<input class="prop jine req" type="date"  placeholder="" name="fecha" required>	
				<label class="prop">Correo electronico</label>
				<input class="prop req" type="email" placeholder="" name="email" required/>
				<label class="prop">Pais:</label>
				<input class="prop req" type="text" placeholder="Pais" name="pais" required/>
				<label class="prop">Estado:</label>
				<input class="prop req" type="text" placeholder="Estado" name="estado" required/>
				<label class="prop">Municipio:</label>
				<input class="prop req" type="text" placeholder="Municipio" name="municipio" required/>
				<label class="prop">Parroquia:</label>
				<input class="prop req" type="text" placeholder="Parroquia" name="parroquia" required/>
				<label class="jine">Altura</label>
				<input class="jine req" placeholder="metros" min="5" name="altura" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required/>
				<label class="jine checkbox-inline">
					<input type="checkbox" name="profesional" value="true" id="profesional"> Profesional
				</label>
				<label class="invi">Tipo</label>
				<select class="invi req" name="tipo" id="tipo" required>
					<option value="empty"></option>
					<option value="artista">Artista</option>
					<option value="deportista">Deportista</option>
					<option value="opinion">Opinion</option>				
				</select>
				<p class="invi"></p>
				<input type="submit" value="Registrar" name="registrar">			
	     	</form>
		</div>
	</div>

	
	<script>
		$(document).ready(function () {
			$(".prop").hide();
			$(".jine").hide();
			$(".invi").hide();
			$(".req").removeAttr("required");
			$('#opcion').on('change', function() {
			  if (this.value == "propietario") {			  	
			  	$(".invi").hide();
			  	$(".jine").hide();
			  	$(".req").removeAttr("required");
			  	$(".prop").show();
			  	$(".prop").attr("required", "required");
			  }
			  else if (this.value == "jinete"){
			  	$(".prop").hide();
			  	$(".invi").hide();
			  	$(".req").removeAttr("required");
			  	$(".jine").show();
			  	$(".jine").attr("required", "required");
			  }
			  else if (this.value == "invitado") {
			  	$(".prop").hide();
				$(".jine").hide();
				$(".invi").show();
				$(".req").removeAttr("required");
				$(".invi").attr("required", "required");
			  }
			  else {
			  	$(".prop").hide();
				$(".jine").hide();
				$(".invi").hide();
				$(".req").removeAttr("required");
			  };			  
			});
		});
	</script>
</body>
</html>