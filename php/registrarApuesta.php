<?php 
include 'oracledb.php';

if (isset($_POST['crear'])) {
	try {
		Connect();
		if ($connected == TRUE) {						
			$nombre = $_POST["nombre"];
			$minimo = $_POST["minimo"];
			$regla = $_POST["regla"];

			Query("insert into apuesta values (sq_apue_codigo.nextval,'".$nombre."','".$minimo."','".$regla."')");

			Disconnect();//*
			echo "<script type=\"text/javascript\">
					alert(\"Se ha registrado exitosamente\");
					window.location.href=\"../index.php\"
				</script>";//*/
		}
	} catch (Exception $e) {
		echo "Message: " .$e->getMessage();
	}	
}
?>