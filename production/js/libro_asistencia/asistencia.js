function ir_asistencia_funcion(e){

   alert("test")


    var por_dia= new String("dia");
    var por_mes= new String("mes");
    var por_año= new String("año");
    var path=new String("./model/servidor_libros/libros_asistencia.php");
    var id_usuario_constructor_clase= document.getElementById("id_usuario_constructor_clase").value;


    if(e.value.trim() == por_dia.trim()){  // visualizar por dia
      //fetch para mostrar tabla segun fecha diaria
    
      var datepicker1=document.getElementById("datepicker1").value;
     
      data= "accion=diario&variable="+datepicker1+"&id_usuario="+id_usuario_constructor_clase;

      ajax_fetch(path, data, funcion_resolve1);
  
  
  
    }else if(e.value.trim() == por_mes.trim()){ // visualizar por  mes
       //fetch para mostrar tabla segun fecha mensual
  var input_mes=document.getElementById("input_mes").value;
  var input_año=document.getElementById("input_año").value;
  
  
  
  
  
    }else if(e.value.trim() == por_año.trim()){  // visualizar resumen anual
         //fetch para mostrar tabla segun resumen anual
         var input_año=document.getElementById("input_año").value;
  
  
  
    } // fin IF
  
  
  
  } // fin funcion ir_asistencia_funcion
  
  
  
function funcion_resolve1(d){
    var tabla_fetch=document.getElementById("tabla_fetch");
///alert(d);
tabla_fetch.innerHTML=d;
}





  
  
  function seleccion_tipo_fecha(e){
  
     var valor_dia= new String("dia");
     var valor_mes= new String("mes");
     var valor_año= new String("año");
     var valor_selecciona= new String("selecciona");
    // div_boton
  
  
  if(e.value.trim() == valor_dia.trim()){  // visualizar por dia
    document.getElementById("datepicker1").style.display="block"; // dia
    document.getElementById("div_año").style.display="none"; // año
    document.getElementById("div_mes").style.display="none"; // mes
    document.getElementById("div_boton").style.display="block"; // boton
  
    document.getElementById("id_boton").value="dia";
  
  
  }else if(e.value.trim() == valor_mes.trim()){ // visualizar por  mes
      document.getElementById("datepicker1").style.display="none"; // dia
      document.getElementById("div_año").style.display="block"; // año
      document.getElementById("div_mes").style.display="block"; // mes
      document.getElementById("div_boton").style.display="block"; // boton
  
      document.getElementById("id_boton").value="mes";
  
  }else if(e.value.trim() == valor_año.trim()){  // visualizar resumen anual
      document.getElementById("datepicker1").style.display="none"; // dia
      document.getElementById("div_año").style.display="block"; // año
      document.getElementById("div_mes").style.display="none"; // mes
      document.getElementById("div_boton").style.display="block"; // boton
  
      document.getElementById("id_boton").value="año";
  
  
  }else if(e.value.trim() == valor_selecciona.trim()){   // NADA
      document.getElementById("datepicker1").style.display="none"; // dia
      document.getElementById("div_año").style.display="none"; // año
      document.getElementById("div_mes").style.display="none"; // mes
      document.getElementById("div_boton").style.display="none"; // boton
  
  }
  }
  
      
     window.onload= function(){
     //     document.getElementById("datatable-responsive_wrapper").style.display="none";
         
      }
  
  
      $( function() {
          $( "#datepicker1" ).datepicker({
            changeMonth: true,
            changeYear: true
          });
        } );



        
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