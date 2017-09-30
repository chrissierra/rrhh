<?php

require './afp_isapres/conexion_base_abstracta.php';
require './afp_isapres/clase_bbdd_afp.php';
require './afp_isapres/clase_bbdd_isapre.php';

require './afp_isapres/implementa_clases_afp_isapres.php';


$postdata = file_get_contents("php://input");

$request= json_decode($postdata);

var_dump($request);

if($request[3]=="afp"){
  
$resultado_afp_insert= $bbdd_mysql->afp()->insert_mysql_afp($request[1],$request[2]);

}elseif($request[3]=="isapre"){

$bbdd_mysql->isapre()->insert_mysql_isapre($request[1],$request[2]);

}else{
    header("location:./index.php");
}

//($nombre,$apellido, $edad, $fecha_nacimiento, $direccion, $puesto, $empresa, $jefatura, $ingreso, $sueldo, $rut, $tabla, $id)
/*
$data = $users->update_usuario($request[1],$request[2],$request[3],$request[4],$request[5],$request[6],$request[7],$request[8],$request[9],$request[10],$request[11], "ingreso_empleados", $request[12]);

$usuario_administrador= $request[13];
$actividad_reciente1= new actividad_reciente($usuario_administrador, $request[1], "Actualización de perfil de ". $request[1]. " ". $request[2], $request[8]);
$actividad_reciente1->tabla= "actividad_reciente";

$actividad_reciente1->guarda_actividad_base();*/




?>