<?php

require_once ("db.php");

$usuario = filter_input(0,"usuario");
$correo = filter_input(0,"correo");
$contraseña = filter_input(0,"contraseña");
$sql="INSERT INTO usuarios(usuario,email,contraseña) VALUES ('$usuario','$correo','$contraseña')";


if(strlen($usuario)<4 && strlen($correo)<4 && strlen($contraseña)<4){
    echo 'Ingresa campos de mas tamaño';
}else{
    if (mysqli_query($conexion,$sql)){
        header("Location:index.php");
    }else{
        header("Location:register.php");
    }
}

?>