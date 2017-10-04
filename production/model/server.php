<?php
require './afp_isapres/conexion_base_abstracta.php';
require './variables_empresa/clase_variables_empresa.php';
$variables_empresa= new crud_variables_empresa();

$nombre= utf8_decode($_POST["nombre"]);
$apellido= utf8_decode($_POST["apellido"]); 
$edad= utf8_decode($_POST["edad"]);


$sexo= utf8_decode($_POST["sexo"]);
$nacimiento= utf8_decode($_POST["nacimiento"]);
$direccion= utf8_decode(utf8_decode($_POST["direccion"]));
$sueldo= utf8_decode($_POST["sueldo_liquido"]);
$puesto= utf8_decode($_POST["puesto"]); 
$empresa= utf8_decode($_POST["empresa"]);
$jefatura= utf8_decode($_POST["jefatura"]);
$rut= utf8_decode($_POST["rut"]);
$isapre= utf8_decode($_POST["select_isapre"]);    
$afp= utf8_decode($_POST["select_afp"]);  
$horario= utf8_decode($_POST["horario"]); 
$nacionalidad_empleado= utf8_decode($_POST["nacionalidad"]); 
$horas_jornada= utf8_decode($_POST["horario"]); 
$empresa_previa= utf8_decode($_POST["empresa_previa"]);
$direccion_sin_comuna_empleado= utf8_decode($_POST["direccion"]);
$comuna_empleado= utf8_decode($_POST["comuna"]);
$sueldo_escrito= utf8_decode($_POST["sueldo_escrito"]);
$ultimo_dia_semana_jornada= utf8_decode($_POST["ultimo_dia_semana_jornada"]);
$hora_entrada_jornada= utf8_decode($_POST["hora_entrada_jornada"]);
$hora_salida_jornada= utf8_decode($_POST["hora_salida_jornada"]);
$descanso_o_almuerzo_en_minutos= utf8_decode($_POST["descanso_o_almuerzo_en_minutos"]);
$hora_inicio_descanso= utf8_decode($_POST["hora_inicio_descanso"]);
$hora_fin_descanso= utf8_decode($_POST["hora_fin_descanso"]);
$tipo_contrato= utf8_decode($_POST["tipo_contrato"]);
$comuna_sucursal= utf8_decode($_POST["select_sucursal"]);
$direccion_sucursal= utf8_decode($_POST["select_sucursal_direccion"]);
$estado_civil= utf8_decode($_POST["estado_civil"]);
$codigo_actividad_economica= utf8_decode($_POST["codigo_actividad_economica"]);
$servicio_salud_que_aprueba= utf8_decode($_POST["servicio_salud_aprueba_prevencion_riesgos"]);
$tecnico_o_profesional= utf8_decode($_POST["tecnico_o_profesional_prevencion_riesgos"]);
$numero_inscripcion= utf8_decode($_POST["numero_inscripcion_prevencion_riesgos"]);
$numero_dias_trabajar_semanal= utf8_decode($_POST["numero_dias_a_trabajar_semana_prevencion_riesgos"]);
$bono_locomocion_mensual= utf8_decode($_POST["bono_locomocion_mensual_prevencion_riesgos"]);
$viatico_diario= utf8_decode($_POST["viatico"]);
$duracion_contrato= ($_POST["duracion_contrato"]);



$nombre_produccion= utf8_decode($_POST["nombre_produccion_television"]);
$locacion_produccion= utf8_decode($_POST["locacion_produccion_television"]);
$tiempo_de_pago= utf8_decode($_POST["tiempo_pago"]);
$nombre_establecimiento= utf8_decode($_POST["nombre_establecimiento_teatro"]);


$nombre_de_la_obra= utf8_decode($_POST["nombre_obra_construccion"]);
$locacion_de_la_obra= utf8_decode($_POST["locacion_obra_construccion"]);
$comuna_locacion_obra= utf8_decode($_POST["comuna_locacion_obra_construccion"]);
$tipo_de_pago= utf8_decode($_POST["tipo_pago_construccion"]);
$cantidad_a_pagar= utf8_decode($_POST["cantidad_a_pagar_construccion"]);
$gratificaciones= utf8_decode($_POST["gratificaciones"]);
$incentivos= utf8_decode($_POST["incentivos"]); 
$bonos= utf8_decode($_POST["bonos"]);

$asignacion_movilizacion_con_sin= utf8_decode($_POST["booleano_asignacion_movilizacion"]);   
$monto_asignacion_movilizacion= utf8_decode($_POST["monto_asignacion_movilizacion"]);  
$asignacion_desgaste_herramientas_sin_con= utf8_decode($_POST["booleano_asignacion_desgaste_herramientas"]);  
$monto_asignacion_desgastes_herramientas= utf8_decode($_POST["monto_asignacion_desgaste_herramientas"]);    
$asignacion_matrimonio_sin_con= utf8_decode($_POST["booleano_asignacion_matrimonio"]);  
$monto_asignacion_matrimonio= utf8_decode($_POST["monto_asignacion_matrimonio"]);


$transporte_entre= utf8_decode($_POST["transporte_entre"]);
$tareas_a_desarrollar= utf8_decode($_POST["tareas_a_desarrollar"]);
$horas_diarias_descanso_chofer= utf8_decode($_POST["horas_diarias_chofer"]);
$dias_descanso_chofer= utf8_decode($_POST["dias_descanso_chofer"]);
$monto_pago_colacion_diario= utf8_decode($_POST["monto_pago_colacion_diario"]);


$oficio= utf8_decode($_POST["oficio"]);
$maestro_o_guia= utf8_decode($_POST["maestro_o_guia"]);
$duracion_contrato_aprendizaje= utf8_decode($_POST["duracion_contrato_de_aprendizaje"]);

$establecimiento_educacional= utf8_decode($_POST["establecimiento_educacional"]);
$docente_coordinador= utf8_decode($_POST["docente_coordinador"]);
$condiciones_buena_practica= utf8_decode($_POST["condiciones_buena_practica"]);   	
$total_horas_cronologicas_practica= utf8_decode($_POST["total_horas_cronologicas_practica"]); 
$tope_reembolsos_a_estudiante= utf8_decode($_POST["tope_reembolso_estudiante"]);   
$dias_inasistencias_permitidos= utf8_decode($_POST["dias_inasistencia_permitidos"]);

$cantidad_semanal_minima_horas= utf8_decode($_POST["cantidad_semanal"]);
$monto_por_unidad= utf8_decode($_POST["monto_por_unidad"]);

$nombre_predio_agricola= utf8_decode($_POST["nombre_predio_agricola"]);
$profesion_oficio_contratado= utf8_decode($_POST["profesion_oficio_del_contratado_agricola_permanente"]);
$ubicacion_predio= utf8_decode($_POST["ubicacion_predio"]);
$tipo_pago_agricola= utf8_decode($_POST["tipo_de_pago"]);
$monto_fijo= utf8_decode($_POST["cantidad_diaria_si_es_fijo"]);
$pago_detalle_y_monto_a_trato= utf8_decode($_POST["input_pago_a_trato_agricola_listo"]);
$regalias= utf8_decode($_POST["regalias_listo"]);
$entrega_racion_tierra= utf8_decode($_POST["entrega_racion_tierra_listo"]);
$servicios_a_entregar_trabajador= utf8_decode($_POST["servicios_a_entregar_por_parte_trabajador_listo"]);

$nombre_usuario_plataforma_cliente= utf8_decode($_POST["nombre_empresa"]);

$capitulos_totales_contemplados= utf8_decode($_POST["capitulos_totales_contemplados"]);

$fin_rodaje= utf8_decode($_POST["fin_rodaje"]);
$inicio_rodaje= utf8_decode($_POST["inicio_rodaje"]);

$forma_de_pago_sueldo=utf8_decode($_POST["forma_de_pago_sueldo"]);


$primer_dia_semana_jornada= utf8_decode($_POST["primer_dia_semana_jornada"]);


$ciudad_obra_construccion=utf8_decode($_POST["ciudad_obra_construccion"]);


$monto_adelanto= utf8_decode($_POST["monto_adelanto"]);
$fecha_adelanto= utf8_decode($_POST["fecha_adelanto"]);
$fecha_pago_sueldo=utf8_decode($_POST["fecha_pago_sueldo"]);


$asignacion_colacion_sin_con=utf8_decode($_POST["asignacion_colacion_sin_con"]);
$monto_asignacion_colacion=utf8_decode($_POST["monto_asignacion_colacion"]);


$guardando_latitud_longitud= $variables_empresa->get_por_query("SELECT * FROM sucursales where direccion='".$direccion_sucursal."'");
foreach ($guardando_latitud_longitud as $key => $value) {
    # code...
    $latitud= $value["latitud"];
    $longitud= $value["longitud"];
}


$variables_empresa->insertar_nuevo_trabajador($nombre, $apellido, $edad, $sexo, $nacimiento,$direccion, $sueldo, $puesto, $empresa, $jefatura,$rut, $isapre, $afp, $horario,$nacionalidad_empleado,$horas_jornada,$empresa_previa,$direccion_sin_comuna_empleado,$comuna_empleado,$sueldo_escrito,$ultimo_dia_semana_jornada,$hora_entrada_jornada,$hora_salida_jornada,$descanso_o_almuerzo_en_minutos,$hora_inicio_descanso,$hora_fin_descanso,$tipo_contrato, $comuna_sucursal, $direccion_sucursal, $estado_civil, $codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $numero_dias_trabajar_semanal, $bono_locomocion_mensual,$viatico_diario,$duracion_contrato,	$nombre_produccion,	$locacion_produccion, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago,$cantidad_a_pagar,$gratificaciones, $incentivos, $bonos, $asignacion_movilizacion_con_sin, $monto_asignacion_movilizacion,$asignacion_desgaste_herramientas_sin_con,$monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $nombre_establecimiento, $tiempo_de_pago,$transporte_entre,$tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $monto_pago_colacion_diario, $oficio,	$maestro_o_guia, $duracion_contrato_aprendizaje,	$establecimiento_educacional, $docente_coordinador, $condiciones_buena_practica,	$total_horas_cronologicas_practica,	$tope_reembolsos_a_estudiante,$dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $monto_por_unidad, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio,	$tipo_pago_agricola,	$monto_fijo, $pago_detalle_y_monto_a_trato, $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $nombre_usuario_plataforma_cliente, $capitulos_totales_contemplados, $inicio_rodaje, $fin_rodaje, $forma_de_pago_sueldo, $primer_dia_semana_jornada, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo,$asignacion_colacion_sin_con,$monto_asignacion_colacion, $latitud, $longitud);



$chao=explode(",", $_POST["incentivos"]);

echo $monto_adelanto;
echo $fecha_adelanto;


echo "count en array: ".count($chao);
echo "//";
echo $_POST["tipo_contrato"];







/*
require './afp_isapres/conexion_base_abstracta.php';
require './variables_empresa/clase_variables_empresa.php';
$variables_empresa= new crud_variables_empresa();

$postdata = file_get_contents("php://input");

$request= json_decode($postdata);

var_dump($request);

$verificador= 0;

for ($i=0; $i <count($request) ; $i++) { 
          //  echo strlen($request[$i]);
        if(strlen($request[$i])==0){
            echo "Debes completar todos los campos";
            $verificador=1;
            $i= count($request);
            
        }
}


if($verificador==0){

    $variables_empresa->insertar_nuevo_trabajador($nombre, $apellido, $edad, $sexo, $nacimiento,$direccion, $sueldo, $puesto, $empresa, $jefatura,$rut, $isapre, $afp, $horario,$nacionalidad_empleado,$horas_jornada,$empresa_previa,$direccion_sin_comuna_empleado,$comuna_empleado,$sueldo_escrito,$ultimo_dia_semana_jornada,$hora_entrada_jornada,$hora_salida_jornada,$descanso_o_almuerzo_en_minutos,$hora_inicio_descanso,$hora_fin_descanso,$tipo_contrato, $comuna_sucursal, $direccion_sucursal, $estado_civil, $codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $numero_dias_trabajar_semanal, $bono_locomocion_mensual,$viatico_diario,$duracion_contrato,	$nombre_produccion,	$locacion_produccion, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago,$cantidad_a_pagar,$gratificaciones, $incentivos, $bonos, $asignacion_movilizacion_con_sin, $monto_asignacion_movilizacion,$asignacion_desgaste_herramientas_sin_con,$monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $nombre_establecimiento, $tiempo_de_pago,$transporte_entre,$tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $monto_pago_colacion_diario, $oficio,	$maestro_o_guia, $duracion_contrato_aprendizaje,	$establecimiento_educacional, $docente_coordinador, $condiciones_buena_practica,	$total_horas_cronologicas_practica,	$tope_reembolsos_a_estudiante,$dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $monto_por_unidad, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio,	$tipo_pago_agricola,	$monto_fijo, $pago_detalle_y_monto_a_trato, $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador);

    /*


Se ingresa a la bdarray(29) { [0]=> string(11) "christopher" [1]=> string(6) "sierra" [2]=> string(44) "enrique del solar 1542, comuna padre hurtado" [3]=> string(13) "padre hurtado" [4]=> string(5) "Chile" [5]=> string(4) "male" [6]=> string(6) "female" [7]=> string(13) "Administrador" [8]=> string(10) "18-12-1991" [9]=> string(11) "christopher" [10]=> string(1) "9" [11]=> string(6) "800000" [12]=> string(12) "chrisstopher" [13]=> string(11) "christopher" [14]=> string(5) "chris" [15]=> string(8) "36 Horas" [16]=> string(3) "cyt" [17]=> string(8) "quientos" [18]=> string(9) "Lo Espejo" [19]=> string(16) "Av Lo Espejo 233" [20]=> string(7) "viernes" [21]=> string(5) "12:34" [22]=> string(5) "14:24" [23]=> string(2) "45" [24]=> string(5) "03:45" [25]=> string(5) "03:45" [26]=> string(29) "Contrato Agrícola Permanente" [27]=> string(7) "Habitat" [28]=> string(18) "Chuquicamata Ltda." }



echo "Se ingresa a la bd";

    var_dump($request);

}



































/*
require './clase_actividad_reciente.php';
try{
   // $base= new PDO('mysql:host=localhost; dbname=super', 'root', '');
//$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//$base->exec("SET CHARACTER SET utf8");
   // $base= new PDO('mysql:host=localhost; dbname=super', 'root', '');

$pdo=new PDO('mysql:host=localhost; dbname=recursos_humanos','root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec('SET CHARACTER SET utf8');
}catch(PDOException $e){
    $error= "no se puede conectar";
    exit();
}
echo "variable sesion: ".$_POST["nombre_empresa"];
echo $_POST["nombre1"] . "<br>";
echo $_POST["apellido"] . "<br>";
echo $_POST["sexo"] . "<br>";
echo $_POST["direccion"] . "<br>";
echo $_POST["nacimiento"] . "<br>";
echo $_POST["sueldo"] . "<br>";

try{


$sql= 'INSERT INTO ingreso_empleados SET nombre=:nombre,
apellido=:apellido,
edad=:edad,
sexo=:sexo,
nacimiento=:nacimiento,
direccion=:direccion,
sueldo=:sueldo,
puesto=:puesto,
empresa=:empresa,
jefatura=:jefatura,
ingreso=CURDATE(),
rut=:rut,
isapre=:isapre,
afp=:afp,
horario=:horario';

$s= $pdo->prepare($sql);
$s->bindValue(':nombre',$_POST["nombre1"] );
$s->bindValue(':apellido',$_POST["apellido"] );
$s->bindValue(':edad',$_POST["edad"] );
$s->bindValue(':sexo',$_POST["sexo"] );
$s->bindValue(':nacimiento',$_POST["nacimiento"] );
$s->bindValue(':direccion',$_POST["direccion"] );

$s->bindValue(':sueldo',$_POST["sueldo"] );
$s->bindValue(':puesto',$_POST["puesto"] );
$s->bindValue(':empresa',$_POST["nombre_empresa"] );
$s->bindValue(':jefatura',$_POST["jefatura"] );
//ingreso
$s->bindValue(':rut',$_POST["rut"] );
$s->bindValue(':isapre',$_POST["isapre"] );
$s->bindValue(':afp',$_POST["afp"] );
$s->bindValue(':horario',$_POST["horario"] );
$s->execute();
echo "listo";
}catch(PDOException $e){
    $error="error no se puede ingresar";
    echo $error . " " .$e;
    exit();
}

$actividad_reciente1= new actividad_reciente($_POST["nombre_empresa"], $_POST["nombre1"] . " ". $_POST["apellido"], "Ingreso de nuevo empleado: ". $_POST["nombre1"], "nulo", "nulo");
$actividad_reciente1->tabla= "actividad_reciente";

$actividad_reciente1->guarda_actividad_base();

//$json_str = file_get_contents('php://input');

*/
?>
