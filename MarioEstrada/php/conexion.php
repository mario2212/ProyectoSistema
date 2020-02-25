<?php
$host = 'localhost';
$user = 'ceiba';
$pass = 'c31bqn3t';
$data = 'consursa';

$conexion = mysqli_connect($host, $user, $pass);
mysqli_select_db($conexion, $data) or die('error de copnexion');


?>