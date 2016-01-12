<?php  
include 'oracledb.php';
session_start();

if (isset($_POST['realizar'])) {
	try {
		Connect();
		if ($connected == TRUE) {
			$opcion = $_POST["opcion"];			
			$codigo = $_POST["codigo"];
			$telefono = $_POST["telefono"];			

			if ($opcion == "crear") {			
				Query("");
			}
			if ($opcion == "modificar") {
				Query("");	
			}
			if ($opcion == "eliminar") {
				Query("");
			}

			Disconnect();/*
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