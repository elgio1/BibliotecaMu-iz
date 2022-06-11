<?php

require_once ("db.php");

$usuario = filter_input(0,"usuario");
$correo = filter_input(0,"correo");
$contraseña = filter_input(0,"contraseña");
$sql="INSERT INTO usuarios(usuario,email,contraseña) VALUES ('$usuario','$correo','$contraseña')";


if(strlen($usuario)<4 && strlen($correo)<4 && strlen($contraseña)<4){
    ?>
    <script type="text/javascript">
        window.alert("Algo a salido mal, intentalo de nuevo <br/> Recuerde que cada campo debe ser mayor a 4 caracteres ");
        window.location.replace("registrarse.php");
    </script>
    <?php    
}else{

    
    if (mysqli_query($conexion,$sql)){
        ?>
        <script type="text/javascript">
            window.alert("Los datos se han almacenado correctamente en la base de datos <br/> se redireccionara a la pagina principal para que inicie sesion.");
        </script>
        <?php
        header("Location:index.php");
    }else{
        header("Locarion:registrarse.php");
    }
}


?>