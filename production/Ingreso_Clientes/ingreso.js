var alerta=document.getElementById("alertas")
function guarda(){
	var nombre_rep= document.getElementById("nombre_rep");
	var email= document.getElementById("email");
	var numero= document.getElementById("numero");
	var direccion= document.getElementById("direccion");
	var website= document.getElementById("website");
	var password= document.getElementById("password");
	var nacimiento= document.getElementById("nacimiento");
	var textarea= document.getElementById("textarea");
	var rut_rep= document.getElementById("rut_rep");
	var nombre_empresa= document.getElementById("nombre_empresa");
	var giro= document.getElementById("giro");
	var rut_empresa= document.getElementById("rut_empresa");
	var numero_empleados= document.getElementById("numero_empleados");

var boton= document.querySelector("#finalizar").addEventListener("click", peo, false);

function peo(){

fetch('./server_ingreso_clientes_externos.php', {

    method: 'POST',
    headers: {'Content-Type':'application/x-www-form-urlencoded'}, // this line is important, if this content-type is not set it wont work
    body: 'giro='+giro.value+'&nombre_rep='+nombre_rep.value+'&email='+email.value+'&numero='+numero.value+'&direccion='+direccion.value+'&website='+website.value+'&password='+password.value+'&nacimiento='+nacimiento.value+'&textarea='+textarea.value+'&rut_rep='+rut_rep.value+'&nombre_empresa='+nombre_empresa.value+'&rut_empresa='+rut_empresa.value+'&numero_empleados='+numero_empleados.value+'&blah=1'

}).then(function(response) {

    return response.text();

}).then(function(text) { 
	alert(text)
alert("asdfasdf")
return text;
           

  }).then(function(text){

setTimeout(alertas(text), 100);
  });

}

}


function alertas(e){
if(e.length>18){
var error=document.getElementById("alerta_p");

                  error.text="Error al completar los campos."
}else{
	var exito=document.getElementById("exito");

                  exito.style.display="block";
}


}
