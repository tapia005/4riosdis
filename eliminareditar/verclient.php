<?php

$id = $_GET['id'];
require_once ("../conexion/_db.php");
$consulta = "SELECT * FROM clientes WHERE id = $id";
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
    <title>vercliente</title>
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
                <h3>Datos del cliente</h3>
                <form method="POST"  enctype="multipart/form-data">
                    <p>
                        <label for="codigo">Código del Cliente  *</label>
                        <input type="text"  id="codigo" name="codigo" value="<?php echo $productos ['codigo']; ?>" disabled>
                    </p>
                    <p>
                        <label for="nombre">Nombre *</label>
                        <input type="text"  id="nombre" name="nombre" value="<?php echo $productos ['nombre']; ?>" disabled>
                    </p>
                    <p>
                    <label for="apellido">Apellido *</label>
<input type="text"  id="apellido" name="apellido" value="<?php echo $productos ['apellido']; ?>" disabled>
                    </p>
                    <p>
                    <label for="telefono1">Teléfonos *</label>
<input type="text"  id="telefono1" name="telefono1" value="<?php echo $productos ['telefono1']; ?>" disabled>
                    </p>
                    <p>
                    <label for="encargadopedidos">Encargado de los pedidos-nombre *</label>
<input type="text"  id="encargadopedidos" name="encargadopedidos" value="<?php echo $productos ['encargadopedidos']; ?>" disabled>
                    </p>
                    <p>
                    <label for="dia">Dias que se puede visitar*</label>
<input type="text"  id="dia" name="dia" value="<?php echo $productos ['dia']; ?>" disabled>
                    </p>
                    <p>
                    <label for="correo">Correo *</label>
<input type="text"  id="correo" name="correo" value="<?php echo $productos ['correo']; ?>"  disabled>
                    </p>
                    <p>
                    <label for="ruc">Cedula o RUC  *</label>
<input type="text"  id="ruc" name="ruc" value="<?php echo $productos ['ruc']; ?>"  disabled>
                    </p>
                    <p>
                    <label for="ubicacion">Ubicación *</label>

<a href="<?php echo $productos ['ubicacion']; ?>" target="_blank"><img src="../img/map2.png" class='imgRedonda'/> Ver en GOOGLE maps</a>

                    </p>
                    <p>
                    <label for="ciudad">Ciudad *</label>
<input type="text"  id="ciudad" name="ciudad" value="<?php echo $productos ['ciudad']; ?>" disabled>
                    </p>
                    <p>
                    <label for="sector">Sector *</label>
<input type="text"  id="sector" name="sector" value="<?php echo $productos ['sector']; ?>" disabled>
                    </p>
                    <p>
                    <label for="calles">Calles *</label>
<input type="text"  id="calles" name="calles" value="<?php echo $productos ['calles']; ?>"  disabled>
                    </p>
                    <p>
                    <label for="ncasa">Numero de Casa *</label>
<input type="text"  id="ncasa" name="ncasa" value="<?php echo $productos ['ncasa']; ?>" disabled>
                    </p>
                    <p>
                    <label for="referencia">Referencia *</label>
<input type="text"  id="referencia" name="referencia" value="<?php echo $productos ['referencia']; ?>" disabled>
                    </p>
                    <p>
<label for="factura">Facturas *</label>
<input type="text"  id="factura" name="factura" value="<?php echo $productos ['factura']; ?>" disabled>
                    </p>
                    <p>
                    <label for="nivelc">Visitar al cliente *</label>
<input type="text"  id="nivelc" name="nivelc" value="<?php echo $productos ['nivelc']; ?>" disabled>
                    </p>
                    <p>
                    <label>Imagen Local</label>

                    <?php foreach($resultado as $row){ ?>

<img width="150" height="150" class="foto"  src="data:image;base64,<?php echo base64_encode($row['img1']);  ?>" alt="..." />

<?php }?>
                    </p>
                    <p>
                    <label>Imagen Referencia</label>
                    <?php foreach($resultado as $row){ ?>

<img width="150" height="150" class="foto"  src="data:image;base64,<?php echo base64_encode($row['img2']);  ?>" alt="..." />

<?php }?>
                    </p>
                    <p class="block">
                    <input type="hidden" name="accion" value="editar_producto">
                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                    <button type="submit">Guardar</button>


                    </p>
                </form>
            </div>
        </div>

    </div>

</body>
<footer><?php require '../footer/footer.php' ?></footer>
</html>


