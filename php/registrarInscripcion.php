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
			
			Disconnect();
			echo "<script type=\"text/javascript\">
					alert(\"Se ha registrado exitosamente\");
					window.location.href=\"../index.php\"
				</script>";
		}
	} catch (Exception $e) {
		echo "Message: " .$e->getMessage();
	}	
}
elseif (isset($_POST['borrar'])) {
	
	try {
		Connect();
		$codigo = $_POST["codigo"];
		Query("delete from caej where caej_codigo = '".$codigo."'");
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

			if ($retiro == null) {
				$retiro = null;
			}

			if ($favorito == null) {
				$favorito = null;
			}
			//echo $retiro." Hola<br>";
			//echo $favorito." Hola<br>";
			//$q = "update caej set caej_puesto_partida=".$puesto.",caej_num_ejemplar=".$nEjemplar.",caej_posicion=".$posicion.",caej_velocidad=".$velocidad.",caej_cuerpo=".$cuerpo.",caej_retiro=".$retiro.",caej_num_llamado=".$nLlamado.",caej_fecha_ins=to_date('".$fins."','yyyy-mm-dd'),caej_monto_ins=".$monto.",caej_fecha_limite_ins=to_date('".$flim."','yyyy-mm-dd'),caej_favorito=".$favorito.",fk_ejem=".$ejemplar.",fk_carr=".$carrera.",fk_hora=(select hora_codigo from hora where hora_dia='".$dia."' and hora_inicio='".$inicio."'),fk_jine=".$jinete." where caej_codigo=".$codigo."";
			//echo $q;
			Query("update caej set caej_puesto_partida=".$puesto.",caej_num_ejemplar=".$nEjemplar.",caej_posicion=".$posicion.",caej_velocidad=".$velocidad.",caej_cuerpo=".$cuerpo.",caej_retiro='".$retiro."',caej_num_llamado=".$nLlamado.",caej_fecha_ins=to_date('".$fins."','yyyy-mm-dd'),caej_monto_ins=".$monto.",caej_fecha_limite_ins=to_date('".$flim."','yyyy-mm-dd'),caej_favorito='".$favorito."',fk_ejem=".$ejemplar.",fk_carr=".$carrera.",fk_hora=(select hora_codigo from hora where hora_dia='".$dia."' and hora_inicio='".$inicio."'),fk_jine=".$jinete." where caej_codigo=".$codigo."");

			Disconnect();/*
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