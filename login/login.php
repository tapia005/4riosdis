<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
    <link rel="icon" href="../img/menulog.jpg">
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
            <h1 class="titulo">BIENVENIDO </h1>
            <img src="../img/menulog.jpg" class='imgRedonda'  width="400" height="341"/>
                <form  action="./validarlogad.php" method="POST"  enctype="multipart/form-data">
                    <p>
                        <label for="usuario" class="texto" style="font-size: 40px">Usuario: *</label>
                        <input type="text" name="usuario" id="usuario" style="font-size: 20px" required>
                    </p>
                    <br>
<br>
                    <p>
                    <label for="password" class="texto" style="font-size: 40px">Contraseña:</label>
                    <input type="password" name="password" id="password"  style="font-size: 20px" required>
                    </p>
                    
                    <p class="block">
                    <input type="hidden" name="accion" value="insertar_productos">
                    <button type="submit">iniciar secion</button>
                    </p>
                </form>
            </div>
        </div>

    </div>

</body>
<footer><?php require '../footer/footer.php' ?></footer>
</html>

