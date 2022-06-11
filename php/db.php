<?php

$servidor="localhost";
$usuario="root";
$contraseña="";
$bd="ejemplo";


$conexion= mysqli_connect($servidor,$usuario,$contraseña,$bd);
if(!$conexion){
    die("Conexion fallida".mysqli_connect_error());
}
?>