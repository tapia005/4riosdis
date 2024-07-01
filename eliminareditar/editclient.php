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
    <title>editcliente</title>
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
                <h3>Editar datos del cliente</h3>
                <form  action="./funclient.php" method="POST"  enctype="multipart/form-data">
                    <p>
                        <label for="codigo">Código del Cliente  *</label>
                        <input type="text"  id="codigo" name="codigo" value="<?php echo $productos ['codigo']; ?>" required>
                    </p>
                    <p>
                        <label for="nombre">Nombre *</label>
                        <input type="text"  id="nombre" name="nombre" value="<?php echo $productos ['nombre']; ?>" required>
                    </p>
                    <p>
                    <label for="apellido">Apellido *</label>
<input type="text"  id="apellido" name="apellido" value="<?php echo $productos ['apellido']; ?>" required>
                    </p>
                    <p>
                    <label for="telefono1">Teléfonos *</label>
<input type="text"  id="telefono1" name="telefono1" value="<?php echo $productos ['telefono1']; ?>" required>
                    </p>
                    <p>
                    <label for="encargadopedidos">Encargado de los pedidos-nombre *</label>
<input type="text"  id="encargadopedidos" name="encargadopedidos" value="<?php echo $productos ['telefono1']; ?>" required>
                    </p>
                    <p>
                    <label for="dia">Dias que se puede visitar*</label>
<input type="text"  id="dia" name="dia" value="<?php echo $productos ['dia']; ?>" required>
                    </p>
                    <p>
                    <label for="correo">Correo *</label>
<input type="text"  id="correo" name="correo" value="<?php echo $productos ['correo']; ?>"  required>
                    </p>
                    <p>
                    <label for="ruc">Cedula o RUC  *</label>
<input type="text"  id="ruc" name="ruc" value="<?php echo $productos ['ruc']; ?>"  required>
                    </p>
                    <p>
                    <label for="ubicacion">Ubicación *</label>
<input type="text"  id="ubicacion" name="ubicacion" value="<?php echo $productos ['ubicacion']; ?>" required>
                    </p>
                    <p>
                    <label for="ciudad">Ciudad *</label>
<input type="text"  id="ciudad" name="ciudad" value="<?php echo $productos ['ciudad']; ?>" required>
                    </p>
                    <p>
                    <label for="sector">Sector *</label>
<input type="text"  id="sector" name="sector" value="<?php echo $productos ['sector']; ?>" required>
                    </p>
                    <p>
                    <label for="calles">Calles *</label>
<input type="text"  id="calles" name="calles" value="<?php echo $productos ['calles']; ?>"  required>
                    </p>
                    <p>
                    <label for="ncasa">Numero de Casa *</label>
<input type="text"  id="ncasa" name="ncasa" value="<?php echo $productos ['ncasa']; ?>" required>
                    </p>
                    <p>
                    <label for="referencia">Referencia *</label>
<input type="text"  id="referencia" name="referencia" value="<?php echo $productos ['referencia']; ?>" required>
                    </p>
                    <p>
<label for="factura">Facturas *</label>
<select style="background-color: DarkBlue; color: #FFFFFF" " class="select" name="factura" id="factura" required>
<option value="<?php echo $productos ['factura']; ?>"><?php echo $productos ['factura']; ?></option> 
<option value="SI">SI</option>
    <option value="NO">NO</option>
  </select>
                    </p>
                    <p>
<label for="nivelc">Visitar al cliente *</label>
<select style="background-color: DarkBlue; color: #FFFFFF" " class="select" name="nivelc" id="nivelc" required>
<option value="<?php echo $productos ['nivelc']; ?>"><?php echo $productos ['nivelc']; ?></option> 
<option value="Bueno-Semana">Bueno-Semana</option>
    <option value="Normal-15-Días">Normal-15-Días </option>
    <option value="Malo-mes">Malo-mes</option>
  </select>
                    </p>
                    <p>
                    <label>Imagen Local</label>
                    <input type="file" name="img1" id="img1" required>
                    <?php foreach($resultado as $row){ ?>

<img width="150" height="150" class="foto"  src="data:image;base64,<?php echo base64_encode($row['img1']);  ?>" alt="..." />

<?php }?>
                    </p>
                    <p>
                    <label>Imagen Referencia</label>   
                    <input type="file" name="img2" id="img2" required>
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








