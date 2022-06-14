<?php

include ("db.php");

$usuario = filter_input(0,"usuario");
$contraseña = filter_input(0,"contraseña");

$sql = "SELECT * FROM usuarios WHERE usuario='$usuario' and contraseña='$contraseña'";
$consulta=mysqli_query($conexion,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BiblioTECa</title>
</head>
<body>
<figure>
    <img src="../imagenes/icon_user.gif" alt="" id="user-img">
</figure>

<p style="text-align:center;"><?php echo $usuario=filter_input(0,"usuario"); ?></h5>
<p style="text-align:center;font-size: smaller;" id="user-frid">FBT000000213 </p>
<p style="text-align:center;font-size: smaller;overflow-wrap: break-word;" id="user-email">arunkumarperumal8791@gmail.com </p>
<p style="text-align:center;font-size: smaller;"><strong>A/C status: </strong><span class="tags" id="user-status">Active</span></p>
</body>
</html>