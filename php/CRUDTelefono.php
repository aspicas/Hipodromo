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
				Query("insert into telefono values(sq_tele_codigo.nextval,".$telefono.",(select fk_prop from usuario where usua_nombre='".$_SESSION['usuario']."'))");
				//*
				echo "<script type=\"text/javascript\">
						alert(\"Se ha registrado exitosamente\");
						window.location.href=\"../index.php\"
					</script>";//*/
			}
			if ($opcion == "modificar") {
				Query("update telefono set tele_numero=".$telefono." where tele_codigo=".$codigo);				
				echo "<script type=\"text/javascript\">
						alert(\"Se ha modificado exitosamente\");
						window.location.href=\"../index.php\"
					</script>";//*/
			}
			if ($opcion == "eliminar") {
				Query("delete from telefono where tele_codigo=".$codigo);
				echo "<script type=\"text/javascript\">
						alert(\"Se ha eliminado exitosamente\");
						window.location.href=\"../index.php\"
					</script>";//*/
			}

			Disconnect();
		}
	} catch (Exception $e) {
		echo "Message: " .$e->getMessage();
	}	
}
?>