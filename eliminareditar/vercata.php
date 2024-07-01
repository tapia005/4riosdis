<?php

$id = $_GET['id'];
require_once ("../conexion/_db.php");
$consulta = "SELECT * FROM catalogo WHERE id = $id";
$resultado = mysqli_query($conexion, $consulta);
$productos = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="en">
<?php require '../menu/menu1.php' ?>
<?php require '../header/heaadmin.php' ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>verproducto</title>
    <link rel="stylesheet" href="../css/nuevo.css">
    <!-- GOOGLE FONTs -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>

    <div class="content">


        <div class="contact-wrapper animated bounceInUp">
            <div class="contact-form">
                <h3>Datos del producto</h3>
                <form  action="./funcata.php" method="POST"  enctype="multipart/form-data">
                    <p>
                        <label for="codigo">Código  *</label>
                        <input type="text"  id="codigo" name="codigo" value="<?php echo $productos ['codigo']; ?>" disabled>
                    </p>
                    <p>
                        <label for="producto">Producto *</label>
                        <input type="text"  id="producto" name="producto" value="<?php echo $productos ['producto']; ?>" disabled>
                    </p>
                    <p>
                    <label for="laboratorio">Laboratorio *</label>
                        <input type="text"  id="laboratorio" name="laboratorio" value="<?php echo $productos ['producto']; ?>" disabled>
                    </p>
                    <p>
                    <label for="cantidad">Cantidad *</label>
<input type="text"  id="cantidad" name="cantidad" value="<?php echo $productos ['cantidad']; ?>" disabled>
                    </p>
                    <p>
                    <label for="categoria">Categoria *</label>
<input type="text"  id="categoria" name="categoria" value="<?php echo $productos ['categoria']; ?>" disabled>
                    </p>
                    <p>
                    <label for="ristra">Cantidad Por Ristra*</label>
<input type="text"  id="ristra" name="ristra" value="<?php echo $productos ['ristra']; ?>" disabled>
                    </p>
                    <p>
                    <label for="pcaja">Precio Caja *</label>
<input type="text"  id="pcaja" name="pcaja" value="<?php echo $productos ['pcaja']; ?>"  disabled>
                    </p>
                    <p>
                    <label for="pmitad">Precio Mitad  *</label>
<input type="text"  id="pmitad" name="pmitad" value="<?php echo $productos ['pmitad']; ?>"  disabled>
                    </p>
                    <p>
                    <label for="punidad">Precio Unidad *</label>
<input type="text"  id="punidad" name="punidad" value="<?php echo $productos ['punidad']; ?>" disabled>
                    </p>
                    <p>
                    <label for="ppublico">Precio Publico *</label>
<input type="text"  id="ppublico" name="ppublico" value="<?php echo $productos ['ppublico']; ?>" disabled>
                    </p>
                    <p>
                    <label for="descripcion">Descripción del producto *</label>
                    <textarea class="des"  type="text"  id="descripcion" name="descripcion"   disabled>
                    <?php echo $productos ['descripcion']; ?>
                    </textarea>  

                    </p>
                    <p>
                    <label>Imagen Producto</label>
                    <?php foreach($resultado as $row){ ?>

<img width="150" height="200" class="foto"  src="data:image;base64,<?php echo base64_encode($row['imagen']);  ?>" alt="..." />

<?php }?>
                </form>
            </div>
        </div>

    </div>

</body>
<footer><?php require '../footer/footer.php' ?></footer>
</html>








