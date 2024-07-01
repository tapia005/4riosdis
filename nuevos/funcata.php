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

function insertar_productos(){

    global $conexion;
    extract($_POST);

            //variables donde se almacenan los valores de nuestra imagen
            $tamanoArchvio2=$_FILES['imagen']['size'];
    
            //se realiza la lectura de la imagen
                    $imagenSubida2=fopen($_FILES['imagen']['tmp_name'], 'r');
                    $binariosImagen2=fread($imagenSubida2,$tamanoArchvio2);   
            //se realiza la consulta correspondiente para guardar los datos
            
            $imagenFin2 =mysqli_escape_string($conexion,$binariosImagen2);

    $consulta="INSERT INTO catalogo (codigo, producto, cantidad, categoria, ristra, pcaja, pmitad, punidad, ppublico, imagen, descripcion, laboratorio)
    VALUES ('$codigo', '$producto', '$cantidad', '$categoria', '$ristra', '$pcaja', '$pmitad', '$punidad', '$ppublico', '$imagenFin2', '$descripcion', '$laboratorio');" ;


mysqli_query($conexion, $consulta);
    header("Location: ../nuevos/nuevocata.php");

}
function editar_producto(){

    global $conexion;
    extract($_POST);


        //variables donde se almacenan los valores de nuestra imagen
                $tamanoArchvio=$_FILES['foto']['size'];
        //se realiza la lectura de la imagen
                $imagenSubida=fopen($_FILES['foto']['tmp_name'], 'r');
                $binariosImagen=fread($imagenSubida,$tamanoArchvio);   
        //se realiza la consulta correspondiente para guardar los datos
        
        $imagenFin =mysqli_escape_string($conexion,$binariosImagen);
                
    $consulta="UPDATE productos SET nombre = '$nombre', descripcion = '$descripcion', color = '$color', precio = '$precio', cantidad = '$cantidad', categorias = '$categorias', imagen = '$imagenFin' WHERE id = $id";

    mysqli_query($conexion, $consulta);
    header("Location: ../views/usuarios/");
}
function eliminar_producto(){

    global $conexion;
    extract($_POST);
    $id = $_POST['id'];
    $consulta = "DELETE FROM productos WHERE id = $id";
    mysqli_query($conexion, $consulta);
    header("Location: ../views/usuarios/");
}
?>