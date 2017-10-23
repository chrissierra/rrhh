var cerrar_beneficio= document.getElementById("cerrar_beneficio");
 
var guardar_beneficio= document.getElementById("guardar_beneficio");

var actualizar_beneficio_boton = new Promise((resolve) => {
 
 setTimeout(function() {
     resolve()
 }, 100);
});



actualizar_beneficio_boton.then(
() => { 


let guardar_beneficio= document.getElementsByName("guarda");
   guardar_beneficio[0].addEventListener("click", function(){

    //////////alert("en actualizar el beneficio")
     // //////////alert("en boton actualizar beneficio")   
let array_beneficios= new Array();
let beneficio_clase=document.getElementsByClassName("beneficio_actualizar");
for (var i = 0; i < beneficio_clase.length; i++) {
    if(beneficio_clase[i].value.length <= 0){
        funcion_inputs_incorrectos();
        return;
    }
array_beneficios.push(beneficio_clase[i].value);
beneficio_clase[i].value="";
    
}

//////////alert("casa x asalto "+array_beneficios)
 funcion_fetch("./model/variables_empresa/actualizar_beneficios_bbdd.php", array_beneficios);
 funcion_ingreso_realizado();
   })

},
(error) => { console.log("Something went wrong with your pizza") }
);














guardar_beneficio.addEventListener("click", function(){
    //////////alert("en boton guardar beneficio lick de guardaer")
let array_beneficios= new Array();
let beneficio_clase=document.getElementsByClassName("beneficio_clase");
//////////alert(beneficio_clase.length)
for (var i = 0; i < beneficio_clase.length; i++) {
    
    if(beneficio_clase[i].value.length <= 0){
        funcion_inputs_incorrectos();
        return;
    }
    
    //////////alert(beneficio_clase[i].value);
array_beneficios.push(beneficio_clase[i].value);

    
}


 funcion_fetch("./model/variables_empresa/beneficios.php", array_beneficios);
 funcion_ingreso_realizado();

}, false);



function funcion_inputs_incorrectos(){
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



function funcion_ingreso_realizado(){
 
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



function funcion_borrado_realizado(){
    
       var options = {
       style: {
           main: {
               background: "red",
               color: "white"
           }
       }
   };
   
   iqwerty.toast.Toast('Dato Borrado', options);
   setTimeout(function() {
       location.reload();  
   }, 1000);
   
      
   }




    

function hola(){
   
$(".modal").modal('hide');
//////////alert(document.getElementById("borrar_beneficio").value)
 
}



function actualizar_beneficio(e){
//////////alert(e.value)
var usuario_input_hidden= document.getElementById("usuario_input_hidden");
var path= "./model/variables_empresa/visualizar_beneficios_para_actualizar.php";
fetch(path,{
    method: "POST",
    //what ever data you want to post with key value pair 
    body: "usuario="+usuario_input_hidden.value+"&id="+e.value,
    headers: {
    "Content-Type": "application/x-www-form-urlencoded"
    }})
    .then( (response) => { 
        return response.text();


    //do something awesome that makes the world a better place
    })
    .then(function(r){

  var formulario_a_actualizar= document.getElementById("formulario_a_actualizar");
  formulario_a_actualizar.innerHTML=r;      


console.log(r);
    });
    

}

/*
function testing(r){


const actualizar_beneficio_enModal = new Promise((resolve) => {
 resolve(r[0])
});

actualizar_beneficio_enModal.then(
(item) => { 
    document.getElementById("nombre_beneficio_a_actualizar").value=item.beneficio
    
    document.getElementById("monto_beneficio_a_actualizar").value=item.monto

    document.getElementById("id_beneficio").value=item.id

},
(error) => { console.log("Something went wrong with your pizza") }
);

}

*/
function borrar_beneficio(e){
////////////alert(e.value)
var borrado_beneficio_boton= document.getElementById("borrado_beneficio_boton");
borrado_beneficio_boton.value= e.value;
}

function borrar(e){
////////////alert(e.value) -> tiene el id del beneficio a borrar

var path= "./model/variables_empresa/borrar_beneficio.php";
fetch(path,{
    method: "POST",
    //what ever data you want to post with key value pair 
    body: "id="+e.value,
    headers: {
    "Content-Type": "application/x-www-form-urlencoded"
    }})
    .then( (response) => { 
        return response.text();


    //do something awesome that makes the world a better place
    })
    .then(function(r){

      

        funcion_borrado_realizado()
console.log(r);

    });
}