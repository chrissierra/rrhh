var boton_editar_datos_trabajador= document.getElementById("boton_editar_datos_trabajador");

var cerrar_modal_ingreso_datos= document.getElementById("cerrar_modal_ingreso_datos");

var cerrar_modal_ingreso_datos_b= document.getElementById("cerrar_modal_ingreso_datos_b");

var guardar= document.getElementById("guardar");

cerrar_modal_ingreso_datos.addEventListener("click", sacar_modal_inicio, false);
cerrar_modal_ingreso_datos_b.addEventListener("click", sacar_modal_inicio, false);




boton_editar_datos_trabajador.addEventListener("click", function(){
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




  }, false);




  function sacar_modal_inicio(){

    var modal_inicio=document.getElementById("modal_inicio");
    modal_inicio.classList.remove("in");
    modal_inicio.style.display="none";
    modal_inicio.style.paddingRight="16px";
    var body= document.getElementById("body_id");
    body.classList.remove("modal-open");
   
    var modal_backdrop= document.getElementsByClassName("modal-backdrop");
    //////alert(modal_backdrop.length)
    body.removeChild(modal_backdrop[0]);
   


  }


guardar.addEventListener("click", ingreso_datos_bbdd_numero_email, false);

  function ingreso_datos_bbdd_numero_email(){
var path="./model/menu_trabajadores/crud_menu_trabajadores.php";

var email1= document.getElementById("email1").value;
var numero1= document.getElementById("numero1").value;
var numero2= document.getElementById("numero2").value;
var email2= document.getElementById("email2").value;
var id= document.getElementById("id_trabajador").value

    fetch(path, {
        method: 'POST',
        body: 'email1='+email1+'&numero1='+numero1+'&email2='+email2+'&numero2='+numero2+"&id_trabajador="+id,
        headers: {
            "Content-Type": "application/x-www-form-urlencoded" }
        }).then(function(response)  {
        
      return response.text();
    })
    .then(function(miBlob) {
        
  console.log(miBlob)
  location.reload();
    });
  }


  
  
  window.addEventListener("load", consulta_servidor_anexos, false);
  
  function consulta_servidor_anexos(){
    var visualizar_anexos_para_el_trabajador=document.getElementById("visualizar_anexos_para_el_trabajador");
    visualizar_anexos_para_el_trabajador.addEventListener("click", funcion_modal_anexos_para_el_trajador, false);
    var genera_tu_anexo=document.getElementById("genera_tu_anexo");
    genera_tu_anexo.addEventListener("click", funcion_genera_tu_anexo, false);
    var input_anexo=document.getElementById("input_anexo");
    var label_anexo=document.getElementById("label_anexo");
    var mostrando_anexo_hecho_div=document.getElementById("mostrando_anexo_hecho_div");
    var select_anexos_hechos=document.getElementById("select_anexos_hechos");
    select_anexos_hechos.addEventListener("change",funcion_select_anexos_hechos, false);
    var anexo=document.getElementById("anexo");
    var descripcion_breve_anexo=document.getElementById("descripcion_breve_anexo");
    var input_checkbox=document.getElementById("input_checkbox");
    input_checkbox.addEventListener("click", funcion_checkbox, false);

    var usuario_plataforma=document.getElementById("usuario_plataforma").value;
    let id_trabajador= document.getElementById("id_trabajador").value  

    let path="./model/menu_trabajadores/server_anexos.php"; 
    
    fetch(path, {
        method: 'POST',
        body: 'usuario_plataforma='+usuario_plataforma+"&funcion_servidor=select_load",
        headers: {  
            "Content-Type": "application/x-www-form-urlencoded" }
        }).then(function(response)  {
        
      return response.text();
    })
    .then(function(miBlob) {
        
  console.log(miBlob);

  
    select_anexos_hechos.innerHTML=miBlob;
  

  
  
    });

////alert(usuario_plataforma);

  }


  //FUNCIONES:

  function funcion_select_anexos_hechos(){
    //alert(select_anexos_hechos.value);

    let path="./model/menu_trabajadores/server_anexos.php"; 
    fetch(path, {
        method: 'POST',
        body: 'id_trabajador='+select_anexos_hechos.value+"&funcion_servidor=cargar_anexos_visualizacion",
        headers: {  
            "Content-Type": "application/x-www-form-urlencoded" }
        }).then(function(response)  {
        
      return response.text();
    })
    .then(function(miBlob) {
        
  console.log(miBlob);

  mostrando_anexo_hecho_div.style.display="block";
  label_anexo.innerHTML="Anexo seleccionado: ";
  input_anexo.value=miBlob;
    //alert(miBlob);
  

  
  
    });

      }






  function funcion_modal_anexos_para_el_trajador(){

    modal_open("modal_anexos")
    let id_trabajador= document.getElementById("id_trabajador").value  
    
    let path="./model/menu_trabajadores/server_anexos.php"; 
    fetch(path, {
        method: 'POST',
        body: 'id_trabajador='+id_trabajador+"&funcion_servidor=cargar_anexos_visualizacion_modal",
        headers: {  
            "Content-Type": "application/x-www-form-urlencoded" }
        }).then(function(response)  {
        
      return response.text();
    })
    .then(function(miBlob) {
        
  console.log(miBlob);
setTimeout(function() {
    var div_input_modal_anexos= document.getElementById("div_input_modal_anexos");
    div_input_modal_anexos.innerHTML=miBlob; 
}, 400);


  
  
    });
  }

/*
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
++++++++++++++++++++++++++++++++++++++++++++++++++
++++++++++++++++++++++++++
++++++++++
*/
  function funcion_genera_tu_anexo(){
    
    var path="./model/menu_trabajadores/server_anexos.php";  


if(document.getElementById("input_checkbox").checked==false){
    //alert("no checked")
    var descripcion_breve_anexo=document.getElementById("descripcion_breve_anexo").value;
    var anexo_genera= document.getElementById("anexo").value;
}else{  
    //alert("checked")
    var descripcion_breve_anexo=0;
    var anexo_genera= input_anexo.value;
}

fetch(path, {
    method: 'POST',
    body: 'id_trabajador='+id_trabajador.value+"&funcion_servidor=ingresar"+"&anexo_por_post="+anexo_genera+"&usuario="+usuario_plataforma.value+"&descripcion_breve="+descripcion_breve_anexo,
    headers: {  
        "Content-Type": "application/x-www-form-urlencoded" }
    }).then(function(response)  {
    
  return response.text();
})
.then(function(miBlob) {
    
console.log(miBlob);
});
   
    
   














      }
  
 /*
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
++++++++++++++++++++++++++++++++++++++++++++++++++
++++++++++++++++++++++++++
++++++++++
*/     

      function funcion_checkbox(){
if(input_checkbox.checked== true){
    descripcion_breve_anexo.disabled=true;
    anexo.disabled=true;
}else{
    descripcion_breve_anexo.disabled=false;
    anexo.disabled=false;
}
       


      }










      function modal_close(id_div_modal){
        
            var modal_inicio=document.getElementById(id_div_modal);
            modal_inicio.classList.remove("in");
            modal_inicio.style.display="none";
            modal_inicio.style.paddingRight="16px";
            var body= document.getElementById("body_id");
            body.classList.remove("modal-open");
           
            var modal_backdrop= document.getElementsByClassName("modal-backdrop");
            //////alert(modal_backdrop.length)
            body.removeChild(modal_backdrop[0]);
           
        
        
          }




function modal_open(id_div_modal){
    var modal_inicio=document.getElementById(id_div_modal);
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
}








