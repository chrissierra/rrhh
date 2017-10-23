

        var drawerLayout = document.getElementById('drawerLayout');
        toggle.addEventListener('click', function() {
          if (drawerLayout.forceNarrow || !drawerLayout.narrow) {
            drawerLayout.forceNarrow = !drawerLayout.forceNarrow;
          } else {
            drawerLayout.drawer.toggle();
          }
        });



/*
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
*/










/*
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
****************************************************************

COMIENZA SCRIPT PARA CHAT

---------------------------------------------------------------------------------------
*/







/*
###################################################### BOTON PARA ENVÍO DE MENSAJES ###########################################
*/

var boton= document.getElementById("boton");
boton.addEventListener("click", function(){
  enviar_mensajes();
actualizar_todo();
}, false)

/*
###################################################### BOTON PARA ENVÍO DE MENSAJES ###########################################
*/














/*
###################################################### FUNCION ENVIAR MENSAJES ###########################################
*/




function enviar_mensajes(){
   
    var texto=document.getElementById("texto").value;
    var accion="envio_mensaje";
    var clave="";

    let string_a_comparar_en_load= new String("administrador");
    let string2_a_comparar_en_load= new String("Administrador");


if(localStorage.getItem("id_plataforma").trim() === string_a_comparar_en_load.trim() || localStorage.getItem("nombre").trim() === string2_a_comparar_en_load.trim()){
  clave= localStorage.getItem("conversacion_administrador")
}else{
  clave= localStorage.getItem("id_plataforma")
}


  path="../src/chat.php";
   fetch(path, {
        method: 'POST',
        body: 'texto='+texto+'&accion='+accion+'&id_plataforma='+clave.trim()+"&nombre="+localStorage.getItem("nombre"),
        headers: {
            "Content-Type": "application/x-www-form-urlencoded" }
        }).then(function(response)  {
        
      return response.text();
    })
    .then(function(miBlob) {
      document.getElementById("texto").value="";
////alert(miBlob);

    });
}


/*
###################################################### FUNCION ENVIAR MENSAJES ###########################################
*/






















/*
###################################################### SETINTERVAL ###########################################
*/


setInterval(actualizar_todo, 900);


/*
###################################################### SETINTERVAL ###########################################
*/






























/*
###################################################### FUNCION EN DESUSO ###########################################
*/


function intervalos(){
  var id="dummy";
  var texto=document.getElementById("texto").value;
  var accion="actualizacion_por_intervalos";

  path="../src/chat.php";
   fetch(path, {
        method: 'POST',
        body: 'texto='+texto+'&accion='+accion+'&id_plataforma='+localStorage.getItem("id_plataforma"),
        headers: {
            "Content-Type": "application/x-www-form-urlencoded" }
        }).then(function(response)  {
        
      return response.json();
    })
    .then(function(miBlob) {

      if(miBlob.nombre== null){
      
      }else{
        document.getElementById("contenedor_mensajes").innerHTML+='<paper-card style="border-radius: 15px;margin:15px;" heading="'+miBlob.nombre+'" alt="Emmental"><div class="card-content">'+miBlob.mensaje+'</div></paper-card>';
      }
   


    });
}// fin funcion intervalos

/*
###################################################### FUNCION EN DESUSO ###########################################
*/










































/*
###################################################### WINDOWS.LOAD ###########################################
*/
/*
###################################################### WINDOWS.LOAD ###########################################
*/



window.addEventListener("load", function(){
    let string_a_comparar_en_load= new String("administrador");
    let string2_a_comparar_en_load= new String("Administrador");


   // alert(string2_a_comparar_en_load.trim().localeCompare(localStorage.getItem("nombre").trim())); =0 es igual , match 100%

if(localStorage.getItem("id_plataforma").trim() === string_a_comparar_en_load.trim() || localStorage.getItem("nombre").trim() === string2_a_comparar_en_load.trim()){
 
 /*
FUNCIONES PARA EJECUTAR VISTA DE ADMINSITRADOR
 */
let accion="administrador_vista_onload";
 path="../src/chat.php";
   fetch(path, {
        method: 'POST',
        body: 'accion='+accion,
        headers: {
            "Content-Type": "application/x-www-form-urlencoded" }
        }).then(function(response)  {
        
      return response.json();
    })
    .then(function(miBlob) {
var todo="";
   for (var index = 0; index < miBlob.length; index++) {
   

     if(index==miBlob.length-1){
       console.log("fin")
     }else{
      var element = miBlob[index];
     ////alert(element)
    todo +="<paper-item id="+miBlob[index]+" class='lista' >"+miBlob[index+1]+"</paper-item>";
     index++;
     }
   }

   document.getElementById("listado").innerHTML=todo;


    });


 /*
FIN FUNCIONES PARA EJECUTAR VISTA DE ADMINSITRADOR
 */

}
}, false);






/*
/*
###################################################### SETTIMEOUT SI FUERA ADMIN ########################################################
*/
/*
###################################################### SETTIMEOUT SI FUERA ADMIN ########################################################
*/

setTimeout(function() {
  var lista= document.getElementsByClassName("lista");

  for (var index = 0; index < lista.length; index++) {
    var element = lista[index];
    element.addEventListener("click", function(e){

       
/*
click en cada cnoversacion
*/

console.log(this.id)



localStorage.setItem("conversacion_administrador",this.id);

actualizar_todo()

/*
click en cada cnoversacion
*/
}, false)
  }

}, 100);

/*
###################################################### SETTIMEOUT SI FUERA ADMIN ########################################################
*/
/*
###################################################### SETTIMEOUT SI FUERA ADMIN ########################################################
*/














































/*
###################################################### FUNCION ACTUALIZAR TODO ########################################################
*/

function actualizar_todo(){
 var clave="";
 let string_a_comparar_en_load= new String("administrador");
 let string2_a_comparar_en_load= new String("Administrador");


// alert(string2_a_comparar_en_load.trim().localeCompare(localStorage.getItem("nombre").trim())); =0 es igual , match 100%

if(localStorage.getItem("id_plataforma").trim() === string_a_comparar_en_load.trim() || localStorage.getItem("nombre").trim() === string2_a_comparar_en_load.trim()){
  clave= localStorage.getItem("conversacion_administrador")
}else{
  clave= localStorage.getItem("id_plataforma")
}
//alert(clave)

  var id="dummy";
  var texto=document.getElementById("texto").value;
  var accion="actualizar_todo";

  path="../src/chat.php";
   fetch(path, {
        method: 'POST',
        body: 'texto='+texto+'&accion='+accion+'&id_plataforma='+clave.trim(),
        headers: {
            "Content-Type": "application/x-www-form-urlencoded" }
        }).then(function(response)  {
        
      return response.text();
    })
    .then(function(miBlob) {

   document.getElementById("contenedor_mensajes").innerHTML=miBlob;

    });
}// fin funcion intervalos



/*
###################################################### FIN FUNCION ACTUALIZAR TODO ########################################################
*/
