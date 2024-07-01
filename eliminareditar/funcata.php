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


        //variables donde se almacenan los valores de nuestra imagen
                $tamanoArchvio1=$_FILES['imagen']['size'];
        //se realiza la lectura de la imagen
                $imagenSubida1=fopen($_FILES['imagen']['tmp_name'], 'r');
                $binariosImagen1=fread($imagenSubida1,$tamanoArchvio1);   
        //se realiza la consulta correspondiente para guardar los datos
        
        $imagenFin1 =mysqli_escape_string($conexion,$binariosImagen1);

                
    $consulta="UPDATE catalogo SET codigo = '$codigo', producto = '$producto', cantidad = '$cantidad', categoria = '$categoria', ristra = '$ristra', pcaja = '$pcaja', pmitad = '$pmitad', punidad = '$punidad', ppublico = '$ppublico', laboratorio = '$laboratorio', descripcion = '$descripcion', imagen = '$imagenFin1' WHERE id = $id";

    mysqli_query($conexion, $consulta);
    header("Location: ../tablas/vercata.php");
}
function eliminar_producto(){

    global $conexion;
    extract($_POST);
    $id = $_POST['id'];
    $consulta = "DELETE FROM catalogo WHERE id = $id";
    mysqli_query($conexion, $consulta);
    header("Location: ../tablas/vercata.php");
}
?>