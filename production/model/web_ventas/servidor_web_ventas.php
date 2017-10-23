<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');

require_once("../config/config.php"); 
date_default_timezone_set("America/Santiago");

class trabajador{
    
   }
   
require_once("../afp_isapres/conexion_base_abstracta.php");
require_once("../variables_empresa/clase_variables_empresa.php");
                              
$base_datos= new crud_variables_empresa;



switch ($_POST["accion"]) {

    case 'onload_chat':
        
      $resultado =$base_datos->get_por_query("SELECT * FROM disponibilidad_chat WHERE id='1'");
           
           foreach ($resultado as $key => $value) {
           echo $value["disponibilidad"];
           }
    break;
    

    case 'iniciar_chat':
        $resultado =$base_datos->ingreso_chat_sin_ejecucion_exitosa("INSERT INTO chat SET id_plataforma='".$_POST["email"]."', nombre='".$_POST["nombre"]."', mensaje='".$_POST["texto"]."', hora=CURTIME(), fecha=CURDATE()");
       
        echo "true";
    break;


    case 'actualizar_chat':
    $resultado =$base_datos->get_por_query("SELECT * from chat where id_plataforma='".$_POST["id_plataforma"]."'"); 
    $texto_a_devolver="";
    foreach ($resultado as $key => $value) {
        $texto_a_devolver.='<li ><p style="color:black;font-size:16px;">'.$value["nombre"].' dice: </p>'.$value["mensaje"].'<small id="small_chat_li" style="color:grey;margin-left:20px;float:right;margin-top:10px;"><h5 style="font-size:10px;">'.$value["hora"].'</h5></small></li>';
    }
   
    echo $texto_a_devolver;
break;



      case 'boton_chat_activo':
      $resultado =$base_datos->insert_por_query("INSERT INTO chat SET id_plataforma='".$_POST["id_plataforma"]."', nombre='".$_POST["nombre"]."',leido='false', mensaje='".$_POST["texto"]."', hora=CURTIME(), fecha=CURDATE()"); 
      break;




      case 'verificar_leido':
      $query="UPDATE chat SET leido='true' WHERE id_plataforma='".$_POST["id_plataforma"]."'"; 
      $resultado =$base_datos->update_query($query); 
      break;



      case 'verificar_no_leido':
        $query="SELECT * from chat where id_plataforma='".$_POST["id_plataforma"]."' AND leido='false'"; 
        $resultado =$base_datos->get_por_query($query); 
        echo count($resultado);
        break;


        case 'enviar_mail':
            echo "mail enviado";
            break;


    default:
        echo "nada";
        break;
}






?>