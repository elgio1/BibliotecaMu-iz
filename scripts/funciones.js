function reporte_libros(){
    var w = window.open('','','width=500,height=500');
    w.document.write('Se esta generando tu reporte de libros, por favor espera')
    setTimeout(function() {w.close();}, 2000)
    location.href="reporte_libros.php";
}

function reporte_usuarios(){
    var w = window.open('','','width=500,height=500');
    w.document.write('Se esta generando tu reporte de usuarios, por favor espera')
    setTimeout(function() {w.close();}, 2000)
    location.href="reporte_usuarios.php";
}

function agregar_libro(){
    var w = window.open('','','width=500,height=500');
    w.document.write('Se te esta redireccionando a la ventana para agregar libros, por favor espera')
    setTimeout(function() {w.close();}, 2000)
    location.href="#";
}

function borrar_libro(){
    var w = window.open('','','width=500,height=500');
    w.document.write('Se te esta redireccionando a la ventana para borrar libros, por favor espera')
    setTimeout(function() {w.close();}, 2000)
    location.href="#";
}