<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');

require("./model/config/config.php"); ?>
<?php 
 date_default_timezone_set("America/Santiago");
class trabajador{
    public $nombre, $id, $apellido, $cargo, $sueldo;

   }
   
require_once("../afp_isapres/conexion_base_abstracta.php");
require_once("../variables_empresa/clase_variables_empresa.php");
                              
$base_datos= new crud_variables_empresa;

if($_POST["labor"]=="get_query"){
    $trabajador= new trabajador;
    $array1= $base_datos->get_por_query("SELECT * from ingreso_empleados where rut='".$_POST['rut']."'");

    foreach ($array1 as $key => $value) {
    $trabajador->id= $value["id"];
    $trabajador->nombre= $value["nombre"];
    $trabajador->apellido= $value["apellido"];
    $trabajador->cargo= $value["puesto"];
    $trabajador->sueldo= $value["sueldo"];
    $trabajador->rut= $value["rut"];
    $trabajador->direccion= $value["direccion"];
    $trabajador->empresa= $value["empresa"];
    $trabajador->jefatura= $value["jefatura"];
    $trabajador->ingreso= $value["ingreso"];
    $trabajador->isapre= $value["isapre"];
    $trabajador->afp= $value["afp"];
    $trabajador->horario= $value["horario"];
    $trabajador->horas_jornada= $value["horas_jornada"];
    $trabajador->direccion_sin_comuna_empleado= $value["direccion_sin_comuna_empleado"];
    $trabajador->comuna_empleado= $value["comuna_empleado"];
    $trabajador->ultimo_dia_semana_jornada= $value["ultimo_dia_semana_jornada"];
    $trabajador->hora_entrada_jornada= $value["hora_entrada_jornada"];
    $trabajador->hora_salida_jornada= $value["hora_salida_jornada"];
    $trabajador->descanso_o_almuerzo_en_minutos= $value["descanso_o_almuerzo_en_minutos"];
    $trabajador->hora_inicio_descanso= $value["hora_inicio_descanso"];
    $trabajador->hora_fin_descanso= $value["hora_fin_descanso"];
    $trabajador->tipo_contrato= $value["tipo_contrato"];
    $trabajador->comuna_sucursal= $value["comuna_sucursal"]; # * importante
    $trabajador->direccion_sucursal= $value["direccion_sucursal"]; # * importante
    $trabajador->monto_adelanto= $value["monto_adelanto"];
    $trabajador->fecha_adelanto= $value["fecha_adelanto"];
    $trabajador->fecha_pago_sueldo= $value["fecha_pago_sueldo"];
    $trabajador->monto_pago_colacion_diario= $value["monto_pago_colacion_diario"];
    $trabajador->tipo_de_pago= $value["tipo_de_pago"];

    $trabajador->latitud= $value["latitud"];
    $trabajador->longitud= $value["longitud"];
    } // FIN FOREACH!!



  



    $myJSON = json_encode($trabajador);
    echo $myJSON;

/*
  ***********************************************************************************************************************
  <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< 
*/

}elseif($_POST["labor"]=="marcar_asistencia"){  // PRIMER ELSEIF
   

    

    $fecha_del_dia=date("Y-m-d");   
    if($_POST["accion"]=="entrada"){ /* IF INTERNO1 COMIENZA    */
         $array3= $base_datos->get_por_query("SELECT * from asistencia where id_trabajador='".$_POST['id']."' AND fecha='".$fecha_del_dia."' AND tipo_movimiento='".$_POST['accion']."'");

           if(count($array3)>0){ # IF INTERNO2 COMIENZA
            echo "false";
           }else{
            $base_datos->insert_por_query("INSERT INTO asistencia SET rut='".$_POST['rut']."', id_trabajador='".$_POST['id']."', tipo_movimiento='entrada', fecha=CURDATE(), hora=CURTIME()");
           }# IF INTERNO2 TERMINA
    }/* IF INTERNO1 COMIENZA    */


    }elseif ($_POST["accion"]=="salida") { // SEGUNDO ELSEIF
 /*
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
***************************************************************************************************************
<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
 */


 $fecha_del_dia=date("Y-m-d");   
 
 $array3= $base_datos->get_por_query("SELECT * from asistencia where id_trabajador='".$_POST['id']."' AND fecha='".$fecha_del_dia."' AND tipo_movimiento='".$_POST['accion']."'");


      if(count($array3)>0){
          echo "false";
       }else{

$hubo_entrada= $base_datos->get_por_query("SELECT * from asistencia where id_trabajador='".$_POST['id']."' AND fecha='".$fecha_del_dia."' AND tipo_movimiento='entrada'");
if(count($hubo_entrada)>0){
    $base_datos->insert_por_query("INSERT INTO asistencia SET rut='".$_POST['rut']."', id_trabajador='".$_POST['id']."', tipo_movimiento='salida', fecha=CURDATE(), hora=CURTIME()");
    $entrega_hora_salida= $base_datos->get_por_query("SELECT * from asistencia where id_trabajador='".$_POST['id']."' AND fecha='".$fecha_del_dia."' AND tipo_movimiento='".$_POST['accion']."'");
                    foreach ($entrega_hora_salida as $key => $value) {
                        # code... 
                        $hora_salida_objeto= new trabajador;
                        $hora_salida_objeto->hora_salida=$value["hora"];    
                    }
                    $json_hora_salida_objeto=json_encode($hora_salida_objeto);
}else{
  echo "false";  
}


       


                        
                         // echo $json_hora_salida_objeto;
      } // fin if de COUNT, busca ver si ya hubo un movimiento de entrada o salida








 /*
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
***************************************************************************************************************
<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
 */


    }elseif ($_POST["labor"]=="verificar_asistencia") {
        $hora_entrada= new trabajador;

        $fecha_del_dia=date("Y-m-d");   
        
         
             $array2= $base_datos->get_por_query("SELECT * from asistencia where id_trabajador='".$_POST['id']."' AND fecha='".$fecha_del_dia."' AND tipo_movimiento='entrada'");
     
     
             if(count($array2)>0){
               
                
                foreach ($array2 as $key => $value) {
                    $hora_entrada->hora_ingreso= $value["hora"];
                    $hora_entrada->booleano= "true";
                }
                $myJSON = json_encode($hora_entrada);
                echo $myJSON;
                 //echo "false";#ya ingeso
     
     
             }else{

               
                 echo "true";#aun no inrgesa
     
     
             }

            


}elseif ($_POST["labor"]=="verificar_salida") {
    $hora_entrada= new trabajador;

    $fecha_del_dia=date("Y-m-d");   
    
     
         $array2= $base_datos->get_por_query("SELECT * from asistencia where id_trabajador='".$_POST['id']."' AND fecha='".$fecha_del_dia."' AND tipo_movimiento='salida'");
 
 
         if(count($array2)>0){
           
            
            foreach ($array2 as $key => $value) {
                $hora_entrada->hora_ingreso= $value["hora"];
                $hora_entrada->booleano= "true";
            }
            $myJSON = json_encode($hora_entrada);
            echo $myJSON;
             //echo "false";#ya ingeso
 
 
         }else{

           
             echo "true";#aun no inrgesa
 
 
         }

        


}else{
  echo "fuera de todo";
}




?>