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
$consulta="SELECT*FROM app where usuario='$usuario' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);

if($filas){
  
    header('Location: ../registro/regapp.php');


}else{
    
    header('location: ../registro/regapp.php?fallo=true');


}
?>
  
  <?php

  /**
   * Parte de registro de usuarios
   */
 if(isset ($_POST['registrar'])){
if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['usuario']) >= 1 && strlen($_POST['password']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['telefono']) >= 1) {
$nombre = trim($_POST['nombre']);
$apellido = trim($_POST['apellido']);
      $usuario = trim($_POST['usuario']);
      $password = trim($_POST['password']);
      $correo = trim($_POST['correo']);
      $telefono = trim($_POST['telefono']);

      $consulta="INSERT INTO app (nombre, apellido, usuario, correo, telefono, password)
      VALUES ('$nombre', '$apellido', '$usuario', '$correo', '$telefono', '$password')";

     mysqli_query($conexion, $consulta);
     mysqli_close($conexion);

 }
}
?>






