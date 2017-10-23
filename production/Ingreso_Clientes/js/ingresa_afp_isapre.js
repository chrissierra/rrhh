
var boton_guardar= document.getElementById("send");

var boton_volver= document.getElementById("volver");

boton_volver.addEventListener("click", function(e){
     e.preventDefault();
    location.href='./index.php';
},false);




boton_guardar.addEventListener("click", guardar_funcion, false);

function guardar_funcion(e){    
    e.preventDefault();
    var fin_input= document.getElementsByTagName("input");

   let array1= [];
    for(var i=0;i<fin_input.length;i++ ){
        fin_input[i].disabled=false;
        array1.push(fin_input[i].value);
    }

 array1.push(document.getElementById("afp_isapre").value);   
    console.log(array1[1]);
funcion_fetch('./model/actualizar_afp_isapre_servidor.php', array1);


}


