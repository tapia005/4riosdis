<!DOCTYPE html>
<html lang="en">

<?php require '../menu/menu1.php' ?>
<?php require '../header/heaadmin.php' ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>nuevoproducto</title>
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
                <h3>CREAR NUEVO PRODUCTO </h3>
                <form  action="./funcata.php" method="POST"  enctype="multipart/form-data">
                    <p>
                        <label for="codigo">Código  *</label>
                        <input type="text"  id="codigo" name="codigo" required>
                    </p>
                    <p>
                        <label for="producto">Producto *</label>
                        <input type="text"  id="producto" name="producto" required>
                    </p>
                    <p>
                        <label for="laboratorio">Laboratorio *</label>
                        <input type="text"  id="laboratorio" name="laboratorio" required>
                    </p>
                    <p>
                    <label for="cantidad">Cantidad *</label>
<input type="text"  id="cantidad" name="cantidad" required>
                    </p>
                    <p>
                    <label for="categoria">Categoria *</label>
<input type="text"  id="categoria" name="categoria" required>
                    </p>
                    <p>
                    <label for="ristra">Cantidad Por Ristra*</label>
<input type="text"  id="ristra" name="ristra" required>
                    </p>
                    <p>
                    <label for="pcaja">Precio Caja *</label>
<input type="text"  id="pcaja" name="pcaja"  required>
                    </p>
                    <p>
                    <label for="pmitad">Precio Mitad  *</label>
<input type="text"  id="pmitad" name="pmitad"  required>
                    </p>
                    <p>
                    <label for="punidad">Precio Unidad *</label>
<input type="text"  id="punidad" name="punidad" required>
                    </p>
                    <p>
                    <label for="ppublico">Precio Publico *</label>
<input type="text"  id="ppublico" name="ppublico" required>
                    </p>
                    <p>
                    <label for="descripcion">Descripción del producto *</label>
<textarea class="des" type="text"  id="descripcion" name="descripcion" required>

</textarea>                    
</p>
                    <p>
                    <label>Imagen</label>
                    <input type="file" name="imagen" id="imagen" required>
                    </p>
                    <p class="block">
                    <input type="hidden" name="accion" value="insertar_productos">
                    <button type="submit">Guardar</button>
                    </p>
                </form>
            </div>
        </div>

    </div>

</body>
<footer><?php require '../footer/footer.php' ?></footer>
</html>

