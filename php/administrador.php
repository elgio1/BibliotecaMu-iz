<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../imagenes/iconopes.png">
    <link rel="stylesheet" href="../css/admin.css">
    <title>BiblioTECa</title>
</head>
<body>

    <h2>Bienvenido Administrador</h2>
    <p>Selecciona la opción que deseas realizar</p>
    <br><br>
    <div class="container">
        <div class="container-image">
            <a href="#"> <img src = "../imagenes/libro_agregar.jpg" alt=""> </a>
            <div class="content">
                <p>
                    <span>Agregar Libros</span>
                    El panel Agregar Libros le permite añadir libros a la base de datos
                </p>
            </div>
        </div>

        
        <div class="container-image">
            <a href="#"> <img src = "../imagenes/libro_eliminar.jpg" alt=""> </a>
            <div class="content">
                <p>
                    <span>Eliminar Libros</span>
                    El panel Eliminar Libros le permite borrar los libros disponibles en la base de datos
                </p>
            </div>
        </div>

        <div class="container-image">
            <a href="#"> <img src = "../imagenes/libro_report.jpg" alt=""> </a>
            <div class="content">
                <p>
                    <span>Reporte de Libros</span>
                    El panel Reporte de Libros le permite mostrar en pdf los libros disponibles en la base de datos
                </p>
            </div>
        </div>

        <div class="container-image">
            <a href="#"> <img src = "../imagenes/user_report.jpg" alt=""></a>
            <div class="content">
                <p>
                    <span>Reporte de Usuarios</span>
                    El panel Reporte de Usuarios le permite mostrar en pdf los usuarios disponibles en la base de datos
                </p>
            </div>
        </div>

    </div>

<?php
    require "footer.php";
?>

<?php
    function borra(){
        echo 'HOla';
    }
?>

</body>
</html>