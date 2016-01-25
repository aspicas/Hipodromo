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

<div class="container">	

	<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>#</th>
      <th>Usuario</th>
      <th>Permisos</th>
    </tr>
  </thead>
  <tbody>
    <tr class="active">
      <td>1</td>
      <td>Admin</td>
      <td><select name="codigo" required>
						
						
		</select></td>
    </tr>
    <tr class="active">
      <td>2</td>
      <td>Propietario</td>
      <td><select name="codigo" required>
						
						
			</select></td>
    </tr>
    <tr class="active">
      <td>3</td>
      <td>Jinete</td>
      <td><select name="codigo" required>
						
						
			</select></td>
    </tr>
    <tr class="active">
      <td>4</td>
      <td>Veterinario</td>
      <td><select name="codigo" required>
						
						
			</select></td>
    </tr>
    <tr class="active">
      <td>5</td>
      <td>Entrenador</td>
      <td><select name="codigo" required>
						
						
			</select></td>
    </tr>
    <tr class="active">
      <td>6</td>
      <td>Invitado</td>
      <td><select name="codigo" required>
						
						
			</select></td>
    </tr>
  </tbody>
</table> 

<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9">
					<button type="submit" class="btn btn-default" name="realizar">Realizar</button>
				</div>
			</div>

</div>




	<?php 
		if (function_exists('foo')) { 
		  print "foo defined\\n"; 
		} else { 
		  print "foo not defined\\n"; 
		} 
		function foo() {} 

		if (function_exists('bar')) { 
		  print "bar defined\\n"; 
		} else { 
		  print "defining bar\\n"; 
		  function bar() {} 
		} 
		print "calling bar\\n"; 
		bar(); // ok to call function conditionally defined earlier 

		print "calling baz\\n"; 
		baz(); // ok to call function unconditionally defined later 
		function baz() {} 

		qux(); // NOT ok to call function conditionally defined later 
		if (!function_exists('qux')) { 
		  function qux() {} 
		} 
	?> 
</body>
</html>