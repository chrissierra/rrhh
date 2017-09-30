<?php
//require_once("./abstracta_contrato_generico.php");
class contrato extends contrato_generico{



public $locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo;
public $departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $array_beneficio,$numero_especifico_extraido;

public $anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10;

function __construct(){
    parent::__construct();
}

public function anexos($contrato, $anexo1){
   if(strlen($anexo1)>3){
    $contrato->AddPage();
    $contrato->SetFont('Arial','B',16);
    $contrato->Cell(0,2,'Anexo de trabajo',0,1, "C");
    $contrato->SetFont('Arial','',10);
    $contrato->MultiCell(0,1,iconv('utf-8', 'cp1252', $anexo1));
    $contrato->SetY(-5);
    $contrato->Cell(0,2,'________________________                                    __________________________',0,0, "C");
    $contrato->ln(0.5);  
    $contrato->Cell(0,2,'Firma trabajador                                                    Firma Empleador',0,0, "C");
   }

    
}

//FUNCION MUESTRA CONTRATO HACE CONVERGER TODO, Y EXPONE CONTRATO PARA SER DESCARGADO O VISUALIZADO:
public function muestra_contrato($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10){


    $contrato= $this->titulo();
    $contrato->MultiCell(0,1,iconv('utf-8', 'cp1252', $this->base_contrato_administrativo($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10)));
    
    //$contrato->AddPage(); 
    



    $this->anexos($contrato, $anexo1);
    $this->anexos($contrato, $anexo2);
    $this->anexos($contrato, $anexo3);
    $this->anexos($contrato, $anexo4);
    $this->anexos($contrato, $anexo5);
    $this->anexos($contrato, $anexo6);
    $this->anexos($contrato, $anexo7);
    $this->anexos($contrato, $anexo8);
    $this->anexos($contrato, $anexo9);
    $this->anexos($contrato, $anexo10);
    //$contrato->MultiCell(0,1,iconv('utf-8', 'cp1252', "sdfasdfasdsdf"));

    $contrato->output();

}














#+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//FUNCION PARA CONTRATO TELEVISION , EXPONE CONTRATO PARA DESCARGAR O VISUALIZAR

//FUNCION MUESTRA CONTRATO HACE CONVERGER TODO, Y EXPONE CONTRATO PARA SER DESCARGADO O VISUALIZADO:
public function muestra_contrato_television($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10){// terminado
    
    
        $contrato= $this->titulo();
        $contrato->MultiCell(0,1,iconv('utf-8', 'cp1252', $this->base_contrato_television($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10))); // terminado
        
        $this->anexos($contrato, $anexo1);
        $this->anexos($contrato, $anexo2);
        $this->anexos($contrato, $anexo3);
        $this->anexos($contrato, $anexo4);
        $this->anexos($contrato, $anexo5);
        $this->anexos($contrato, $anexo6);
        $this->anexos($contrato, $anexo7);
        $this->anexos($contrato, $anexo8);
        $this->anexos($contrato, $anexo9);
        $this->anexos($contrato, $anexo10);
        $contrato->output();
    
    }






#+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//FUNCION PARA CONTRATO TEATRO , EXPONE CONTRATO PARA DESCARGAR O VISUALIZAR

//FUNCION MUESTRA CONTRATO HACE CONVERGER TODO, Y EXPONE CONTRATO PARA SER DESCARGADO O VISUALIZADO:
public function muestra_contrato_teatro($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10){
    
    
        $contrato= $this->titulo();
        $contrato->MultiCell(0,1,iconv('utf-8', 'cp1252', $this->base_contrato_teatro($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10)));
        
        $this->anexos($contrato, $anexo1);
        $this->anexos($contrato, $anexo2);
        $this->anexos($contrato, $anexo3);
        $this->anexos($contrato, $anexo4);
        $this->anexos($contrato, $anexo5);
        $this->anexos($contrato, $anexo6);
        $this->anexos($contrato, $anexo7);
        $this->anexos($contrato, $anexo8);
        $this->anexos($contrato, $anexo9);
        $this->anexos($contrato, $anexo10);
        $contrato->output();
    
    }




#+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//FUNCION PARA CONTRATO construccion , EXPONE CONTRATO PARA DESCARGAR O VISUALIZAR

//FUNCION MUESTRA CONTRATO HACE CONVERGER TODO, Y EXPONE CONTRATO PARA SER DESCARGADO O VISUALIZADO:
public function muestra_contrato_construccion($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10){
    
    
        $contrato= $this->titulo();
        $contrato->MultiCell(0,1,iconv('utf-8', 'cp1252', $this->base_contrato_construccion($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10)));
        $this->anexos($contrato, $anexo1);
        $this->anexos($contrato, $anexo2);
        $this->anexos($contrato, $anexo3);
        $this->anexos($contrato, $anexo4);
        $this->anexos($contrato, $anexo5);
        $this->anexos($contrato, $anexo6);
        $this->anexos($contrato, $anexo7);
        $this->anexos($contrato, $anexo8);
        $this->anexos($contrato, $anexo9);
        $this->anexos($contrato, $anexo10);
        $contrato->output();
    
    }


    #+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//FUNCION PARA CONTRATO auxiliar buses , EXPONE CONTRATO PARA DESCARGAR O VISUALIZAR

//FUNCION MUESTRA CONTRATO HACE CONVERGER TODO, Y EXPONE CONTRATO PARA SER DESCARGADO O VISUALIZADO:
public function muestra_contrato_auxiliar_buses($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10){
    
    
        $contrato= $this->titulo();
        $contrato->MultiCell(0,1,iconv('utf-8', 'cp1252', $this->base_contrato_auxiliar_buses($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10)));
        
        $this->anexos($contrato, $anexo1);
        $this->anexos($contrato, $anexo2);
        $this->anexos($contrato, $anexo3);
        $this->anexos($contrato, $anexo4);
        $this->anexos($contrato, $anexo5);
        $this->anexos($contrato, $anexo6);
        $this->anexos($contrato, $anexo7);
        $this->anexos($contrato, $anexo8);
        $this->anexos($contrato, $anexo9);
        $this->anexos($contrato, $anexo10);
        $contrato->output();
    
    }



    #+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//FUNCION PARA CONTRATO auxiliar buses , EXPONE CONTRATO PARA DESCARGAR O VISUALIZAR

//FUNCION MUESTRA CONTRATO HACE CONVERGER TODO, Y EXPONE CONTRATO PARA SER DESCARGADO O VISUALIZADO:
public function muestra_contrato_aprendizaje($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10){
    
    
        $contrato= $this->titulo();
        $contrato->MultiCell(0,1,iconv('utf-8', 'cp1252', $this->base_contrato_aprendizaje($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10)));
        
        $this->anexos($contrato, $anexo1);
        $this->anexos($contrato, $anexo2);
        $this->anexos($contrato, $anexo3);
        $this->anexos($contrato, $anexo4);
        $this->anexos($contrato, $anexo5);
        $this->anexos($contrato, $anexo6);
        $this->anexos($contrato, $anexo7);
        $this->anexos($contrato, $anexo8);
        $this->anexos($contrato, $anexo9);
        $this->anexos($contrato, $anexo10);
        $contrato->output();
    
    }

   #+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//FUNCION PARA CONTRATO practica_profesional , EXPONE CONTRATO PARA DESCARGAR O VISUALIZAR

//FUNCION MUESTRA CONTRATO HACE CONVERGER TODO, Y EXPONE CONTRATO PARA SER DESCARGADO O VISUALIZADO:
public function muestra_contrato_practica_profesional($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10){
    
    
        $contrato= $this->titulo();
        $contrato->MultiCell(0,1,iconv('utf-8', 'cp1252', $this->base_contrato_practica_profesional($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10)));
        
        $this->anexos($contrato, $anexo1);
        $this->anexos($contrato, $anexo2);
        $this->anexos($contrato, $anexo3);
        $this->anexos($contrato, $anexo4);
        $this->anexos($contrato, $anexo5);
        $this->anexos($contrato, $anexo6);
        $this->anexos($contrato, $anexo7);
        $this->anexos($contrato, $anexo8);
        $this->anexos($contrato, $anexo9);
        $this->anexos($contrato, $anexo10);
        $contrato->output();
    
    }









   #+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//FUNCION PARA CONTRATO a_trato , EXPONE CONTRATO PARA DESCARGAR O VISUALIZAR

//FUNCION MUESTRA CONTRATO HACE CONVERGER TODO, Y EXPONE CONTRATO PARA SER DESCARGADO O VISUALIZADO:
public function muestra_contrato_a_trato($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10){
    
    
        $contrato= $this->titulo();
        $contrato->MultiCell(0,1,iconv('utf-8', 'cp1252', $this->base_contrato_a_trato($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10)));
       
        $this->anexos($contrato, $anexo1);
        $this->anexos($contrato, $anexo2);
        $this->anexos($contrato, $anexo3);
        $this->anexos($contrato, $anexo4);
        $this->anexos($contrato, $anexo5);
        $this->anexos($contrato, $anexo6);
        $this->anexos($contrato, $anexo7);
        $this->anexos($contrato, $anexo8);
        $this->anexos($contrato, $anexo9);
        $this->anexos($contrato, $anexo10);
        $contrato->output();//terminado
    
    }


/*


   #+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//FUNCION PARA CONTRATO prevencion_riesgos , EXPONE CONTRATO PARA DESCARGAR O VISUALIZAR

//FUNCION MUESTRA CONTRATO HACE CONVERGER TODO, Y EXPONE CONTRATO PARA SER DESCARGADO O VISUALIZADO:
public function muestra_contrato_prevencion_riesgos($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo, $departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $array_beneficios,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada,$nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con,$cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar){
    
    
        $contrato= $this->titulo();
        $contrato->MultiCell(0,1,iconv('utf-8', 'cp1252', $this->base_contrato_prevencion_riesgos($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo, $departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $array_beneficios,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada,$nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con,$cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar)));
        $contrato->output();
    
    }






*/















   #+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//FUNCION PARA CONTRATO base_contrato_prevencion_riesgos , EXPONE CONTRATO PARA DESCARGAR O VISUALIZAR

//FUNCION MUESTRA CONTRATO HACE CONVERGER TODO, Y EXPONE CONTRATO PARA SER DESCARGADO O VISUALIZADO:
public function muestra_contrato_prevencion_riesgos($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10){
    
    
        $contrato= $this->titulo();
        $contrato->MultiCell(0,1,iconv('utf-8', 'cp1252', $this->base_contrato_prevencion_riesgos($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10)));
       
        $this->anexos($contrato, $anexo1);
        $this->anexos($contrato, $anexo2);
        $this->anexos($contrato, $anexo3);
        $this->anexos($contrato, $anexo4);
        $this->anexos($contrato, $anexo5);
        $this->anexos($contrato, $anexo6);
        $this->anexos($contrato, $anexo7);
        $this->anexos($contrato, $anexo8);
        $this->anexos($contrato, $anexo9);
        $this->anexos($contrato, $anexo10);
        $contrato->output();
    
    }

   #+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//FUNCION PARA CONTRATO base_contrato_prevencion_riesgos , EXPONE CONTRATO PARA DESCARGAR O VISUALIZAR

//FUNCION MUESTRA CONTRATO HACE CONVERGER TODO, Y EXPONE CONTRATO PARA SER DESCARGADO O VISUALIZADO:
public function muestra_contrato_agricola($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10){
    
    
        $contrato= $this->titulo();
        $contrato->MultiCell(0,1,iconv('utf-8', 'cp1252', $this->base_contrato_agricola($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10)));
       
        $this->anexos($contrato, $anexo1);
        $this->anexos($contrato, $anexo2);
        $this->anexos($contrato, $anexo3);
        $this->anexos($contrato, $anexo4);
        $this->anexos($contrato, $anexo5);
        $this->anexos($contrato, $anexo6);
        $this->anexos($contrato, $anexo7);
        $this->anexos($contrato, $anexo8);
        $this->anexos($contrato, $anexo9);
        $this->anexos($contrato, $anexo10);
        $contrato->output();
    
    }

    






   #+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//FUNCION PARA CONTRATO base_contrato_prevencion_riesgos , EXPONE CONTRATO PARA DESCARGAR O VISUALIZAR

//FUNCION MUESTRA CONTRATO HACE CONVERGER TODO, Y EXPONE CONTRATO PARA SER DESCARGADO O VISUALIZADO:
public function muestra_contrato_chofer_carga($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10){
    
    
        $contrato= $this->titulo();
        $contrato->MultiCell(0,1,iconv('utf-8', 'cp1252', $this->base_contrato_chofer_carga($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10)));
        
       
        $this->anexos($contrato, $anexo1);
        $this->anexos($contrato, $anexo2);
        $this->anexos($contrato, $anexo3);
        $this->anexos($contrato, $anexo4);
        $this->anexos($contrato, $anexo5);
        $this->anexos($contrato, $anexo6);
        $this->anexos($contrato, $anexo7);
        $this->anexos($contrato, $anexo8);
        $this->anexos($contrato, $anexo9);
        $this->anexos($contrato, $anexo10);
        $contrato->output();
       
    }




   #+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//FUNCION PARA CONTRATO base_contrato_prevencion_riesgos , EXPONE CONTRATO PARA DESCARGAR O VISUALIZAR

//FUNCION MUESTRA CONTRATO HACE CONVERGER TODO, Y EXPONE CONTRATO PARA SER DESCARGADO O VISUALIZADO:
public function muestra_contrato_plazo_fijo($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10){
    
    
        $contrato= $this->titulo();
        $contrato->MultiCell(0,1,iconv('utf-8', 'cp1252', $this->base_contrato_plazo_fijo($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10)));
       
        $this->anexos($contrato, $anexo1);
        $this->anexos($contrato, $anexo2);
        $this->anexos($contrato, $anexo3);
        $this->anexos($contrato, $anexo4);
        $this->anexos($contrato, $anexo5);
        $this->anexos($contrato, $anexo6);
        $this->anexos($contrato, $anexo7);
        $this->anexos($contrato, $anexo8);
        $this->anexos($contrato, $anexo9);
        $this->anexos($contrato, $anexo10);
        $contrato->output();
    
    }



   #+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//FUNCION PARA CONTRATO base_contrato_prevencion_riesgos , EXPONE CONTRATO PARA DESCARGAR O VISUALIZAR

//FUNCION MUESTRA CONTRATO HACE CONVERGER TODO, Y EXPONE CONTRATO PARA SER DESCARGADO O VISUALIZADO:
public function muestra_contrato_profesor($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10){
    
    
        $contrato= $this->titulo();
        $contrato->MultiCell(0,1,iconv('utf-8', 'cp1252', $this->base_contrato_profesor($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10)));
       
        $this->anexos($contrato, $anexo1);
        $this->anexos($contrato, $anexo2);
        $this->anexos($contrato, $anexo3);
        $this->anexos($contrato, $anexo4);
        $this->anexos($contrato, $anexo5);
        $this->anexos($contrato, $anexo6);
        $this->anexos($contrato, $anexo7);
        $this->anexos($contrato, $anexo8);
        $this->anexos($contrato, $anexo9);
        $this->anexos($contrato, $anexo10);
        $contrato->output();
    
    }













/*
FINALIZA LA CLASE
*/
}




/*

***************************************

ABAJO HAY UNA MUESTRA DEL CONTRATO, COMO SE EJECUTA, SE INSTANCIA EL OBJETO, ETC. 


*/



# VARIABLES QUE SE FIJAN PREVIO CON LA CONFIGURACION DE LA EMPRESA
# ***********************************
# **********************
# ****************
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


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/*
       |  ABAJO ESTÁN LAS VARIABLES QUE SE GENERÁN DINÁMICAMENTE DESDE INGRESO DE EMPLEADOS |
       V  --------------------------------------------------------------------------------  V
*/

/*
$dia="Lunes";
$mes="Septiembre";
$año="2017";
$empleado="Juan Gonzalez"; #listo
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
/*
         A          
         |   ARRIBA ESTÁN LAS VARIABLES QUE SE GENERÁN DINÁMICAMENTE DESDE INGRESO DE EMPLEADOS
*/


/*

$hola= new contrato();
$hola->muestra_contrato($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito);

*/
?>