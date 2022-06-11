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
if($_SESSION["correcto"] == 0){
    echo '      
        <script>
                alert("Debes inicar sesion antes de acceder a esta pagina"); 
                window.location = "index.php";
        </script>
    ';
    session_destroy();
    die();
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
                <p>Biblio<b>TECa</b></p>
                
            </div>
            <form action="buscarlibro.php" method="post">
                    <label >Buscar: </label>
                    <input type="search" name="nombre">
                    <input type="submit" value="Buscar">
            </form>

            <div class="enlaces">
                
                
                <a href="#"><?php 
                echo $usuario=filter_input(0,"usuario"); ?></a>
                <a href="logoff.php">Cerrar Sesion</a>
            </div>
        </div>
    </nav>
</body>

</html>