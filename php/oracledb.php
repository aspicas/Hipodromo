<?php
$conn = null;
$connected = TRUE;

function Connect()
{	
	global $connected, $conn;
	$conn = oci_connect('hipodromo', 'hipodromo', '192.168.25.128/orcl');//'192.168.25.128/orcl');
	if (!$conn) {
		$m = oci_error();
	   	echo $m['message'], "\n";
	   	$connected = FALSE;
	   	exit;
	}
}

function Disconnect()
{
	global $conn;
	oci_close($conn);
}
/* include 'oracledb.php';
//Funciona con insert,delete,update falta select*/
function Query($string)
{
	global $conn;	
	$query = oci_parse($conn, $string);
	oci_execute($query);
	oci_free_statement($query);
}

function Select($string)
{	
	global $conn;
	$query = oci_parse($conn, $string);
	oci_execute($query);
	while (($row = oci_fetch_assoc($query)) != false) {		
		echo $row['ROL_CODIGO']. " " . $row['ROL_NOMBRE'] . " ".$row['ROL_PERMISO']."<br>\n";
	}
	oci_free_statement($query);
}

function Opcion($string)
{	
	global $conn;
	$query = oci_parse($conn, $string);
	oci_execute($query);
	echo "<select name=\"opcion\" id=\"seleccion\" required>";
	while (($row = oci_fetch_assoc($query)) != false) {		
		echo "<option value='".$row['VETE_CODIGO']."'>".$row['VETE_NOMBRE']." ".$row['VETE_APELLIDO']."</option>";
	}
	echo "</select>";
	oci_free_statement($query);
}

function DesplegarVeterinario($string)
{	
	global $conn;
	$query = oci_parse($conn, $string);
	oci_execute($query);
	echo "<select name=\"vete\" id=\"selecVETE\" required>";
	while (($row = oci_fetch_assoc($query)) != false) {		
		echo "<option value='".$row['VETE_CODIGO']."'>".$row['VETE_NOMBRE']." ".$row['VETE_APELLIDO']."</option>";
	}
	echo "</select>";
	oci_free_statement($query);
}

function DesplegarEntrenador($string)
{	
	global $conn;
	$query = oci_parse($conn, $string);
	oci_execute($query);
	echo "<select name=\"entr\" id=\"selecENTR\" required>";
	while (($row = oci_fetch_assoc($query)) != false) {		
		echo "<option value='".$row['ENTR_CODIGO']."'>".$row['ENTR_NOMBRE']." ".$row['ENTR_APELLIDO']."</option>";
	}
	echo "</select>";
	oci_free_statement($query);
}

function DesplegarPadre($string)
{	
	global $conn;
	$query = oci_parse($conn, $string);
	oci_execute($query);
	echo "<select name=\"padre\">";
	echo "<option></option>";
	while (($row = oci_fetch_assoc($query)) != false) {		
		echo "<option value='".$row['EJEM_CODIGO']."'>".$row['EJEM_NOMBRE']."</option>";
	}
	echo "</select>";
	oci_free_statement($query);
}

function DesplegarMadre($string)
{	
	global $conn;
	$query = oci_parse($conn, $string);
	oci_execute($query);
	echo "<select name=\"madre\">";
	echo "<option></option>";
	while (($row = oci_fetch_assoc($query)) != false) {		
		echo "<option value='".$row['EJEM_CODIGO']."'>".$row['EJEM_NOMBRE']."</option>";
	}
	echo "</select>";
	oci_free_statement($query);
}

function DesplegarC1Valores($string,$value1)
{
	global $conn;
	$query = oci_parse($conn, $string);
	oci_execute($query);	
	while (($row = oci_fetch_assoc($query)) != false) {		
		echo "<option value='".$row[$value1]."'>".$row[$value1]."</option>";
	}
	oci_free_statement($query);
}

function DesplegarC2Valores($string,$value1,$value2)
{
	global $conn;
	$query = oci_parse($conn, $string);
	oci_execute($query);	
	while (($row = oci_fetch_assoc($query)) != false) {		
		echo "<option value='".$row[$value1]."'>".$row[$value2]."</option>";
	}
	oci_free_statement($query);
}

function DesplegarC3Valores($string,$value1,$value2,$value3)
{
	global $conn;
	$query = oci_parse($conn, $string);
	oci_execute($query);	
	while (($row = oci_fetch_assoc($query)) != false) {		
		echo "<option value='".$row[$value1]."'>".$row[$value2].", ".$row[$value3]."</option>";
	}
	oci_free_statement($query);
}

function DesplegarC4Valores($string,$value1,$value2,$value3,$value4)
{
	global $conn;
	$query = oci_parse($conn, $string);
	oci_execute($query);	
	while (($row = oci_fetch_assoc($query)) != false) {		
		echo "<option value='".$row[$value1]."'>".$row[$value2].", ".$row[$value3].", ".$row[$value4]."</option>";
	}
	oci_free_statement($query);
}

function DesplegarC7Valores($string,$value1,$value2,$value3,$value4,$value5,$value6,$value7)
{
	global $conn;
	$query = oci_parse($conn, $string);
	oci_execute($query);	
	while (($row = oci_fetch_assoc($query)) != false) {		
		echo "<option value='".$row[$value1]."'>".$row[$value2].", ".$row[$value3].", ".$row[$value4].", ".$row[$value5].", ".$row[$value6].", ".$row[$value7]."</option>";
	}
	oci_free_statement($query);
}

function DesplegarC11Valores($string,$value1,$value2,$value3,$value4,$value5,$value6,$value7,$value8,$value9,$value10,$value11)
{
	global $conn;
	$query = oci_parse($conn, $string);
	oci_execute($query);	
	while (($row = oci_fetch_assoc($query)) != false) {		
		echo "<option value='".$row[$value1]."'>".$row[$value2].", ".$row[$value3].", ".$row[$value4].", ".$row[$value5].", ".$row[$value6].", ".$row[$value7].", ".$row[$value8].", ".$row[$value9].", ".$row[$value10].", ".$row[$value11]."</option>";
	}
	oci_free_statement($query);
}

function IsEmpty($string)
{
	global $conn;
	$query = oci_parse($conn, $string);
	oci_execute($query);
	$row = oci_fetch_assoc($query);		
	if ($row == false) {
		oci_free_statement($query);		
		return true;
	}
	oci_free_statement($query);
	return false;
}

if(isset($_POST['query']))
{
	try {
		Connect();
		if ($connected == TRUE) {
			//$name = $_POST["name"];
			//$sexo = $_POST["sexo"];			
			//Query("insert into usuario (USUA_CODIGO, USUA_NOMBRE, USUA_CLAVE) values (SQ_USUA_codigo.NEXTVAL,'".$name."','".$lastName."')");
			//Query("update usuario set nombre='".$lastName."' where nombre='".$name."'");
			//Query("delete from usuario where nombre='".$name."'");
			//Select("select * from rol");
			/*
			if (IsEmpty("select pues_codigo from puesto, caballeriza where pues_numero = 1 and caba_numero = 2 and fk_caba = caba_codigo")) {
				echo "esta vacio";
			}
			else
			{
				echo "esta lleno";
			}//*/
			DesplegarC2Valores("select PIST_CODIGO, PIST_LONGITUD from pista","PIST_CODIGO","PIST_LONGITUD");
			Disconnect();
		}
	} catch (Exception $e) {
		echo "Message: " .$e->getMessage();
	}
}
?>