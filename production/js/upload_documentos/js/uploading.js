

function borrar(e){
    
    localStorage.setItem("variable_a_borrar", e.name)
  //  var data= new FormData();
   // data.append("documento_tipo_file", variable_a_borrar)
   // ajax_fetch(path, data, function(d){
    //    alert(d);
      //  });

}
        
   
      
function funcion_borrar(){
    var id_trabajador=document.getElementById("id_trabajador").value;
   var path="./model/documentos_resumen_trabajador/borrar_registro.php";
      var data= "variable_a_borrar="+localStorage.getItem("variable_a_borrar")+"&accion=borrar_registro&id_trabajador="+id_trabajador;
      ajax_fetch(path, data, function(d){
      location.reload()
     });
}








/*
funciones:
*/

function ajax_fetch(path, data, funcion_resolve){
    
        let request = new Request(path, {
            method: 'POST',
           
            body:data,
            headers: new Headers({
                "Content-type": "application/x-www-form-urlencoded"
               
                
                
            })
        });
    
         fetch(request)
        .then((resp) => resp.text())
        .then((data)=> { funcion_resolve(data)} );
    
       
    }