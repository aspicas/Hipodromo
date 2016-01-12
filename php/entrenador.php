<?php 
include 'oracledb.php';

if (isset($_POST['borrar'])) {
	
	try {
		Connect();
		$codigo = $_POST["codigo"];
		Query("delete from entrenador where entr_codigo = '".$codigo."'");		
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

			Query("update entrenador set entr_nombre='".$nombre."',entr_apellido='".$apellido."' where entr_codigo=".$codigo."");

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