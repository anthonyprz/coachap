<?php
$nombre = $_REQUEST['nombre'];
$pass = $_REQUEST['pass'];

$conexion = mysql_connect("localhost","root") or die ("problemas con el servidor");
mysql_select_db("login", $conexion) or die ("error al tratar de conectar");

$standar = mysql_query("select * from usuario where login ='" .$nombre. "'and passnomal = '" .$pass."'", $conexion);

$admin = mysql_query("select * from usuario where login ='" .$nombre. "'and passadmin = '" .$pass."'", $conexion);

if ($row = mysql_fetch_array($standar)){
	header("location: running.html");
}
else if ($row = mysql_fetch_array($admin)){
	echo "hola $nombre";
	
}
else {
	echo "error";
}
?>