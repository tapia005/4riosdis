<?php

/**
 * Validacion de datos para poder iniciar sesion
 */
require_once ("../conexion/_db.php");
$usuario=$_POST['usuario'];
$password=$_POST['password'];
session_start();
$_SESSION['usuario']=$usuario;


$conexion=mysqli_connect("localhost","root","","4rios");
$consulta="SELECT*FROM registroadmin where usuario='$usuario' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);

if($filas){
  
    header('Location: ../tablas/vercata.php');


}else{
    
    header('location: ../login/login.php?fallo=true');

    session_destroy();
}
?>
<?php
