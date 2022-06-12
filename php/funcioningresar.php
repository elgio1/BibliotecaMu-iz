<?php
session_start();

require_once ("db.php");

$usuario = filter_input(0,"usuario");
$contraseña = filter_input(0,"contraseña");

$sql = "SELECT * FROM usuarios WHERE usuario='$usuario' and contraseña='$contraseña'";
$consulta=mysqli_query($conexion,$sql);

if (mysqli_num_rows($consulta)){
    $_SESSION["correcto"]= 1;
}else{
    $_SESSION["correcto"]= 0;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../imagenes/logo_small_icon_only_inverted.png">
    <link rel="stylesheet" href="../css/principal.css">
    <script src="https://kit.fontawesome.com/7de4137cd3.js" crossorigin="anonymous"></script>
    <title>BiblioTECa</title>
</head>
<body>
    <nav class="menu" id="menu">
        <div class="contenedor contenedor-botones-menu">
            <button id="btn-menu-barras" class="btn-menu-barras"> <i class="fa-solid fa-bars"></i> </button>
            <button id="btn-menu-cerrar" class="btn-menu-cerrar"> <i class="fa-solid fa-xmark"></i> </button>
        </div>

        <div class="contenedor contenedor-enlaces-nav">
            <div class="btn-categorias" id="btn-categorias">
                <p><a href="funcioningresar.php">Biblio<b>TEC</b>a</a></p>
            </div>
            <a href="#">Libros</a>

            <form action="buscarlibro.php" method="post">
                    <input type="search" name="nombre">
            </form>

            <div class="enlaces">
                <ul class="nav">
                    <li class="lista"><a href="#"><?php echo $usuario=filter_input(0,"usuario"); ?></a>
                        <ul> 
                            <li><a href="#"><i class="fa-solid fa-user"></i>&nbsp;&nbsp;Mi Perfil</a></li>
                            <li><a href="#"><i class="fa-solid fa-book"></i>&nbsp;&nbsp;Mis Libros</a></li>
                            <li><a href="logoff.php"><i class="fa-solid fa-arrow-right-from-bracket"></i>&nbsp;&nbsp;Cerrar Sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<?php
    require "footer.php";
?>
</body>

</html>