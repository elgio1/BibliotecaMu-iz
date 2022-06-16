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
    location.href="agregar_libro.php";
}

function borrar_libro(){
    location.href= "borrar_libro.php";
}


window.pressed = function(){
    var a = document.getElementById('aa');
    if(a.value == "")
    {
        fileLabel.innerHTML = "Choose file";
    }
    else
    {
        var theSplit = a.value.split('\\');
        fileLabel.innerHTML = theSplit[theSplit.length-1];
    }
};