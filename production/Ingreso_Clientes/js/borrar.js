fetch("./model/server.php",{
    method: "POST",
    //what ever data you want to post with key value pair 
    body: "hora_fin_descanso="+hora_fin_descanso+"&hora_inicio_descanso="+hora_inicio_descanso+"&descanso_o_almuerzo_en_minutos="+descanso_o_almuerzo_en_minutos+"&hora_salida_jornada="+hora_salida_jornada+"&hora_entrada_jornada="+hora_entrada_jornada+"&ultimo_dia_semana_jornada="+ultimo_dia_semana_jornada+"&primer_dia_semana_jornada="+primer_dia_semana_jornada+"&select_sucursal_direccion="+select_sucursal_direccion+"&select_sucursal="+select_sucursal+"&sueldo_escrito="+sueldo_escrito+"&empresa_previa="+empresa_previa+"&horario="+horario+"&puesto="+puesto+"&empresa="+empresa+"&jefatura="+jefatura+"&sueldo_liquido="+sueldo_liquido+"&rut="+rut+"&nacimiento="+nacimiento+"&sexo="+sexo+"&nacionalidad="+nacionalidad+"&comuna="+comuna+"&direccion="+direccion+"&estado_civil="+estado_civil+"&apellido="+apellido+"&nombre="+nombre+"&nombre_empresa="+nombre_empresa+"&select_isapre="+select_isapre+"&select_afp="+select_afp+"&monto_asignacion_matrimonio="+monto_asignacion_matrimonio+"&booleano_asignacion_matrimonio="+booleano_asignacion_matrimonio+"&monto_asignacion_desgaste_herramientas="+monto_asignacion_desgaste_herramientas+"&booleano_asignacion_desgaste_herramientas="+booleano_asignacion_desgaste_herramientas+"&monto_asignacion_movilizacion="+monto_asignacion_movilizacion+"&booleano_asignacion_movilizacion="+booleano_asignacion_movilizacion+"&asignacion_colacion="+asignacion_colacion+"&cantidad_a_pagar_construccion="+cantidad_a_pagar_construccion+"&tipo_pago_construccion="+tipo_pago_construccion+"&comuna_locacion_obra_construccion="+comuna_locacion_obra_construccion+"&locacion_obra_construccion="+locacion_obra_construccion+"&nombre_obra_construccion="+nombre_obra_construccion+"&gratificaciones="+gratificaciones+"&incentivos="+incentivos+"&bonos="+bonos+"&codigo_actividad_economica="+codigo_actividad_economica+"&servicio_salud_aprueba_prevencion_riesgos="+servicio_salud_aprueba_prevencion_riesgos+"&tecnico_o_profesional_prevencion_riesgos="+tecnico_o_profesional_prevencion_riesgos+"&numero_inscripcion_prevencion_riesgos="+numero_inscripcion_prevencion_riesgos+"&numero_dias_a_trabajar_semana_prevencion_riesgos="+numero_dias_a_trabajar_semana_prevencion_riesgos+"&bono_locomocion_mensual_prevencion_riesgos="+bono_locomocion_mensual_prevencion_riesgos+"&duracion_contrato="+duracion_contrato+"&nombre_produccion_television="+nombre_produccion_television+"&locacion_produccion_television="+locacion_produccion_television+"&nombre_establecimiento_teatro="+nombre_establecimiento_teatro+"&tiempo_pago="+tiempo_pago+"&transporte_entre="+transporte_entre+"&tareas_a_desarrollar="+tareas_a_desarrollar+"&horas_diarias_chofer="+horas_diarias_chofer+"&dias_descanso_chofer="+dias_descanso_chofer+"&monto_pago_colacion_diario="+monto_pago_colacion_diario+"&oficio="+oficio+"&maestro_o_guia="+maestro_o_guia+"&duracion_contrato_de_aprendizaje="+duracion_contrato_de_aprendizaje+"&establecimiento_educacional="+establecimiento_educacional+"&docente_coordinador="+docente_coordinador+"&condiciones_buena_practica="+condiciones_buena_practica+"&total_horas_cronologicas_practica="+total_horas_cronologicas_practica+"&tope_reembolso_estudiante="+tope_reembolso_estudiante+"&dias_inasistencia_permitidos="+dias_inasistencia_permitidos+"&cantidad_semanal="+cantidad_semanal+"&monto_por_unidad="+monto_por_unidad+"&nombre_predio_agricola="+nombre_predio_agricola+"&profesion_oficio_del_contratado_agricola_permanente="+profesion_oficio_del_contratado_agricola_permanente+"&ubicacion_predio="+ubicacion_predio+"&tipo_de_pago="+tipo_de_pago+"&cantidad_diaria_si_es_fijo="+cantidad_diaria_si_es_fijo+"&input_pago_a_trato_agricola_listo="+input_pago_a_trato_agricola_listo+"&regalias_listo="+regalias_listo+"&gratificaciones_listo="+gratificaciones_listo+"&servicios_a_entregar_por_parte_trabajador_listo="+servicios_a_entregar_por_parte_trabajador_listo,
    headers: {
    "Content-Type": "application/x-www-form-urlencoded" }
    }).then( (response) => { 

   return response.text()
    //do something awesome that makes the world a better place
    }).then(function(r){
console.log(r)
    }) 