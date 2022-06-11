<?php
    session_start();

    if(!isset($_SESSION["correcto"])){
        echo '      
            <script>
                    alert("Debes inicar sesion antes de acceder a esta pagina"); 
                    window.location = "login.php";
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
    <link rel="icon" href="imagenes/logo_small_icon_only_inverted.png">
    <link rel="stylesheet" href="principal.css">
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
                <p>Todas las <span>Categorias</span></p>
                <i class="fa-solid fa-caret-down"></i>
            </div>

            <div class="enlaces">
                <a href="">Busquedas recientes</a>
                <a href="#">Promociones</a>
                <a href="#">Ayuda</a>
                <a href="logoff.php">Cerrar Sesion</a>
            </div>
        </div>
    </nav>
</body>
</html>