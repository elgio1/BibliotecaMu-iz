
<?php
session_start();
if (isset($_SESSION["correcto"]) && $_SESSION["correcto"] == 0) {
    header("location: index.php");
}
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
    <link rel="icon" href="../imagenes/iconopes.png">
    <link rel="stylesheet" href="../css/principal.css">
    <script src="https://kit.fontawesome.com/7de4137cd3.js" crossorigin="anonymous"></script>
    <title>BiblioTECa</title>
</head>
<body>
    <nav class="menu" id="menu">
        <div class="contenedor contenedor-enlaces-nav">
            <div class="btn-categorias" id="btn-categorias">
                <p><a href="funcioningresar.php">Biblio<b>TEC</b>a</a></p>
            </div>
            <a href="libros.php">Libros</a>

            <form action="buscarlibro.php" method="post">
                   Buscar: <input type="search" name="nombre">
            </form>

            <div class="enlaces">
                <ul class="nav">
                    <?php $usuario=filter_input(0,"usuario");
                        if($_SESSION['usuario']==null){
                            $_SESSION['usuario']=$usuario;
                        }
                        
                     ?>
                    <li class="lista"><a href="#"><?php print_r($_SESSION['usuario']); ?></a>
                        <ul> 
                            <li><a href="usuario_perfil.php"><i class="fa-solid fa-user"></i>&nbsp;&nbsp;Mi Perfil</a></li>
                            <li><a href="#"><i class="fa-solid fa-book"></i>&nbsp;&nbsp;Mis Libros</a></li>
                            <li><a href="logoff.php"><i class="fa-solid fa-arrow-right-from-bracket"></i>&nbsp;&nbsp;Cerrar Sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
    require("db.php");
    $sql="SELECT * FROM libros LIMIT 5";
    $consulta=mysqli_query($conexion,$sql);
    
    ?>
    <div>
    <?php foreach($consulta as $valor){?>
        <?php
        $tema = $valor['tema'];
        $integrantes = $valor['integrantes'];
        $fecha = $valor['fechaPub'];
        $liga = $valor['direccion'];
        ?>
        <div class="librillos">
            
            <a href="<?php echo $liga; ?>" target="new_blank" >
                <img src="../imagenes/Portadares1.jpeg" >
                <h1><?php echo $tema; ?></h1>
                <h3>Autores: <?php echo $integrantes; ?></h3>
                <h3>Publicacion: <?php echo $fecha; ?></h3>
            </a>
        </div>
        
        <?php } ?>
    </div>
<?php
    require "footer.php";
?>
</body>
</html>