<?php

require_once ("../conexion/_db.php");


if(isset($_POST['accion'])){ 
    switch($_POST['accion']){
        case 'eliminar_producto':
            eliminar_producto();

        break;        
        case 'editar_producto':
        editar_producto();

        break;

        case 'insertar_productos':
        insertar_productos();

        break;    
    }

}

function editar_producto(){

    global $conexion;
    extract($_POST);

                
    $consulta="UPDATE registroadmin SET nombre = '$nombre', apellido = '$apellido', usuario = '$usuario', password = '$password', correo = '$correo', telefono = '$telefono' WHERE id = $id";

    mysqli_query($conexion, $consulta);
    header("Location: ../tablas/verusu.php");
}
function eliminar_producto(){

    global $conexion;
    extract($_POST);
    $id = $_POST['id'];
    $consulta = "DELETE FROM registroadmin WHERE id = $id";
    mysqli_query($conexion, $consulta);
    header("Location: ../tablas/verusu.php");
}
?>