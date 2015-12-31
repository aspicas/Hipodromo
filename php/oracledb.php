<?php
$conn = null;
$connected = TRUE;

function Connect()
{	
	global $connected, $conn;
	$conn = oci_connect('hipodromo', 'hipodromo', '192.168.25.135/orcl');//'192.168.25.128/orcl');
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
		echo $row['USUA_CODIGO']. " " . $row['USUA_NOMBRE'] . " ".$row['USUA_CLAVE']."<br>\n";
	}
	oci_free_statement($query);
}

if(isset($_POST['query']))
{/*
	try {
		Connect();
		if ($connected == TRUE) {
			$name = $_POST["name"];
			$lastName = $_POST["lastname"];
			Query("insert into usuario (USUA_CODIGO, USUA_NOMBRE, USUA_CLAVE) values (SQ_USUA_codigo.NEXTVAL,'".$name."','".$lastName."')");
			//Query("update usuario set nombre='".$lastName."' where nombre='".$name."'");
			//Query("delete from usuario where nombre='".$name."'");
			//Select("select * from usuario");			
			Disconnect();
		}	
	} catch (Exception $e) {
		echo "Message: " .$e->getMessage();
	}*/
	$opcion = $_POST["opcion"];
	echo "<p>'".$opcion."'</p>";
	echo "<p>Hola mundo</p>";
}
?>