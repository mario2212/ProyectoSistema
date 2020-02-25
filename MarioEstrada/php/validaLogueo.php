<?php
session_start();
require('conexion.php');

date_default_timezone_set('America/Guatemala');
$fecha = date('Y-m-d h:i:s');

$usuario = str_replace("'","",$_REQUEST['user']);
$password = str_replace("'","",$_REQUEST['pass']);

$usuario = str_replace('"','',$usuario);
$password = str_replace('"','',$password);

$query = "SELECT * FROM usuario WHERE usuario = '".$usuario."' AND clave = '".$password."' LIMIT 1";
$resultados = mysqli_query($conexion, $query);

$fila = mysqli_num_rows($resultados);
$row = mysqli_fetch_assoc($resultados);

if($fila>0){
	
	$_SESSION['login'] = 'true';
	$_SESSION['nombre'] = $row['nombre'];
	$_SESSION['idnombre'] = $row['id'];
	$_SESSION['correo'] = $row['correo'];
	$resultados = mysqli_query($conexion, $query);
	
	echo 'true';	
}else{
	echo 'false';
}

$consupermisos = "SELECT upermiso.*, c_permiso.nombre FROM usuario_permiso as upermiso INNER JOIN c_permiso ON(upermiso.id_permiso = c_permiso.id_permiso) WHERE id_usuario = '".$row['id']."'";
$resulpermiso = mysqli_query($conexion, $consupermisos);

for($n=0; $n<mysqli_num_rows($resulpermiso); $n++){
	$permiso = mysqli_fetch_assoc($resulpermiso);
	
	$_SESSION[$permiso['nombre']] = 'true';
	
}


?>