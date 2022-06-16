<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../imagenes/iconopes.png">
    <script type="text/javascript" src=../scripts/funciones.js></script>
    <link rel="stylesheet" href="../css/botones.css">
    <title>BiblioTECa</title>
</head>
<body>
    <div class ="contenedor">
        <h2>Bienvenido Administrador</h2>
        <p>Selecciona la opción que deseas realizar</p>
        <br>
        <div class="contenedor_botones">
            <button class="btn" onclick="reporte_libros()"><span>Reporte De Libros</span></buttton>
            <button class="btn" onclick="reporte_usuarios()"><span>Reporte De Usuarios</span></buttton>
            <button class="btn" onclick="agregar_libro()"><span>Agregar Libro</span></buttton>
            <button class="btn" onclick="borrar_libro()"><span>Borrar Libro</span></buttton>
        </div><br>

        <br> <p><a href="logoff.php">Cerrar Sesión</a></p>
        
    </div>
<?php
    require "footer.php";
?>

</body>
</html>