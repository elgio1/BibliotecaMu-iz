<?php
ob_start();
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="../imagenes/iconopes.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BiblioTECa</title>
</head>
<body style="text-align:center;">
    <h1>Libros en el sistema.</h1><br>
    <?php
    require("db.php");
    $sql="SELECT * FROM libros";
    $consulta=mysqli_query($conexion,$sql);
    // $listaUsuarios=$consulta->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <table align="center" border="2px solid #000">
        <thead>
            <tr>
                <th>Id</th>
                <th>Tema</th>
                <th>Integrantes</th>
            </tr>
        </thead>
        <tbody>
            
        <?php foreach($consulta as $valor){?>
            <tr>
                <td><?php echo $valor['id']?></td>
                <td><?php echo $valor['tema']?></td>
                <td><?php echo $valor['integrantes']?></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    
</body>
</html>
<?php
    $html = ob_get_clean();

    require_once('C:\xampp\htdocs\pdf\autoload.inc.php');
    
    use Dompdf\Dompdf;

    $dompdf = new Dompdf;

    $options = $dompdf->getOptions();
    $options->set(array("isRemoteEnabled"=>true));
    $dompdf->setOptions($options);

    // $dompdf->loadHtml("HOLA MUNDO");
    $dompdf->loadHtml($html);
    $dompdf->setPaper("letter");
    $dompdf->render();
    $dompdf->stream("ReporteLibros".date('d-m-y').".pdf", array("Attachment"=>true));
?>