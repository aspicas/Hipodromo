<?php
include 'oracledb.php';

if (isset($_POST['registrar'])) {
	try {
		Connect();
		if ($connected == TRUE) {						
			$nombre = $_POST["nombre"];
			$pelaje = $_POST["pelaje"];
			$fnac = $_POST["fnac"];
			$sexo = $_POST["sexo"];
			$tatuaje = $_POST["tatuaje"];
			$raza = $_POST["raza"];
			$padre = $_POST["padre"];
			$madre = $_POST["madre"];
			$haras = $_POST["haras"];
			$pais = strtoupper($_POST["pais"]);
			$estado = strtoupper($_POST["estado"]);
			$municipio = strtoupper($_POST["municipio"]);
			$parroquia = strtoupper($_POST["parroquia"]);
			$puesto = $_POST["puesto"];
			$caballeriza = $_POST["caballeriza"];
			$vete = $_POST["vete"];
			$entr = $_POST["entr"];
			$fini = $_POST["fini"];
			$ffin = $_POST["ffin"];
			
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

			if (IsEmpty("select hara_codigo from haras where hara_nombre='".$haras."'")) {
				Query("insert into haras values (sq_hara_codigo.nextval,'".$haras."',(select LUGA_codigo from lugar where luga_nombre='".$parroquia."' and luga_tipo='parroquia' and fk_luga = (select LUGA_codigo from lugar where luga_nombre='".$municipio."' and luga_tipo='municipio' and fk_luga = (select LUGA_codigo from lugar where luga_nombre='".$estado."' and luga_tipo='estado' and fk_luga = (select LUGA_codigo from lugar where luga_nombre='".$pais."' and luga_tipo='pais')))))");
			}
			
			if (IsEmpty("select caba_codigo from caballeriza where caba_numero = '".$caballeriza."'")) {
				Query("insert into caballeriza values (sq_caba_codigo.nextval,'".$caballeriza."','".$entr."','".$vete."')");
			}
					
			if (IsEmpty("select pues_codigo from puesto, caballeriza where pues_numero = '".$puesto."' and caba_numero = '".$caballeriza."' and fk_caba = caba_codigo")) {				
				if ($ffin ==  null) {
					Query("insert into puesto (pues_codigo,pues_fecha_inicio,pues_numero,fk_caba) values (sq_pues_codigo.nextval,to_date('".$fini."','yyyy-mm-dd'),'".$puesto."',(select CABA_codigo from  CABALLERIZA WHERE CABA_numero='".$caballeriza."'))");
				}
				else {
					Query("insert into puesto values (SQ_PUES_codigo.nextval,to_date('".$fini."','yyyy/mm/dd'),to_date('".$ffin."','yyyy/mm/dd'),'".$puesto."',(select CABA_codigo from  CABALLERIZA WHERE CABA_numero='".$caballeriza."'))");
				}	
			}
			
			if ($raza == null) {
				$raza = null;					
			}

			if ($padre == null) {
				$padre = null;				
			}

			if ($madre == null) {				
				$madre = null;
			}			
			
			Query("insert into ejemplar values (sq_ejem_codigo.nextval,'".$nombre."','".$pelaje."',to_date('".$fnac."','yyyy-mm-dd'),'".$sexo."','".$tatuaje."','".$raza."','".$madre."','".$padre."',(select hara_codigo from haras where hara_nombre='".$haras."' and fk_luga = (select LUGA_codigo from lugar where luga_nombre='".$parroquia."' and luga_tipo='parroquia' and fk_luga = (select LUGA_codigo from lugar where luga_nombre='".$municipio."' and luga_tipo='municipio' and fk_luga = (select LUGA_codigo from lugar where luga_nombre='".$estado."' and luga_tipo='estado' and fk_luga = (select LUGA_codigo from lugar where luga_nombre='".$pais."' and luga_tipo='pais'))))),(select pues_codigo from puesto, caballeriza where pues_numero = '".$puesto."' and caba_numero = '".$caballeriza."' and fk_caba = caba_codigo))");
			
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
elseif (isset($_POST['borrar'])) {
	
	try {
		Connect();
		$codigo = $_POST["codigo"];
		Query("delete from ejemplar where ejem_codigo='".$codigo."'");
		Disconnect();
		echo "<script type=\"text/javascript\">
					alert(\"Se ha borrado exitosamente\");
					window.location.href=\"../index.php\"
				</script>";//*/
	} catch (Exception $e) {
		echo "Message: " .$e->getMessage();
	}	
}
?>