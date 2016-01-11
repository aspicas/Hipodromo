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
			<form method="post" action="#">	
				<h1>Comprar Boleto</h1>
				<label>Tipo de grada a comprar:</label>
				<select name="opcion1" id="opcion" required>
					<option value="empty">Seleccione una opción</option>
					<option value="gradas">Gradas</option>
					<option value="mezzanina">Mezzanina</option>
					<option value="palco">Palco</option>
				</select>
			</br>
			</br>

				<select name="opcion1" id="opcion1" class="gradas" required>
					<option value="0">Seleccione una opción</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
				</select>
			</br>
		</br>


				<label class="g1">Total = 200 bsf</label>
				<label class="g2">Total = 400 bsf</label>
				<label class="g3">Total = 600 bsf</label>
				<label class="g4">Total = 800 bsf</label>
				<label class="g5">Total = 1000 bsf</label>
				<label class="g6">Total = 1200 bsf</label>
				<label class="g7">Total = 1400 bsf</label>
				<label class="g8">Total = 1600 bsf</label>
				<label class="g9">Total = 1800 bsf</label>

			</br>


		<!--		<label class="mezzanina 1">Total = 800 bsf</label>
				<label class="mezzanina 2">Total = 1600 bsf</label>
				<label class="mezzanina 3">Total = 2400 bsf</label>
				<label class="mezzanina 4">Total = 3200 bsf</label>
				<label class="mezzanina 5">Total = 4000 bsf</label>
				<label class="mezzanina 6">Total = 4800 bsf</label>
				<label class="mezzanina 7">Total = 5600 bsf</label>
				<label class="mezzanina 8">Total = 6400 bsf</label>
				<label class="mezzanina 9">Total = 7200 bsf</label>

				<label class="Palco 1">Total = 1500 bsf</label>
				<label class="Palco 2">Total = 3000 bsf</label>
				<label class="Palco 3">Total = 4500 bsf</label>
				<label class="Palco 4">Total = 6000 bsf</label>
				<label class="Palco 5">Total = 7500 bsf</label>
				<label class="Palco 6">Total = 9000 bsf</label>
				<label class="Palco 7">Total = 10500 bsf</label>
				<label class="Palco 8">Total = 12000 bsf</label>
				<label class="Palco 9">Total = 13500 bsf</label> -->
				
				<script>
		$(document).ready(function () {
			$(".g1").hide();
			$(".g2").hide();
			$(".g3").hide();
			$(".g4").hide();
			$(".g5").hide();
			$(".g6").hide();
			$(".g7").hide();
			$(".g8").hide();
			$(".g9").hide();

			$('#opcion1').on('change', function() {
			  if (this.value == "1") {			  	
			  	$(".g1").show();
			  	$(".g2").hide();
			  	$(".g3").hide();
			  	$(".g4").hide();
			  	$(".g5").hide();
			  	$(".g6").hide();
			  	$(".g7").hide();
			  	$(".g8").hide();
			  	$(".g9").hide();	
			  }
			  else if (this.value == "2"){
			  	$(".g1").hide();
			  	$(".g2").show();
			  	$(".g3").hide();
			  	$(".g4").hide();
			  	$(".g5").hide();
			  	$(".g6").hide();
			  	$(".g7").hide();
			  	$(".g8").hide();
			  	$(".g9").hide();
			  }
			  else if (this.value == "3") {
			  	$(".g1").hide();
			  	$(".g2").hide();
			  	$(".g3").show();
			  	$(".g4").hide();
			  	$(".g5").hide();
			  	$(".g6").hide();
			  	$(".g7").hide();
			  	$(".g8").hide();
			  	$(".g9").hide();
			  }
			  else if (this.value == "4") {
			  	$(".g1").hide();
			  	$(".g2").hide();
			  	$(".g3").hide();
			  	$(".g4").show();
			  	$(".g5").hide();
			  	$(".g6").hide();
			  	$(".g7").hide();
			  	$(".g8").hide();
			  	$(".g9").hide();
			  }
			  else if (this.value == "5") {
			  	$(".g1").hide();
			  	$(".g2").hide();
			  	$(".g3").hide();
			  	$(".g4").hide();
			  	$(".g5").show();
			  	$(".g6").hide();
			  	$(".g7").hide();
			  	$(".g8").hide();
			  	$(".g9").hide();
			  }
			  else if (this.value == "6") {
			  	$(".g1").hide();
			  	$(".g2").hide();
			  	$(".g3").hide();
			  	$(".g4").hide();
			  	$(".g5").hide();
			  	$(".g6").show();
			  	$(".g7").hide();
			  	$(".g8").hide();
			  	$(".g9").hide();
			  }
			  else if (this.value == "7") {
			  	$(".g1").hide();
			  	$(".g2").hide();
			  	$(".g3").hide();
			  	$(".g4").hide();
			  	$(".g5").hide();
			  	$(".g6").hide();
			  	$(".g7").show();
			  	$(".g8").hide();
			  	$(".g9").hide();
			  }
			  else if (this.value == "8") {
			  	$(".g1").hide();
			  	$(".g2").hide();
			  	$(".g3").hide();
			  	$(".g4").hide();
			  	$(".g5").hide();
			  	$(".g6").hide();
			  	$(".g7").hide();
			  	$(".g8").show();
			  	$(".g9").hide();
			  }
			  else if (this.value == "9") {
			  	$(".g1").hide();
			  	$(".g2").hide();
			  	$(".g3").hide();
			  	$(".g4").hide();
			  	$(".g5").hide();
			  	$(".g6").hide();
			  	$(".g7").hide();
			  	$(".g8").hide();
			  	$(".g9").show();
			  }
			  		  
			});
		});
	</script>
				



				<input type="submit" value="Comprar">			
	     	</form>
		</div>
	</div>

	
	<script>
		$(document).ready(function () {
			$(".gradas").hide();
			
			$('#opcion').on('change', function() {
			  if (this.value == "gradas") {			  	
			  	
			  	$(".gradas").show();
			  
			  };			  
			});
		});
	</script>
</body>
</html>