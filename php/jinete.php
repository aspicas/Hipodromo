<?php
include 'oracledb.php';

if (isset($_POST['borrar'])) {
	
	try {
		Connect();
		$codigo = $_POST["codigo"];
		Query("delete from jinete where jine_codigo = '".$codigo."'");		
		Disconnect();//*
		echo "<script type=\"text/javascript\">
					alert(\"Se ha borrado exitosamente\");
					window.location.href=\"../index.php\"
				</script>";//*/
	} catch (Exception $e) {
		echo "Message: " .$e->getMessage();
	}	
}

if (isset($_POST['modificar'])) {
	try {
		Connect();
		if ($connected == TRUE) {						
			$codigo = $_POST["codigo"];
			$nombre = $_POST["nombre"];
			$apellido = $_POST["apellido"];
			$ci = $_POST["ci"];
			$date = $_POST["fecha"];
			$hight = $_POST["altura"];
			$prof = isset($_POST["profesional"]);

			if ($prof == 1) {
				$prof = true;
			}
			else{
				$prof = false;
			}
			
			Query("update jinete set jine_nombre='".$nombre."',jine_apellido='".$apellido."',jine_cedula='".$ci."',jine_fecha_nac=to_date('".$date."','yyyy-mm-dd'),jine_altura='".$hight."',jine_profesional='".$prof."' where jine_codigo=".$codigo);

			Disconnect();//*
			echo "<script type=\"text/javascript\">
					alert(\"Se ha modificado exitosamente\");
					window.location.href=\"../index.php\"
				</script>";//*/
		}
	} catch (Exception $e) {
		echo "Message: " .$e->getMessage();
	}	
}
?>