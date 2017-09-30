<?php
ob_end_clean(); //    the buffer and never prints or returns anything.
ob_start();
session_start();
//echo $_SESSION["usuario"];
require '../../pdf/fpdf.php';
require_once("../../pdf/contrato/abstracta_contrato_generico.php");
require '../../pdf/contrato/contrato_clase.php';

require '../afp_isapres/conexion_base_abstracta.php';
require '../variables_empresa/clase_variables_empresa.php';
$variables_empresa= new crud_variables_empresa();


# VARIABLES QUE SE FIJAN PREVIO CON LA CONFIGURACION DE LA EMPRESA
# ***********************************
# **********************
# ****************
$datos_para_contrato_en_bbdd= $variables_empresa->get_por_parametro("contrato", $_SESSION["usuario"]);
foreach ($datos_para_contrato_en_bbdd as $key => $value) {
    # code...

    $locacion=$value["locacion"]; 
    $nombre_empresa=$value["usuario"];
    $rut=$value["rut_empresa"];
    $represante_legal=$value["representante_legal"];
    $rut_representante=$value["rut_representante"];
    $direccion_sin_comuna=$value["direccion_empresa_sc"];
    $comuna=$value["comuna_empresa"];
    $cargo_monetario_colacion=$value["quien_asume_cargo_monetario_colacion"];
}
/*
$locacion="Santiago"; 
$nombre_empresa="Prodalam";
$rut="92990123-k";
$represante_legal="Rodrigo Moncaca";
$rut_representante="3123543-9";
$direccion_sin_comuna="Alberto Pepper 1610";
$comuna="Renca";
$cargo_monetario_colacion="Empleador";
*/
# **********
# ******************
# *************************************
# VARIABLES QUE SE FIJAN PREVIO CON LA CONFIGURACION DE LA EMPRESA

/*
       |  ABAJO ESTÁN LAS VARIABLES QUE SE GENERÁN DINÁMICAMENTE DESDE INGRESO DE EMPLEADOS |
       V  --------------------------------------------------------------------------------  V
*/



$variables_contrato= $variables_empresa->get_por_parametro_contrato("ingreso_empleados", $_SESSION["usuario"], $_GET["trabajador"]);
//get_por_parametro($tabla, $usuario)


$beneficios_guardados_en_base_datos= $variables_empresa->get_por_parametro("beneficios", $_SESSION["usuario"]);

//$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
//$pieces = explode(" ", $pizza);
//echo $pieces[0]; // piece1

foreach ($variables_contrato as $key => $value) {

    $numero_dia_ingreso= $value["ingreso"];
    $numero_extraido=  explode("-", $numero_dia_ingreso);
$numero_especifico_extraido= $numero_extraido[2];

//$empleado =$value["nombre"];
$dia=$value["dia_ingreso"];
$mes=$value["mes_ingreso"];
$año=$value["ano_ingreso"];

if($value["sexo"]=="hombre"){
$empleado= "Don " . $value["nombre"];
}else{
    $empleado= "Doña " . $value["nombre"];
}

$nacionalidad_empleado=$value["nacionalidad_empleado"]; # listo
$fecha_nacimiento_empleado=$value["nacimiento"];#listo
$direccion_sin_comuna_empleado=$value["direccion_sin_comuna_empleado"]; #listo
$comuna_empleado=$value["comuna_empleado"]; # listo
$rut_empleado=$value["rut"]; # listo
$empresa_previa=$value["empresa_previa"];  # listo
$cargo=$value["puesto"]; # listo
$departamento_o_seccion=$value["jefatura"]; #listo, es jefatura
$ubicacion_departamento_o_seccion=$value["direccion_sucursal"]; #select a BD
$comuna_departamento_o_seccion=$value["comuna_sucursal"]; # select a bd
$horas_jornada=$value["horas_jornada"]; # listo
$sueldo_numero=$value["sueldo"]; # listo
$sueldo_escrito=$value["sueldo_escrito"]; #listo
$ultimo_dia_semana_jornada=$value["ultimo_dia_semana_jornada"]; #listo 
$hora_entrada_jornada=$value["hora_entrada_jornada"]; # listo
$hora_salida_jornada=$value["hora_salida_jornada"]; # listo
$descanso_o_almuerzo_en_minutos=$value["descanso_o_almuerzo_en_minutos"]; # listo
$hora_inicio_descanso=$value["hora_inicio_descanso"]; # listo
$hora_fin_descanso=$value["hora_fin_descanso"]; # listo


$nombre_produccion= $value["nombre_produccion"];

echo $nombre_empresa;

$tipo_contrato=$value["tipo_contrato"]; # listo

}

/*
$dia="Lunes";
$mes="Septiembre";
$año="2017";

$nacionalidad_empleado="Peruano"; # listo
$fecha_nacimiento_empleado="12/10/1960";#listo
$direccion_sin_comuna_empleado="Enrique del solar 1542"; #listo
$comuna_empleado="Pirque"; # listo
$rut_empleado="12330998-3"; # listo
$empresa_previa="Indumotora S.A";  # listo
$cargo="Analista de crédito y cobranza"; # listo
$departamento_o_seccion="Departamento Cobranza"; #listo, es jefatura
$ubicacion_departamento_o_seccion="Alberto Pepper 1610"; #select a BD
$comuna_departamento_o_seccion="Renca"; # select a bd
$horas_jornada="45"; # listo
$sueldo_numero="800.000"; # listo
$sueldo_escrito="Ochocientos mil Pesos"; #listo
$ultimo_dia_semana_jornada="Viernes"; #listo 
$hora_entrada_jornada="8:00 AM"; # listo
$hora_salida_jornada="18:30 PM"; # listo
$descanso_o_almuerzo_en_minutos="45"; # listo
$hora_inicio_descanso="12:30 PM"; # listo
$hora_fin_descanso="13:15"; # listo

*/

$beneficios_guardados_en_base_datos;




$hola= new contrato();

if($tipo_contrato== "contrato_administrativo"){
    $hola->muestra_contrato($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido);
}elseif ($tipo_contrato=="television_contrato") {

    $hola->muestra_contrato_television($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion);

}else{
    echo "nada aun";
}




ob_end_flush(); 
?>