
<?php
require_once("../afp_isapres/conexion_base_abstracta.php");
require_once("./clase_variables_empresa.php");


$postdata = file_get_contents("php://input");
$tabla="beneficios";
$request= json_decode($postdata);


$clase_variables_empresa= new crud_variables_empresa;
$array_resultado= array();
$array_resultado= $clase_variables_empresa->get_por_parametro_id($tabla, $request);
header('Content-type: application/json');
echo json_encode($array_resultado);
?>