<?php
session_start();


class chat extends algo{
    
     public function ingreso_chat($id_plataforma, $nombre, $email, $tipo,$leido,$mensaje,  $blob_chat, $objeto_base_datos){
    
        $objeto_base_datos->ingreso_chat_sin_ejecucion_exitosa("INSERT INTO chat SET leido='".$leido."' , id_plataforma='".$id_plataforma."', nombre='".$nombre."', mensaje='".$mensaje."', hora=CURTIME(), fecha=CURDATE()");
     }
    
     public function verificar_variables(){
    
     }
    






     public function actualizacion_por_intervalos($objeto_base_datos, $id_plataforma){
        $resultado_actualizacion= $objeto_base_datos->get_por_query("SELECT * from chat where id_plataforma='".$id_plataforma."' AND leido='false' ORDER BY id asc LIMIT 1");
        $obj= new algo(); 
        foreach ($resultado_actualizacion as $key => $value) {
            $objeto_base_datos->update_query_sin_ejecucion_exitosa("UPDATE chat SET leido='true' where id='".$value['id']."'");
          
    $obj->mensaje=$value["mensaje"];
    $obj->hora=$value["hora"];
    $obj->nombre=$value["nombre"];
        }
        $myJSON = json_encode($obj);
    return $myJSON;
    
    
     }// fin actualizacion por intervalos
    
    }
    
    
    class algo{
    
    }

require '../../config/config.php';
require '../../afp_isapres/conexion_base_abstracta.php';
require '../../variables_empresa/clase_variables_empresa.php';
date_default_timezone_set("America/Santiago");

$fecha=date("d-m-Y");

$objeto_base_datos= new crud_variables_empresa();

$chat= new chat();






/*
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
*/
switch ($_POST["accion"]) {

    case "envio_mensaje":
        $chat->ingreso_chat($_POST["id_plataforma"], $_POST["nombre"], $email, $tipo,"false",$_POST["texto"],  $blob_chat, $objeto_base_datos);
       
        break;
    case "actualizacion_por_intervalos":
    $json_objeto=$chat->actualizacion_por_intervalos($objeto_base_datos, $_POST["id_plataforma"]);
    echo $json_objeto;
        break;
    case "ingreso_cliente_externo":
    $chat->ingreso_chat($_POST["email"], $_POST["nombre"], "cliente_externo", "false","","","", $objeto_base_datos);
    echo "true";
        break;



        case "cliente_plan":
        $variable= $objeto_base_datos->get_por_query("SELECT * FROM clientes_rrhh WHERE nombre_empresa='".$_POST["id_plataforma"]."'");
        foreach ($variable as $key => $value) {
            $id= $value["id"];
        }
        echo $id;
            break;
}





?>