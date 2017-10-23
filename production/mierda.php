<?php
session_start();

require '../config/config.php';
require '../afp_isapres/conexion_base_abstracta.php';
require '../variables_empresa/clase_variables_empresa.php';
require './navegacion_documentos.php';
$base= new crud_variables_empresa();
$target_dir = $_SERVER["DOCUMENT_ROOT"]."/Proyectos/jaja/bower_components/gentelella/production/model/documentos_resumen_trabajador/uploads/";
$target_file = $target_dir . basename($_FILES["documento_tipo_file"]["name"]);
$uploadOk = 1;
$filetype = pathinfo($target_file,PATHINFO_EXTENSION);

// move_uploaded_file($_FILES["documento_tipo_file"]["tmp_name"], $target_file); 


if($_POST["tipo_documento_select"] == "foto"){
                /*
                INICIO SUBIDA DE FOTOGRAFÍA
                */

                // Check if image file is a actual image or fake image

                    $check = getimagesize($_FILES["documento_tipo_file"]["tmp_name"]);
                    if($check !== false) {
                    
                        $uploadOk = 1;
                    } else {
                    
                        $uploadOk = 4;
                        navegacion::volver_atras($_POST["id_trabajador"],$uploadOk);
                    }


                // Check if file already exists
                if (file_exists($target_file)) {
                
                    $uploadOk = 3;
                    navegacion::volver_atras($_POST["id_trabajador"],$uploadOk);
                }

if($uploadOk == 1){

  
    if (move_uploaded_file($_FILES["documento_tipo_file"]["tmp_name"], $target_file)) {
        echo $target_file;
        $archivo = fopen(realpath($target_file), 'rb');
        $contenido= stream_get_contents($archivo);
        $contenido_definitivo = base64_encode($contenido);
        fclose($archivo); 
        unlink(realpath($target_file));
        $tipo= $_FILES["documento_tipo_file"]["type"];
        $query= 'UPDATE ingreso_empleados set foto="'. $contenido_definitivo.'", formato_archivo_imagen="'.$tipo.'", hora_upload_imagen=CURTIME(), fecha_upload_imagen=CURDATE() where id="'.$_POST["id_trabajador"].'"';
        $base->update_query_sin_ejecucion_exitosa($query);
        
       navegacion::volver_atras($_POST["id_trabajador"],$uploadOk);
    } else {
     //   navegacion::volver_atras($_POST["id_trabajador"], 404);
        
    }
}
            
                   
               
}elseif($_POST["tipo_documento_select"] == "contrato"){
/*
------------------------------------------------- INICIO SUBIDA PDF CONTRATO --------------------------------------------------
*/  
 

             $data=file_get_contents($_FILES["documento_tipo_file"]["tmp_name"]);
             $tipo= $_FILES["documento_tipo_file"]["type"];  
             $query=("UPDATE ingreso_empleados set contrato_externo=:contrato_externo, formato_archivo_contrato=:formato_archivo_contrato, fecha_upload_contrato=CURDATE(), hora_upload_contrato=CURTIME()  where id='".$_POST['id_trabajador']."'");
             $result= $base->update_bindparams($query);
             $result->bindParam(1, $data, PDO::PARAM_STR);
             $result->bindParam(2, $tipo, PDO::PARAM_STR);
             $result->execute();
                     
             navegacion::volver_atras($_POST["id_trabajador"], 1);                
                         
                                
/*
------------------------------------------------- FIN SUBIDA PDF CONTRATO --------------------------------------------------
*/    
}elseif ($_POST["tipo_documento_select"] != "contrato" or $_POST["tipo_documento_select"] != "foto") {
   
    navegacion::volver_atras($_POST["id_trabajador"], 17);


}



?>

<?php
session_start();

require '../config/config.php';
require '../afp_isapres/conexion_base_abstracta.php';
require '../variables_empresa/clase_variables_empresa.php';
require './navegacion_documentos.php';
$base= new crud_variables_empresa();
$target_dir = $_SERVER["DOCUMENT_ROOT"]."/Proyectos/jaja/bower_components/gentelella/production/model/documentos_resumen_trabajador/uploads/";
$target_file = $target_dir . basename($_FILES["documento_tipo_file"]["name"]);
$uploadOk = 1;
$filetype = pathinfo($target_file,PATHINFO_EXTENSION);

// move_uploaded_file($_FILES["documento_tipo_file"]["tmp_name"], $target_file); 


if($_POST["tipo_documento_select"] == "foto"){
                /*
                INICIO SUBIDA DE FOTOGRAFÍA
                */

                // Check if image file is a actual image or fake image

                    $check = getimagesize($_FILES["documento_tipo_file"]["tmp_name"]);
                    if($check !== false) {
                    
                        $uploadOk = 1;
                    } else {
                    
                        $uploadOk = 4;
                        navegacion::volver_atras($_POST["id_trabajador"],$uploadOk);
                    }


                // Check if file already exists
                if (file_exists($target_file)) {
                
                    $uploadOk = 3;
                    navegacion::volver_atras($_POST["id_trabajador"],$uploadOk);
                }

if($uploadOk == 1){

  
    if (move_uploaded_file($_FILES["documento_tipo_file"]["tmp_name"], $target_file)) {
        echo $target_file;
        $archivo = fopen(realpath($target_file), 'rb');
        $contenido= stream_get_contents($archivo);
        $contenido_definitivo = base64_encode($contenido);
        fclose($archivo); 
        unlink(realpath($target_file));
        $tipo= $_FILES["documento_tipo_file"]["type"];
        $query= 'UPDATE ingreso_empleados set foto="'. $contenido_definitivo.'", formato_archivo_imagen="'.$tipo.'", hora_upload_imagen=CURTIME(), fecha_upload_imagen=CURDATE() where id="'.$_POST["id_trabajador"].'"';
        $base->update_query_sin_ejecucion_exitosa($query);
        
       navegacion::volver_atras($_POST["id_trabajador"],$uploadOk);
    } else {
     //   navegacion::volver_atras($_POST["id_trabajador"], 404);
        
    }
}
            
                   
               
}elseif($_POST["tipo_documento_select"] == "contrato"){
/*
------------------------------------------------- INICIO SUBIDA PDF CONTRATO --------------------------------------------------
*/  
 

                         
                            
                       
                          
                            //    echo $target_file;
                             //   $archivo = fopen(realpath($target_file), 'rb');
                                $data=file_get_contents($_FILES["documento_tipo_file"]["tmp_name"]);
                           //     $data=addslashes($data);
                             // $contenido= stream_get_contents($archivo);
                              //$contenido_definitivo = base64_encode($contenido);
                             //  $contenido_definitivo = stream_get_contents($archivo);
                              //  fclose($archivo); 
                           //     unlink(realpath($target_file));

                     try{
                        $tipo= $_FILES["documento_tipo_file"]["type"];
                        
$db=new PDO("mysql:host=localhost;dbname=recursos_humanos", "root", "");
 $nueva= $db->prepare("UPDATE ingreso_empleados set contrato_externo=:contrato_externo, formato_archivo_contrato=:formato_archivo_contrato, fecha_upload_contrato=CURDATE(), hora_upload_contrato=CURTIME()  where id='".$_POST['id_trabajador']."'");
                                                        $nueva->bindParam('contrato_externo', $data, PDO::PARAM_STR);
                                                        $nueva->bindParam('formato_archivo_contrato', $tipo, PDO::PARAM_STR);
                                                        $nueva->execute();
                                                        echo "exito?";
                     }catch (PDOException $e) {
                        echo $e->getMessage();
                     
                        }
                               
                            //    $query= 'UPDATE ingreso_empleados set contrato_externo="'. $data.'", formato_archivo_contrato="'.$tipo.'", hora_upload_contrato=CURTIME(), fecha_upload_contrato=CURDATE() where id="'.$_POST["id_trabajador"].'"';
                          //      $base->update_query_sin_ejecucion_exitosa($query);
                                echo $tipo;
                             //  navegacion::volver_atras($_POST["id_trabajador"],$uploadOk);
                                /*
                                $query= 'UPDATE ingreso_empleados set contrato_externo="'.$_FILES["documento_tipo_file"]["name"].'",hora_upload_contrato=CURTIME(), fecha_upload_contrato=CURDATE() where id="'.$_POST["id_trabajador"].'"';
                                $base->update_query_sin_ejecucion_exitosa($query);
                                navegacion::volver_atras($_POST["id_trabajador"],$uploadOk);*/
                               //     } else {
                               // navegacion::volver_atras($_POST["id_trabajador"],404);
                                    
                                
                                
/*
------------------------------------------------- FIN SUBIDA PDF CONTRATO --------------------------------------------------
*/    
}elseif ($_POST["tipo_documento_select"] != "contrato" or $_POST["tipo_documento_select"] != "foto") {
   
    navegacion::volver_atras($_POST["id_trabajador"], 17);


}



?>