function enviarDatos(){
    var nombre =document.getElementById('nombre').value;
    var descripcion =document.getElementById('descripcion').value;
    var costo =document.getElementById('costo').value;
    var cantidad =document.getElementById('cantidad').value;
    var tipo =document.getElementById('select1').value;
    var marca =document.getElementById('select2').value;
    var ingresar="insertar";
    $.ajax({
        type:'POST',
        url:'../../app/models/dashboard/producto.php',
        dataType: 'json',
        data:('nombre='+nombre+'&descripcion=' +descripcion+'&costo=' +costo+'&cantidad=' +cantidad
        +'&tipo=' +tipo+'&marca=' +marca+ '&accion='+ingresar)
    });
    $('#tabla').load('../../app/api/tablaproducto.php');
}

function actualizar(){
    var id =document.getElementById('id').value;
    var nombre =document.getElementById('nombre').value;
    var descripcion =document.getElementById('descripcion').value;
    var costo =document.getElementById('costo').value;
    var cantidad =document.getElementById('cantidad').value;
    var tipo =document.getElementById('select1').value;
    var marca =document.getElementById('select2').value;
    var ingresar2="actualizar";
    $.ajax({
        type:'POST',
        url:'../../models/dashboard/producto.php',
        dataType: 'json',
        data:('id2=' +id+'&nombre='+nombre+'&descripcion=' +descripcion+'&costo=' +costo+'&cantidad=' +cantidad
        +'&tipo=' +tipo+'&marca=' +marca+ '&accion2='+ingresar2)
    });
    window.location="../../../vista/dashboard/Productos.php";
}