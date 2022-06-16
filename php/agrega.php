<?php
    session_start();
    require "db.php";

    $tema=filter_input(0,"tema");
    $integrantes=filter_input(0,"integrantes");
    $fecha=filter_input(0,"fecha");
    $titulo=filter_input(0,"titulo");
    $direccion=filter_input(0,"direccion");
    $numero=random_int(25,1000);
    $portada="../imagenes/".$_FILES['Portada']['name'];
    move_uploaded_file($_FILES['Portada']['tmp_name'],$portada);
    $sql="INSERT INTO libros (tema,integrantes,fechaPub,titulo,direccion,portada) values ('$tema','$integrantes','$fecha','$titulo','$direccion','$portada');";
    $consulta= mysqli_query($conexion,$sql);
    header("Location:administrador.php")
?>