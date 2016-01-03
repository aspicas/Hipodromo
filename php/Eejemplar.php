<?php
include 'oracledb.php';

if (isset($_POST['registrar'])) {
	/*try {
		Connect();
		if ($connected == TRUE) {
			*/$username = $_POST["usuario"];
			/*$name = $_POST["nombre"];
			$lName = $_POST["apellido"];
			*/$pass = $_POST["clave"];
			/*$opcion = $_POST["opcion"];
			$ci = $_POST["ci"];
			$date = $_POST["fecha"];
			$email = $_POST["email"];
			$hight = $_POST["altura"];
			$prof = isset($_POST["profesional"]);
			$type = $_POST["tipo"];

			if ($opcion == "propietario") {

				Query("insert into usuario (USUA_CODIGO, USUA_NOMBRE, USUA_CLAVE, FK_PROP) values (SQ_USUA_codigo.NEXTVAL,'".$username."','".$pass."',(select max(PROP_codigo) from propietario))");
			}
			elseif ($opcion == "entrenador") {
				Query("insert into entrenador values (SQ_ENTR_codigo.nextval,'".$name."','".$lName."')");
				Query("insert into usuario (USUA_CODIGO, USUA_NOMBRE, USUA_CLAVE, FK_ENTR) values (SQ_USUA_codigo.NEXTVAL,'".$username."','".$pass."',(select max(ENTR_codigo) from entrenador))");				
			}
			elseif ($opcion == "veterinario") {				
				Query("insert into veterinario values (SQ_VETE_codigo.nextval,'".$name."','".$lName."')");
				Query("insert into usuario (USUA_CODIGO, USUA_NOMBRE, USUA_CLAVE, FK_VETE) values (SQ_USUA_codigo.NEXTVAL,'".$username."','".$pass."',(select max(VETE_codigo) from veterinario))");
			}
			elseif ($opcion == "jinete" && $prof == 1) {
				Query("insert into jinete values (SQ_JINE_codigo.nextval,'".$name."','".$lName."',TO_DATE('".$date."','yyyy-mm-dd'),'".$ci."','".$hight."',true)");
				Query("insert into usuario (USUA_CODIGO, USUA_NOMBRE, USUA_CLAVE, FK_JINE) values (SQ_USUA_codigo.NEXTVAL,'".$username."','".$pass."',(select max(jine_codigo) from jinete))");
			}
			elseif ($opcion == "jinete" && $prof != 1) {
				Query("insert into jinete values (SQ_JINE_codigo.nextval,'".$name."','".$lName."',TO_DATE('".$date."','yyyy-mm-dd'),'".$ci."','".$hight."',false)");
				Query("insert into usuario (USUA_CODIGO, USUA_NOMBRE, USUA_CLAVE, FK_JINE) values (SQ_USUA_codigo.NEXTVAL,'".$username."','".$pass."',(select max(jine_codigo) from jinete))");
			}
			elseif ($opcion == "invitado") {
				Query("insert into invitado values (SQ_INVI_codigo.nextval,'".$name."','".$lName."','".$type."')");
				Query("insert into usuario (USUA_CODIGO, USUA_NOMBRE, USUA_CLAVE, FK_INVI) values (SQ_USUA_codigo.NEXTVAL,'".$username."','".$pass."',(select max(invi_codigo) from invitado))");
			}
			
			Query("insert into rous values (SQ_ROUS_codigo.nextval,(select max(usua_codigo) from usuario),2)");
			
			Disconnect();
		}
	} catch (Exception $e) {
		echo "Message: " .$e->getMessage();
	}/*/	
	Connect();
	//Query("insert into veterinario values (SQ_VETE_codigo.nextval,'".$name."','".$lName."')");
	//Query("insert into usuario (USUA_CODIGO, USUA_NOMBRE, USUA_CLAVE, FK_VETE) values (SQ_USUA_codigo.NEXTVAL,'".$username."','".$pass."',(select max(VETE_codigo) from veterinario))");
	Query("insert into rous values (SQ_ROUS_codigo.nextval,(select max(usua_codigo) from usuario),4)");
	echo "<p>Paso1</p>";
	Disconnect();//*/	
}
?>