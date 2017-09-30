<?php
//require_once('../fpdf.php');

abstract class contrato_generico extends FPDF
{
    protected $contrato;
    protected $administrativo;


public function titulo(){
    $contrato= new FPDF('P','cm','A4');
    $contrato->addPage();
    $contrato->SetFont('Arial','B',16);
    $contrato->Cell(0,2,'Contrato de Trabajo',0,1, "C");
    $contrato->SetFont('Arial','',10);
    //$contrato->output();
    return $contrato;
}


public function base_contrato_administrativo($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10){
    $beneficios= "";
    if(count($beneficios_guardados_en_base_datos)==0){
        $beneficios= "";
    }else{

foreach ($beneficios_guardados_en_base_datos as $key => $value) {
    $beneficios=  "  -". $value["beneficio"] . $beneficios;
}

  $beneficios= " El empleador se compromete a otorgar o suministrar al trabajador los siguientes beneficios: " .$beneficios .".";    
    }
    
    $administrativo= 'En '.$locacion.', a '.$dia. ' '.$numero_especifico_extraido. ' de '.$mes.' de '.$año.' entre (nombre o razón social) '.$nombre_empresa.', R.U.T '.$rut.', representado(a) legalmente por don(a) '.$represante_legal.', cédula de identidad '.$rut_representante.', ambos con domicilio en '.$direccion_sin_comuna.' comuna de  '.$comuna.', en adelante el "Empleador" y  '.$empleado.' de nacionalidad '.$nacionalidad_empleado.', nacido el '.$fecha_nacimiento_empleado.', domiciliado en '.$direccion_sin_comuna_empleado.', comuna de '.$comuna_empleado.', RUT '.$rut_empleado.' proveniente de '.$empresa_previa.', en adelante "Trabajador". Se ha convenido el siguiente Contrato Individual de Trabajo:

PRIMERO : El trabajador se compromete y obliga a prestar servicios como '.$cargo.' u otro trabajo o función similar, que tenga directa relación con el cargo ya indicado, en el Departamento (Sección) '.$departamento_o_seccion.', ubicado en '.$ubicacion_departamento_o_seccion.' , comuna de '.$comuna_departamento_o_seccion.', pudiendo ser trasladado a otro Departamento o Sección de la Oficina Principal o de cualquiera de las Agencias del Empleador, a condición que se trate de labores similares, en la misma ciudad, y sin que ello importe menoscabo para el trabajador, todo ello sujeto a las necesidades operativas de la Empresa.
SEGUNDO : JORNADA DE TRABAJO
El trabajador cumplirá una jornada semanal ordinaria de '.$horas_jornada.' horas, de acuerdo a la siguiente distribución diaria: lunes a '.$ultimo_dia_semana_jornada.', de '.$hora_entrada_jornada.' a '.$hora_salida_jornada.' horas. La jornada de trabajo será interrumpida con un descanso de '.$descanso_o_almuerzo_en_minutos.' minutos, entre las '.$hora_inicio_descanso.' y las '.$hora_fin_descanso.' horas, destinados a la colación, tiempo que será de cargo del '.$cargo_monetario_colacion.'
TERCERO: Cuando por necesidades de funcionamiento de la Empresa, sea necesario pactar trabajo en tiempo extraordinario, el Empleado que lo acuerde desde luego se obligará a cumplir el horario que al efecto determine la Empleadora, dentro de los límites legales. Dicho acuerdo constará por escrito y se firmará por ambas partes, previamente a la realización del trabajo.
A falta de acuerdo, queda prohibido expresamente al Empleado trabajar sobretiempo o simplemente permanecer en el recinto de la Empresa, después de la hora diaria de salida, salvo en los casos a que se refiere el inciso precedente.
El tiempo extraordinario trabajado de acuerdo a las estipulaciones precedentes, se remunerará con el recargo legal correspondiente y se liquidará y pagará conjuntamente con la remuneración del respectivo período.
CUARTO: El empleado percibirá un sueldo de $ '.$sueldo_numero.' ('.$sueldo_escrito.') mensuales, pagaderos por meses vencidos.
Las deducciones que la Empleadora podrá según los casos - practicar a las remuneraciones, son todas aquéllas que dispone el artículo 58 del Código del Trabajo.
QUINTO : El trabajador, asimismo, acepta y autoriza al Empleador para que haga las deducciones que establecen las leyes vigentes y, para que le descuente el tiempo no trabajado debido a atrasos, inasistencias o permisos y, además, la rebaja del monto de las multas establecidas en el Reglamento Interno de Orden, Higiene y Seguridad, en caso que procedieren.
SEXTO: La Empresa se obliga a pagar al empleado una gratificación anual equivalente al 25% (veinticinco por ciento) del total de las remuneraciones mensuales que éste hubiere percibido en el año, con tope de 4,75 Ingresos Mínimos Mensuales. 
Esta gratificación se calculará, liquidará y anticipará mensualmente en forma coetánea con la remuneración del mes respectivo, siendo cada abono equivalente a la doceava parte de la gratificación anual.
La gratificación así convenida es incompatible y sustituye a la que resulte de la aplicación de los artículos 47 y siguientes del Código del Trabajo.
Para los efectos de cotejar la gratificación convenida en esta cláusula con la que, según la ley, eventualmente podría corresponder al Empleado, los valores anticipados mensualmente se reajustarán en conformidad con lo dispuesto en el artículo 63 del Código del Trabajo, y se entenderá que fueron abonados con carácter de anticipos de dichas gratificaciones legales.
Con todo, si las sumas anticipadas a título de gratificación convencional resultaren mayores que las que legalmente correspondieren al Empleador, el exceso se consolidará en su beneficio.
SÉPTIMO: '.$beneficios.' 
El trabajador se obliga y compromete expresamente a cumplir las instrucciones que le sean impartidas por su jefe inmediato o por la Gerencia de la empresa y, acatar en todas sus partes las disposiciones establecidas en el Reglamento de Orden, Higiene y Seguridad las que declara conocer y que, para estos efectos se consideran parte integrante del presente contrato, reglamento del cual el trabajador recibe un ejemplar en este acto.
OCTAVO : Las partes acuerdan en este acto que los atrasos reiterados, sin causa justificada, de parte del trabajador, se considerarán incumplimiento grave de las obligaciones que impone el presente contrato y darán lugar a la aplicación de la caducidad del contrato, contemplada en el art. .160 Nº7 del Código del Trabajo
Se entenderá por atraso reiterado el llegar después de la hora de ingreso durante ......................... días seguidos o no, en cada mes calendario. Bastará para acreditar esta situación la constancia en el respectivo Control de Asistencia.
NOVENO: El presente contrato regirá .............................................. pero cualquiera de las partes, o ambas, según el caso, podrán ponerle término en cualquier momento con arreglo a la ley.
DECIMO: Para todas las cuestiones a que eventualmente pueda dar origen este contrato, las partes fijan domicilio en la ciudad de Santiago.
DECIMO PRIMERO : Se deja constancia que el Empleado ingresó al servicio de la Empresa con fecha ......de ……….........de 20......
El presente contrato se firma en dos ejemplares, quedando en este mismo acto uno en poder de cada contratante.
';

return $administrativo;
}


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++



public function base_contrato_television($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10){
    $beneficios= "";
    if(count($beneficios_guardados_en_base_datos)==0){
        $beneficios= "";
    }else{

foreach ($beneficios_guardados_en_base_datos as $key => $value) {
    $beneficios=  "  -". $value["beneficio"] . $beneficios;
}

  $beneficios= " El empleador se compromete a otorgar o suministrar al trabajador los siguientes beneficios: " .$beneficios .".";    
    }
    
    $television= 'En '.$locacion.', a '.$dia. ' '.$numero_especifico_extraido. ' de '.$mes.' de '.$año.' entre (nombre o razón social) '.$nombre_empresa.', R.U.T '.$rut.', representado(a) legalmente por don(a) '.$represante_legal.', cédula de identidad '.$rut_representante.', ambos con domicilio en '.$direccion_sin_comuna.' comuna de  '.$comuna.', en adelante el "Empleador" y  '.$empleado.' de nacionalidad '.$nacionalidad_empleado.', nacido el '.$fecha_nacimiento_empleado.', domiciliado en '.$direccion_sin_comuna_empleado.', comuna de '.$comuna_empleado.', RUT '.$rut_empleado.' proveniente de '.$empresa_previa.', en adelante "Trabajador". Se ha convenido el siguiente Contrato Individual de Trabajo de acuerdo a lo señalado en el Artículo 145 A y siguientes del Código del Trabajo:

        PRIMERO. El trabajador se compromete a desempeñar los servicios de Actor / Actriz para la producción: '.$nombre_produccion.', en adelante “La Producción”, que  el empleador grabará en '.$locacion_produccion.', entre el '.$inicio_rodaje.'  y '.$fin_rodaje.', contemplando una cantidad total de '.$capitulos_totales_contemplados.' capítulos, sin perjuicio de aquellas modificaciones que puedan requerirse por necesidades de la producción misma, las que se escriturarán en un anexo del presente contrato. 
        Las funciones que comprende el rol de Actor /Actriz son las siguientes: 
        Participar activamente en las etapas de realización del proyecto para el que fue contratado, lo que comprende ensayos de actuación, lecturas de guion, pruebas de vestuario y maquillaje, rodaje, repeticiones de escenas y otras labores que deban desempeñarse acorde al rol. 
        Igualmente se incluyen expresamente los servicios asociados a la realización de escenas y/o tomas de fotografía. 
        SEGUNDO. El empleador podrá establecer el recinto donde deben prestarse los servicios, con la limitación que el nuevo sitio quede dentro de la misma ciudad o localidad donde se celebró el contrato y no ocasione un menoscabo al trabajador. Por su parte “el empleador” deberá costear el traslado, alimentación y alojamiento del trabajador, en condiciones adecuadas de higiene y seguridad, cuando las labores de preparación y/o las grabaciones deban realizarse en una ciudad distinta a la señalada en el presente contrato de trabajo como domicilio del trabajador. 
        TERCERO. El trabajador cumplirá una jornada ordinaria de trabajo de '.$horas_jornada.'. horas semanales, la que estará establecida en el Rotero o Plan de grabación, que será entregado al trabajador/a con al menos 7 días de anticipación. La jornada diaria no excederá de 10 horas.
        Lo anterior, sin perjuicio de lo establecido en el Párrafo 2°, del Capítulo IV, del Título I, del Libro I, del Código del Trabajo, relativo a horas extraordinarias. 
        La Empresa se compromete a otorgar un día de descanso a la semana, en compensación a cada día domingo trabajado y otro más por cada festivo en que el trabajador debía prestar servicios. 
        CUARTO. El empleador se compromete a pagar al trabajador un sueldo base bruto mensual por un monto de $'.$sueldo_numero.', el que será liquidado y pagado por período vencido, mediante '.$forma_de_pago_sueldo.'. 
        QUINTO. El trabajador autoriza en este acto al empleador a filmar, divulgar, editar, grabar total o parcialmente su imagen y voz, sin restricciones ni límites temporales mediante cualquier soporte o medio de registro, reproducción o difusión. 
        Sin perjuicio de lo anterior, el trabajador conservará, en todo caso, los derechos irrenunciables e intransferibles establecidos en la ley 20.243 y la ley 17.336.-, ambas en los casos que corresponda. Los derechos patrimoniales de remuneración por la comunicación pública o radiodifusión de las interpretaciones, serán pagados por quién realice la comunicación pública de la obra.
        SEXTO. La duración del presente contrato estará determinada por toda la duración de la Obra señalada, pudiendo tener término de acuerdo a las causales que la ley señala. 
        SÉPTIMO. El trabajador figurará en los créditos de la producción. 
        OCTAVO. El trabajador se compromete a emitir la documentación tributaria exigida en el artículo 145 L del Código del Trabajo. Por su parte, el empleador se obliga a pagar la totalidad de obligaciones previsionales que establece la ley, debiendo retener de la remuneración las cotizaciones que sean de cargo del trabajador, y enterarlas en la institución correspondiente. 
        NOVENO: Se deja constancia que el trabajador ingresó al servicio del empleador, el día '.$numero_especifico_extraido. ' de '.$mes.' de '.$año.'. 
        DECIMO: El presente contrato se firma en dos ejemplares del mismo tenor y fecha. 
        


        ___________________                                                               __________________
          Firma empleador							                                                                        Firma Trabajador
        ';

return $television;
}


//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++



public function base_contrato_plazo_fijo($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10){
    $beneficios_guardados_en_base_datos= $beneficios_guardados_en_base_datos;
    
        $beneficios= "";
        if(count($beneficios_guardados_en_base_datos)==0){
            $beneficios= "";
        }else{
    
    foreach ($beneficios_guardados_en_base_datos as $key => $value) {
        $beneficios.=  "\n  -". $value["beneficio"] ." equivalente a $" . $this->numero_formato($value["monto_a_entregar"]) . "";
    }
    
      $beneficios= "El empleador se compromete a otorgar o suministrar al trabajador los siguientes beneficios: " .$beneficios .".";    
        }
    
    $plazo_fijo= 'En '.$locacion.', a '.$dia. ' '.$numero_especifico_extraido. ' de '.$mes.' de '.$año.' entre (nombre o razón social) '.$nombre_empresa.', R.U.T '.$rut.', representado(a) legalmente por don(a) '.$represante_legal.', cédula de identidad '.$rut_representante.', ambos con domicilio en '.$direccion_sin_comuna.' comuna de  '.$comuna.', en adelante el "Empleador" y  '.$empleado.' de nacionalidad '.$nacionalidad_empleado.', nacido el '.$fecha_nacimiento_empleado.', domiciliado en '.$direccion_sin_comuna_empleado.', comuna de '.$comuna_empleado.', RUT '.$rut_empleado.' proveniente de '.$empresa_previa.', en adelante "Trabajador". Se ha convenido el siguiente Contrato Individual de Trabajo:

        El trabajador se compromete y obliga a ejecutar el trabajo de .'.$cargo.' que se le encomienda.
        Los servicios se prestarán en (las oficinas del empleador u otros sitios. Nombrarlos) .'.$ubicacion_departamento_o_seccion.' '.$comuna_departamento_o_seccion.'sin perjuicio de la facultad del empleador de alterar, por causa justificada, la naturaleza de los servicios, o el sitio o recinto en que ellos han de prestarse, con la sola limitación de que se trate de labores similares y que el nuevo sitio o recinto quede dentro de la misma localidad o ciudad, conforme a lo señalado en el artículo 12º del Código del Trabajo.
        * La jornada de trabajo será de '.$horas_jornada.' horas semanales distribuidas de (día de inicio).'.$primer_dia_semana_jornada.' a (Día de término).'.$ultimo_dia_semana_jornada.', de .'.$hora_entrada_jornada.' a .'.$hora_inicio_descanso.' horas y de .'.$hora_fin_descanso.' a .'.$hora_salida_jornada.' El tiempo de colación será de cargo del trabajador .
        El empleador se compromete a remunerar los servicios del trabajador con un sueldo mensual de $'.$this->numero_formato($sueldo_numero).', es decir '.$sueldo_escrito.' que será liquidado y pagado, por períodos vencidos y en forma proporcional a los días trabajados.
        El empleador se compromete a otorgar a suministrar al trabajador los siguientes beneficios: '.$beneficios.'
        El trabajador se compromete y obliga expresamente a cumplir las instrucciones que le sean impartidas por su jefe inmediato o por la gerencia de la empresa, en relación a su trabajo, y acatar en todas sus partes las normas del Reglamento Interno de Orden, Higiene y Seguridad (cuando exista en la empresa), las que declara conocer y que forman parte integrante del presente contrato, reglamento del cual se le entrega un ejemplar.

        El presente contrato durará por '.$duracion_contrato.' y sólo podrá ponérsele término en conformidad a la legislación vigente.

        Se deja constancia que el trabajador ingresó al servicio del empleador, el día '.$numero_especifico_extraido. ' de '.$mes.' de '.$año.'. 

        Para todos los efectos derivados del presente contrato las partes fijan domicilio en la ciudad de .'.$locacion.', y se someten a la Jurisdicción de sus Tribunales.
        El presente contrato se firman en 3 ejemplares, declarando el trabajador haber recibido en este acto un ejemplar de dicho instrumento, que es el fiel reflejo de la relación laboral convenida.
        
        
        ...........................................
        FIRMA TRABAJADOR
        RUT ...........................................	...........................................
        FIRMA EMPLEADOR
        RUT ...........................................
        NOTA:
        •	Este tipo de contrato se rige por las normas contempladas en el art. 159 Nº 4 del Código del Trabajo, debiendo tenerse presente lo siguiente:
        •	La duración del contrato de plazo, fijo, no podrá exceder de un año, salvo que se tratare de gerentes o personas que tengan un título profesional o técnico, otorgado por instituciones de educación superior del Estado o reconocido por éste, caso en el cual la duración no podrá exceder de dos años.
        •	La prestación de servicios una vez expirado el plazo lo transforma en contrato de duración indefinida.
        •	Estos contratos sólo admiten una renovación. La segunda renovación lo transforma en contrato de duración indefinida.
        •	La prestación de servicios discontinuos durante 12 meses o más en un período de quince meses hace presumir que hay contrato indefinido.
        •	En los contratos que tengan una duración de 30 días o menos, se entiende incluida en la remuneración convenida el pago por feriado y demás derechos que se devengan en proporción al tiempo servido. Regirá la misma disposición si el contrato inicial ha tenido prórrogas, que en total incluido el primer período no excedan de 60 días.
        •	La terminación anticipada del contrato a plazo fijo, sin que exista causal justificada obliga al empleador a pagar la totalidad de los emolumentos convenidos hasta la fecha de término consignada en el contrato.
        ';

return $plazo_fijo;
}



//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++






public function base_contrato_teatro($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10){
    $beneficios= "";
    if(count($beneficios_guardados_en_base_datos)==0){
        $beneficios= "";
    }else{

foreach ($beneficios_guardados_en_base_datos as $key => $value) {
    $beneficios=  "  -". $value["beneficio"] . $beneficios;
}

  $beneficios= " El empleador se compromete a otorgar o suministrar al trabajador los siguientes beneficios: " .$beneficios .".";    
    }
    
    $teatro= 'En '.$locacion.', a '.$dia. ' '.$numero_especifico_extraido. ' de '.$mes.' de '.$año.' entre (nombre o razón social) '.$nombre_empresa.', R.U.T '.$rut.', representado(a) legalmente por don(a) '.$represante_legal.', cédula de identidad '.$rut_representante.', ambos con domicilio en '.$direccion_sin_comuna.' comuna de  '.$comuna.', en adelante el "Empleador" y  '.$empleado.' de nacionalidad '.$nacionalidad_empleado.', nacido el '.$fecha_nacimiento_empleado.', domiciliado en '.$direccion_sin_comuna_empleado.', comuna de '.$comuna_empleado.', RUT '.$rut_empleado.' proveniente de '.$empresa_previa.', en adelante "Trabajador". Se ha convenido el siguiente Contrato Individual de Trabajo:

        PRIMERO: El trabajador se compromete a desempeñar las labores de '.$cargo.' en '.$nombre_produccion.' (obra, proyecto, programa) en el recinto o establecimiento '.$nombre_establecimiento.', ubicado en '.$locacion_produccion.', desarrollando al efecto las labores que sean inherentes a dicho cargo en razón de su naturaleza, entre otras, las siguientes:
        Participar activamente en las etapas de realización del proyecto para el que fue contratado, lo que puede comprender ensayos de actuación, lecturas de guion, pruebas de vestuario y maquillaje.
        También se incluyen los servicios que el actor deberá prestar durante la realización de las escenas y/o tomas de fotografía.
        SEGUNDO: El trabajador cumplirá una jornada ordinaria de trabajo de '.$horas_jornada.' horas semanales distribuidas de '.$primer_dia_semana_jornada.' a '.$ultimo_dia_semana_jornada.'. La jornada diaria de trabajo será de '.number_format($diferencia_horas,1).' horas. (No más de 10 horas).
        El trabajador se compromete a la vez, a cumplir la jornada de trabajo convenida en el presente contrato en su totalidad. 
        El empleador se obliga a otorgar un día de descanso a la semana en compensación a cada día domingo trabajado y otro más por cada festivo en que el trabajador debió prestar servicios.
        El empleador deberá avisar al menos con 7 días de antelación al actor, los días y horas en que se realizará la producción, grabación o filmación, a través de la entrega de un plan de filmación y actualizaciones sucesivas del mismo.
        Lo anterior, sin perjuicio de lo establecido en el Párrafo 2°, del Capítulo IV, del Título I, del Libro I, del Código del Trabajo, relativo a horas extraordinarias.
        
        TERCERO: El empleador podrá modificar por causa justificada el recinto donde deban prestarse los servicios, con la limitación de que el nuevo sitio quede dentro de la misma ciudad o localidad señalada en el contrato y que esto no ocasione un menoscabo al trabajador. 
        Por su parte, el empleador asume la obligación de costear el traslado, alimentación y alojamiento del trabajador, en condiciones adecuadas de higiene y seguridad, cuando las obras, proyecto o programa deban realizarse en una ciudad distinta a aquella donde se ubica el domicilio del trabajador.
        CUARTO: El empleador proporcionará al actor los insumos y servicios de maquillaje, vestuario y peluquería.
        
        QUINTO: El empleador se compromete a remunerar los servicios del trabajador en períodos de tipo '.$tiempo_de_pago.' (Semanal, quincenal o mensual, pero en ningún caso la unidad de tiempo podrá exceder de un mes) con un monto bruto de $'.$sueldo_numero.' que será liquidado y pagado por período vencido, mediante '.$forma_de_pago_sueldo.' (forma de pago). 
        SEXTO: La duración del presente contrato de trabajo estará determinada por toda la duración del proyecto, pudiendo tener término por las causales establecidas en la legislación vigente.
        SÉPTIMO: El nombre del actor figurará en los títulos de crédito iníciales o de cierre de la obra, pudiendo utilizarse además en la publicidad de la misma.
        Asimismo, el artista conservará sus derechos conexos del artículo 66 de la Ley N° 17.336, respecto de la utilización de sus interpretaciones por cualquier medio, realizados por establecimientos abiertos al público tales como bares, cafés, cafeterías, clínicas, restaurantes, hoteles, gimnasios, centros comerciales o cualquier otro similar.
        OCTAVO: El actor se compromete a emitir la respectiva boleta de honorario en conformidad de lo establecido en el artículo 145 L del Código del Trabajo. Por su parte el empleador se obliga a retener y pagar los montos correspondientes a cotizaciones previsionales, Fonasa o Isapre, AFC, y a pagar todas aquellas cotizaciones que sean de su cargo y que en derecho correspondan.
        
        NOVENO: Se deja constancia que el trabajador ingresó al servicio del empleador, el día '.$numero_especifico_extraido. ' de '.$mes.' de '.$año.'.
        
        
        ………………..     				 	…………………………
        Empleador      					      Trabajador
        ';

return $teatro;
}




//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++



public function base_contrato_construccion($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10){

    $beneficios= "";
    if(count($beneficios_guardados_en_base_datos)==0){
        $beneficios= "";
    }else{

foreach ($beneficios_guardados_en_base_datos as $key => $value) {
    $beneficios=  "  -". $value["beneficio"] . $beneficios;
}

  $beneficios= " El empleador se compromete a otorgar o suministrar al trabajador los siguientes beneficios: " .$beneficios .".";    
    }
    



if($tipo_de_pago=="pago_por_dia"){
    $segundo_punto=' Por día trabajado: $ '.$cantidad_a_pagar.' pesos.';
}elseif($tipo_de_pago=="pago_a_trato"){
    $segundo_punto=' A trato por unidad hecha diaria: $ '. number_format(intval($cantidad_a_pagar),0,",",".").' pesos.';
}else{
    $segundo_punto='';
}
    





/*
abajo está proceso de incentivos
*/

$array_incentivos=explode(",", $incentivos);
if($array_incentivos[0]=="con"){

    $incentivos_en_contrato="";

    for ($i=0; $i < count($array_incentivos); $i++) { 
        if($array_incentivos[$i]!=="con"){
            
if(is_numeric($array_incentivos[$i])){
    $incentivos_en_contrato.=number_format(intval($array_incentivos[$i]),0,",",".") .  " Pesos. ";
}else{
    $incentivos_en_contrato.=$array_incentivos[$i];
    $incentivos_en_contrato.=" ";
}
        
        }
    }
}else{
    $incentivos_en_contrato= "Sin incentivos.";
}

/*
arriba está proceso de incentivos
*/










/*
abajo está proceso de incentivos
*/

$array_bonos=explode(",", $bonos);




if($array_bonos[0]=="con"){

    $bonos_en_contrato="";

    for ($i=0; $i < count($array_bonos); $i++) { 
        if($array_bonos[$i]!=="con"){
            
if(is_numeric($array_bonos[$i])){
    $bonos_en_contrato.=number_format(intval($array_bonos[$i]),0,",",".") .  " Pesos. ";
}else{
    $bonos_en_contrato.=$array_bonos[$i];
    $bonos_en_contrato.=" ";
}
        
        }
    }
}else{
    $bonos_en_contrato= "Sin bonos.";
}

/*
arriba está proceso de incentivos
*/























/*
abajo está proceso de gratificaciones
*/

$array_gratificaciones=explode(",", $gratificaciones);
if($array_gratificaciones[0]=="con"){

    $gratificacion_en_contrato="";

    for ($i=0; $i < count($array_gratificaciones); $i++) { 
        if($array_gratificaciones[$i]!=="con"){
            
if(is_numeric($array_gratificaciones[$i])){
    $gratificacion_en_contrato.= number_format(intval($array_gratificaciones[$i]),0,",",".") .  " Pesos. ";
}else{
    $gratificacion_en_contrato.=$array_gratificaciones[$i];
    $gratificacion_en_contrato.=" ";
}
        
        }
    }
}else{
    $gratificacion_en_contrato= "Sin gratificaciones.";
}

/*
arriba está proceso de gratificaciones
*/











/*
asignaciones

*/

if($asignacion_movilizacion_con_sin=="con"){
$monto_movilizacion=number_format(intval($monto_asignacion_movilizacion),0,",",".");

}else{
    $monto_movilizacion="0";
}

if($asignacion_desgaste_herramientas_sin_con=="con"){
    $monto_herramientas=number_format(intval($monto_asignacion_desgastes_herramientas),0,",",".");
    
}else{
    $monto_herramientas="0";  
    }


    if($asignacion_matrimonio_sin_con=="con"){
        $monto_matrimonio=number_format(intval($monto_asignacion_matrimonio),0,",",".");
        
    }else{
        $monto_matrimonio="0";  
        }


/*
asignaciones

*/





    $contrato_construccion= 'En '.$locacion.', a '.$dia. ' '.$numero_especifico_extraido. ' de '.$mes.' de '.$año.' entre (nombre o razón social) '.$nombre_empresa.', R.U.T '.$rut.', representado(a) legalmente por don(a) '.$represante_legal.', cédula de identidad '.$rut_representante.', ambos con domicilio en '.$direccion_sin_comuna.' comuna de  '.$comuna.', en adelante el "Empleador" y  '.$empleado.' de nacionalidad '.$nacionalidad_empleado.', nacido el '.$fecha_nacimiento_empleado.', domiciliado en '.$direccion_sin_comuna_empleado.', comuna de '.$comuna_empleado.', RUT '.$rut_empleado.' proveniente de '.$empresa_previa.', en adelante "Trabajador". Se ha convenido el siguiente Contrato Individual de Trabajo:

        PRIMERO : El trabajador se desempeñará como '.$cargo.' (indicar labor u oficio) en la ciudad de '.$ciudad_obra_construccion.' en la Obra denominada '.$nombre_de_la_obra.', ubicada en '.$locacion_de_la_obra.' de la comuna o localidad de '.$comuna_locacion_obra.'.
        SEGUNDO : El Empleador cancelará la prestación de servicios del trabajador, en la siguiente forma:'.$segundo_punto.'
        
        TERCERO : Aparte de la remuneración señalada el Empleador se compromete a pagar por día trabajado lo siguiente:
        - Incentivos: '. $incentivos_en_contrato.'
        - Bonos: '. $bonos_en_contrato.' 
        - Gratificaciones: '. $gratificacion_en_contrato.'
        
        CUARTO : Las partes convienen, en forma clara e inequívoca que, respecto al valor unitario del trato, se comprende a la unidad de obra hecha y si se ejecutará el trabajo por "Cuadrilla" (considera más de un trabajador) cualquiera fuere el número, no se alterará el valor unitario y el valor total resultante de todas las "Unidades" hechas, se prorrateará entre todos los componentes de la "Cuadrilla", descontando la remuneración base, correspondiente al tiempo trabajado en el trato.
        QUINTO : La remuneración acordada será cancelada el día '.$fecha_pago_sueldo.'; antes de esa fecha, el trabajador recibirá un "Suple" o adelanto de $ '.number_format(intval($monto_adelanto),0,",",".").' el día '.$fecha_adelanto.'.
        SEXTO : La jornada de trabajo será la que se indica:
        Mañana: De '.$hora_entrada_jornada.' hasta las '.$hora_inicio_descanso.' horas. 
        Tarde : De '.$hora_fin_descanso.' hasta las '.$hora_salida_jornada.' horas.
        Esta jornada se distribuirá de Lunes a '.$ultimo_dia_semana_jornada.', la que será interrumpida por un descanso de '.$descanso_o_almuerzo_en_minutos.' minutos, tiempo destinado a la colación de cargo del trabajador.
        SEPTIMO : Esta jornada ordinaria de trabajo no impide que puedan las partes, de común acuerdo, trabajar horas extraordinarias, en el momento en que sobrevengan circunstancias que pudieren ocasionar perjuicios en la marcha normal de la Obra, lo cual deberá constar por escrito y firmado por las partes al reverso del presente documento o en un anexo al mismo. Sin perjuicio, dicho pacto no podrá exceder más allá de tres meses. Las horas extraordinarias se pagarán con el cincuenta por ciento de recargo (50%).
        OCTAVO : Además las partes pactan los siguientes beneficios o asignaciones: (especificar e indicar requisitos para tener derecho a él)
        Asignación de Movilización : $'.$monto_movilizacion.'.
        Asignación de desgaste de Herramientas: $'.$monto_herramientas.'.
        Asignación de matrimonio. El Empleador pagará al trabajador con ocasión de su matrimonio civil una asignación de $ '.$monto_matrimonio.' siempre y cuando presente: 1) Certificado del Oficial del Registro Civil, en que conste el matrimonio celebrado; y 2) Que obviamente, el contrato de trabajo esté vigente. (*)
        NOVENO : El presente contrato de trabajo tendrá una duración de '.$duracion_contrato.'.
        DECIMO : El trabajador se compromete y obliga expresamente a cumplir las instrucciones que le sean impartidas por su jefe inmediato o por la gerencia de la empresa, en relación a su trabajo, y acatar en todas sus partes las normas del Reglamento Interno de Orden, Higiene y Seguridad, las que declara conocer y que forman parte integrante del presente contrato, reglamento del cual se le entrega un ejemplar.
        DECIMO PRIMERO: Se deja constancia que el trabajador ingresó al servicio en esta Obra el día '.$numero_especifico_extraido. ' de '.$mes.' de '.$año.'.
        DECIMO SEGUNDO: El presente contrato de trabajo se firma en dos ejemplares quedando uno de ellos en poder de cada parte.
        
        
        
        
        
        ...........................................
        EMPLEADOR
        RUT ............................................ 	............................................
        TRABAJADOR
        RUT ............................................
        
        Nota: 
        •	El empleador estará obligado a pagar al trabajador los gastos razonables de ida y vuelta si para prestar servicios lo hizo cambiar de residencia, lo que no constituirá remuneración, conforme a lo dispuesto en el artículo 53 del Código del Trabajo.
        •	(*)El Código del Trabajo, otorga plena libertad a las partes para acordar otros "Pactos". Como parte integrante del mismo Contrato de Trabajo.
        Al respecto, se aconseja hacer uso de esta cláusula para PRECISAR el trabajo a realizar y otras obligaciones como tarjeta de asistencia, entregar implementos de trabajo o herramientas de propiedad del Empleador o el Trabajador, al Bodeguero, hora y lugar en que debe encontrarse para embarcarse en el bus de la Empresa que lo dejará en la Obra, etc.	
        ';

return $contrato_construccion;
}












//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++



public function base_contrato_auxiliar_buses($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10){




    $beneficios= "";
    if(count($beneficios_guardados_en_base_datos)==0){
        $beneficios= "";
    }else{

foreach ($beneficios_guardados_en_base_datos as $key => $value) {
    $beneficios=  "  -". $value["beneficio"] . $beneficios;
}

  $beneficios= " El empleador se compromete a otorgar o suministrar al trabajador los siguientes beneficios: " .$beneficios .".";    
    }
    
    $auxiliar= 'En '.$locacion.', a '.$dia. ' '.$numero_especifico_extraido. ' de '.$mes.' de '.$año.' entre (nombre o razón social) '.$nombre_empresa.', R.U.T '.$rut.', representado(a) legalmente por don(a) '.$represante_legal.', cédula de identidad '.$rut_representante.', ambos con domicilio en '.$direccion_sin_comuna.' comuna de  '.$comuna.', en adelante el "Empleador" y  '.$empleado.' de nacionalidad '.$nacionalidad_empleado.', nacido el '.$fecha_nacimiento_empleado.', domiciliado en '.$direccion_sin_comuna_empleado.', comuna de '.$comuna_empleado.', RUT '.$rut_empleado.' proveniente de '.$empresa_previa.', en adelante "Trabajador". Se ha convenido el siguiente Contrato Individual de Trabajo:


        PRIMERO : '.$empleado.' se compromete a efectuar el trabajo de auxiliar de bus en los vehículos de propiedad o administrados por el empresario.
        SEGUNDO : La jornada de trabajo será de 192 horas mensuales sujeta a la siguiente distribución: '.$horas_jornada.' semanales, la cual deberá ser cumplida en los turnos que estén establecidas, conforme a las instrucciones del empresario de acuerdo a las necesidades del servicio:
        El auxiliar de bus tendrá derecho a un día de descanso en la semana.
        TERCERO : El empleador pagará mensualmente al auxiliar por concepto de sueldo base el valor equivalente $ '.number_format(intval($sueldo_numero),0,",",".").' pesos mensuales, el que se pagará por períodos vencidos.
        Además se cancelará una gratificación anual de 4,75 ingresos mensuales.
        El empleador se compromete a cancelar una colación de $ '.number_format(intval($monto_pago_colacion_diario),0,",",".").' mensualmente.
        CUARTO : Estando a su cargo la máquina en su turno de trabajo, será obligatorio del auxiliar procurar el buen mantenimiento de puertas, vidrios, tapicerías, pisos, fundas, ceniceros, etc., y de la total limpieza del vehículo tanto en su interior como exterior, constatando y cerciorándose antes de tomar la máquina a su cargo y de salida servicio que ella es entregada en buen estado de conservación, en caso contrario dará aviso de inmediato al Empresario o Administrador, sobre los desperfectos o destrozos que ella tuviere. El no hacerlo significa que la recibió en perfectas condiciones.
        QUINTO : Es obligación del auxiliar conocer y respetar las normas legales y reglamentarias sobre tránsito público, los Reglamentos Internos de la línea respectiva, y las órdenes de la Directiva. Las sanciones a que se hiciere acreedor por infracción a las normas legales aplicadas por los Tribunales competentes o las autoridades encargadas del tránsito público, como igualmente las que sean aplicadas en la Línea en que se desempeñe, lo afectarán exclusiva y personalmente, salvo que acreditare su falta de responsabilidad.
        SEXTO : En consideración a que las funciones que desempeña el auxiliar son para un servicio público en el cual la disciplina y el cumplimiento de sus labores son esenciales para servir a la comunidad, serán consideradas como faltas graves a las obligaciones que impone el contrato y, en consecuencia, como causal justificada de despido las siguientes:
        •	Retención de planillas, o de dinero, o entrega parcial de éstos; la entrega sólo podrá acreditarse mediante el recibo comprobante.
        •	No dar cumplimiento a la jornada completa de trabajo o infringir las instrucciones de Transportes o del empresario en cuanto a la hora de comienzo o término del trabajo.
        •	Presentarse en estado de intemperancia o trabajar bajo la influencia del alcohol.
        •	Negarse a trabajar en los turnos que haya indicado el empresario o alterar en forma deliberada y sin autorización el orden de éstos;
        •	Aducir enfermedades no acreditadas con el objeto de no trabajar; presentar certificados médicos adulterados o falsos;
        •	Confiar su carga a terceros no autorizados por el empresario.
        •	No dar cuenta dentro del turno que le correspondía efectuar de las causas que originan su ausencia al trabajo;
        •	Causar daño o perjuicios al vehículo o material a su cargo;
        •	Haber sido sancionado más de tres veces en un mismo año por infracción a las normas que regulan el transporte de pasajeros o del tránsito;
        •	Ser sorprendido por los Inspectores de la Empresa con boletos, revender boletos, no otorgar boletos a los pasajeros o efectuar otras maniobras semejantes;
        •	No presentarse ni ponerse a disposición del Empresario o Administrador cuando el vehículo esté en reparaciones.
        OCTAVO : El presente contrato durará con plazo '.$duracion_contrato.', pero cualquiera de las partes podrá ponerle término cuando lo estime conveniente de conformidad a las normas legales vigentes.
        NOVENO :Se deja constancia que el trabajador ingresó al servicio en esta Obra el día '.$numero_especifico_extraido. ' de '.$mes.' de '.$año.'.
        DECIMO : Las partes fijan su domicilio en'.$locacion.', y se someten a la Jurisdicción de sus Tribunales. El presente contrato se suscribe en dos ejemplares, quedando uno en poder de cada parte.
        
        
        
        ............................................
        FIRMA EMPRESARIO
        RUT ............................................	............................................ 
        FIRMA AUXILIAR
        RUT ............................................ 
        
        ';

return $auxiliar;
}





//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++



public function base_contrato_aprendizaje($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10){
    $beneficios= "";
    if(count($beneficios_guardados_en_base_datos)==0){
        $beneficios= "";
    }else{

foreach ($beneficios_guardados_en_base_datos as $key => $value) {
    $beneficios=  "  -". $value["beneficio"] . $beneficios;
}

  $beneficios= " El empleador se compromete a otorgar o suministrar al trabajador los siguientes beneficios: " .$beneficios .".";    
    }
    
    $aprendizaje= 'En '.$locacion.', a '.$dia. ' '.$numero_especifico_extraido. ' de '.$mes.' de '.$año.' entre (nombre o razón social) '.$nombre_empresa.', R.U.T '.$rut.', representado(a) legalmente por don(a) '.$represante_legal.', cédula de identidad '.$rut_representante.', ambos con domicilio en '.$direccion_sin_comuna.' comuna de  '.$comuna.', en adelante el "Empleador" y  '.$empleado.' de nacionalidad '.$nacionalidad_empleado.', nacido el '.$fecha_nacimiento_empleado.', domiciliado en '.$direccion_sin_comuna_empleado.', comuna de '.$comuna_empleado.', RUT '.$rut_empleado.' proveniente de '.$empresa_previa.', en adelante "Trabajador". Se ha convenido el siguiente CONTRATO DE TRABAJO DE APRENDIZAJE.
        PRIMERO : '.$empleado.', en adelante APRENDIZ, se compromete a efectuar los trabajos que, en carácter de aprendizaje, se detallan en Hoja Anexa al presente contrato, debidamente, firmado por las partes;
        SEGUNDO : Este Aprendizaje lo efectuará en una jornada de Lunes a '.$ultimo_dia_semana_jornada.' entre las '.$hora_entrada_jornada.' hrs. y las '.$hora_salida_jornada.' hrs.;
        TERCERO : El Empleador se obliga a pagar por estos trabajos una remuneración de $ '.$sueldo_numero.'; ( en número y letras)'.$sueldo_escrito.'., en virtud de que el Código del Trabajo, autoriza para convenirla libremente;
        CUARTO : Asimismo, el empleador se compromete a impartirle los conocimientos y habilidades del oficio de '.$oficio.', conforme al Programa adjunto y, a su vez, el APRENDIZ, trabajará mediante tal remuneración, cumplirá estrictamente este Programa de Aprendizaje, sujeto a los controles que el Servicio Nacional de Capacitación y Empleo desee efectuar, conforme a la Ley (Art. 83 Código del Trabajo). Este contrato de aprendizaje no puede durar más de 2 años.
        Para estos efectos, el Empleador designa como MAESTRO DEL APRENDIZ, en carácter de GUIA en este proceso al señor (a) '.$maestro_o_guia.'
        QUINTO : Se deja constancia para cumplir con el Código del Trabajo, que el porcentaje de aprendices en esta empresa, en ningún caso, excede del diez por ciento del total de trabajadores de la industria, como asimismo que, como se señala precedentemente, el trabajador es menor de 21 años de edad y que su contrato de trabajo de aprendizaje durará por '.$duracion_contrato_aprendizaje.' meses.
        Para constancia firman.
        
        
        
        
        ............................................
        EMPLEADOR
        RUT ............................................	............................................ 
        APRENDIZ
        RUT ............................................ 
        
        NOTA
        •	En el caso de los discapacitados la edad tope para firmar este tipo contrato es hasta los 24 años.
        •	En anexo de contrato se debe especificar las labores a que se compromete el trabajador como aprendiz y las materias que el empleador se compromete a impartir, debiendo firmarlo ambas partes, quedando con copia el aprendiz.
        ';

return $aprendizaje;
}





//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++



public function base_contrato_practica_profesional($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10){




    if($asignacion_colacion_sin_con=="con"){
        $monto_colacion=number_format(intval($monto_asignacion_colacion),0,",",".");
        
        }else{
            $monto_colacion="0";
        }



        if($asignacion_movilizacion_con_sin=="con"){
            $monto_movilizacion=number_format(intval($monto_asignacion_movilizacion),0,",",".");
            
            }else{
                $monto_movilizacion="0";
            }
            



    $beneficios= "";
    if(count($beneficios_guardados_en_base_datos)==0){
        $beneficios= "";
    }else{

foreach ($beneficios_guardados_en_base_datos as $key => $value) {
    $beneficios=  "  -". $value["beneficio"] . $beneficios;
}

  $beneficios= " El empleador se compromete a otorgar o suministrar al trabajador los siguientes beneficios: " .$beneficios .".";    
    }
    
    $practica_profesional= ' En '.$locacion.', a '.$dia. ' '.$numero_especifico_extraido. ' de  '.$mes.' de '.$año.', a pedido expreso del establecimiento educacional '.$establecimiento_educacional.' representado por el docente coordinador de práctica Don(a) '.$docente_coordinador.', la Empresa '.$nombre_empresa.', R.U.T '.$rut.' representada por Don(a) '.$represante_legal.' R.U.T '.$rut_representante.', con domicilio para estos efectos en '.$direccion_sin_comuna.', comuna de '.$comuna.', autoriza al educando del citado establecimiento Sr.(ta) '.$empleado.' R.U.T '.$rut_empleado.' de nacionalidad '.$nacionalidad_empleado.', nacido el  '.$fecha_nacimiento_empleado.'  y domiciliado en '.$direccion_sin_comuna_empleado.', comuna de '.$comuna_empleado.', para realizar su práctica profesional en la sección '.$departamento_o_seccion.' en las siguientes condiciones:

        PRIMERO : Las partes declaran que el educando, no es, ni será trabajador dependiente de la empresa, la que en este caso actúa como delegado del establecimiento educacional y que su función es una prolongación de la función docente del citado establecimiento.
        SEGUNDO : Con todo, pese a no existir vínculo de subordinación y dependencia, la empresa para el buen fin de la práctica del educando establece que éste debe obligarse a las condiciones que se detallan a continuación:
        '.$condiciones_buena_practica.'
        TERCERO : La práctica del educando, de acuerdo a lo solicitado por el establecimiento educacional será de '.$total_horas_cronologicas_practica.' horas cronológicas las que deberán, por asuntos de ordenamiento interno, desarrollarse dentro del siguiente horario : '.$horas_jornada.' horas semanales de '.$hora_entrada_jornada.' a '.$hora_salida_jornada.'. 
        CUARTO : La prestación aparente de servicios no juega como elemento de plusvalía y la empresa, como colaboradores de la función docente del establecimiento educacional, no se encuentra obligada a pagar remuneraciones alguna para esta práctica.
        Pese a lo anterior, la empresa pagará, a título de compensación, asignaciones de movilización, de colación y de reembolso de gastos, debidamente comprobados, que el educando haya podido efectuar en relación a la práctica y que hubieren sido previamente autorizados por ella. Sin perjuicio de lo anterior, se fija en este acto el pago de las siguientes asignaciones:
        Asignación de Colación: $'.$monto_colacion.' Pesos diarios.
        Asignación de Movilización: $'.$monto_movilizacion.' Pesos diarios.
        Los reembolsos de gastos en que incurra el educando tendrá un tope de $ '.number_format(intval($tope_reembolsos_a_estudiante),0,",",".").' Pesos.
        QUINTO : Por no ser trabajador de la empresa el educando no podrá intervenir en forma alguna en los asuntos sindicales o de negociación colectiva de ésta.
        SEXTO : El hecho de haber realizado su práctica en la empresa no obliga en forma alguna a ésta a contratarlo con posterioridad a ella.
        SEPTIMO : La empresa se obliga a los controles que el establecimiento educacional practique mediante sus docentes.
        OCTAVO : La práctica terminará al haberse completado satisfactoriamente las horas establecidas en la cláusula tercera de este convenio y haberse extendido el informe de práctica requerido.
        Sin embargo, la práctica podrá terminarse anticipadamente por lo siguiente:
        a) Abandono notorio de ella, cuando, de acuerdo con el establecimiento educacional se compruebe la inasistencia injustificada por '.$dias_inasistencias_permitidos.' días consecutivos;
        b) Faltas a la buena relación que debe existir entre el educando y las personas que imparten la práctica en los niveles que sean;
        c) Por infringir la norma de la cláusula quinta de este convenio.
        En todos estos casos se dará aviso escrito y circunstancias a la autoridad educacional del caso.
        NOVENO: se deja constancia que el educando, Sr.(ta)'.$empleado.', motivo del presente convenio, inicia su práctica profesional el día '.$numero_especifico_extraido. ' de '.$mes.' de '.$año.'.
        DECIMO: El presente convenio se firma en 3 ejemplares, declarando las partes haber recibido, a lo menos, un ejemplar  de este convenio
        
        
        
        
        
        ...........................................
        EMPRESA
        RUT ............................................ 	............................................
        EDUCANDO
        RUT ............................................
        (1) Este convenio no se rige por la legislación laboral, ya que la práctica profesional obedece a normas emanadas por el Ministerio de Educación Pública.
        (2) Como norma general, de acuerdo con el D.S. Nº 30, de Educación, publicado el 11-03-1987, la duración de la práctica no podrá ser inferior a 480 horas cronológicas ni superior a 720 de estas horas.
        ';

return $practica_profesional;
}





//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++



public function base_contrato_a_trato($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10){
    
    

/*
abajo está proceso de incentivos
*/

$array_incentivos=explode(",", $incentivos);
if($array_incentivos[0]=="con"){

    $incentivos_en_contrato="";

    for ($i=0; $i < count($array_incentivos); $i++) { 
        if($array_incentivos[$i]!=="con"){
            
if(is_numeric($array_incentivos[$i])){
    $incentivos_en_contrato.=number_format(intval($array_incentivos[$i]),0,",",".") .  " Pesos. ";
}else{
    $incentivos_en_contrato.=$array_incentivos[$i];
    $incentivos_en_contrato.=" ";
}
        
        }
    }
}else{
    $incentivos_en_contrato= "Sin incentivos.";
}

/*
arriba está proceso de incentivos
*/










/*
abajo está proceso de bonos
*/

$array_bonos=explode(",", $bonos);




if($array_bonos[0]=="con"){

    $bonos_en_contrato="";

    for ($i=0; $i < count($array_bonos); $i++) { 
        if($array_bonos[$i]!=="con"){
            
if(is_numeric($array_bonos[$i])){
    $bonos_en_contrato.=number_format(intval($array_bonos[$i]),0,",",".") .  " Pesos. ";
}else{
    $bonos_en_contrato.=$array_bonos[$i];
    $bonos_en_contrato.=" ";
}
        
        }
    }
}else{
    $bonos_en_contrato= "Sin bonos.";
}

/* 
arriba está proceso de bonos
*/







/*
abajo está proceso de gratificaciones
*/

$array_gratificaciones=explode(",", $gratificaciones);
if($array_gratificaciones[0]=="con"){

    $gratificacion_en_contrato="";

    for ($i=0; $i < count($array_gratificaciones); $i++) { 
        if($array_gratificaciones[$i]!=="con"){
            
if(is_numeric($array_gratificaciones[$i])){
    $gratificacion_en_contrato.= number_format(intval($array_gratificaciones[$i]),0,",",".") .  " Pesos. ";
}else{
    $gratificacion_en_contrato.=$array_gratificaciones[$i];
    $gratificacion_en_contrato.=" ";
}
        
        }
    }
}else{
    $gratificacion_en_contrato= "Sin gratificaciones.";
}

/*
arriba está proceso de gratificaciones
*/











/*
asignaciones

*/

if($asignacion_movilizacion_con_sin=="con"){
$monto_movilizacion=number_format(intval($monto_asignacion_movilizacion),0,",",".");

}else{
    $monto_movilizacion="0";
}

if($asignacion_desgaste_herramientas_sin_con=="con"){
    $monto_herramientas=number_format(intval($monto_asignacion_desgastes_herramientas),0,",",".");
    
}else{
    $monto_herramientas="0";  
    }


    if($asignacion_matrimonio_sin_con=="con"){
        $monto_matrimonio=number_format(intval($monto_asignacion_matrimonio),0,",",".");
        
    }else{
        $monto_matrimonio="0";  
        }

        if($asignacion_colacion_sin_con=="con"){
            $monto_colacion=number_format(intval($monto_asignacion_colacion),0,",",".");
            
            }else{
                $monto_colacion="0";
            }
/*
asignaciones

*/


    
    
    $beneficios= "";
    if(count($beneficios_guardados_en_base_datos)==0){
        $beneficios= "";
    }else{

foreach ($beneficios_guardados_en_base_datos as $key => $value) {
    $beneficios=  "  -". $value["beneficio"] . $beneficios;
}

  $beneficios= " El empleador se compromete a otorgar o suministrar al trabajador los siguientes beneficios: " .$beneficios .".";    
    }
    
    $a_trato= 'En '.$locacion.', a '.$dia. ' '.$numero_especifico_extraido. ' de '.$mes.' de '.$año.' entre (nombre o razón social) '.$nombre_empresa.', R.U.T '.$rut.', representado(a) legalmente por don(a) '.$represante_legal.', cédula de identidad '.$rut_representante.', ambos con domicilio en '.$direccion_sin_comuna.' comuna de  '.$comuna.', en adelante el "Empleador" y  '.$empleado.' de nacionalidad '.$nacionalidad_empleado.', nacido el '.$fecha_nacimiento_empleado.', domiciliado en '.$direccion_sin_comuna_empleado.', comuna de '.$comuna_empleado.', RUT '.$rut_empleado.' proveniente de '.$empresa_previa.', en adelante "Trabajador". Se ha convenido el siguiente Contrato de Trabajo a Trato:

El trabajador deberá confeccionar las siguientes unidades o las siguientes tareas:
- '.$tareas_a_desarrollar.'

El trabajador tiene como obligación rendir semanalmente la cantidad de '.$cantidad_semanal_minima_horas.' unidades, como mínimo. El trabajador prestará sus servicios en '.$comuna_departamento_o_seccion.' de la ciudad de '.$locacion.'. La duración y distribución de la jornada de trabajo será: '.$primer_dia_semana_jornada.' a '.$ultimo_dia_semana_jornada.', de '.$hora_entrada_jornada.' horas hasta las '.$hora_salida_jornada.' horas. Por cada pieza fabricada (o trabajo específico ejecutado) recibirá la cantidad de $ '.$monto_por_unidad.' pagada en el período que se indica: '.$tiempo_de_pago.'. El empleador se compromete a suministrar al trabajador los siguientes beneficios:

Incentivos: '.$incentivos_en_contrato.'
Bonos: '.$bonos_en_contrato.'
Gratificaciones: '.$gratificacion_en_contrato.'
Asignación Colación: $'.$monto_colacion.'
Asignación movilización: $'.$monto_movilizacion.'
Asignación por desgaste de herramientas: $'.$monto_herramientas.'

El trabajador se compromete y obliga expresamente a cumplir las instrucciones que le sean impartidas por su jefe inmediato o por la gerencia de la empresa, en relación a su trabajo, y acatar en todas sus partes las normas del Reglamento Interno de Orden, Higiene y Seguridad (cuando exista en la empresa), las que declara conocer y que forman parte integrante del presente contrato, reglamento del cual se le entrega un ejemplar.
El presente contrato de trabajo tendrá una duración de '.$duracion_contrato.'.
Las partes acuerdan los siguientes Pactos:
1.- El trabajador, aparte del trabajo específico que se le encomienda, se compromete a reemplazar a otro trabajador, cuando por razones de enfermedad u otras, no concurra a sus labores y se trate de un trabajo compatible con el suyo, no percibiendo menos remuneración, es decir, manteniendo su "trato".
Se deja expresa constancia que el trabajador ingresó a prestar servicios el día '.$numero_especifico_extraido. ' de '.$mes.' de '.$año.'.
Para constancia y señal de conformidad firman las partes, quedando el original en poder del EMPLEADOR y la copia para el TRABAJADOR.


............................................
EMPLEADOR
RUT ............................................	............................................ 
        TRABAJADOR
        RUT ............................................ 
        
        
        NOTA
        •	Los pactos tienen que estudiarlos y convenirlos en el mismo Contrato (Art. 10 N°7 del Código del Trabajo).
        •	En el contrato se puede dejar constancia de las prohibiciones a que está afecto el trabajador, como ser: NEGOCIACIONES QUE EJECUTE EL TRABAJADOR DENTRO DEL GIRO DEL NEGOCIO.
        •	Esta prohibición relacionada con el trabajo, por ejemplo: dar antecedentes de la técnica que se emplea en la empresa a la competencia, de los materiales que se usan, etc. El infringir una prohibición da lugar al término del contrato de trabajo.
        ';

return $a_trato;
}




//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++



public function base_contrato_prevencion_riesgos($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10){
    

if($primer_dia_semana_jornada == "lunes"){
    $dia1=1;
}elseif($primer_dia_semana_jornada == "martes"){
    $dia1=2;
}elseif($primer_dia_semana_jornada == "miercoles"){
    $dia1=3;
}elseif($primer_dia_semana_jornada == "jueves"){
    $dia1=4;
}elseif($primer_dia_semana_jornada == "viernes"){
    $dia1=5;
}elseif($primer_dia_semana_jornada == "sabado"){
    $dia1=6;
}elseif($primer_dia_semana_jornada == "domingo"){
    $dia1=7;
}else{
    $dia1=1000;
}


if($ultimo_dia_semana_jornada == "lunes"){
    $dia2=1;
}elseif($ultimo_dia_semana_jornada == "martes"){
    $dia2=2;
}elseif($ultimo_dia_semana_jornada == "miercoles"){
    $dia2=3;
}elseif($ultimo_dia_semana_jornada == "jueves"){
    $dia2=4;
}elseif($ultimo_dia_semana_jornada == "viernes"){
    $dia2=5;
}elseif($ultimo_dia_semana_jornada == "sabado"){
    $dia2=6;
}elseif($ultimo_dia_semana_jornada == "domingo"){
    $dia2=7;
}else{
    $dia2=1000;
}

$dias_a_la_semana_trabajados= $dia2-$dia1+1;

    $prevencion_riesgos= 'En '.$locacion.', a '.$dia. ' '.$numero_especifico_extraido. ' de '.$mes.' de '.$año.' entre (nombre o razón social) '.$nombre_empresa.', R.U.T '.$rut.', representado(a) legalmente por don(a) '.$represante_legal.', cédula de identidad '.$rut_representante.', ambos con domicilio en '.$direccion_sin_comuna.' comuna de  '.$comuna.', en adelante el "Empleador" y  '.$empleado.' de nacionalidad '.$nacionalidad_empleado.', nacido el '.$fecha_nacimiento_empleado.', domiciliado en '.$direccion_sin_comuna_empleado.', comuna de '.$comuna_empleado.', RUT '.$rut_empleado.' proveniente de '.$empresa_previa.', en adelante "Trabajador". Se ha convenido el siguiente Contrato Individual de Trabajo el cual se regirá por el Código del Trabajo, la Ley 16.744 y sus leyes y reglamentos complementarios:
        
        PRIMERO : El profesional se desempeñará como Jefe del Departamento de Prevención de Riesgos, de acuerdo con las obligaciones y facultades indicadas en la Ley 16.744 para este cargo, en el establecimiento de la empresa ubicado en '.$ubicacion_departamento_o_seccion.' comuna de '.$comuna_departamento_o_seccion.' sin perjuicio, que por la naturaleza de sus servicios deba visitar todos los Establecimientos y Faenas en los cuales se desempeñen trabajadores de la Empresa.
        
        Se deja Constancia que el Profesional cumple con los requisitos indicados en DS. Nº 40, de 1969, del Ministerio del Trabajo y Previsión Social, encontrándose registrado en el Servicio de Salud de '.$servicio_salud_que_aprueba.', con el Nº '.$numero_inscripcion.', como Experto '.$tecnico_o_profesional.' en Prevención de Riesgos.
        
        SEGUNDO : En cumplimiento del presente contrato y sin que la enumeración pueda entenderse taxativa pues se detalla sólo a modo de ejemplo, el profesional se obliga a otorgar a la Empresa los siguientes servicios:
        
        -	Elaboración, seguimiento y evaluación de un Programa de Trabajo en Prevención de Riesgos, conforme a las necesidades de la Empresa, el cual deberá ser aprobado por ésta.
        -	Informes mensuales de reconocimiento y evaluación de accidentes y enfermedades profesionales en las diferentes dependencias de la empresa, de acuerdo al Programa de Trabajo, los cuales deberán ser reportados a la Dirección de la Empresa.
        -	Asesoría en Prevención de Riesgos a la Dirección  de la Empresa, como a su línea de mando, proponiendo soluciones para el control de riesgos en el ambiente o en medios de trabajo.
        -	Proponer, a lo menos una vez al año, un Proyecto de actualización de Reglamento Interno de Orden, Higiene y Seguridad, de acuerdo con los riesgos propios de la empresa.
        -	Efectuar acción educativa en Prevención de Riesgos y promoción de la capacitación y adiestramiento de los trabajadores.
        -	Registro mensual de evaluación estadísticas y de resultados de accidentes del trabajo y enfermedades profesionales. Análisis de la siniestralidad y de proyección de Tasa de Cotización Adicional, a lo menos cada seis meses, con reporte a la Dirección de la Empresa.
        -	Participar en las reuniones que realicen los Comités Paritarios y asesorarlos en materias técnicas de Higiene y Seguridad.
        -	Asistencia, representación y solución de requerimientos planteados por el Organismo Administrador de la Ley 16.744 y de los Organismos Fiscalizadores con competencia en la materia.
        
        TERCERO : La Jornada Semanal de Trabajo será '.$dias_a_la_semana_trabajados.' días de acuerdo con el Artículo 11 del DS. Nº 40, de 1969, del Ministerio del Trabajo y Previsión Social, en relación con el número de trabajadores de la Empresa y de la Cotización Adicional Genérica contemplada en el DS. Nº110, de 1968, del mismo Ministerio, la que se resume en '.$horas_jornada.' horas semanales, y se distribuyen de la forma siguiente:
        
        Lunes	de '.$hora_entrada_jornada.' a '.$hora_salida_jornada.' horas
        Martes	de '.$hora_entrada_jornada.' a '.$hora_salida_jornada.' horas
        Miércoles de '.$hora_entrada_jornada.' a '.$hora_salida_jornada.' horas
        Jueves	de '.$hora_entrada_jornada.' a '.$hora_salida_jornada.' horas
        Viernes	de '.$hora_entrada_jornada.' a '.$hora_salida_jornada.' horas
        Sábado	de '.$hora_entrada_jornada.' a '.$hora_salida_jornada.' horas
        
        CUARTO : La remuneración será de: $ '.$sueldo_numero.' pagados en dinero efectivo (o cheque, a petición del Profesional, por escrito) el último día hábil del mes.
        
        Asimismo, se acuerda pagar una gratificación anual equivalente al 25% (veinticinco por ciento) del total de las remuneraciones mensuales que éste hubiere percibido en el año, con tope de 4,75 Ingresos Mínimos Mensuales.
        
        QUINTO : Además, acorde a lo establecido en el artículo 10°, N°7, del Código del Trabajo, entre el Empleador y el Profesional, se acuerdan los siguientes pactos:
        
        -	Bono de Locomoción Mensual para compensar el traslado del Profesional por las diferentes faenas de la Empresa de $ '.$bono_locomocion_mensual.'.
        -	Viático diario de $ '.$viatico_diario.', en caso que por la naturaleza del cargo deba desplazarse fuera de la Ciudad en la cual queda ubicado el establecimiento indicado en el Artículo Primero del presente Contrato.
        
        SEXTO : El presente Contrato de trabajo tendrá una duración de plazo '.$duracion_contrato.'.
        
        SÉPTIMO : Se deja expresa constancia que '.$empleado.' ingresó a prestar sus servicios el día '.$numero_especifico_extraido. ' de '.$mes.' de '.$año.'.
        
        OCTAVO : Para constancia, previa lectura, y en señal de conformidad firman las partes, quedando cada parte con un ejemplar del presente contrato de trabajo.
        
            
        
        
        
        
        
            ……………………………	………………………………….
            EMPLEADOR	EXPERTO EN PREVENCIÓN
                        RUT……………….                                               RUT………………….
         ';

return $prevencion_riesgos;
}



//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++



public function base_contrato_agricola($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10){
    $beneficios= "";
    if(count($beneficios_guardados_en_base_datos)==0){
        $beneficios= "";
    }else{

foreach ($beneficios_guardados_en_base_datos as $key => $value) {
    $beneficios=  "  -". $value["beneficio"] . $beneficios;
}

  $beneficios= " El empleador se compromete a otorgar o suministrar al trabajador los siguientes beneficios: " .$beneficios .".";    
    }




    $total_regalias_avaluo_diario=0;
    $regalias;












/*
abajo está proceso de gratificaciones
*/

$array_regalias=explode(",", $regalias);

if($array_regalias[0]=="con"){

    $regalias_en_contrato="";

    for ($i=0; $i < count($array_regalias); $i++) { 
        if($array_regalias[$i]!=="con"){
            
if(is_numeric($array_regalias[$i])){
    $regalias_en_contrato.= number_format(intval($array_regalias[$i]),0,",",".") .  " Pesos. \n";
    $total_regalias_avaluo_diario =$total_regalias_avaluo_diario+$array_regalias[$i];
}else{
    $regalias_en_contrato.=$array_regalias[$i];
    $regalias_en_contrato.=" ";
}
        
        }
    }
}else{
    $regalias_en_contrato= "Sin regalías.";
}

/*
arriba está proceso de gratificaciones
*/







if($tipo_pago_agricola=="con"){
    $previo="El empleador remunerará al trabajador por sus servicios con la suma de $" .$monto_fijo ." diarios, en dinero efectivo,
    cantidad en la cual no estarán incluidas las regalías pactadas.";
    
}else{
$previo="El empleador remunerará al trabajador por sus servicios mediante pago a trato en dinero efectivo, cantidad en la cual no estarán incluidas las regalías pactadas.";
$primero_trato_agricola= explode(',',$pago_detalle_y_monto_a_trato);
$texto_trato="El empleador cancelará al trabajador los siguientes valores por las faenas que se indican: \n";

for ($i=0; $i < count($primero_trato_agricola); $i++) { 
    if(is_numeric($primero_trato_agricola[$i])){
        $texto_trato.= "$".number_format(intval($primero_trato_agricola[$i]),0,",",".");
       }else{
        $texto_trato.= $primero_trato_agricola[$i] ." ";
       }
 
   if(is_numeric($primero_trato_agricola[$i])){
    
    $texto_trato.= "\n";
   }
}
$previo.= " ".$texto_trato;
}





$sintesis_pagos;
if($tipo_pago_agricola=="con"){
    //pago fijo, puede sumarse el total
$sintesis_pagos="\nDinero efectivo $".number_format(intval($monto_fijo),0,",",".")."\nRegalía $".number_format(intval($total_regalias_avaluo_diario),0,",",".")." 
TOTAL $".number_format(intval(($total_regalias_avaluo_diario+$monto_fijo)),0,",",".");

}else{
    ///pago a trato, no puede sumarse el total

    $sintesis_pagos="\nDinero efectivo con pago a trato.\nRegalías $".number_format(intval($total_regalias_avaluo_diario),0,",",".");


}



$entrega_racion_tierra;
$entrega_tierras_en_contrato;
$entrega_tierras= explode(",", $entrega_racion_tierra);

if($entrega_tierras[0]=="con"){
    $entrega_tierras_en_contrato="La ración de tierra en potrero será entregada al trabajador en el mes de ".$entrega_tierras[1]." y será devuelta por éste al empleador a más tardar en el mes de ".$entrega_tierras[2]."\n";
}else{
    $entrega_tierras_en_contrato="";
}

    
    $agricola_permanente= 'En '.$locacion.', a '.$dia. ' '.$numero_especifico_extraido. ' de '.$mes.' de '.$año.' entre (nombre o razón social) '.$nombre_empresa.', R.U.T '.$rut.', representado(a) legalmente por don(a) '.$represante_legal.', en su calidad de administrador o mayordomo del Fundo (Predio agrícola), denominado "'.$nombre_predio_agricola.'", cédula de identidad '.$rut_representante.', ambos con domicilio en '.$direccion_sin_comuna.' comuna de  '.$comuna.', en adelante el "Empleador" y  '.$empleado.' de nacionalidad '.$nacionalidad_empleado.', nacido el '.$fecha_nacimiento_empleado.', domiciliado en '.$direccion_sin_comuna_empleado.', comuna de '.$comuna_empleado.', RUT '.$rut_empleado.' proveniente de '.$empresa_previa.', en adelante "Trabajador". Se ha convenido el siguiente Contrato Individual de Trabajo:

El trabajador se compromete y obliga a prestar sus servicios como trabajador agrícola en el Fundo "'.$nombre_predio_agricola.'", ubicado en "'.$ubicacion_predio.'" o en cualquier otra faena o trabajo relacionado con faenas agrícolas que le encomiende el empleador o sus representantes.

El empleador podrá modificar por causa justificada el sitio en que los servicios han de prestarse, con la sola limitación de que el nuevo sitio o lugar quede dentro de la misma localidad o área agrícola.

La jornada de trabajo será la que se indica se distribuirá de Lunes a '.$ultimo_dia_semana_jornada.', la que será interrumpida por un descanso de '.$descanso_o_almuerzo_en_minutos.' minutos, tiempo destinado a la colación de cargo del trabajador. Se distribuye así:

Mañana: De '.$hora_entrada_jornada.' hasta las '.$hora_inicio_descanso.' horas. 
Tarde : De '.$hora_fin_descanso.' hasta las '.$hora_salida_jornada.' horas.


Este horario podrá variar de acuerdo a las necesidades de cada rubro o cultivo y por las condiciones climáticas y demás circunstancias propias de la agricultura que así lo aconsejen. Por lo mismo, si el trabajador no pudiese realizar la labor encomendada por lluvia inclemente u otros factores climáticos adversos, deberá ejecutar otras tareas compatibles con las condiciones climáticas imperantes, las que serán determinadas libremente por el empleador, aún cuando no estén indicadas en el respectivo contrato de trabajo.

Cuando por necesidades de funcionamiento de la organización, sea necesario pactar trabajo en tiempo extraordinario, el trabajador que lo acuerde desde luego se obligará a cumplir el horario que al efecto determine la Empleadora, dentro de los límites legales. Dicho acuerdo constará por escrito y se firmará por ambas partes, previamente a la realización del trabajo.
Queda prohibido expresamente al trabajador trabajar sobretiempo o simplemente permanecer en el lugar de trabajo después de la hora diaria de salida, salvo en los casos a que se refiere el inciso precedente.
El tiempo extraordinario trabajado de acuerdo a las estipulaciones precedentes, se remunerará con el recargo legal correspondiente y se liquidará y pagará conjuntamente con el sueldo del respectivo período.

'.$previo.'

En caso que el trabajo a trato se realice para otro tipo de faenas que no correspondan a las nombradas, las partes convendrán su valor, cada vez que sea necesario, lo cual quedará registrado en anexo al presente contrato.
En el caso que el trabajador debido a condiciones climáticas adversas no pudiere realizar sus labores habituales, tendrá derecho a percibir el total de su remuneración en dinero y en regalías, siempre que se presente al trabajo y no haya faltado al trabajo en forma injustificada el día anterior.
El trabajador tendrá derecho a las siguientes regalías, que las parte han avaluado de común acuerdo, en los montos diarios que a continuación se señalan, avalúos que regirán para todo efecto legal contractual:
'.$regalias_en_contrato.' 
TOTAL '.number_format(intval($total_regalias_avaluo_diario),0,",",".").'

De acuerdo a lo establecido en las cláusulas anteriores el sueldo total por día efectivamente trabajado será la siguiente:
'.$sintesis_pagos.'

El pago de la remuneración diaria en dinero efectivo se liquidará por períodos mensuales vencidos.
Las deducciones que la Empleadora deberá practicar a las remuneraciones, son todas aquéllas que dispone el artículo 58 del Código del Trabajo.

El Trabajador, asimismo, acepta y autoriza al Empleador para que le haga las deducciones que establecen las leyes vigentes y, para que le descuente el tiempo no trabajado debido a atrasos, inasistencias o permisos (y, además rebaja del monto de las multas establecidas en el Reglamento Interno de Orden, Higiene y Seguridad, en caso que procedieren).

'.$entrega_tierras_en_contrato.'
Durante la vigencia del presente contrato el trabajador vivirá en una casa habitación que le proporcionará el empleador para que habite él y su familia. EL trabajador se compromete y obliga a mantener la casa-habitación permanentemente aseada y en buen estado. Al trabajador le estará prohibido alojar en la casa-habitación a su cargo en forma permanente a otras personas ajenas a su respectivo grupo familiar, asimismo, le estará prohibido efectuar modificaciones sin autorización escrita previa del empleador y si procediere sin ella no tendrá derecho a reclamar devolución de los gastos en que hubiere incurrido.
El trabajador se compromete a devolver la casa-habitación al término del presente contrato de trabajo.
La duración del presente contrato será '.$duracion_contrato.', pudiendo ponérsele término en la forma y condiciones por las causales que señala la ley.
Se deja constancia que el trabajador ingresó al servicio del empleador el día '.$numero_especifico_extraido. ' de '.$mes.' de '.$año.'.
Para todos los efectos legales derivados del presente contrato las partes fijan domicilio en la ciudad de '.$locacion.' y se someten a la jurisdicción de sus Tribunales.

El presente contrato se firma en 3 ejemplares, declarando el trabajador haber recibido en este acto un ejemplar a su entera satisfacción.
        
        
        
        
        ............................................
        FIRMA DEL TRABAJADOR
        RUT ............................................	............................................ 
        FIRMA Y TIMBRE DEL EMPLEADOR
        RUT ............................................ 
         ';

return $agricola_permanente;
}





//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++



public function base_contrato_chofer_carga($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10){
    $beneficios_guardados_en_base_datos= $beneficios_guardados_en_base_datos;

    $beneficios= "";
    if(count($beneficios_guardados_en_base_datos)==0){
        $beneficios= "";
    }else{

foreach ($beneficios_guardados_en_base_datos as $key => $value) {
    $beneficios.=  "\n  -". $value["beneficio"] ." equivalente a $" . $this->numero_formato($value["monto_a_entregar"]) . "";
}

  $beneficios= "El empleador se compromete a otorgar o suministrar al trabajador los siguientes beneficios: " .$beneficios .".";    
    }
    
    $chofer_carga= 'En '.$locacion.', a '.$dia. ' '.$numero_especifico_extraido. ' de '.$mes.' de '.$año.' entre (nombre o razón social) '.$nombre_empresa.', R.U.T '.$rut.', representado(a) legalmente por don(a) '.$represante_legal.', cédula de identidad '.$rut_representante.', ambos con domicilio en '.$direccion_sin_comuna.' comuna de  '.$comuna.', en adelante el "Empleador" y  '.$empleado.' de nacionalidad '.$nacionalidad_empleado.', nacido el '.$fecha_nacimiento_empleado.', domiciliado en '.$direccion_sin_comuna_empleado.', comuna de '.$comuna_empleado.', RUT '.$rut_empleado.' proveniente de '.$empresa_previa.', en adelante "Trabajador". Se ha convenido el siguiente Contrato Individual de Trabajo:

        El Trabajador se compromete y obliga a desempeñar las labores de chofer conductor de los camiones o vehículos de transportes que el empleador le asigne y que estén destinados al servicio de acarreo de productos mineros, materiales de construcción, lubricantes, combustibles y en general cualquier otro tipo de bienes susceptibles de ser trasladados en camiones.

        Atendida la naturaleza de los servicios, se entenderá por lugar de trabajo toda la zona geográfica comprendida entre '.$transporte_entre.', conforme a esta área de la economía nacional y a la actividad principal de la empresa.
        El trabajo específico del chofer consistirá por tanto en el transporte de la carga interurbana antes indicada y básicamente en '.$tareas_a_desarrollar.'.
        La jornada de trabajo ordinaria será de 192 horas mensuales. Los tiempos de espera serán imputables a la jornada, no así los tiempos de descanso a bordo, quedando su retribución o compensación al acuerdo de las partes.
        En todo caso, el chofer tendrá derecho a un descanso ininterrumpido de ocho horas dentro de cada veinticuatro horas. En ningún caso, el chofer podrá manejar más de cinco horas continuas, después de las cuales deberá tener un descanso mínimo de dos horas.
        El empleador se compromete a remunerar al trabajador con un sueldo base equivalente a $'.$this->numero_formato($sueldo_numero).' es decir '.$sueldo_escrito.', incrementado con un incentivo de producción por viaje y carga movilizada, el que se pagará en las condiciones y modalidades establecidas en el Reglamento Interno de la Empresa o en anexo al presente contrato.
        Las remuneraciones convenidas se pagará por períodos mensuales, vencidos, en dinero efectivo, moneda nacional de curso legal y del monto de ellas el empleador podrá efectuar los descuentos o deducciones legales. El trabajador firmará su liquidación de sueldos y otorgará el recibo correspondiente.
        El empleador se compromete a suministrar al trabajador un viático diario equivalente a $'.$this->numero_formato($viatico_diario).' el que se pagará en su totalidad cuando el viaje se efectúe en carreteras y por un período superior a 24 horas.
        En los viajes fuera de la localidad y cuyo regreso se efectúe en un período de tiempo inferior a 24 horas sólo se percibirá el 50% de la cantidad indicada.
        En los casos en que por instrucciones del empleador el chofer deba permanecer en bodega en espera de carga o en garage, sólo percibirá un 25% del viático antes indicado.

        '.$beneficios.' 

        El trabajador se compromete y obliga expresamente a cumplir las instrucciones que le sean impartidas por el empleador a través de los jefes inmediatos y a respetar las normas contenidas en el Reglamento Interno de Orden, Higiene y Seguridad (cuando exista en la empresa), que declara conocer y que para estos efectos se consideran parte integrante del presente contrato, recibiendo un ejemplar en este acto.
        

        Serán prohibiciones específicas del Trabajador las siguientes:
        •	Transportar durante sus recorridos a personas extrañas a su ayudante si lo tuviese y ajenos al trabajo encomendado;
        •	Destinar el vehículo a otro objeto, que no sean las correspondientes al trabajo asignado.
        Por la naturaleza de los servicios, el Trabajador laborará en la forma antes indicada, pero, tendrá un descanso de '.$horas_diarias_descanso_chofer. ' horas diarias y '.$dias_descanso_chofer. ' dias en la semana, los que se podrán diferir previo acuerdo.
        El trabajador se responsabiliza de los daños materiales que le ocasione al vehículo a su cargo, por accidentes y por daños a terceros; además se hace responsable de las notificaciones por infracciones que se le hagan y aquellas que se deriven del empadronamiento del vehículo.
        Se deja constancia que el trabajador ingresó al servicio del empleador el día '.$numero_especifico_extraido. ' de '.$mes.' de '.$año.'.
        
        
        
        
        ............................................
        TRABAJADOR
        RUT ............................................	............................................ 
        EMPLEADOR
        RUT ............................................ 
        ';

return $chofer_carga;
}






//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++



public function base_contrato_profesor($locacion, $dia, $mes, $año,$nombre_empresa, $rut, $represante_legal, $rut_representante, $direccion_sin_comuna,$comuna, $empleado,$nacionalidad_empleado, $fecha_nacimiento_empleado, $direccion_sin_comuna_empleado, $comuna_empleado, $rut_empleado, $empresa_previa,  $cargo,$departamento_o_seccion, $ubicacion_departamento_o_seccion, $comuna_departamento_o_seccion, $horas_jornada, $ultimo_dia_semana_jornada, $hora_entrada_jornada, $hora_salida_jornada, $descanso_o_almuerzo_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $cargo_monetario_colacion, $sueldo_numero, $sueldo_escrito, $beneficios_guardados_en_base_datos,$numero_especifico_extraido, $nombre_produccion,$locacion_produccion, $inicio_rodaje, $fin_rodaje, $capitulos_totales_contemplados, $forma_de_pago_sueldo, $horas_jornada, $nombre_establecimiento, $tiempo_de_pago, $primer_dia_semana_jornada, $diferencia_horas, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago, $cantidad_a_pagar, $gratificaciones, $incentivos, $bonos,$asignacion_movilizacion_con_sin,$monto_asignacion_movilizacion, $asignacion_desgaste_herramientas_sin_con, $monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo, $duracion_contrato, $monto_pago_colacion_diario, $oficio, $maestro_o_guia, $duracion_contrato_aprendizaje,$establecimiento_educacional, $docente_coordinador,$condiciones_buena_practica, $total_horas_cronologicas_practica,$tope_reembolsos_a_estudiante, $dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio, $tipo_pago_agricola, $monto_fijo, $pago_detalle_y_monto_a_trato,  $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $monto_asignacion_colacion, $asignacion_colacion_sin_con, $cantidad_semanal_minima_horas, $monto_por_unidad,$tareas_a_desarrollar,$codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $bono_locomocion_mensual, $viatico_diario, $duracion_contrato,$transporte_entre, $tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $pactos, $funciones_docentes,$anexo1, $anexo2, $anexo3, $anexo4, $anexo5, $anexo6, $anexo7, $anexo8,$anexo9, $anexo10){
    
    
    
    

/*
abajo está proceso de incentivos
*/

$array_incentivos=explode(",", $incentivos);
if($array_incentivos[0]=="con"){

    $incentivos_en_contrato="";

    for ($i=0; $i < count($array_incentivos); $i++) { 
        if($array_incentivos[$i]!=="con"){
            
if(is_numeric($array_incentivos[$i])){
    $incentivos_en_contrato.=number_format(intval($array_incentivos[$i]),0,",",".") .  " Pesos. ";
}else{
    $incentivos_en_contrato.=$array_incentivos[$i];
    $incentivos_en_contrato.=" ";
}
        
        }
    }
}else{
    $incentivos_en_contrato= "Sin incentivos.";
}

/*
arriba está proceso de incentivos
*/










/*
abajo está proceso de bonos
*/

$array_bonos=explode(",", $bonos);




if($array_bonos[0]=="con"){

    $bonos_en_contrato="";

    for ($i=0; $i < count($array_bonos); $i++) { 
        if($array_bonos[$i]!=="con"){
            
if(is_numeric($array_bonos[$i])){
    $bonos_en_contrato.=number_format(intval($array_bonos[$i]),0,",",".") .  " Pesos. ";
}else{
    $bonos_en_contrato.=$array_bonos[$i];
    $bonos_en_contrato.=" ";
}
        
        }
    }
}else{
    $bonos_en_contrato= "Sin bonos.";
}

/* 
arriba está proceso de bonos
*/







/*
abajo está proceso de gratificaciones
*/

$array_gratificaciones=explode(",", $gratificaciones);
if($array_gratificaciones[0]=="con"){

    $gratificacion_en_contrato="";

    for ($i=0; $i < count($array_gratificaciones); $i++) { 
        if($array_gratificaciones[$i]!=="con"){
            
if(is_numeric($array_gratificaciones[$i])){
    $gratificacion_en_contrato.= number_format(intval($array_gratificaciones[$i]),0,",",".") .  " Pesos. ";
}else{
    $gratificacion_en_contrato.=$array_gratificaciones[$i];
    $gratificacion_en_contrato.=" ";
}
        
        }
    }
}else{
    $gratificacion_en_contrato= "Sin gratificaciones.";
}

/*
arriba está proceso de gratificaciones
*/



    
    $beneficios_guardados_en_base_datos= $beneficios_guardados_en_base_datos;

    $beneficios= "";
    if(count($beneficios_guardados_en_base_datos)==0){
        $beneficios= "";
    }else{

foreach ($beneficios_guardados_en_base_datos as $key => $value) {
    $beneficios.=  "\n  -". $value["beneficio"] ." equivalente a $" . $this->numero_formato($value["monto_a_entregar"]) . "";
}

  $beneficios= "El empleador se compromete a otorgar o suministrar al trabajador los siguientes beneficios: " .$beneficios .".";    
    }
    
    $chofer_carga= 'En '.$locacion.', a '.$dia. ' '.$numero_especifico_extraido. ' de '.$mes.' de '.$año.' entre (nombre o razón social) '.$nombre_empresa.', R.U.T '.$rut.', representado(a) legalmente por don(a) '.$represante_legal.', cédula de identidad '.$rut_representante.', ambos con domicilio en '.$direccion_sin_comuna.' comuna de  '.$comuna.', en adelante el "Empleador" y el profesional de la educación  '.$empleado.' de nacionalidad '.$nacionalidad_empleado.', nacido el '.$fecha_nacimiento_empleado.', domiciliado en '.$direccion_sin_comuna_empleado.', comuna de '.$comuna_empleado.', RUT '.$rut_empleado.' proveniente de '.$empresa_previa.', en adelante "Trabajador". Se ha convenido el siguiente Contrato Individual de Trabajo:

        PRIMERO : El profesional de la Educación, se desempeñará en el Establecimiento antes indicado y la descripción de sus funciones docentes que se le encomiendan son las que se indican: '.$funciones_docentes. '

        SEGUNDO : La Jornada Semanal de Trabajo será la siguiente de lunes a '.$ultimo_dia_semana_jornada. '. El horario será el siguiente: '.$hora_entrada_jornada. ' a '.$hora_salida_jornada. '
      
        TERCERO : El lugar en que se presentarán los servicios será '.$ubicacion_departamento_o_seccion. ' comuna de '.$comuna_departamento_o_seccion. '

        
        (Si el profesional de la Educación se desempeña para un mismo Empleador, en otro Establecimiento de igual sostenedor, deberá establecerse el gasto de movilización, existiendo relación laboral única con él).
        CUARTO : La remuneración será de : $ '.$comuna_departamento_o_seccion. ' pagados en dinero efectivo (o cheque, a petición del Docente, por escrito) el último día hábil del mes 
        QUINTO : Además, acorde a lo establecido en el artículo 10°, N°7, del Código del Trabajo, entre el Empleador y el Profesional de la Educación, se acuerdan los siguientes PACTOS: '.$pactos. '

        SEXTO : La duración del presente Contrato es la que se indica: '.$duracion_contrato. '
        
        SÉPTIMO : El Empleador suministrará los beneficios adicionales que se indican: (**)
        1.'.$gratificacion_en_contrato. '
        2.'.$bonos_en_contrato. '
        2.'.$incentivos_en_contrato . '
        OCTAVO : Se deja constancia que el trabajador ingresó al servicio del empleador el día '.$numero_especifico_extraido. ' de '.$mes.' de '.$año.'.
        NOVENO : Para constancia, previa lectura, y en señal de conformidad firman las partes, quedando con un ejemplar el docente
        
        
        
        .
        ............................................
        EMPLEADOR
        RUT ............................................	............................................ 
        PROF. DE LA EDUCACIÓN
        RUT ............................................ 
        
        ';

return $chofer_carga;
}


























































public function numero_formato($numero){
    $numero_formateado= number_format(intval($numero),0,",",".");
return $numero_formateado;
}


//fin clase contrato_generico
}


?>