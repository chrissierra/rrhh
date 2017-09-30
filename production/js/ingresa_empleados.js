var boton= document.getElementById("finalizar");
boton.addEventListener("click", ingresa, false);
// localStorage.setItem("generacion_contrato" , generacion_contrato.value)

function ingresa(){
   
  var myModalLabel2= document.getElementById("myModalLabel2");
  myModalLabel2.innerHTML="Proceso Finalizado";

  var footer_modal=document.getElementById("footer_modal");
  footer_modal.innerHTML='<button type="button" class="btn btn-primary" id="volver_perfil" onclick="volver()">Volver</button><button type="button" class="btn btn-danger" id="ir_a_contrato">Visualizar Contrato</button>';

  
setTimeout(volver, 100);
function volver(){
  var volver= document.getElementById("volver_perfil");
  volver.addEventListener("click", volviendo, false);
  function volviendo(){
    location.href='./index.php';
  }

  var visualizar_contrato= document.getElementById("ir_a_contrato");
  visualizar_contrato.addEventListener("click", funcion_visualizar_contrato, false);
  function funcion_visualizar_contrato(){

    location.href= "./model/generacion_contratos/vista_contrato.php?trabajador="+array1[8];
    
  }
}
/*
ACA SE HACE PROCESO DE ENVÍO
*/




setTimeout(function() {
  contrato_ingreso();
}, 600);









/*
array1 -> es enviado

*/

/*
  fetch("./model/server.php", {
    method: 'post',
    body: JSON.stringify(array1)
  })
  .then(function(response)  {
      
    return response.text();
  })
  .then(function(miBlob) {
      
   var aviso_fin_proceso_contrato= document.getElementById("aviso_fin_proceso_contrato");
   aviso_fin_proceso_contrato.innerHTML= miBlob;
   
   if(miBlob=="Debes completar todos los campos"){
     //alert("debes completar todo")
  

     var myModalLabel2= document.getElementById("myModalLabel2");
     myModalLabel2.innerHTML="Atención";

     var footer_modal=document.getElementById("footer_modal");
     footer_modal.innerHTML='<button type="button" class="btn btn-danger" id="" data-dismiss="modal">Volver</button>';

   }
  
  
  
  });
*/
}



window.addEventListener("load", function(){
//   document.getElementById("modal_inicio").removeAttribute("class", "fade");
var modal_inicio=document.getElementById("modal_inicio");
modal_inicio.classList.add("in");
modal_inicio.style.display="block";
modal_inicio.style.paddingRight="16px";
var body= document.getElementById("body_id");
body.classList.add("modal-open");
body.style.paddingRight="16px";
var div = document.createElement("div");
document.body.appendChild(div);
div.classList.add("modal-backdrop");
div.classList.add("fade");
div.classList.add("in");

//continuar_inicio_proceso_contratacion
//volver_inicio_desde_modal_inicio_contratacion

setTimeout(function(){

  var continuar_inicio_proceso_contratacion= document.getElementById("continuar_inicio_proceso_contratacion");
  var volver_inicio_desde_modal_inicio_contratacion= document.getElementById("volver_inicio_desde_modal_inicio_contratacion");
  
  continuar_inicio_proceso_contratacion.addEventListener("click", funcion_continuar_inicio_proceso_contratacion, false);
  volver_inicio_desde_modal_inicio_contratacion.addEventListener("click", funcion_volver_inicio_desde_modal_inicio_contratacion, false);
    //display: block; padding-right: 16px;


},800)



  }, false);

















































function funcion_continuar_inicio_proceso_contratacion(){
var descripcion_contrato_actual= document.getElementById("descripcion_contrato_actual");
var test= document.getElementsByTagName("small");
var generacion_contrato= document.getElementById("generacion_contrato");




// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//PREVENCION DE RIESGOS
if(generacion_contrato.value=="Contrato Para Jefe Departamento de Prevención de Riesgos"){
 
  var prevencion_riesgos= document.getElementsByClassName("prevencion_riesgos");
  test[0].textContent= "Contrato profesional Prevención de Riesgos";
  for (var index = 0; index < prevencion_riesgos.length; index++) {
    //alert(prevencion_riesgos[index].style.display)
    prevencion_riesgos[index].style.display="block";
    
    
  }
  sacar_modal_inicio();
  localStorage.setItem("generacion_contrato" , "prevencion_riesgos")
}
//PREVENCION DE RIESGOS
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++



// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//administrtivo
  if(generacion_contrato.value=="Contrato Trabajador Administrativo"){
    sacar_modal_inicio();
    localStorage.setItem("generacion_contrato" , "contrato_administrativo")
  }
//administrtivo
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++



// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++   
//chofer_cargas
if(generacion_contrato.value=="Contrato de Chofer Transporte de Carga de Empresa"){
  var chofer_cargas= document.getElementsByClassName("chofer_cargas");
  
  for (var index = 0; index < chofer_cargas.length; index++) {
    //alert(chofer_cargas[index].style.display)
    chofer_cargas[index].style.display="block";
    
    
  }
  sacar_modal_inicio();
  localStorage.setItem("generacion_contrato" , "chofer_cargas")
}
//chofer_cargas
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++  



// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++   
//TELEVISION
if(generacion_contrato.value=="Contrato de trabajo para Televisión"){
  var television_contrato= document.getElementsByClassName("television_contrato");
  
  for (var index = 0; index < television_contrato.length; index++) {
    //alert(chofer_cargas[index].style.display)
    television_contrato[index].style.display="block";
    
    
  }
  sacar_modal_inicio();
  localStorage.setItem("generacion_contrato" , "television_contrato")
}
//TELEVISION
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++  



// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++   
//TEATRO
if(generacion_contrato.value=="Contrato de trabajo para Teatro"){
  var teatro_contrato= document.getElementsByClassName("teatro_contrato");
  
  for (var index = 0; index < teatro_contrato.length; index++) {
    //alert(chofer_cargas[index].style.display)
    teatro_contrato[index].style.display="block";
    
    
  }
  sacar_modal_inicio();
  localStorage.setItem("generacion_contrato" , "teatro_contrato")
}
//TEATRO
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++  




// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++   
//construccion 
if(generacion_contrato.value=="Contrato de Trabajo para la Construcción"){
  var construccion_contrato= document.getElementsByClassName("construccion_contrato");
  
  for (var index = 0; index < construccion_contrato.length; index++) {
    //alert(chofer_cargas[index].style.display)
    construccion_contrato[index].style.display="block";
    
    
  }
  sacar_modal_inicio();
  localStorage.setItem("generacion_contrato" , "construccion_contrato")
}
//construccion 
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++  





// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++   
//auxiliar transporte 
if(generacion_contrato.value=="Contrato para Auxiliares de Buses"){
  var auxiliar_transporte_contrato= document.getElementsByClassName("auxiliar_transporte_contrato");
  
  for (var index = 0; index < auxiliar_transporte_contrato.length; index++) {
    //alert(chofer_cargas[index].style.display)
    auxiliar_transporte_contrato[index].style.display="block";
    
    
  }
  sacar_modal_inicio();
  localStorage.setItem("generacion_contrato" , "auxiliar_transporte_contrato")
}
//auxiliar transporte 
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++  



// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++   
//contrato de aprendizaje 
if(generacion_contrato.value=="Contrato de Aprendizaje"){
  var contrato_aprendizaje= document.getElementsByClassName("contrato_aprendizaje");
  var edad= document.getElementById("edad");
  edad.addEventListener("change", function(){
    if(document.getElementById("edad").value>21){ document.getElementById("edad").value=""; alert("No puede tener mas de 21 años.") }
  }, false)
  


  for (var index = 0; index < contrato_aprendizaje.length; index++) {
    //alert(chofer_cargas[index].style.display)
    contrato_aprendizaje[index].style.display="block";
    
    
  }
  sacar_modal_inicio();
  localStorage.setItem("generacion_contrato" , "contrato_aprendizaje")
}
//contrato de aprendizaje   practica_profesional
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++  




// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++   
//practica_profesional 
if(generacion_contrato.value=="Convenio de Práctica Profesional"){
  var construccion_contrato= document.getElementsByClassName("practica_profesional");
  
  for (var index = 0; index < construccion_contrato.length; index++) {
    //alert(chofer_cargas[index].style.display)
    construccion_contrato[index].style.display="block";
    
    
  }
  sacar_modal_inicio();
  localStorage.setItem("generacion_contrato" , "practica_profesional")
}
//practica_profesional
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++  





// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++   
//contrato_a_trato 
if(generacion_contrato.value=="Contrato a Trato"){
  var contrato_a_trato= document.getElementsByClassName("contrato_a_trato");
  var sueldo_escrito= document.getElementById("sueldo_escrito_div");
  var sueldo= document.getElementById("sueldo");

sueldo_escrito.style.display="none";
sueldo.style.display="none";
  for (var index = 0; index < contrato_a_trato.length; index++) {
    //alert(chofer_cargas[index].style.display)
    contrato_a_trato[index].style.display="block";
    
    
  }
  sacar_modal_inicio();
  localStorage.setItem("generacion_contrato" , "contrato_a_trato")
}
//contrato_a_trato  
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++  





// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++   
//contrato_agricola_permanente 
if(generacion_contrato.value=="Contrato Agrícola Permanente"){
  var contrato_agricola_permanente= document.getElementsByClassName("contrato_agricola_permanente");
  
  for (var index = 0; index < contrato_agricola_permanente.length; index++) {
    //alert(chofer_cargas[index].style.display)
    contrato_agricola_permanente[index].style.display="block";
    
    
  }
  sacar_modal_inicio();
  localStorage.setItem("generacion_contrato" , "contrato_agricola_permanente")
}
//contrato_agricola_permanente
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++  




// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++   
//contrato_plazo_fijo 
if(generacion_contrato.value=="Contrato a Plazo Fijo"){
  var contrato_plazo_fijo= document.getElementsByClassName("contrato_plazo_fijo");
  
  for (var index = 0; index < contrato_plazo_fijo.length; index++) {
    //alert(chofer_cargas[index].style.display)
    contrato_plazo_fijo[index].style.display="block";
    
    
  }
  sacar_modal_inicio();
  localStorage.setItem("generacion_contrato" , "contrato_plazo_fijo")
}
//contrato_plazo_fijo
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++  





// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++   
//contrato_profesor 
if(generacion_contrato.value=="Contrato de Profesional Educación del Sector Privado"){
  var contrato_profesor= document.getElementsByClassName("contrato_profesor");
  
  for (var index = 0; index < contrato_profesor.length; index++) {
    //alert(chofer_cargas[index].style.display)
    contrato_profesor[index].style.display="block";
    
    
  }
  sacar_modal_inicio();
  localStorage.setItem("generacion_contrato" , "contrato_profesor")
}
//contrato_profesor
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++  




}






































































function enabled_disabled_dinamico(valor_del_select, valor_positivo, valor_negativo){
  
  //var input_a_cambiar= document.getElementsByClassName(nombre_clase_a_habilitar_input);
  
 var input_a_cambiar= valor_del_select.parentNode.childNodes[6]

 if(valor_del_select.parentNode.childNodes[11]){
  var input_a_cambiar2= valor_del_select.parentNode.childNodes[11]
 }


if(document.getElementById(valor_del_select.name)){
  var boton_a_habilitar= document.getElementById(valor_del_select.name);
}


  if(valor_del_select.value==valor_positivo){
    
       input_a_cambiar.disabled=false;

       if(document.getElementById(valor_del_select.name)){
        boton_a_habilitar.disabled=false;
      }
       
       
       


      if(valor_del_select.parentNode.childNodes[11]){
        input_a_cambiar2.disabled=false;
       }
    
  }else{
    
    input_a_cambiar.disabled=true;
    
    
    if(document.getElementById(valor_del_select.name)){
      boton_a_habilitar.disabled=true;
    }
    
    



    if(valor_del_select.parentNode.childNodes[11]){
      input_a_cambiar2.disabled=true;
     }
   
  }
  
  }


  
function enabled_disabled_dinamico_corto(valor_del_select, valor_positivo, valor_negativo){
  
       var input_a_cambiar= valor_del_select.parentNode.childNodes[3]

  if(valor_del_select.value==valor_positivo){
    
       input_a_cambiar.disabled=false;
     
  }else{

    input_a_cambiar.disabled=true;
    
  }
  
  }




  function enabled_disabled_input_externos(valor_del_select, valor_positivo, valor_negativo){
    
         var input_a_cambiar= valor_del_select.parentNode.childNodes[3]
        var input_externo_a_cambiar= valor_del_select.name;
       input_externo_a_cambiar= document.getElementsByClassName(input_externo_a_cambiar);




         console.log(input_externo_a_cambiar)
  
    if(valor_del_select.value==valor_positivo){
      
         input_a_cambiar.disabled=false;

         for (var index = 0; index < input_externo_a_cambiar.length; index++) {
           var element = input_externo_a_cambiar[index];
           element.disabled=true
           
         }
         
       
    }else{
  
      input_a_cambiar.disabled=true;
      for (var index = 0; index < input_externo_a_cambiar.length; index++) {
        var element = input_externo_a_cambiar[index];
        element.disabled=false
        
      }
    }
    
    }






















var botones_agregar_items= function(e, pegar){
  //e.preventDefault();
  //e.preventDefault();
  var pegar= document.getElementById(pegar);
  var div= document.getElementById(e.value); //div entero que debe copiarse
  var div_a_agregar= document.createElement("div"); //se crea un div_a_agregar, tipo div
  div_a_agregar.innerHTML=div.outerHTML; // al div creado se le agrega el contenido html del div  inicial

  console.log(div_a_agregar.id);
  console.log(div_a_agregar.childNodes[0].childNodes[3])
  div_a_agregar.childNodes[0].childNodes[3].style.display="none";
  pegar.appendChild(div_a_agregar);

//div.innerHTML+=div.outerHTML;




}










  function funcion_volver_inicio_desde_modal_inicio_contratacion(){
    location.href="./index.php";
  }


  function sacar_modal_inicio(){

    var modal_inicio=document.getElementById("modal_inicio");
    modal_inicio.classList.remove("in");
    modal_inicio.style.display="none";
    modal_inicio.style.paddingRight="16px";
    var body= document.getElementById("body_id");
    body.classList.remove("modal-open");
   
    var modal_backdrop= document.getElementsByClassName("modal-backdrop");
    ////alert(modal_backdrop.length)
    body.removeChild(modal_backdrop[0]);
   


  }