<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagenes/logo_small_icon_only_inverted.png">
    <link rel="stylesheet" href="main1.css">
    <title>Registrarse</title>
</head>
<body>
    <div class="formulario">
            <div class="imagen">
                <img src="imagenes/logo_small.png"><br>
                <img src="imagenes/imagen.jpeg">
            </div>
        <form action="funcionregistrar.php" method="POST">
            <label >Usuario</label><br>
            <input type="text" name="usuario" placeholder="Ingrese el usuario"><br><br>
            <label >Email</label><br>
            <input type="text" name="correo" placeholder="Ingrese el correo "><br><br>
            <label >Contraseña</label><br>
            <input type="password" name="contraseña"placeholder="Ingrese la contraseña"><br><br>
            <input type="submit" value="Registrarse">

        </form>
    </div>
</body>
</html>