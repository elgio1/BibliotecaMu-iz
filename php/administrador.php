<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../imagenes/iconopes.png">
    <script type="text/javascript" src=../scripts/funciones.js></script>
    <link rel="stylesheet" href="../css/admin.css">
    <title>BiblioTECa</title>
</head>
<body>

    <h2>Bienvenido Administrador</h2>
    <p>Selecciona la opción que deseas realizar</p>
    <br><br>
    <button id="btn" onclick="reporte_libros()">Reporte De Libros</buttton>
    <button id="btn" onclick="reporte_usuarios()">Reporte De Usuarios</buttton>
    <button id="btn" onclick="agregar_libro()">Agregar Libro</buttton>
    <button id="btn" onclick="borrar_libro()">Borrar Libros</buttton>


<?php
    require "footer.php";
?>

</body>
</html>