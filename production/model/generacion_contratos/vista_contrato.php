<?php
ob_end_clean(); //    the buffer and never prints or returns anything.
ob_start();
session_start();
require '../config/config.php';
require '../../pdf/fpdf.php';
require_once("../../pdf/contrato/abstracta_contrato_generico.php");
require '../../pdf/contrato/contrato_clase.php';
require '../afp_isapres/conexion_base_abstracta.php';
require '../variables_empresa/clase_variables_empresa.php';
$variables_empresa= new crud_variables_empresa();

$datos_para_contrato_en_bbdd= $variables_empresa->get_por_parametro("contrato", $_SESSION["usuario"]);

foreach ($datos_para_contrato_en_bbdd as $key => $value) {
   
    $locacion=$value["locacion"]; 
    $nombre_empresa=$value["usuario"];
    $rut=$value["rut_empresa"];
    $represante_legal=$value["representante_legal"];
    $rut_representante=$value["rut_representante"];
    $direccion_sin_comuna=$value["direccion_empresa_sc"];
    $comuna=$value["comuna_empresa"];
    $cargo_monetario_colacion=$value["quien_asume_cargo_monetario_colacion"];
}



$variables_contrato= $variables_empresa->get_por_parametro_contrato("ingreso_empleados", $_SESSION["usuario"], $_GET["trabajador"]);

$beneficios_guardados_en_base_datos= $variables_empresa->get_por_parametro("beneficios", $_SESSION["usuario"]);

foreach ($variables_contrato as $key => $value) {

     $numero_dia_ingreso= $value["ingreso"];
     $numero_extraido=  explode("-", $numero_dia_ingreso);
     $numero_especifico_extraido= $numero_extraido[2];


$dia=$value["dia_ingreso"];
$mes=$value["mes_ingreso"];
$año=$value["ano_ingreso"];
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

/*
duracion jornada
*/
$hora_entrada_jornada=$value["hora_entrada_jornada"]; # listo
$hora_salida_jornada=$value["hora_salida_jornada"]; # listo
//+++++++++++++
$string_entrada=  explode(":", $hora_entrada_jornada);
$string_salida=  explode(":", $hora_salida_jornada);

$primero= $string_entrada[0]+($string_entrada[1]/60);
$segundo=$string_salida[0]+($string_salida[1]/60);

$diferencia_horas=$segundo-$primero;


/*
duracion jornada
*/



$descanso_o_almuerzo_en_minutos=$value["descanso_o_almuerzo_en_minutos"]; # listo
$hora_inicio_descanso=$value["hora_inicio_descanso"]; # listo
$hora_fin_descanso=$value["hora_fin_descanso"]; # listo
$nombre_produccion= $value["nombre_produccion"];
$tipo_contrato=$value["tipo_contrato"]; # listo

$locacion_produccion= $value["locacion_produccion"];

$inicio_rodaje= $value["inicio_rodaje"];
$fin_rodaje= $value["fin_rodaje"];
$capitulos_totales_contemplados= $value["capitulos_totales_contemplados"];
$forma_de_pago_sueldo= $value["forma_de_pago_sueldo"];


$primer_dia_semana_jornada=$value["primer_dia_semana_jornada"];
$nombre_establecimiento= $value["nombre_establecimiento"];
$tiempo_de_pago= $value["tiempo_de_pago"];

/*
Construcción abajo
*/
$duracion_contrato=$value["duracion_contrato"];
$nombre_de_la_obra=$value["nombre_de_la_obra"];
$locacion_de_la_obra=$value["locacion_de_la_obra"];
$comuna_locacion_obra=$value["comuna_locacion_obra"];
$tipo_de_pago=$value["tipo_de_pago"];
$cantidad_a_pagar=$value["cantidad_a_pagar"];
$gratificaciones=$value["gratificaciones"];
$incentivos=$value["incentivos"];
$bonos=$value["bonos"];
$asignacion_movilizacion_con_sin=$value["asignacion_movilizacion_con_sin"];
$monto_asignacion_movilizacion=$value["monto_asignacion_movilizacion"];
$asignacion_desgaste_herramientas_sin_con=$value["asignacion_desgaste_herramientas_sin_con"];
$monto_asignacion_desgastes_herramientas=$value["monto_asignacion_desgastes_herramientas"];
$asignacion_matrimonio_sin_con=$value["asignacion_matrimonio_sin_con"];
$monto_asignacion_matrimonio=$value["monto_asignacion_matrimonio"];
$ciudad_obra_construccion= $value["ciudad_obra_construccion"];
$monto_adelanto=$value["monto_adelanto"];
$fecha_adelanto=$value["fecha_adelanto"];
$fecha_pago_sueldo= $value["fecha_pago_sueldo"];
/*
Construcción arriba
*/

$maestro_o_guia= $value["maestro_o_guia"];
$oficio= $value["oficio"];
$monto_pago_colacion_diario= $value["monto_pago_colacion_diario"];
$duracion_contrato_aprendizaje=$value["duracion_contrato_aprendizaje"];

if($value["sexo"]=="hombre"){
$empleado= "Don " .($value["nombre"]);
}else{
    $empleado= "Doña " . $value["nombre"];
}

}




/*
Practica profesional
*/
$establecimiento_educacional=$value["establecimiento_educacional"];
$docente_coordinador=$value["docente_coordinador"];
$condiciones_buena_practica=$value["condiciones_buena_practica"];
$total_horas_cronologicas_practica=$value["total_horas_cronologicas_practica"];
$tope_reembolsos_a_estudiante=$value["tope_reembolsos_a_estudiante"];

$dias_inasistencias_permitidos=$value["dias_inasistencias_permitidos"];
$cantidad_semanal_minima_horas=$value["cantidad_semanal_minima_horas"];


/*
Practica profesional
*/



//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/*
contrato_agricola
*/

$nombre_predio_agricola=$value["nombre_predio_agricola"];
$profesion_oficio_contratado=$value["profesion_oficio_contratado"];
$ubicacion_predio=$value["ubicacion_predio"];
$tipo_pago_agricola=$value["tipo_pago_agricola"];
$monto_fijo=$value["monto_fijo"];
$pago_detalle_y_monto_a_trato=$value["pago_detalle_y_monto_a_trato"];
$regalias=$value["regalias"];
$entrega_racion_tierra=$value["entrega_racion_tierra"];
$servicios_a_entregar_trabajador=$value["servicios_a_entregar_trabajador"];

/*
contrato_agricola
*/



//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/*
a_trato
*/

$cantidad_semanal_minima_horas=$value["cantidad_semanal_minima_horas"];
$monto_por_unidad=$value["monto_por_unidad"];



/*
a_trato
*/




//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

$empresa=$value["empresa"];

$tareas_a_desarrollar=$value["tareas_a_desarrollar"];

$monto_asignacion_colacion=$value["monto_asignacion_colacion"];
$asignacion_colacion_sin_con=$value["asignacion_colacion_sin_con"];







//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/*
prevencion_riesgos
*/


$codigo_actividad_economica=$value["codigo_actividad_economica"];
$servicio_salud_que_aprueba=$value["servicio_salud_que_aprueba"];
$tecnico_o_profesional=$value["tecnico_o_profesional"];
$numero_inscripcion=$value["numero_inscripcion"];
$bono_locomocion_mensual=$value["bono_locomocion_mensual"];
$viatico_diario=$value["viatico_diario"];
$duracion_contrato=$value["duracion_contrato"];
//,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,


/*
prevencion_riesgos
*/


//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++



//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/*
chofer
*/


$transporte_entre=$value["transporte_entre"];
$tareas_a_desarrollar=$value["tareas_a_desarrollar"];
$horas_diarias_descanso_chofer=$value["horas_diarias_descanso_chofer"];
$dias_descanso_chofer=$value["dias_descanso_chofer"];
    

//,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer
    

/*
chofer
*/


//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++






//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/*
profesor
*/


$pactos=$value["pactos"];
$funciones_docentes=$value["funciones_docentes"];
    

//,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer
    

/*
profesor
*/


//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++








//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/*
anexos
*/


$anexo1=$value["anexo1"];
$anexo2=$value["anexo2"];
$anexo3=$value["anexo3"];
$anexo4=$value["anexo4"];
$anexo5=$value["anexo5"];
$anexo6=$value["anexo6"];
$anexo7=$value["anexo7"];
$anexo8=$value["anexo8"];
$anexo9=$value["anexo9"];
$anexo10=$value["anexo10"];

//,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10


    

/*
anexos
*/


//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++






$hola= new contrato();

if($tipo_contrato== "contrato_administrativo"){
    $hola->muestra_contrato($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10);//no agregar, este está listo









}elseif ($tipo_contrato=="television_contrato") {

    $hola->muestra_contrato_television($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10);//no agregar, este está listo





}elseif ($tipo_contrato=="teatro_contrato") {
    
        $hola->muestra_contrato_teatro($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10);//listo , no agregar mas
    
    }elseif ($tipo_contrato=="construccion_contrato") {
        
            $hola->muestra_contrato_construccion($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10);//finalizado, no agregar mas
        

}elseif ($tipo_contrato=="auxiliar_transporte_contrato") {
    
        $hola->muestra_contrato_auxiliar_buses($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10);//terminado, no agregar
    

}elseif ($tipo_contrato=="contrato_aprendizaje") {
    
        $hola->muestra_contrato_aprendizaje($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10);// terminado, listo
    

}elseif ($tipo_contrato=="practica_profesional") {
    
        $hola->muestra_contrato_practica_profesional($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10);//terminado_listo, no agregar


}elseif ($tipo_contrato=="contrato_a_trato") {
    
        $hola->muestra_contrato_a_trato($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10);//finalizado


}elseif ($tipo_contrato=="prevencion_riesgos") {
    
        $hola->muestra_contrato_prevencion_riesgos($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10);


}elseif ($tipo_contrato=="contrato_agricola_permanente") {
        
            $hola->muestra_contrato_agricola($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10);
    
    
    }elseif ($tipo_contrato=="chofer_cargas") {
        
            $hola->muestra_contrato_chofer_carga($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10);
        
           
    }elseif ($tipo_contrato=="contrato_plazo_fijo") {
        
            $hola->muestra_contrato_plazo_fijo($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10);
        
           
    }elseif ($tipo_contrato=="contrato_profesor") {
        
            $hola->muestra_contrato_profesor($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10);
        
           
    }else{
    echo "nada aun";
}

/*
$nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio,




,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador



*/


ob_end_flush(); 
?>