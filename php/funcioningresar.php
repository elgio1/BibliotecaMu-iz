
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

if($_SESSION["correcto"]==1){
    $_SESSION['usuario']=$usuario;
    header('Location: prin.php');
}else{
    header('Location: index.php');
}
?>

