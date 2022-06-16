<?php
session_start();
require ("db.php");
$usuario = $_SESSION['usuario'];
$sql = "SELECT * FROM usuarios WHERE usuario='$usuario'";
$consulta=mysqli_query($conexion,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="../imagenes/iconopes.png">
    <link rel="stylesheet" href="../css/main1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BiblioTECa</title>
</head>
<body>
<?php 
    foreach($consulta as $valor){
        $usuario = $valor['usuario'];
        $email = $valor['email'];
        $contraseña = $valor['contraseña'];
    }
?>
<div >
    <img src="../imagenes/icon_user.gif"><br>
    <label >Usuario: </label><label ><?php echo $usuario;?></label><br>
    <label >Email: </label><label ><?php echo $email;?></label><br>
    <label >Contraseña: </label><label ><?php echo $contraseña;?></label><br>
</div>

</body>
</html>