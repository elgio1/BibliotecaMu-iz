<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BiblioTECa</title>
</head>
<body>
            <form action="agrega.php" method="POST">
                <label >Tema</label><br>
                <input type="text" placeholder="Tema del Libro" name="tema" required><br><br>
                <label >Integrantes</label><br>
                <input type="text" placeholder="Integrantes" name="integrantes" required><br><br>
                <label >Fecha de Publicacion</label><br>
                <input type="text" placeholder="Fecha" name="fecha" required><br><br>
                <label >Titulo</label><br>
                <input type="text" placeholder="Titulo del Libro" name="titulo" required><br><br>
                <label >Direccion</label><br>
                <input type="text" placeholder="Direccion de Descarga" name="direccion" required><br><br>
                <label >Portada</label><br>
                <input type="text" placeholder="Direccion de Portada" name="Portada" required><br><br>
                <input type="submit" value="Agregar">

            </form> <br>
</body>
</html>