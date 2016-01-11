<?php
include 'oracledb.php';

if (isset($_POST['registrar'])) {
	try {
		Connect();
		if ($connected == TRUE) {
			$username = $_POST["usuario"];
			$name = $_POST["nombre"];
			$lName = $_POST["apellido"];
			$pass = $_POST["clave"];
			$opcion = $_POST["opcion"];
			$ci = $_POST["ci"];
			$date = $_POST["fecha"];
			$email = $_POST["email"];
			$hight = $_POST["altura"];
			$prof = isset($_POST["profesional"]);
			$type = $_POST["tipo"];
			$pais = strtoupper($_POST["pais"]);
			$estado = strtoupper($_POST["estado"]);
			$municipio = strtoupper($_POST["municipio"]);
			$parroquia = strtoupper($_POST["parroquia"]);

			if ($opcion == "propietario") {								
				if (IsEmpty("select luga_codigo from lugar where luga_nombre='".$pais."'")) {				
					Query("insert into lugar values (SQ_LUGA_codigo.nextval,'".$pais."','pais',null)");		
					Query("insert into lugar values (SQ_LUGA_codigo.nextval,'".$estado."','estado',(select LUGA_codigo from lugar where luga_nombre='".$pais."' and luga_tipo='pais'))");
					Query("insert into lugar values (SQ_LUGA_codigo.nextval,'".$municipio."','municipio',(select LUGA_codigo from lugar where luga_nombre='".$estado."' and luga_tipo='estado'))");					
					Query("insert into lugar values (SQ_LUGA_codigo.nextval,'".$parroquia."','parroquia',(select LUGA_codigo from lugar where luga_nombre='".$municipio."' and luga_tipo='municipio'))");					
				}
				elseif (IsEmpty("select LUGA_codigo from lugar where luga_nombre='".$estado."' and luga_tipo='estado' and fk_luga = (select LUGA_codigo from lugar where luga_nombre='".$pais."' and luga_tipo='pais')")) {
					Query("insert into lugar values (SQ_LUGA_codigo.nextval,'".$estado."','estado',(select LUGA_codigo from lugar where luga_nombre='".$pais."' and luga_tipo='pais'))");
					Query("insert into lugar values (SQ_LUGA_codigo.nextval,'".$municipio."','municipio',(select LUGA_codigo from lugar where luga_nombre='".$estado."' and luga_tipo='estado' and fk_luga = (select LUGA_codigo from lugar where luga_nombre='".$pais."' and luga_tipo='pais')))");
					Query("insert into lugar values (SQ_LUGA_codigo.nextval,'".$parroquia."','parroquia',(select LUGA_codigo from lugar where luga_nombre='".$municipio."' and luga_tipo='municipio' and fk_luga = (select LUGA_codigo from lugar where luga_nombre='".$estado."' and luga_tipo='estado' and fk_luga = (select LUGA_codigo from lugar where luga_nombre='".$pais."' and luga_tipo='pais'))))");					
				}
				elseif (IsEmpty("select LUGA_codigo from lugar where luga_nombre='".$municipio."' and luga_tipo='municipio' and fk_luga = (select LUGA_codigo from lugar where luga_nombre='".$estado."' and luga_tipo='estado' and fk_luga = (select LUGA_codigo from lugar where luga_nombre='".$pais."' and luga_tipo='pais'))")) {
					Query("insert into lugar values (SQ_LUGA_codigo.nextval,'".$municipio."','municipio',(select LUGA_codigo from lugar where luga_nombre='".$estado."' and luga_tipo='estado' and fk_luga = (select LUGA_codigo from lugar where luga_nombre='".$pais."' and luga_tipo='pais')))");
					Query("insert into lugar values (SQ_LUGA_codigo.nextval,'".$parroquia."','parroquia',(select LUGA_codigo from lugar where luga_nombre='".$municipio."' and luga_tipo='municipio' and fk_luga = (select LUGA_codigo from lugar where luga_nombre='".$estado."' and luga_tipo='estado' and fk_luga = (select LUGA_codigo from lugar where luga_nombre='".$pais."' and luga_tipo='pais'))))");					
				}
				elseif (IsEmpty("select LUGA_codigo from lugar where luga_nombre='".$parroquia."' and luga_tipo='parroquia' and fk_luga = (select LUGA_codigo from lugar where luga_nombre='".$municipio."' and luga_tipo='municipio' and fk_luga = (select LUGA_codigo from lugar where luga_nombre='".$estado."' and luga_tipo='estado' and fk_luga = (select LUGA_codigo from lugar where luga_nombre='".$pais."' and luga_tipo='pais')))")) {
					Query("insert into lugar values (SQ_LUGA_codigo.nextval,'".$parroquia."','parroquia',(select LUGA_codigo from lugar where luga_nombre='".$municipio."' and luga_tipo='municipio' and fk_luga = (select LUGA_codigo from lugar where luga_nombre='".$estado."' and luga_tipo='estado' and fk_luga = (select LUGA_codigo from lugar where luga_nombre='".$pais."' and luga_tipo='pais'))))");					
				}
				Query("insert into propietario values (sq_prop_codigo.nextval,'".$name."','".$lName."','".$ci."',to_date('".$date."','yyyy-mm-dd'),'".$email."',(select LUGA_codigo from lugar where luga_nombre='".$parroquia."' and luga_tipo='parroquia' and fk_luga = (select LUGA_codigo from lugar where luga_nombre='".$municipio."' and luga_tipo='municipio' and fk_luga = (select LUGA_codigo from lugar where luga_nombre='".$estado."' and luga_tipo='estado' and fk_luga = (select LUGA_codigo from lugar where luga_nombre='".$pais."' and luga_tipo='pais')))))");
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
				Query("insert into jinete values (SQ_JINE_codigo.nextval,'".$name."','".$lName."',TO_DATE('".$date."','yyyy-mm-dd'),'".$ci."','".$hight."','true')");
				Query("insert into usuario (USUA_CODIGO, USUA_NOMBRE, USUA_CLAVE, FK_JINE) values (SQ_USUA_codigo.NEXTVAL,'".$username."','".$pass."',(select max(jine_codigo) from jinete))");
			}
			elseif ($opcion == "jinete" && $prof != 1) {
				Query("insert into jinete values (SQ_JINE_codigo.nextval,'".$name."','".$lName."',TO_DATE('".$date."','yyyy-mm-dd'),'".$ci."','".$hight."','false')");
				Query("insert into usuario (USUA_CODIGO, USUA_NOMBRE, USUA_CLAVE, FK_JINE) values (SQ_USUA_codigo.NEXTVAL,'".$username."','".$pass."',(select max(jine_codigo) from jinete))");
			}
			elseif ($opcion == "invitado") {
				Query("insert into invitado values (SQ_INVI_codigo.nextval,'".$name."','".$lName."','".$type."')");
				Query("insert into usuario (USUA_CODIGO, USUA_NOMBRE, USUA_CLAVE, FK_INVI) values (SQ_USUA_codigo.NEXTVAL,'".$username."','".$pass."',(select max(invi_codigo) from invitado))");
			}
			
			Query("insert into rous values (sq_rous_codigo.nextval,(select max(usua_codigo) from usuario),(select rol_codigo from rol where rol_nombre = 'basico'))");
						
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
?>