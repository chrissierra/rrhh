<?php
require_once("../afp_isapres/conexion_base_abstracta.php");
require_once("./clase_variables_empresa.php");


$postdata = file_get_contents("php://input");

$request= json_decode($postdata);



echo $request[1]; // comuna

$ingresa= new crud_variables_empresa;
$ingresa->insert_mysql_beneficios($request[0], $request[1], $request[4], $request[2], $request[3]);

//insert_mysql_contrato($locacion,$rut_empresa, $representante_legal, $rut_representante, $direccion_empresa_sc, $comuna_empresa, $descanso_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $quien_asume_cargo_monetario_colacion, $cuanto_cargo_colacion)

?>