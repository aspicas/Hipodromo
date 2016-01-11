<?php 
include 'oracledb.php';

if (isset($_POST['crear'])) {
	try {
		Connect();
		if ($connected == TRUE) {						
			$nombre = $_POST["nombre"];
			$fecha = $_POST["fecha"];

			Query("insert into stud values (sq_stud_codigo.nextval,'".$nombre."',to_date('".$fecha."','yyyy-mm-dd'))");

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