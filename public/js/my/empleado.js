
function enviarDatos2(){
    var nombre =document.getElementById('nombre').value;
    var usuario =document.getElementById('usuario').value;
    var profesion =document.getElementById('profesion').value;
    var tipo =document.getElementById('tipo').value;
    var correo =document.getElementById('correo').value;
    var genero =document.getElementById('genero').value;
    var tipoEmp =document.getElementById('tipoEmp').value;
    var estado =document.getElementById('estado').value;
    var direccion =document.getElementById('direccion').value;
    var ingresar="insertar";
    $.ajax({
        type:'POST',
        url:'../../app/models/dashboard/empleados.php',
        dataType: 'json',
        data:('nombre='+nombre+'&usuario=' +usuario+'&profesion=' +profesion+'&direccion=' +direccion+'&correo='+correo
        +'&genero=' +genero+'&tipo=' +tipo+'&estado=' +estado+'&tipoEmp=' +tipoEmp+ '&accion='+ingresar)
    });
    $('#tabla').load('../../app/api/tablaempleado.php');
}

function actualizar(){
    var id =document.getElementById('id').value;
    var nombre =document.getElementById('nombre').value;
    var usuario =document.getElementById('usuario').value;
    var profesion =document.getElementById('profesion').value;
    var tipo =document.getElementById('tipo').value;
    var correo =document.getElementById('correo').value;
    var genero =document.getElementById('genero').value;
    var tipoEmp =document.getElementById('tipoEmp').value;
    var estado =document.getElementById('estado').value;
    var direccion =document.getElementById('direccion').value;
    var ingresar2="actualizar";
    $.ajax({
        type:'POST',
        url:'../../models/dashboard/empleados.php',
        dataType: 'json',
        data:('id='+id+'&nombre='+nombre+'&usuario=' +usuario+'&profesion=' +profesion+'&direccion=' +direccion+'&correo='+correo
        +'&genero=' +genero+'&tipo=' +tipo+'&estado=' +estado+'&tipoEmp=' +tipoEmp+'&accion2='+ingresar2)
    });
    window.location="../../../vista/dashboard/Empleado.php";
}