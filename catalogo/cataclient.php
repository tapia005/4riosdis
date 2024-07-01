<?php 
 $conn = mysqli_connect('localhost','root','','4rios');
  $query = "select * from catalogo";
  $resultado = mysqli_query($conn,$query);
?> 

<!DOCTYPE html>
<?php require '../menu/menucata.php' ?>
<link rel="icon" href="../img/menulog.jpg">
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cata.css">
    <title>catapublico</title>
</head>

<body>


    <section class="contenido">

        <div class="mostrador" id="mostrador">
            <div class="fila">
            <?php foreach($resultado as $row){ ?>
                <div class="item">
                    <div class="contenedor-foto">
                    <img   src="data:image;base64,<?php echo base64_encode($row['imagen']);  ?>" alt="..." />
                    </div>
                    <p class="descripcion"><?php echo $row['producto']; ?>  X<?php echo $row['cantidad']; ?></p>
                    <span class="precio">
                    Precio Publico <br>$<?php echo $row['ppublico']; ?><br>
                    Descripcion<br>
                    <textarea class="des" disabled>
                    <?php echo $row['descripcion']; ?>
                    </textarea> 

                </span>

                </div>
                <?php }?>
                </div>


        </div>
    </section>

    <script src="../js/sea.js"></script>
</body>
<footer><?php require '../footer/footer.php' ?></footer>
</html>