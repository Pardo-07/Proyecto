function cargarSelect2(valor) {
    var arrayValores=new Array( 
        new Array(1,1,"Coca-Cola"), 
        new Array(1,2,"Pepsi"), 
        new Array(1,3,"Fanta"), 
        new Array(2,4,"Diana"), 
        new Array(3,5,"Marisol"), 
        new Array(4,6,"Lomo"), 
        new Array(5,7,"Queso"), 
        new Array(5,8,"Parmesano") 
        );
    if(valor==0) {
         // desactivamos el segundo select 
        document.getElementById("select2").disabled=false; 
    }else{
        // eliminamos todos los posibles valores que contenga el select2 
        document.getElementById("select2").options.length=0; 
        // añadimos los nuevos valores al select2 
        for(i=0;i<arrayValores.length;i++) {
            // unicamente añadimos las opciones que pertenecen al id seleccionado
            // del primer select 
            if(arrayValores[i][0]==valor) { 
                document.getElementById("select2").options[document.getElementById("select2").options.length]=new Option(arrayValores[i][2], arrayValores[i][1]); 
            } 
        }
         // habilitamos el segundo select 
        document.getElementById("select2").disabled=false;
   } 
} 
/** * Una vez selecciona una valor del segundo selecte, obtenemos la información * de los dos selects y la mostramos */
function seleccinado_select2(value) {
   var v1 = document.getElementById("select1"); 
   var valor1 = v1.options[v1.selectedIndex].value; 
   var text1 = v1.options[v1.selectedIndex].text; 
   var v2 = document.getElementById("select2"); 
   var valor2 = v2.options[v2.selectedIndex].value; 
   var text2 = v2.options[v2.selectedIndex].text;
}