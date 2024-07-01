<?php require '../menu/menu1.php' ?>
<?php require '../header/heaadmin.php' ?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reg. App</title>
    <link rel="stylesheet" href="../css/login.css">
    <!-- GOOGLE FONTs -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>
<body>
    
    <div class="content">


        <div class="contact-wrapper animated bounceInUp">
            <div class="contact-form">
            <h1 class="titulo">CREAR NUEVO USUARIO APP</h1>
            <img src="../img/menulog.jpg" class='imgRedonda'  width="400" height="341"/>
                <form  action="./valiapp.php" method="POST"  enctype="multipart/form-data">
                    <p>
                        <label for="nombre" class="texto" >Nombres : </label>
                        <input type="text" name="nombre" id="nombre"  required>
                    </p>

                    <p>
                    <label for="apellido" class="texto" >Apellidos : *</label>
                    <input type="text" name="apellido" id="apellido"  required>
                    </p>

                    <p>
                    <label for="usuario" class="texto" >Usuario: *</label>
                    <input type="text" name="usuario" id="usuario"   required>
                    </p>

                    <p>
                    <label for="password" class="texto" >Contraseña: *</label>
                    <input type="password" name="password" id="password"   required>
                    </p>

                    <p>
                    <label for="correo" class="texto" >Correo: *</label>
                    <input type="text" name="correo" id="correo"   required>
                    </p>

                    <p>
                    <label for="telefono" class="texto" >Teléfono: *</label>
                    <input type="text" name="telefono" id="telefono"   required>
                    </p>
                    
                    
                    <p class="block">
                
                    <button class="botreg" type="submit" name="registrar">aceptar</button>
                    </p>

                </form>
            </div>
        </div>

    </div>

</body>
<footer><?php require '../footer/footer.php' ?></footer>
</html>

