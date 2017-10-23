<?php
session_start();

require '../config/config.php';
require '../afp_isapres/conexion_base_abstracta.php';
require '../variables_empresa/clase_variables_empresa.php';
require './navegacion_documentos.php';
$base= new crud_variables_empresa();
if($_POST["variable_a_borrar"]=="contrato"){
    $resultado= $base->update_bindparams("UPDATE ingreso_empleados set contrato_externo=:contrato_externo, formato_archivo_contrato=:formato_archivo_contrato, fecha_upload_contrato=CURDATE(), hora_upload_contrato=CURTIME()  where id='".$_POST['id_trabajador']."'");
    $nada=null;
    $resultado->bindParam('formato_archivo_contrato', $nada);
    $resultado->bindParam('contrato_externo', $nada);
    $hola=  $resultado->execute();
}else{
    $resultado= $base->update_bindparams("UPDATE ingreso_empleados set foto=:foto, formato_archivo_imagen=:formato_archivo_imagen, fecha_upload_imagen=CURDATE(), hora_upload_imagen=CURTIME()  where id='".$_POST['id_trabajador']."'");
    $nada=null;
    $resultado->bindParam('foto', $nada);
    $resultado->bindParam('formato_archivo_imagen', $nada);
    $hola=  $resultado->execute();
}



?>