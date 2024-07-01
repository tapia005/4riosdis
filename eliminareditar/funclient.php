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
                $tamanoArchvio1=$_FILES['img1']['size'];
        //se realiza la lectura de la imagen
                $imagenSubida1=fopen($_FILES['img1']['tmp_name'], 'r');
                $binariosImagen1=fread($imagenSubida1,$tamanoArchvio1);   
        //se realiza la consulta correspondiente para guardar los datos
        
        $imagenFin1 =mysqli_escape_string($conexion,$binariosImagen1);

                //variables donde se almacenan los valores de nuestra imagen
                $tamanoArchvio2=$_FILES['img2']['size'];
        //se realiza la lectura de la imagen
                $imagenSubida2=fopen($_FILES['img2']['tmp_name'], 'r');
                $binariosImagen2=fread($imagenSubida2,$tamanoArchvio2);   
        //se realiza la consulta correspondiente para guardar los datos
        
        $imagenFin2 =mysqli_escape_string($conexion,$binariosImagen2);
                
    $consulta="UPDATE clientes SET codigo = '$codigo', nombre = '$nombre', apellido = '$apellido', telefono1 = '$telefono1', dia = '$dia', correo = '$correo', ruc = '$ruc', ubicacion = '$ubicacion', ciudad = '$ciudad', sector = '$sector', calles = '$calles', ncasa = '$ncasa', referencia = '$referencia', factura = '$factura', nivelc = '$nivelc', encargadopedidos = '$encargadopedidos', img1 = '$imagenFin1' , img2 = '$imagenFin2' WHERE id = $id";

    mysqli_query($conexion, $consulta);
    header("Location: ../tablas/verclient.php");
}
function eliminar_producto(){

    global $conexion;
    extract($_POST);
    $id = $_POST['id'];
    $consulta = "DELETE FROM clientes WHERE id = $id";
    mysqli_query($conexion, $consulta);
    header("Location: ../tablas/verclient.php");
}
?>