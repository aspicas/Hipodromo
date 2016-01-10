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
		<form action="">	
			<h1>Registrar Carrera</h1>
		
		    <label for="">Nombre de la carrera :</label>
			<input title="Se requiere un nombre " type="text" placeholder="" name="nombre" required/>
			<label for="">Categoria:</label>
			<select title="se requiere el tipo de carrera " type="text" placeholder="" name="Apellido" required/>
			<option>Copa</option>
			<option>Normal</option>
			<option>Clásico</option>
		</select>
			<label for="">Peso de ejemplar :</label>
			<input title="se requiere Peso del ejemplar  " type="text" placeholder="" pattern="8" name="cedula" id="" required/>
			<label>posicion:</label>
			<input title="se requiere su poscion" placeholder="" pattern="" name="posicion" id="">
			<label for="">Fecha  :</label>
			<input type="date" placeholder="" name="" id="">
			<label for="">Numero de  carrera :</label>
			<input type="number " placeholder="" name="cotrasena">
			<label for="">Distancia :</label>
			<input type="text" placeholder="" name="cotrasena">
			<label>Velocidad</label>
			<input type="number" placeholder="" name="velocidad" required/>
			<label>tipo</label>
			<input type="tipo" placeholder="" name="tipo" required/>


			<label for="">Retiro:</label>
			<textarea for="">Retiro:</textarea>
									
			
			<input class="botonregistar" type="submit"value="registrar">
			
     		</form>
	</div>






</body>
</html>