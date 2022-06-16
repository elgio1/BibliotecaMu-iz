<?php 
session_start();
if(!$_SESSION['usuario']){
    header('Location:index.php');
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
    <script> function alerta(){ alert('Tu libro se desplegara en una nueva pestaña, disfruta la lectura            Ahí mismo puedes descargar el libro que te interesa.');}</script>
    <title>BiblioTECa Libros</title>
</head>
<body>
<nav class="menu" id="menu">
        <div class="contenedor contenedor-enlaces-nav">
            <div class="btn-categorias" id="btn-categorias">
                <p><a href="prin.php">Biblio<b>TEC</b>a</a></p>
            </div>

            <form action="buscarlibro.php" method="post">
                <input type="search" name="nombre" placeholder="Buscar..."  style="width:200px; height:25px">
            </form>

            <div class="enlaces">
                <ul class="nav">
                    <li class="lista"><a href="#"><?php print_r($_SESSION['usuario']); ?>&nbsp;<i class="fa-solid fa-sort-down"></i></a>
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
    $sql="SELECT * FROM libros";
    $consulta=mysqli_query($conexion,$sql);
    
    ?>
    <div>
    <?php foreach($consulta as $valor){?>
        <?php
        $tema = $valor['tema'];
        $integrantes = $valor['integrantes'];
        $fecha = $valor['fechaPub'];
        $liga = $valor['direccion'];
        $ima = $valor['portada'];
        ?>
        <div class="librillos">
            
            <a href="<?php echo $liga; ?>" target="new_blank" onclick="alerta();">
            <br><br>
                <img src="<?php echo $ima?>" >
                <h1><?php echo $tema; ?></h1>
                <p>
                    <span>Autores: </span>
                    <?php echo $integrantes; ?>
                    <br><br>
                </p>
                <p>
                    <span>Publicacion: </span>
                    <?php echo $fecha; ?>
                </p>
            </a>
        </div>
        
        <?php } ?>
    </div>
<?php
    require "footer.php";
?>
</body>
</html>