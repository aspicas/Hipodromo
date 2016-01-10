<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" width="device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
	<title>Oracle</title>
</head>
<body>
	<form method="post" action="php/oracledb.php">
		<!--Name: <input type="text" name="name" placeholder="Name"><br>-->
		<!--Last Name: <input type="text" name="lastname" placeholder="Last Name"><br>-->		
		<!--<select name="opcion" id="seleccion" onchange="fill()" required>
			
		</select>-->

		<?php 
			include 'php/oracledb.php';

			Connect();
			Opcion("select * from veterinario");
			Disconnect();
		?>

		<input type="submit" value="click" name="query">
	</form>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript">	
	var cuisines = ["Chinese","Indian"];	
	var sel = document.getElementById('seleccion');
	for(var i = 0; i < cuisines.length; i++) {
	    var opt = document.createElement('option');
	    opt.innerHTML = cuisines[i];
	    opt.value = cuisines[i];
	    sel.appendChild(opt);
	}*/
	</script>
</body>
</html>