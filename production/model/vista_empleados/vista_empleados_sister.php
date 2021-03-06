<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');

require_once("../config/config.php"); 
 date_default_timezone_set("America/Santiago");
class trabajador{
    public $nombre, $id, $apellido, $cargo, $sueldo;

   }
   $fecha_del_dia=date("d/m/Y");
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
    $trabajador->nombre_empresa_usuario_plataforma= $value["nombre_empresa_usuario_plataforma"];
    } // FIN FOREACH!!



  



    $myJSON = json_encode($trabajador);
    echo $myJSON;

/*
  ***********************************************************************************************************************
  <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< 
*/

}elseif($_POST["labor"]=="marcar_asistencia"){  // PRIMER ELSEIF
   

    

   // $fecha_del_dia=date("Y-m-d");   
    if($_POST["accion"]=="entrada"){ /* IF INTERNO1 COMIENZA    */
         $array3= $base_datos->get_por_query("SELECT * from asistencia where id_trabajador='".$_POST['id']."' AND fecha='".$fecha_del_dia."' AND tipo_movimiento='".$_POST['accion']."'");

           if(count($array3)>0){ # IF INTERNO2 COMIENZA
            echo "false";
           }else{
/*
Insertando el movimiento de entrada, 
1.- CALCULAR SI ES UN ATRASO

$hora_salida_segun_contrato=  $trabajador->hora_salida_jornada;

*/


$trabajador= new crud_variables_empresa;
$array_datos_trabajador= $trabajador->make_fetch("SELECT * FROM ingreso_empleados where id='".$_POST['id']."'")->fetch(PDO::FETCH_BOTH);


$hora_entrada_segun_contrato= $array_datos_trabajador["hora_entrada_jornada"];


$variable_con_hora_de_entrada_segun_contrato =explode(":", $hora_entrada_segun_contrato)[0];
$variable_con_min_de_entrada_segun_contrato =explode(":", $hora_entrada_segun_contrato)[1];

$cuantia_entrada_segun_contrato= $variable_con_hora_de_entrada_segun_contrato + ($variable_con_min_de_entrada_segun_contrato/60);

//date("H:i:s")
$variable_con_hora_de_entrada_actual =explode(":", date("H:i:s"))[0];
$variable_con_min_de_entrada_actual =explode(":", date("H:i:s"))[1];

$cuantia_entrada_actual= $variable_con_hora_de_entrada_actual + ($variable_con_min_de_entrada_actual/60);

if($cuantia_entrada_actual - $cuantia_entrada_segun_contrato <= 0 ){
  //  echo "cuantia entrada resta es cuantia_entrada_actual - cuantia_entrada_segun_contrato :". $cuantia_entrada_actual - $cuantia_entrada_segun_contrato;
    $status_entrada= "ok";
}elseif ($cuantia_entrada_actual - $cuantia_entrada_segun_contrato >= 0.1) {
  //  echo "cuantia entrada resta es cuantia_entrada_actual - cuantia_entrada_segun_contrato :". $cuantia_entrada_actual - $cuantia_entrada_segun_contrato;
    $status_entrada="atraso";
}

/*
Insertando el movimiento de entrada, 
1.- CALCULAR SI ES UN ATRASO

$hora_salida_segun_contrato=  $trabajador->hora_salida_jornada;

*/





            $base_datos->insert_por_query("INSERT INTO asistencia SET rut='".$_POST['rut']."', id_trabajador='".$_POST['id']."', tipo_movimiento='entrada', fecha='".$fecha_del_dia."', hora=CURTIME(), usuario_cliente='".$_POST['nombre_empresa_usuario_plataforma']."', nombre='".$_POST['nombre']."', apellido='".$_POST['apellido']."', status_entrada='".$status_entrada."', cuantia_entrada='".$cuantia_entrada_actual."'");
            
  //echo "correcto_ingreso";


           }# IF INTERNO2 TERMINA
    }/* IF INTERNO1 COMIENZA    */


    }elseif ($_POST["accion"]=="salida") { // SEGUNDO ELSEIF
 /*
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
***************************************************************************************************************
<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
 */


 //$fecha_del_dia=date("Y-m-d");   
 
 $array3= $base_datos->get_por_query("SELECT * from asistencia where id_trabajador='".$_POST['id']."' AND fecha='".$fecha_del_dia."' AND tipo_movimiento='".$_POST['accion']."'");


      if(count($array3)>0){
          echo "false";
       }else{

$hubo_entrada= $base_datos->get_por_query("SELECT * from asistencia where id_trabajador='".$_POST['id']."' AND fecha='".$fecha_del_dia."' AND tipo_movimiento='entrada'");
if(count($hubo_entrada)>0){

/*
Insertando el movimiento de entrada, 
1.- CALCULAR SI ES UN salida fuera de horario

$hora_salida_segun_contrato=  $trabajador->hora_salida_jornada;

*/


$trabajador= new crud_variables_empresa;
$array_datos_trabajador= $trabajador->make_fetch("SELECT * FROM ingreso_empleados where id='".$_POST['id']."'")->fetch(PDO::FETCH_BOTH);


$hora_salida_segun_contrato= $array_datos_trabajador["hora_salida_jornada"];


$variable_con_hora_de_salida_segun_contrato =explode(":", $hora_salida_segun_contrato)[0];
$variable_con_min_de_salida_segun_contrato =explode(":", $hora_salida_segun_contrato)[1];

$cuantia_salida_segun_contrato= $variable_con_hora_de_salida_segun_contrato + ($variable_con_min_de_salida_segun_contrato/60);

//date("H:i:s")
$variable_con_hora_de_salida_actual =explode(":", date("H:i:s"))[0];
$variable_con_min_de_salida_actual =explode(":", date("H:i:s"))[1];

$cuantia_salida_actual= $variable_con_hora_de_salida_actual + ($variable_con_min_de_salida_actual/60);

if($cuantia_salida_actual - $cuantia_salida_segun_contrato <= 0 ){
  //  echo "cuantia entrada resta es cuantia_salida_actual - cuantia_entrada_segun_contrato :". $cuantia_salida_actual - $cuantia_salida_segun_contrato;
    $status_salida= "ok";
}elseif ($cuantia_salida_actual - $cuantia_salida_segun_contrato >= 0.1) {
   // echo "cuantia entrada resta es cuantia_salida_actual - cuantia_entrada_segun_contrato :". $cuantia_salida_actual - $cuantia_salida_segun_contrato;
    $status_salida="fuera_horario";
}

/*
Insertando el movimiento de entrada, 
1.- CALCULAR SI ES UN salida fuera de horario

$hora_salida_segun_contrato=  $trabajador->hora_salida_jornada;

*/





    $base_datos->insert_por_query("INSERT INTO asistencia SET rut='".$_POST['rut']."', id_trabajador='".$_POST['id']."', tipo_movimiento='salida', fecha='".$fecha_del_dia."', hora=CURTIME(),usuario_cliente='".$_POST['nombre_empresa_usuario_plataforma']."', nombre='".$_POST['nombre']."', apellido='".$_POST['apellido']."', status_salida='".$status_salida."', cuantia_salida='".$cuantia_salida_actual."'");
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

      //  $fecha_del_dia=date("Y-m-d");   
        
         
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

   // $fecha_del_dia=date("Y-m-d");   
    
     
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