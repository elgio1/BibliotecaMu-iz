<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="../imagenes/iconopes.png">
    <link rel="stylesheet" href="../css/agrega.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BiblioTECa</title>
</head>
<body>
            <form action="agrega.php" method="POST" enctype="multipart/form-data">
                
                <input type="text" placeholder="Tema del Libro" name="tema" required><br><br>
               
                <input type="text" placeholder="Integrantes" name="integrantes" required><br><br>
                
                <input type="text" placeholder="Fecha" name="fecha" required><br><br>
                
                <input type="text" placeholder="Titulo del Libro" name="titulo" required><br><br>
                
                <input type="text" placeholder="Direccion de Drive" name="direccion" required><br><br>
                <p class="por">&nbsp;Portada de Libro</p>
                <input  type="file" placeholder="Direccion de Portada" name="Portada" id="img"required ><br><br>
                <Button type="submit" value="Borrar">Agregar</Button>
                <p><a href="logoff.php">Volver</a></p>
            </form> <br>
</body>
</html>