<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BiblioTECa</title>
</head>
<body>
    <?php
        $nombre=filter_input(0,"nombre");
        $dir="libros/";
        $direccion="../".$dir.$nombre.".pdf";
        #printf($direccion);
         header("Content-type: application/pdf");
         header("Content-Disposition: inline; filename=documento.pdf");
         readfile($direccion);
    ?>
</body>
</html>