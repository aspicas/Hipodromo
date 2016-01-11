<?php 
include 'oracledb.php';

if (isset($_POST['registrar'])) {
	try {
		Connect();
		if ($connected == TRUE) {						
			$nombre = $_POST["nombre"];
			$categoria = $_POST["categoria"];
			$fecha = $_POST["fecha"];
			$numCarr = $_POST["numCarr"];
			$lote = $_POST["lote"];
			$distancia = $_POST["distancia"];
			$variante = $_POST["variante"];
			$pista = $_POST["pista"];
			$inicio = $_POST["inicio"];
			$dia = $_POST["dia"];

			Query("insert into carrera values (sq_carr_codigo.nextval,'".$nombre."','".$categoria."',to_date('".$fecha."','yyyy-mm-dd'),'".$numCarr."','".$lote."','".$distancia."','".$variante."',(select pist_codigo from pista where pist_codigo='".$pista."'),(select hora_codigo from hora where hora_inicio='".$inicio."' and hora_dia='".$dia."'))");
			
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