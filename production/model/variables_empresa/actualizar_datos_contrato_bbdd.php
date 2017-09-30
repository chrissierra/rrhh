<?php
require_once("../afp_isapres/conexion_base_abstracta.php");
require_once("./clase_variables_empresa.php");


$postdata = file_get_contents("php://input");

$request= json_decode($postdata);



var_dump($request);
// actualizar_contrato_bbdd($locacion, $rut_empresa, $representante_legal, $rut_representante, $direccion_empresa_sc, $comuna_empresa, $quien_asume_cargo_monetario_colacion, $cuanto_cargo_colacion, $id)
$ingresa= new crud_variables_empresa;
$ingresa->actualizar_contrato_bbdd($request[0], $request[1], $request[2], $request[3], $request[4], $request[5], $request[6], $request[7], $request[8]);

//insert_mysql_contrato($locacion,$rut_empresa, $representante_legal, $rut_representante, $direccion_empresa_sc, $comuna_empresa, $descanso_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $quien_asume_cargo_monetario_colacion, $cuanto_cargo_colacion)

?>