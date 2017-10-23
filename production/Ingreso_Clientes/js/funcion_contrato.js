function contrato_ingreso(){
/*
prevencion
*/
var codigo_actividad_economica= document.getElementById("codigo_actividad_economica").value;

var servicio_salud_aprueba_prevencion_riesgos= document.getElementById("servicio_salud_aprueba_prevencion_riesgos").value;

var tecnico_o_profesional_prevencion_riesgos= document.getElementById("tecnico_o_profesional_prevencion_riesgos").value;

var numero_inscripcion_prevencion_riesgos= document.getElementById("numero_inscripcion_prevencion_riesgos").value;

var numero_dias_a_trabajar_semana_prevencion_riesgos= document.getElementById("numero_dias_a_trabajar_semana_prevencion_riesgos").value;

var bono_locomocion_mensual_prevencion_riesgos= document.getElementById("bono_locomocion_mensual_prevencion_riesgos").value;

var duracion_contrato= document.getElementById("duracion_contrato").value;
var viatico= document.getElementById("viatico_diario_prevencion_riesgos").value;
/*
fin prevencion
*/

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/*
television inicio
*/
var nombre_produccion_television= document.getElementById("nombre_produccion_television").value;

var locacion_produccion_television= document.getElementById("locacion_produccion_television").value;

var capitulos_totales_contemplados=document.getElementById("capitulos_totales_contemplados").value;

var inicio_rodaje=document.getElementById("inicio_rodaje").value;

var fin_rodaje=document.getElementById("fin_rodaje").value;

var forma_de_pago_sueldo= document.getElementById("forma_de_pago_sueldo").value;

/*
fin television
*/


//++++++++++++++++++++++++++++++++++++++++++++++++++++++

/*
inicio teatro
*/
var nombre_establecimiento_teatro= document.getElementById("nombre_establecimiento_teatro").value;


var tiempo_pago= document.getElementById("tiempo_pago").value;

/*
fin teatro
*/


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++



/*
inicio chofer_transporte
*/

var transporte_entre= document.getElementById("transporte_entre").value;
if(document.getElementById("tareas_a_desarrollar")){
    var tareas_a_desarrollar= document.getElementById("tareas_a_desarrollar").value;
}

var horas_diarias_chofer= document.getElementById("horas_diarias_chofer").value;
var dias_descanso_chofer= document.getElementById("dias_descanso_chofer").value;

/*
fin chofer_transporte
*/


//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


/*
inicio auxiliar transporte
*/



var monto_pago_colacion_diario= document.getElementById("monto_pago_colacion_diario").value;




/*
fin chofer_transporte
*/


//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


/*
inicio contrato_aprendizaje 
*/


var oficio= document.getElementById("oficio").value;
var maestro_o_guia= document.getElementById("maestro_o_guia").value;
var duracion_contrato_de_aprendizaje= document.getElementById("duracion_contrato_de_aprendizaje").value;


/*
fin contrato_aprendizaje
*/



//+++++++++++++++++++++++++++++++++++++++++++++++++++++




/*
inicio convenio_practica_profesional 
*/


var establecimiento_educacional= document.getElementById("establecimiento_educacional").value;

var docente_coordinador= document.getElementById("docente_coordinador").value;

var condiciones_buena_practica= document.getElementById("condiciones_buena_practica").value;

var total_horas_cronologicas_practica= document.getElementById("total_horas_cronologicas_practica").value;

var tope_reembolso_estudiante= document.getElementById("tope_reembolso_estudiante").value;

var dias_inasistencia_permitidos= document.getElementById("dias_inasistencia_permitidos").value;


/*
fin convenio_practica_profesional
*/



//+++++++++++++++++++++++++++++++++++++++++++++++++++++






/*
inicio contrato_trato 
*/


var cantidad_semanal= document.getElementById("cantidad_semanal").value;

var monto_por_unidad= document.getElementById("monto_por_unidad").value;


/*
fin contrato_trato
*/



//+++++++++++++++++++++++++++++++++++++++++++++++++++++




/*
inicio agricola_permanente 
*/




var nombre_predio_agricola= document.getElementById("nombre_predio_agricola").value;
var profesion_oficio_del_contratado_agricola_permanente= document.getElementById("profesion_oficio_del_contratado_agricola_permanente").value;
var ubicacion_predio= document.getElementById("ubicacion_predio").value;
var tipo_de_pago= document.getElementById("tipo_de_pago").value;
var cantidad_diaria_si_es_fijo= document.getElementById("cantidad_diaria_si_es_fijo").value;

//############################################################################################################################################################
//###################################################################
// CLASE
var input_pago_a_trato_agricola= document.getElementsByClassName("input_pago_a_trato_agricola");
var input_pago_a_trato_agricola_listo= agregar_array(input_pago_a_trato_agricola);

var regalias= document.getElementsByClassName("regalias");
var regalias_listo= agregar_array(regalias);


var entrega_racion_tierra= document.getElementsByClassName("entrega_racion_tierra");
var entrega_racion_tierra_listo= agregar_array(entrega_racion_tierra);

var servicios_a_entregar_por_parte_trabajador= document.getElementsByClassName("servicios_a_entregar_por_parte_trabajador");
var servicios_a_entregar_por_parte_trabajador_listo= agregar_array(servicios_a_entregar_por_parte_trabajador);
// CLASE
//###################################################################
//############################################################################################################################################################



/*
fin agricola_permanente
*/



//+++++++++++++++++++++++++++++++++++++++++++++++++++++






















/*
inicio profesor 
*/


var pactos= document.getElementById("pactos").value;

var funciones_docentes= document.getElementById("funciones_docentes").value;


/*
fin profesor
*/



//+++++++++++++++++++++++++++++++++++++++++++++++++++++


















var monto_adelanto=document.getElementById("monto_adelanto").value;
var fecha_adelanto=document.getElementById("fecha_adelanto").value;
var ciudad_obra_construccion= document.getElementById("ciudad_obra_construccion").value;
 
    var nombre_obra_construccion= document.getElementById("nombre_obra_construccion").value;
    var locacion_obra_construccion= document.getElementById("locacion_obra_construccion").value;
    var comuna_locacion_obra_construccion= document.getElementById("comuna_locacion_obra_construccion").value;
    var tipo_pago_construccion= document.getElementById("tipo_pago_construccion").value;
    var cantidad_a_pagar_construccion= document.getElementById("cantidad_a_pagar_construccion").value;
    var asignacion_colacion_sin_con= document.getElementById("asignacion_colacion_sin_con").value; //no extensible
    var monto_asignacion_colacion=document.getElementById("monto_asignacion_colacion").value; 
    var booleano_asignacion_movilizacion= document.getElementById("booleano_asignacion_movilizacion").value;
    var monto_asignacion_movilizacion= document.getElementById("monto_asignacion_movilizacion").value;
    var booleano_asignacion_desgaste_herramientas= document.getElementById("booleano_asignacion_desgaste_herramientas").value;
    var monto_asignacion_desgaste_herramientas= document.getElementById("monto_asignacion_desgaste_herramientas").value;
    var booleano_asignacion_matrimonio= document.getElementById("booleano_asignacion_matrimonio").value;
    var monto_asignacion_matrimonio= document.getElementById("monto_asignacion_matrimonio").value;
    var select_afp= document.getElementById("select_afp").value;
    var select_isapre= document.getElementById("select_isapre").value;

    var nombre_empresa= document.getElementById("nombre_empresa").value;
    var nombre= document.getElementById("nombre").value;
    var apellido= document.getElementById("apellido").value;
    
    var estado_civil= document.getElementById("estado_civil").value;

    var direccion= document.getElementById("direccion").value;
    var comuna= document.getElementById("comuna").value;
    var nacionalidad= document.getElementById("nacionalidad").value;
    var sexo= document.getElementById("sexo").value;
    var nacimiento= document.getElementById("nacimiento").value;
    var rut= document.getElementById("rut").value;
var edad= document.getElementById("edad").value;

    var sueldo_liquido= document.getElementById("sueldo_liquido").value;
    var jefatura= document.getElementById("jefatura").value;
    var empresa= document.getElementById("empresa").value;
    var puesto= document.getElementById("puesto").value;
    var horario= document.getElementById("horario").value;
    var empresa_previa= document.getElementById("empresa_previa").value;
    var sueldo_escrito= document.getElementById("sueldo_escrito").value;
    var select_sucursal= document.getElementById("select_sucursal").value;
    var select_sucursal_direccion= document.getElementById("select_sucursal_direccion").value;
    var primer_dia_semana_jornada= document.getElementById("primer_dia_semana_jornada").value;
    var ultimo_dia_semana_jornada= document.getElementById("ultimo_dia_semana_jornada").value;
    var hora_entrada_jornada= document.getElementById("hora_entrada_jornada").value;
    var hora_salida_jornada= document.getElementById("hora_salida_jornada").value;
    var descanso_o_almuerzo_en_minutos= document.getElementById("descanso_o_almuerzo_en_minutos").value;
    var hora_inicio_descanso= document.getElementById("hora_inicio_descanso").value;
    var hora_fin_descanso= document.getElementById("hora_fin_descanso").value;
    
    /*
    extensibles, array:
    */
    var con_sin_gratificacion= document.getElementsByClassName("con_sin_gratificacion");
    var gratificaciones= agregar_array(con_sin_gratificacion);
  

    var con_sin_incentivo= document.getElementsByClassName("con_sin_incentivo");
    var incentivos= agregar_array(con_sin_incentivo);


    var con_sin_bono= document.getElementsByClassName("con_sin_bono");
    var bonos= agregar_array(con_sin_bono);
  





/*
fin extensibles.    
*/
var fecha_pago_sueldo=document.getElementById("fecha_pago_sueldo").value;


var tipo_contrato= localStorage.getItem("generacion_contrato");
alert(monto_adelanto)
//alert(agregar_array(con_sin_gratificacion));
setTimeout(function() {
    fetch("./model/server.php",{
        method: "POST",
        //what ever data you want to post with key value pair 
        body: "hora_fin_descanso="+hora_fin_descanso+"&hora_inicio_descanso="+hora_inicio_descanso+"&descanso_o_almuerzo_en_minutos="+descanso_o_almuerzo_en_minutos+"&hora_salida_jornada="+hora_salida_jornada+"&hora_entrada_jornada="+hora_entrada_jornada+"&ultimo_dia_semana_jornada="+ultimo_dia_semana_jornada+"&primer_dia_semana_jornada="+primer_dia_semana_jornada+"&select_sucursal_direccion="+select_sucursal_direccion+"&select_sucursal="+select_sucursal+"&sueldo_escrito="+sueldo_escrito+"&empresa_previa="+empresa_previa+"&horario="+horario+"&puesto="+puesto+"&empresa="+empresa+"&jefatura="+jefatura+"&sueldo_liquido="+sueldo_liquido+"&rut="+rut+"&nacimiento="+nacimiento+"&sexo="+sexo+"&nacionalidad="+nacionalidad+"&comuna="+comuna+"&direccion="+direccion+"&estado_civil="+estado_civil+"&apellido="+apellido+"&nombre="+nombre+"&nombre_empresa="+nombre_empresa+"&select_isapre="+select_isapre+"&select_afp="+select_afp+"&monto_asignacion_matrimonio="+monto_asignacion_matrimonio+"&booleano_asignacion_matrimonio="+booleano_asignacion_matrimonio+"&monto_asignacion_desgaste_herramientas="+monto_asignacion_desgaste_herramientas+"&booleano_asignacion_desgaste_herramientas="+booleano_asignacion_desgaste_herramientas+"&monto_asignacion_movilizacion="+monto_asignacion_movilizacion+"&booleano_asignacion_movilizacion="+booleano_asignacion_movilizacion+"&cantidad_a_pagar_construccion="+cantidad_a_pagar_construccion+"&tipo_pago_construccion="+tipo_pago_construccion+"&comuna_locacion_obra_construccion="+comuna_locacion_obra_construccion+"&locacion_obra_construccion="+locacion_obra_construccion+"&nombre_obra_construccion="+nombre_obra_construccion+"&gratificaciones="+gratificaciones+"&incentivos="+incentivos+"&bonos="+bonos+"&codigo_actividad_economica="+codigo_actividad_economica+"&servicio_salud_aprueba_prevencion_riesgos="+servicio_salud_aprueba_prevencion_riesgos+"&tecnico_o_profesional_prevencion_riesgos="+tecnico_o_profesional_prevencion_riesgos+"&numero_inscripcion_prevencion_riesgos="+numero_inscripcion_prevencion_riesgos+"&numero_dias_a_trabajar_semana_prevencion_riesgos="+numero_dias_a_trabajar_semana_prevencion_riesgos+"&bono_locomocion_mensual_prevencion_riesgos="+bono_locomocion_mensual_prevencion_riesgos+"&duracion_contrato="+duracion_contrato+"&nombre_produccion_television="+nombre_produccion_television+"&locacion_produccion_television="+locacion_produccion_television+"&nombre_establecimiento_teatro="+nombre_establecimiento_teatro+"&tiempo_pago="+tiempo_pago+"&transporte_entre="+transporte_entre+"&tareas_a_desarrollar="+tareas_a_desarrollar+"&horas_diarias_chofer="+horas_diarias_chofer+"&dias_descanso_chofer="+dias_descanso_chofer+"&monto_pago_colacion_diario="+monto_pago_colacion_diario+"&oficio="+oficio+"&maestro_o_guia="+maestro_o_guia+"&duracion_contrato_de_aprendizaje="+duracion_contrato_de_aprendizaje+"&establecimiento_educacional="+establecimiento_educacional+"&docente_coordinador="+docente_coordinador+"&condiciones_buena_practica="+condiciones_buena_practica+"&total_horas_cronologicas_practica="+total_horas_cronologicas_practica+"&tope_reembolso_estudiante="+tope_reembolso_estudiante+"&dias_inasistencia_permitidos="+dias_inasistencia_permitidos+"&cantidad_semanal="+cantidad_semanal+"&monto_por_unidad="+monto_por_unidad+"&nombre_predio_agricola="+nombre_predio_agricola+"&profesion_oficio_del_contratado_agricola_permanente="+profesion_oficio_del_contratado_agricola_permanente+"&ubicacion_predio="+ubicacion_predio+"&tipo_de_pago="+tipo_de_pago+"&cantidad_diaria_si_es_fijo="+cantidad_diaria_si_es_fijo+"&input_pago_a_trato_agricola_listo="+input_pago_a_trato_agricola_listo+"&regalias_listo="+regalias_listo+"&entrega_racion_tierra_listo="+entrega_racion_tierra_listo+"&servicios_a_entregar_por_parte_trabajador_listo="+servicios_a_entregar_por_parte_trabajador_listo+"&tipo_contrato="+tipo_contrato+"&viatico="+viatico+"&edad="+edad+"&capitulos_totales_contemplados="+capitulos_totales_contemplados+"&inicio_rodaje="+inicio_rodaje+"&fin_rodaje="+fin_rodaje+"&forma_de_pago_sueldo="+forma_de_pago_sueldo+"&ciudad_obra_construccion="+ciudad_obra_construccion+"&monto_adelanto="+monto_adelanto+"&fecha_adelanto="+fecha_adelanto+"&fecha_pago_sueldo="+fecha_pago_sueldo+"&asignacion_colacion_sin_con="+asignacion_colacion_sin_con+"&monto_asignacion_colacion="+monto_asignacion_colacion+"&pactos="+pactos+"&funciones_docentes="+funciones_docentes,
        headers: {
        "Content-Type": "application/x-www-form-urlencoded" }
        }).then( (response) => { 
    
       return response.text()
        //do something awesome that makes the world a better place
        }).then(function(r){
    console.log(r)
        }) 
}, 500);




}

function agregar_array(array){
var array_output= [];
    for (var index = 0; index < array.length; index++) {
        var element = array[index].value;
        array_output.push(element);
        
    }
return array_output;
}