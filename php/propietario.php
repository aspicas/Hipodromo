<?php
include 'oracledb.php';

if (isset($_POST['borrar'])) {
	
	try {
		Connect();
		$codigo = $_POST["codigo"];
		Query("delete from propietario where prop_codigo = '".$codigo."'");		
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
			$email = $_POST["email"];
			$pais = strtoupper($_POST["pais"]);
			$estado = strtoupper($_POST["estado"]);
			$municipio = strtoupper($_POST["municipio"]);
			$parroquia = strtoupper($_POST["parroquia"]);

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
			
			Query("update propietario set prop_nombre='".$nombre."',prop_apellido='".$apellido."',prop_cedula=".$ci.",prop_fecha_nac=to_date('".$date."','yyyy-mm-dd'),prop_email='".$email."',fk_luga=(select LUGA_codigo from lugar where luga_nombre='".$parroquia."' and luga_tipo='parroquia' and fk_luga = (select LUGA_codigo from lugar where luga_nombre='".$municipio."' and luga_tipo='municipio' and fk_luga = (select LUGA_codigo from lugar where luga_nombre='".$estado."' and luga_tipo='estado' and fk_luga = (select LUGA_codigo from lugar where luga_nombre='".$pais."' and luga_tipo='pais')))) where prop_codigo=".$codigo);

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