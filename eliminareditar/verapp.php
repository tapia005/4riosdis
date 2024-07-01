<?php

$id = $_GET['id'];
require_once ("../conexion/_db.php");
$consulta = "SELECT * FROM app WHERE id = $id";
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
    <title>Verapp</title>
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
                <h3>Datos Usuario</h3>
                <form  action="./funapp.php" method="POST"  enctype="multipart/form-data">
                    <p>
                        <label for="nombre">Nombre *</label>
                        <input type="text"  id="nombre" name="nombre" value="<?php echo $productos ['nombre']; ?>" disabled>
                    </p>
                    <p>
                    <label for="apellido">Apellido *</label>
<input type="text"  id="apellido" name="apellido" value="<?php echo $productos ['apellido']; ?>" disabled>
                    </p>
                    <p>
                    <label for="usuario">Usuario *</label>
<input type="text"  id="usuario" name="usuario" value="<?php echo $productos ['usuario']; ?>" disabled>
                    </p>
                    <p>
                    <label for="password">Contraseña*</label>
<input type="text"  id="password" name="password" value="<?php echo $productos ['password']; ?>" disabled>
                    </p>
                    <p>
                    <label for="correo">Correo *</label>
<input type="text"  id="correo" name="correo" value="<?php echo $productos ['correo']; ?>"  disabled>
                    </p>
                    <p>
                    <label for="telefono">Telefono  *</label>
<input type="text"  id="telefono" name="telefono" value="<?php echo $productos ['telefono']; ?>"  disabled>
                    </p>

                </form>
            </div>
        </div>

    </div>

</body>
<footer><?php require '../footer/footer.php' ?></footer>
</html>








