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
	/*try {
		Connect();
		if ($connected == TRUE) {
			//$name = $_POST["name"];
			//$sexo = $_POST["sexo"];			
			//Query("insert into usuario (USUA_CODIGO, USUA_NOMBRE, USUA_CLAVE) values (SQ_USUA_codigo.NEXTVAL,'".$name."','".$lastName."')");
			//Query("update usuario set nombre='".$lastName."' where nombre='".$name."'");
			//Query("delete from usuario where nombre='".$name."'");
			//Select("select * from rol");
			/*
			if (IsEmpty("select luga_codigo from lugar where luga_nombre='MIRANDA'")) {
				echo "esta vacio";
			}
			else
			{
				echo "esta lleno";
			}
			Query("insert into puesto values (sq_pues_codigo.nextval,to_date('2015-05-01','yyyy-mm-dd'),to_date('2016-01-01','yyyy-mm-dd'),5,1)");
			Disconnect();
		}
	} catch (Exception $e) {
		echo "Message: " .$e->getMessage();
	}///*/
	/*$test = $_POST["test"];

	if ($test == null) {
		echo "Es null";
	}
	else
	{
		echo "No es null";
	}//*/
	Connect();
	Select("select * from rol");	
	Disconnect();//*/
}
?>