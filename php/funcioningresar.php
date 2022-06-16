
<?php
session_start();
if (isset($_SESSION["correcto"]) && $_SESSION["correcto"] = 0) {
    echo '      
    <script>
            alert("El correo o la contraseña no coinciden, por favor verifica los datos"); 
            window.location = "index.php";
    </script>
';
exit;
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
    echo '      
    <script>
            alert("Has accedido correctamente"); 
            window.location = "prin.php";
    </script>
';
exit;
    header('Location: prin.php');
}else{
    echo '      
    <script>
            alert("El usuario no existe, intenta con otro"); 
            window.location = "index.php";
    </script>
';
exit;
}
?>

