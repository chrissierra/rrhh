<?php
require_once("../afp_isapres/conexion_base_abstracta.php");
require_once("./clase_variables_empresa.php");


$postdata = file_get_contents("php://input");

$request= json_decode($postdata);



echo $request[2]; // comuna

$ingresa= new crud_variables_empresa;
$ingresa->insert_mysql_sucursales($request[0], $request[1], $request[2], $request[3], $request[4]);

?>