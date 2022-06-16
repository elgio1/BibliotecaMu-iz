<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../imagenes/iconopes.png">
    <link rel="stylesheet" href="../css/main01.css">
    <title>BiblioTECa</title>
</head>
<body>
    <div class="formulario">
            <div class="imagen">
                <img src="../imagenes/logo_sm.png"><br>
                <img src="../imagenes/sign.gif">
            </div>
        <form action="funcionregistrar.php" method="POST">
            <label >Usuario</label><br>
            <input type="text" name="usuario" placeholder="Ingrese el usuario" required><br><br>
            <label >Email</label><br>
            <input type="text" name="correo" placeholder="Ingrese el correo" required><br><br>
            <label >Contraseña</label><br>
            <input type="password" name="contraseña"placeholder="Ingrese la contraseña" required><br><br>
            <input type="submit" value="Registrar">

        </form><br>
        <span>¿Ya tienes una cuenta? has click <a href="index.php"> aquí </a></span><br><br>
    </div>
</body>
</html>