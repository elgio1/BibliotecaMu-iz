<?php
    session_start();
    require "db.php";
    $archivo=filter_input(0,"borra");
    $sql="DELETE FROM libros WHERE tema='$archivo'";
    $consulta= mysqli_query($conexion,$sql);
    header("Location:administrador.php")

?>