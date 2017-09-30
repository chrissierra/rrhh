
if(document.getElementById("boton_contrato")){
    var boton_submit= document.getElementById("boton_contrato");
    boton_submit.addEventListener("click", ingresa_sucursal, false);
}



function activar_notificacion_falta_info_por_ingresar(){
var options = {
	style: {
		main: {
			background: "black",
			color: "white"
		}
	}
};

iqwerty.toast.Toast('Debes completar todos los campos', options);
}





function error_de_boton(){
    var options1 = {
	style: {
		main: {
			background: "black",
			color: "white"
		}
	}
};

iqwerty.toast.Toast('Presiona boton actualizar para agregar datos', options1);
}







function ingresa_sucursal(e){

        var modal= document.getElementById("modaluno");



     e.preventDefault();
    var input_textos= document.getElementsByClassName("contratos");

    array2= new Array();

for (var i = 0; i < input_textos.length; i++) {

    if(input_textos[i].disabled===true){
      
error_de_boton();
return;
    }





    console.log(input_textos[i].value.length  + " " + input_textos[i].value);

    if(input_textos[i].value.length==0){
        
activar_notificacion_falta_info_por_ingresar()
        return "jaja";
    }else{
 array2.push(input_textos[i].value);
    }
       
    
    
}




    funcion_fetch("./model/variables_empresa/contrato.php", array2);
     var modal= document.getElementById("modaluno");
modal.classList.remove("fade");
modal.classList.add("show");
setTimeout(modal_funciones, 1000);
}





setTimeout(function(){
    var boton_actualizar= document.getElementById("actualizar");
    
    boton_actualizar.addEventListener("click", funcion_actualizar, false);
}, 500)






function funcion_actualizar(e){
   
    e.preventDefault();
    var input_textos= document.getElementsByClassName("contratos");

    for (var i = 0; i < input_textos.length; i++) {
    
    
    input_textos[i].disabled=false;
}
}



function modal_funciones(){


var cerrar= document.getElementsByClassName("cerrar");
for (var i = 0; i < cerrar.length; i++) {
   cerrar[i].addEventListener("click", function(){
    location.href="./index.php";
    
},false);
    
}


var volver_uno= document.getElementsByClassName("volver");

for (var i = 0; i < volver_uno.length; i++) {
   volver_uno[i].addEventListener("click", function(){
location.href="./configuracion_datos_administracion.php";

}, false);

    
}

}




var boton_actualizar_datos= document.getElementById("boton_actualizar_datos");
boton_actualizar_datos.addEventListener("click", function(e){

e.preventDefault();

let array_beneficios= new Array();
let beneficio_clase=document.getElementsByClassName("contratos");
for (var i = 0; i < beneficio_clase.length; i++) {
    if(beneficio_clase[i].value.length <= 0){
        funcion_inputs_incorrectos_en_actualizar_contrato();
        return;
    }

array_beneficios.push(beneficio_clase[i].value);
beneficio_clase[i].value="";
    
}

//alert("casa x asalto "+array_beneficios)
 funcion_fetch("./model/variables_empresa/actualizar_datos_contrato_bbdd.php", array_beneficios);
 funcion_ingreso_realizado_en_contratos();
  



}, false);


function funcion_inputs_incorrectos_en_actualizar_contrato(){
    var options = {
	style: {
		main: {
			background: "black",
			color: "white"
		}
	}
};

iqwerty.toast.Toast('Debes completar todos los campos', options);
}




function funcion_ingreso_realizado_en_contratos(){
    
       var options = {
       style: {
           main: {
               background: "green",
               color: "white"
           }
       }
   };
   
   iqwerty.toast.Toast('Dato Ingresado', options);
   setTimeout(function() {
       location.reload();  
   }, 1000);
   
      
   }