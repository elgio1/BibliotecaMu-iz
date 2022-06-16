
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
    foreach($consulta as $valor){
    $tipo=$valor['tipo'];
    }
    if($tipo=="a"){
        echo '      
        <script>
                alert("El usuario accedio como administrador"); 
                window.location = "administrador.php";
        </script>'; exit;  

    }else{
        echo '<script> alert("El usuario ingreso correctamente"); window.location = "prin.php"; </script>'; exit;
        
    }
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

