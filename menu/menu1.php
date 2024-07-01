<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/menulog.jpg"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/menu.css">
</head>
<body>

    <header>
        <img class="logo" src="../img/menulog.jpg" alt="Logo">
        <button id="abrir" class="abrir-menu"><i class="bi bi-list"></i></button>
        <nav class="nav" id="nav">
            <button class="cerrar-menu" id="cerrar"><i class="bi bi-x"></i></button>
            <ul class="nav-list">
                <li><a>Tablas</a>
                <ul class="menu-vertical">
					<li><a href="../tablas/verusu.php">Tab. Usuarios</a></li>
					<li><a href="../tablas/verapp.php">Tab. Aplicación</a></li>
					<li><a href="../tablas/vercata.php">Tab. Productos</a></li>
                    <li><a href="../tablas/verclient.php">Tab. Clientes</a></li>
				</ul>
            </li> 
                <li>
                    <a>Registrar</a> 
                    <ul class="menu-vertical">
					<li><a href="../registro/registro.php">Regs. Administrador</a></li>
					<li><a href="../registro/regapp.php">Regs. Aplicación</a></li>
				</ul>
            </li>
            <li>
                    <a>Crear</a> 
                    <ul class="menu-vertical">
					<li><a href="../nuevos/nuevocliente.php">Nue. Cliente</a></li>
					<li><a href="../nuevos/nuevocata.php">Nue. Producto</a></li>
				</ul>
            </li>
            <li>
                    <a>Catalogo</a> 
                    <ul class="menu-vertical">
					<li><a href="../catalogo/catalogo.php" target="_blank">Cata. Productos</a></li>
					<li><a href="../catalogo/cataclient.php" target="_blank">Cata. Publico</a></li>
				</ul>
            </li>
                <li><a href="../login/login.php" target="_blank">Iniciar Sesión</a>
                <li><a href="../CerrarSesion/cerrarsesion.php">Cerrar Sesión</a>
            
            </li>
            </ul>
        </nav>
    </header>
    
    <script src="../js/menu.js"></script>
</body>
</html>