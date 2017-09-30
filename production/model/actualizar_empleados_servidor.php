<?php

require './clase_actividad_reciente.php';

$postdata = file_get_contents("php://input");

$request= json_decode($postdata);

$users = users::singleton();

//($nombre,$apellido, $edad, $fecha_nacimiento, $direccion, $puesto, $empresa, $jefatura, $ingreso, $sueldo, $rut, $tabla, $id)

$data = $users->update_usuario($request[1],$request[2],$request[3],$request[4],$request[5],$request[6],$request[7],$request[8],$request[9],$request[10],$request[11], "ingreso_empleados", $request[12]);

$usuario_administrador= $request[13];
$actividad_reciente1= new actividad_reciente($usuario_administrador, $request[1], "Actualización de perfil de ". $request[1]. " ". $request[2], $request[8], "kjh");
#$actividad_reciente1->tabla= "actividad_reciente";

$actividad_reciente1->guarda_actividad_base();




?>