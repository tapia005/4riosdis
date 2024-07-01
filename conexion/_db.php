<?php

$host = "mysql-tapia005.alwaysdata.net";
$user = "tapia005_uno";
$password = "ad4rmin2";
$database = "tapia005_4rios";


$conexion = new PDO("mysql:host=$host;database=$database", $user, $password);
if(!$conexion){
echo "No se realizo la conexion a la basa de datos, el error fue:".
mysqli_connect_error() ;


}

?>