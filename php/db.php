<?php

$servidor="sql109.byetcluster.com";
$usuario="epiz_31968276";
$contraseña="yZlpcNehmuxZd";
$bd="epiz_31968276_BiblioTECa";


$conexion= mysqli_connect($servidor,$usuario,$contraseña,$bd);
if(!$conexion){
    die("Conexion fallida".mysqli_connect_error());
}
?>