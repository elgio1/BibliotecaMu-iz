<?php
session_start();
if (isset($_SESSION["correcto"]) && $_SESSION["correcto"] == 1) {
    header("location: principal.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/main1.css">
    <link rel="icon" href="../imagenes/logo_small_icon_only_inverted.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BiblioTECa</title>
</head>
<body>
    <div class="total">
        
        <div  class="formulario" >
            <div class="imagen">
                <img src="../imagenes/logo_small.png"><br>
                <img src="../imagenes/imagen.jpeg">
            </div>
            <form action="funcioningresar.php" method="POST">
                <label >Usuario</label><br>
                <input type="text" placeholder="Ingrese su usuario" name="usuario" required><br><br>
                <label >Contraseña</label><br>
                <input type="password" placeholder="Ingrese su contraseña" name="contraseña" required><br><br>
                <input type="submit" value="Ingresar">

            </form> <br>
            <span> ¿No tienes una cuenta? Has click <a href="register.php"> aquí</a></span>
        </div>
    </div>
    
    
</body>
</html>