var boton_actualizar=document.getElementById("actualizar");
var boton_guardar= document.getElementById("guardar");
var boton_cancelar=document.getElementById("cancelar");
var boton_volver= document.getElementById("volver");

boton_volver.addEventListener("click", function(e){
     e.preventDefault();
    location.href='./resumen.php';
},false);

boton_cancelar.addEventListener("click", function(e){
    e.preventDefault();
    location.href="./resumen.php";
},false)


boton_guardar.addEventListener("click", guardar_funcion, false);

function guardar_funcion(e){    
    e.preventDefault();
    var fin_input= document.getElementsByTagName("input");

   let array1= [];
    for(var i=0;i<fin_input.length;i++ ){
        fin_input[i].disabled=false;
        array1.push(fin_input[i].value);
    }

    console.log(array1[1]);
funcion_fetch('./model/actualizar_empleados_servidor.php', array1);


}


boton_actualizar.addEventListener("click",actualizar_funcion, false)

function actualizar_funcion(e){
    e.preventDefault();
  var fin_input= document.getElementsByTagName("input");
let array1= [];
    for(var i=0;i<fin_input.length;i++ ){
        fin_input[i].disabled=false;
        array1.push(fin_input[i].value);
    }

    console.log(array1[1]);

   
}



