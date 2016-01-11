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
?>