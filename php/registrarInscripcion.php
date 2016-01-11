<?php 
include 'oracledb.php';

if (isset($_POST['registrar'])) {
	try {
		Connect();
		if ($connected == TRUE) {						
			$puesto = $_POST["puesto"];
			$nEjemplar = $_POST["nEjemplar"];
			$posicion = $_POST["posicion"];
			$velocidad = $_POST["velocidad"];
			$cuerpo = $_POST["cuerpo"];
			$retiro = $_POST["retiro"];
			//$enfe = $_POST["enfe"];
			$nLlamado = $_POST["nLlamado"];
			$fins = $_POST["fins"];
			$monto = $_POST["monto"];
			$flim = $_POST["flim"];
			$favorito = $_POST["favorito"];
			$ejemplar = $_POST["ejemplar"];
			$carrera = $_POST["carrera"];
			$inicio = $_POST["inicio"];
			$dia = $_POST["dia"];
			$jinete = $_POST["jinete"];
			
			if ($retiro == "false") {
				$retiro = null;
			}

			if ($favorito == "false") {
				$favorito = null;
			}
			
			Query("insert into caej values (sq_caej_codigo.nextval,'".$puesto."','".$nEjemplar."','".$posicion."','".$velocidad."','".$cuerpo."','".$retiro."','".$nLlamado."',to_date('".$fins."','yyyy-mm-dd'),'".$monto."',to_date('".$flim."','yyyy-mm-dd'),'".$favorito."','".$ejemplar."','".$carrera."',(select hora_codigo from hora where hora_dia='".$dia."' and hora_inicio='".$inicio."'),'".$jinete."')");
			
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
elseif (isset($_POST['borrar'])) {
	
	try {
		Connect();
		$codigo = $_POST["codigo"];
		Query("delete from carrera where carr_codigo = '".$codigo."'");
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