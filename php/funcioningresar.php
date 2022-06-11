<?php
session_start();

require_once ("db.php");

$usuario = filter_input(0,"usuario");
$contraseña = filter_input(0,"contraseña");

$sql = "SELECT * FROM usuarios WHERE usuario='$usuario' and contraseña='$contraseña'";


if (mysqli_query($conexion,$sql)){
    $_SESSION["correcto"]= 1;
}else{
    $_SESSION["correcto"]= 0;
}
if($_SESSION["correcto"] == 1){
    header("Location:principal.php");
}else{
    header("Location:index.php");
}
mysql_free_result($sql);
mysql_close($conexion);
?>