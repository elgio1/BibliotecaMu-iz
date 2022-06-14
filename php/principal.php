<<<<<<< HEAD:principal.php
<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagenes/logo_small_icon_only_inverted.png">
    <link rel="stylesheet" href="principal.css">
    <title>Mundo Cosmico</title>
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
                <a href="libro.php">libros</a>
                <a href="reporte_usuarios.php">Cerrar Sesion</a>
            </div>
        </div>

    </nav>


    <main class="contenedor">
        <article></article>
    </main>
    <script src="https://kit.fontawesome.com/7bcad7ba1e.js" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagenes/logo_small_icon_only_inverted.png">
    <link rel="stylesheet" href="principal.css">
    <title>Mundo Cosmico</title>
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
                <a href="libro.php">libros</a>
                <a href="reporte_usuarios.php">Cerrar Sesion</a>
            </div>
        </div>

    </nav>


    <main class="contenedor">
        <article></article>
    </main>
    <script src="https://kit.fontawesome.com/7bcad7ba1e.js" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>
>>>>>>> 08dad43aa193fa61245f95caa397afb7d2de35f7
=======
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

            <div class="enlaces">
                <input type="search" name="busquedalibro">
                <a href="#"><?php include "db.php"; echo $usuario;?></a>
                <a href="logoff.php">Cerrar Sesion</a>
            </div>
        </div>
    </nav>
</body>
>>>>>>> 6001defa94863de9811151420d9373d954b8bbc7:php/principal.php
</html>