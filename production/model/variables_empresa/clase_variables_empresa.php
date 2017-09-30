<?php

class crud_variables_empresa extends conexion_base_recursos_humanos{

const EXITO= "Ejecución exitosa";
const ERROR= "Ejecución Con Error";

    function __construct(){
      
      
    }

/*

********************************************************************************************************************
FUNCIONES PARA INGRESO A LA BASE DE DATOS:
********************************************************************************************************************

*/



function insert_por_query($query){
    
        try {
           
        $this->conexion();
        $pdo = $this->dbh->prepare($query);
        
        $pdo->execute();
        $this->dbh = null;
        echo $this::EXITO;
        } catch (PDOException $e) {
        echo $e->getMessage();
        echo $this::ERROR;
        }
    }





function insert_mysql_sucursales($nombre, $direccion, $comuna, $ciudad, $usuario){

    try {
        $tabla="sucursales";
    $this->conexion();
    $pdo = $this->dbh->prepare('INSERT INTO '.$tabla.' SET nombre=:nombre, direccion=:direccion, comuna=:comuna, ciudad=:ciudad, usuario=:usuario');
    $pdo->bindValue(':nombre', $nombre);
    $pdo->bindValue(':direccion', $direccion);
    $pdo->bindValue(':comuna', $comuna);
    $pdo->bindValue(':ciudad', $ciudad);
    $pdo->bindValue(':usuario', $usuario);
    
    $pdo->execute();
    $this->dbh = null;
    echo $this::EXITO;
    } catch (PDOException $e) {
    echo $e->getMessage();
    echo $this::ERROR;
    }
}



function insert_mysql_beneficios($beneficio, $monto, $usuario, $costo_total_beneficio, $entrega_adicional){

    try {
        $tabla="beneficios";
    $this->conexion();
    $pdo = $this->dbh->prepare('INSERT INTO '.$tabla.' SET beneficio=:beneficio, monto_a_entregar=:monto_a_entregar, usuario=:usuario, costo_total_beneficio=:costo_total_beneficio, entrega_adicional=:entrega_adicional');
    $pdo->bindValue(':beneficio', $beneficio);
    $pdo->bindValue(':monto_a_entregar', $monto);
    $pdo->bindValue(':usuario', $usuario);
    $pdo->bindValue(':costo_total_beneficio', $costo_total_beneficio);
    $pdo->bindValue(':entrega_adicional', $entrega_adicional);
   
    $pdo->execute();
    $this->dbh = null;
    echo $this::EXITO;
    } catch (PDOException $e) {
    echo $e->getMessage();
    echo $this::ERROR;
    }
}


public function insert_mysql_contrato($locacion, $rut_empresa, $representante_legal, $rut_representante, $direccion_empresa_sc, $comuna_empresa, $quien_asume_cargo_monetario_colacion, $cuanto_cargo_colacion, $usuario){

    try {
        $tabla="contrato";
    $this->conexion();
    $pdo = $this->dbh->prepare('INSERT INTO '.$tabla.' SET locacion=:locacion, rut_empresa=:rut_empresa, representante_legal=:representante_legal, rut_representante=:rut_representante, direccion_empresa_sc=:direccion_empresa_sc,comuna_empresa=:comuna_empresa, quien_asume_cargo_monetario_colacion=:quien_asume_cargo_monetario_colacion, cuanto_cargo_colacion=:cuanto_cargo_colacion, usuario=:usuario');

$ultimo_dia_semana_trabajo="Viernes";
$hora_entrada="8:30";
$hora_salida="18:30";




    $pdo->bindValue(':locacion', $locacion);
    $pdo->bindValue(':rut_empresa', $rut_empresa);
    $pdo->bindValue(':representante_legal', $representante_legal);
    $pdo->bindValue(':rut_representante', $rut_representante);
    $pdo->bindValue(':direccion_empresa_sc', $direccion_empresa_sc);

     $pdo->bindValue(':comuna_empresa', $comuna_empresa);
  
    $pdo->bindValue(':quien_asume_cargo_monetario_colacion', $quien_asume_cargo_monetario_colacion);
    $pdo->bindValue(':cuanto_cargo_colacion', $cuanto_cargo_colacion);
    $pdo->bindValue(':usuario', $usuario);
    
    $pdo->execute();
    $this->dbh = null;
    echo $this::EXITO;
    } catch (PDOException $e) {
    echo $e->getMessage();
    echo $this::ERROR;
    }
}
















//ahoramismo


function insert_mysql_datos_menu($email1, $email2, $numero1, $numero2, $id){
    /*
    try {
        
     $this->conexion();
     $pdo = $this->dbh->prepare("UPDATE contrato SET locacion='$locacion', rut_empresa='$rut_empresa',representante_legal='$representante_legal', rut_representante='$rut_representante', direccion_empresa_sc='$direccion_empresa_sc', comuna_empresa='$comuna_empresa', quien_asume_cargo_monetario_colacion='$quien_asume_cargo_monetario_colacion', cuanto_cargo_colacion='$cuanto_cargo_colacion'  WHERE id='$id'");
    /* $pdo->bindValue(':beneficio', $beneficio);
     $pdo->bindValue(':monto_a_entregar', $monto);
     $pdo->bindValue(':costo_total_beneficio', $costo_total);
     $pdo->bindValue(':entrega_adicional', $entrega_adicional);*/
    /*
     $pdo->execute();
     $this->dbh = null;
     echo $this::EXITO;
     } catch (PDOException $e) {
     echo $e->getMessage();
     echo $this::ERROR;
     }

*/

        try {
            $tabla="ingreso_empleados";
        $this->conexion();
        $pdo = $this->dbh->prepare('UPDATE '.$tabla.' SET fono1=:fono1, fono2=:fono2, email1=:email1, email2=:email2 WHERE id='.$id);
        $pdo->bindValue(':fono1', $numero1);
        $pdo->bindValue(':fono2', $numero2);
        $pdo->bindValue(':email1', $email1);
        $pdo->bindValue(':email2', $email2);
      
       
        $pdo->execute();
        $this->dbh = null;
        echo $this::EXITO;
        } catch (PDOException $e) {
        echo $e->getMessage();
        echo $this::ERROR;
        }
    }
    




















































/*

^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
||||||||||||||||||||||||||||||

********************************************************************************************************************
FUNCIONES PARA INGRESO A LA BASE DE DATOS.
********************************************************************************************************************

*/



/* ---------------------------------------------------------------------------------------*/






/*

********************************************************************************************************************
FUNCIONES PARA OBTENER DE LA BASE DE DATOS:
********************************************************************************************************************

*/

public function get_por_parametro_distinct($tabla, $usuario)
{
try {
    $this->conexion();
$query = $this->dbh->query('SELECT distinct comuna FROM '. $tabla .' WHERE usuario="'.$usuario.'" ' );
return $query->fetchAll();
$this->dbh = null;
echo $this::EXITO;
}catch (PDOException $e) {
$e->getMessage();
echo $this::ERROR;
echo $e;
}
}


public function get_por_parametro_contrato($tabla, $usuario, $rut)
{
try {
    $this->conexion();
$query = $this->dbh->query('SELECT * FROM '. $tabla .' WHERE nombre_empresa_usuario_plataforma="'.$usuario.'" AND rut="'.$rut.'" ' );
return $query->fetchAll();
$this->dbh = null;
echo $this::EXITO;
}catch (PDOException $e) {
$e->getMessage();
echo $this::ERROR;
echo $e;
}
}


public function get_por_query($query)
{
try {
    $this->conexion();
$query = $this->dbh->query($query);
return $query->fetchAll();
$this->dbh = null;
echo $this::EXITO;
}catch (PDOException $e) {
$e->getMessage();
echo $this::ERROR;
echo $e;
}
}



public function get_por_parametro_beneficio_para_actualizar($usuario, $id)
{
try {
    $this->conexion();
    $tabla="beneficios";
$query = $this->dbh->query('SELECT * FROM '. $tabla .' WHERE usuario="'.$usuario.'" AND id="'.$id.'" ' );
return $query->fetchAll();
$this->dbh = null;
echo $this::EXITO;
}catch (PDOException $e) {
$e->getMessage();
echo $this::ERROR;
echo $e;
}
}



public function get_por_parametro($tabla, $usuario)
               {
               try {
                   $this->conexion();
               $query = $this->dbh->query('SELECT * FROM '. $tabla .' WHERE usuario="'.$usuario.'"' );
               return $query->fetchAll();
               $this->dbh = null;
               echo $this::EXITO;
               }catch (PDOException $e) {
               $e->getMessage();
               echo $this::ERROR;
               echo $e;
               }
}

public function get_todo_sin_parametro($tabla)
{
try {
    $this->conexion();
$query = $this->dbh->query('SELECT * FROM '. $tabla);
return $query->fetchAll();
$this->dbh = null;
echo $this::EXITO;
}catch (PDOException $e) {
$e->getMessage();
echo $this::ERROR;
echo $e;
}
}


public function get_por_parametro_por_comuna($tabla, $usuario, $comuna)
{
try {
    $this->conexion();
$query = $this->dbh->query('SELECT * FROM '. $tabla .' WHERE usuario="'.$usuario.'" AND comuna="'.$comuna.'" ' );
return $query->fetchAll();
$this->dbh = null;
echo $this::EXITO;
}catch (PDOException $e) {
$e->getMessage();
echo $this::ERROR;
echo $e;
}
}

public function get_por_parametro_id($tabla, $id)
               {
               try {
                   $this->conexion();
               $query = $this->dbh->query('SELECT * FROM '. $tabla .' WHERE id="'.$id.'"' );
               return $query->fetchAll();
               $this->dbh = null;
               echo $this::EXITO;
               }catch (PDOException $e) {
               $e->getMessage();
               echo $this::ERROR;
               echo $e;
               }
}

public function get_()
               {
               try {
                   $this->conexion();
               $query = $this->dbh->query('SELECT * FROM '.$this->tabla);
               return $query->fetchAll();
               $this->dbh = null;
               echo $this::EXITO;
               }catch (PDOException $e) {
               $e->getMessage();
               echo $this::ERROR;
               }
}







/*

********************************************************************************************************************
FUNCIONES PARA ACTUALIZAR DE LA BASE DE DATOS:
********************************************************************************************************************

*/

function actualizar_contrato_bbdd($locacion, $rut_empresa, $representante_legal, $rut_representante, $direccion_empresa_sc, $comuna_empresa, $quien_asume_cargo_monetario_colacion, $cuanto_cargo_colacion, $id){
    
        try {
           
        $this->conexion();
        $pdo = $this->dbh->prepare("UPDATE contrato SET locacion='$locacion', rut_empresa='$rut_empresa',representante_legal='$representante_legal', rut_representante='$rut_representante', direccion_empresa_sc='$direccion_empresa_sc', comuna_empresa='$comuna_empresa', quien_asume_cargo_monetario_colacion='$quien_asume_cargo_monetario_colacion', cuanto_cargo_colacion='$cuanto_cargo_colacion'  WHERE id='$id'");
       /* $pdo->bindValue(':beneficio', $beneficio);
        $pdo->bindValue(':monto_a_entregar', $monto);
        $pdo->bindValue(':costo_total_beneficio', $costo_total);
        $pdo->bindValue(':entrega_adicional', $entrega_adicional);*/
       
        $pdo->execute();
        $this->dbh = null;
        echo $this::EXITO;
        } catch (PDOException $e) {
        echo $e->getMessage();
        echo $this::ERROR;
        }
    }



    function update_query($query){
        
            try {
               
            $this->conexion();
            $pdo = $this->dbh->prepare($query);
                      $pdo->execute();
            $this->dbh = null;
            echo $this::EXITO;
            } catch (PDOException $e) {
            echo $e->getMessage();
            echo $this::ERROR;
            }
        }
        


function actualizar_beneficios($beneficio, $monto, $id, $costo_total, $entrega_adicional){

    try {
       
    $this->conexion();
    $pdo = $this->dbh->prepare("UPDATE beneficios SET beneficio='$beneficio', monto_a_entregar='$monto', costo_total_beneficio='$costo_total', entrega_adicional='$entrega_adicional' WHERE id='$id'");
   /* $pdo->bindValue(':beneficio', $beneficio);
    $pdo->bindValue(':monto_a_entregar', $monto);
    $pdo->bindValue(':costo_total_beneficio', $costo_total);
    $pdo->bindValue(':entrega_adicional', $entrega_adicional);*/
   
    $pdo->execute();
    $this->dbh = null;
    echo $this::EXITO;
    } catch (PDOException $e) {
    echo $e->getMessage();
    echo $this::ERROR;
    }
}

/*
^^^^^^^^^^
||||||||||
********************************************************************************************************************
FUNCIONES PARA ACTUALIZAR DE LA BASE DE DATOS:
********************************************************************************************************************

*/


/*
******************************************************************************************************************************************************************
*/


/*

********************************************************************************************************************
FUNCIONES PARA BORRAR DE LA BASE DE DATOS:
********************************************************************************************************************

*/




function borrar_beneficio($id){

    try {
        $tabla="beneficios";
    $this->conexion();
    $pdo = $this->dbh->prepare("DELETE FROM beneficios WHERE id='$id'");
    $pdo->execute();
    $this->dbh = null;
    echo $this::EXITO;
    } catch (PDOException $e) {
    echo $e->getMessage();
    echo $this::ERROR;
    }
}




// ---------------------------------------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------------------------------------------------------
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# /////////////////////////////////////////////////////////////////////////////
# \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
/*
 *****************************************************************************************************************************
                                                                               |
INGRESO A BASE DE DATOS DEL TRABAJADOR, 28 DATOS APROX.                        |
                                                                               V
 *****************************************************************************************************************************
   */


   public function insertar_nuevo_trabajador($nombre, $apellido, $edad, $sexo, $nacimiento,$direccion, $sueldo, $puesto, $empresa, $jefatura,$rut, $isapre, $afp, $horario,$nacionalidad_empleado,$horas_jornada,$empresa_previa,$direccion_sin_comuna_empleado,$comuna_empleado,$sueldo_escrito,$ultimo_dia_semana_jornada,$hora_entrada_jornada,$hora_salida_jornada,$descanso_o_almuerzo_en_minutos,$hora_inicio_descanso,$hora_fin_descanso,$tipo_contrato, $comuna_sucursal, $direccion_sucursal, $estado_civil, $codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $numero_dias_trabajar_semanal, $bono_locomocion_mensual,$viatico_diario,$duracion_contrato,	$nombre_produccion,	$locacion_produccion, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago,$cantidad_a_pagar,$gratificaciones, $incentivos, $bonos, $asignacion_movilizacion_con_sin, $monto_asignacion_movilizacion,$asignacion_desgaste_herramientas_sin_con,$monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $nombre_establecimiento, $tiempo_de_pago,$transporte_entre,$tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $monto_pago_colacion_diario, $oficio,	$maestro_o_guia, $duracion_contrato_aprendizaje,	$establecimiento_educacional, $docente_coordinador, $condiciones_buena_practica,	$total_horas_cronologicas_practica,	$tope_reembolsos_a_estudiante,$dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $monto_por_unidad, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio,	$tipo_pago_agricola,	$monto_fijo, $pago_detalle_y_monto_a_trato, $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador, $nombre_empresa_usuario_plataforma, $capitulos_totales_contemplados, $inicio_rodaje, $fin_rodaje, $forma_de_pago_sueldo, $primer_dia_semana_jornada, $ciudad_obra_construccion, $monto_adelanto, $fecha_adelanto, $fecha_pago_sueldo,$asignacion_colacion_sin_con,$monto_asignacion_colacion){
    
        try {
            $tabla="ingreso_empleados";


           
            date_default_timezone_set('America/Mexico_City'); //Asignas la zona horaria de tu país.
            setlocale(LC_TIME, 'spanish'); //Fijamos el tiempo local
            $dia=strftime('%A'); // Guardamos el Nombre del día de la semana.
            $mes=strftime('%B');
            $año=strftime('%Y');
            
         /*   
  array(96) { [0]=> string(0) "" [1]=> string(36) "Contrato de trabajo para Televisión" [2]=> string(13) "Administrador" 
    
 "nombre"; "apellido";"direccion" ; "comiuna" ; "nacionalidad" ; "hombre" ; "fechanacieminto" ; "rut"; "23" ; "850000" ;"jefatura" ; "empresa"; "puesto"; "36 Horas" ;"empresa previa" ; "sueldo escrito"; "Lo Espejo"; "Av Lo Espejo 233"; "lunes"; "viernes"; "08:30" ; "18:30"; "45" ; "12:30"; "13:30";   "Habitat"  "Chuquicamata Ltda.
//*********************************************************************



 => "estado civil", "codigo actividad economica", 

 "servicio salud que aprueba" ; "tecnico" ; "numero de inscripcion" ; "5" ;"150000" ;"15000"; "duracion contrato"; "nombre produccion" ;"locacion produccion" ; "nombre de la obra" ; "lcoacion de la obra" ; "comuna locacion de la obra"; "pago_a_trato" ; "3000" ; "con" ; "detalla gratificacion" ; "3000" ; "con"; "detalla incentivo" ; "3000"; "con" ; "bono puntualidad" ; "3000" ; "con" ; "3000" ; "con" ; "3000" ; "con" ; "3000" ; "con" ; "3000" ; "nombre establecimiento" ; "quincenal"; "tranasporte entre stgo y conce" ; "tareas a desarrollar, listado1";  "3" ; "dias libres a la semana chofer"; "3000" ; "oficio a ser impartido" ; "guia o maestro oficio a ser impartido" ; "48" ; "establecimiento educacional" ; "nombre docente coordinador" ; "condiciones par auna buena practica" ; "512" ; "3000" ; "2" ; "2" ; "1000" ; "nombre predio"; "nombre profesion trabajador del predio"; "locacion del predio"; "sin"; "" ; "detalle pago a trato, kilo de papa" ; "3000" ; "con" ; "descripcion regalia"; "3000" ; "con" ; "entrega tierra mes" ; "mes devolucion tierra" ; "con"; "servicios addicionales trabajador entrega"" 

VolverVisualizar Contrato
SiguienteAnterior          
           
*/
        $this->conexion();
        $pdo = $this->dbh->prepare('INSERT INTO '.$tabla.' SET nombre=:nombre, apellido=:apellido, edad=:edad, sexo=:sexo, nacimiento=:nacimiento,direccion=:direccion, sueldo=:sueldo, puesto=:puesto, empresa=:empresa, jefatura=:jefatura,ingreso=CURDATE(), rut=:rut, isapre=:isapre, afp=:afp, horario=:horario,nacionalidad_empleado=:nacionalidad_empleado,horas_jornada=:horas_jornada,empresa_previa=:empresa_previa,direccion_sin_comuna_empleado=:direccion_sin_comuna_empleado,comuna_empleado=:comuna_empleado,sueldo_escrito=:sueldo_escrito,ultimo_dia_semana_jornada=:ultimo_dia_semana_jornada,hora_entrada_jornada=:hora_entrada_jornada,hora_salida_jornada=:hora_salida_jornada,descanso_o_almuerzo_en_minutos=:descanso_o_almuerzo_en_minutos,hora_inicio_descanso=:hora_inicio_descanso,hora_fin_descanso=:hora_fin_descanso,tipo_contrato=:tipo_contrato, comuna_sucursal=:comuna_sucursal, direccion_sucursal=:direccion_sucursal, dia_ingreso=:dia_ingreso, mes_ingreso=:mes_ingreso, ano_ingreso=:ano_ingreso, estado_civil=:estado_civil, codigo_actividad_economica=:codigo_actividad_economica, servicio_salud_que_aprueba=:servicio_salud_que_aprueba,	tecnico_o_profesional=:tecnico_o_profesional, numero_inscripcion=:numero_inscripcion,	numero_dias_trabajar_semanal=:numero_dias_trabajar_semanal, bono_locomocion_mensual=:bono_locomocion_mensual,viatico_diario=:viatico_diario,duracion_contrato=:duracion_contrato,	nombre_produccion=:nombre_produccion,	locacion_produccion=:locacion_produccion,nombre_de_la_obra=:nombre_de_la_obra,	locacion_de_la_obra=:locacion_de_la_obra,comuna_locacion_obra=:comuna_locacion_obra,	tipo_de_pago=:tipo_de_pago,cantidad_a_pagar=:cantidad_a_pagar,gratificaciones=:gratificaciones,	incentivos=:incentivos,bonos=:bonos,asignacion_movilizacion_con_sin=:asignacion_movilizacion_con_sin,monto_asignacion_movilizacion=:monto_asignacion_movilizacion,asignacion_desgaste_herramientas_sin_con=:asignacion_desgaste_herramientas_sin_con,monto_asignacion_desgastes_herramientas=:monto_asignacion_desgastes_herramientas,asignacion_matrimonio_sin_con=:asignacion_matrimonio_sin_con,	monto_asignacion_matrimonio=:monto_asignacion_matrimonio,nombre_establecimiento=:nombre_establecimiento,tiempo_de_pago=:tiempo_de_pago,transporte_entre=:transporte_entre,	tareas_a_desarrollar=:tareas_a_desarrollar,horas_diarias_descanso_chofer=:horas_diarias_descanso_chofer,dias_descanso_chofer=:dias_descanso_chofer,	monto_pago_colacion_diario=:monto_pago_colacion_diario,oficio=:oficio,	maestro_o_guia=:maestro_o_guia,	duracion_contrato_aprendizaje=:duracion_contrato_aprendizaje,	establecimiento_educacional=:establecimiento_educacional,docente_coordinador=:docente_coordinador,condiciones_buena_practica=:condiciones_buena_practica,	total_horas_cronologicas_practica=:total_horas_cronologicas_practica,	tope_reembolsos_a_estudiante=:tope_reembolsos_a_estudiante,dias_inasistencias_permitidos=:dias_inasistencias_permitidos,cantidad_semanal_minima_horas=:cantidad_semanal_minima_horas,monto_por_unidad=:monto_por_unidad,nombre_predio_agricola=:nombre_predio_agricola,profesion_oficio_contratado=:profesion_oficio_contratado,	ubicacion_predio=:ubicacion_predio,	tipo_pago_agricola=:tipo_pago_agricola,	monto_fijo=:monto_fijo,pago_detalle_y_monto_a_trato=:pago_detalle_y_monto_a_trato,regalias=:regalias,entrega_racion_tierra=:entrega_racion_tierra,servicios_a_entregar_trabajador=:servicios_a_entregar_trabajador, nombre_empresa_usuario_plataforma=:nombre_empresa_usuario_plataforma, capitulos_totales_contemplados=:capitulos_totales_contemplados, inicio_rodaje=:inicio_rodaje, fin_rodaje=:fin_rodaje, forma_de_pago_sueldo=:forma_de_pago_sueldo, primer_dia_semana_jornada=:primer_dia_semana_jornada, ciudad_obra_construccion=:ciudad_obra_construccion, monto_adelanto=:monto_adelanto, fecha_adelanto=:fecha_adelanto, fecha_pago_sueldo=:fecha_pago_sueldo, asignacion_colacion_sin_con=:asignacion_colacion_sin_con,monto_asignacion_colacion=:monto_asignacion_colacion ');
    
        
    
    
        $pdo->bindValue(':nombre', utf8_encode($nombre));
        $pdo->bindValue(':apellido', utf8_encode($apellido));
        $pdo->bindValue(':edad', $edad);
        $pdo->bindValue(':sexo', $sexo);
        $pdo->bindValue(':nacimiento', $nacimiento);
    
         $pdo->bindValue(':direccion', utf8_encode($direccion));
        $pdo->bindValue(':sueldo', $sueldo);
        $pdo->bindValue(':puesto', utf8_encode($puesto));
        $pdo->bindValue(':empresa', utf8_encode($empresa)); #no sumar uno a este
        $pdo->bindValue(':jefatura', utf8_encode($jefatura));
    /*
$nombre, $apellido, $edad, $sexo, $nacimiento,$direccion, $sueldo, $puesto, $empresa, $jefatura,$rut, $isapre, $afp, $horario,$nacionalidad_empleado,$horas_jornada,$empresa_previa,$direccion_sin_comuna_empleado,$comuna_empleado,$sueldo_escrito,$ultimo_dia_semana_jornada,$hora_entrada_jornada,$hora_salida_jornada,$descanso_o_almuerzo_en_minutos,$hora_inicio_descanso,$hora_fin_descanso,$tipo_contrato, $comuna_sucursal, $direccion_sucursal,
    */
        //$pdo->bindValue(':ingreso', $array_request[0]);
        $pdo->bindValue(':rut', $rut);
        $pdo->bindValue(':isapre', $isapre);
        $pdo->bindValue(':afp', $afp);
        
        $pdo->bindValue(':horario', $horario);
        $pdo->bindValue(':nacionalidad_empleado', $nacionalidad_empleado);
        $pdo->bindValue(':horas_jornada', $horas_jornada);
        $pdo->bindValue(':empresa_previa', utf8_encode($empresa_previa));
        $pdo->bindValue(':direccion_sin_comuna_empleado', utf8_encode($direccion_sin_comuna_empleado));
        $pdo->bindValue(':comuna_empleado', $comuna_empleado);
        $pdo->bindValue(':sueldo_escrito', $sueldo_escrito);
        $pdo->bindValue(':ultimo_dia_semana_jornada', $ultimo_dia_semana_jornada);
        $pdo->bindValue(':hora_entrada_jornada', $hora_entrada_jornada);
        $pdo->bindValue(':hora_salida_jornada', $hora_salida_jornada);
        $pdo->bindValue(':descanso_o_almuerzo_en_minutos', $descanso_o_almuerzo_en_minutos);
        $pdo->bindValue(':hora_inicio_descanso', $hora_inicio_descanso); 
        $pdo->bindValue(':hora_fin_descanso', $hora_fin_descanso);
        $pdo->bindValue(':tipo_contrato', $tipo_contrato);

        $pdo->bindValue(':comuna_sucursal', utf8_encode($comuna_sucursal));
        $pdo->bindValue(':direccion_sucursal', utf8_encode($direccion_sucursal));
        
        $pdo->bindValue(':dia_ingreso', utf8_encode($dia));
        $pdo->bindValue(':mes_ingreso',$mes);
        $pdo->bindValue(':ano_ingreso',$año);
 















        
        $pdo->bindValue(':estado_civil',$estado_civil); 
        $pdo->bindValue(':codigo_actividad_economica',$codigo_actividad_economica); 
        $pdo->bindValue(':servicio_salud_que_aprueba',$servicio_salud_que_aprueba); 
        $pdo->bindValue(':tecnico_o_profesional',$tecnico_o_profesional); 
        $pdo->bindValue(':numero_inscripcion',$numero_inscripcion); 
        $pdo->bindValue(':numero_dias_trabajar_semanal',$numero_dias_trabajar_semanal); 
        $pdo->bindValue(':bono_locomocion_mensual',$bono_locomocion_mensual); 
        $pdo->bindValue(':viatico_diario',$viatico_diario); 
        $pdo->bindValue(':duracion_contrato',$duracion_contrato); 
        $pdo->bindValue(':nombre_produccion',$nombre_produccion); 
        $pdo->bindValue(':locacion_produccion',$locacion_produccion); 
        $pdo->bindValue(':nombre_de_la_obra',$nombre_de_la_obra); 
        $pdo->bindValue(':locacion_de_la_obra',$locacion_de_la_obra); 
        $pdo->bindValue(':comuna_locacion_obra',$comuna_locacion_obra); 
        $pdo->bindValue(':tipo_de_pago',$tipo_de_pago); 
        $pdo->bindValue(':cantidad_a_pagar',$cantidad_a_pagar); 
        $pdo->bindValue(':gratificaciones',$gratificaciones); 
        $pdo->bindValue(':incentivos',$incentivos); 
        $pdo->bindValue(':bonos',$bonos); 
        $pdo->bindValue(':asignacion_movilizacion_con_sin',$asignacion_movilizacion_con_sin); 
        $pdo->bindValue(':monto_asignacion_movilizacion',$monto_asignacion_movilizacion); 
        $pdo->bindValue(':asignacion_desgaste_herramientas_sin_con',$asignacion_desgaste_herramientas_sin_con); 
        $pdo->bindValue(':monto_asignacion_desgastes_herramientas',$monto_asignacion_desgastes_herramientas); 
        $pdo->bindValue(':asignacion_matrimonio_sin_con',$asignacion_matrimonio_sin_con); 
        $pdo->bindValue(':monto_asignacion_matrimonio',$monto_asignacion_matrimonio); 
        $pdo->bindValue(':nombre_establecimiento',$nombre_establecimiento); 
        $pdo->bindValue(':tiempo_de_pago',$tiempo_de_pago); 
        $pdo->bindValue(':transporte_entre',$transporte_entre); 
        $pdo->bindValue(':tareas_a_desarrollar',$tareas_a_desarrollar); 
        $pdo->bindValue(':horas_diarias_descanso_chofer',$horas_diarias_descanso_chofer); 
        



        $pdo->bindValue(':dias_descanso_chofer',$dias_descanso_chofer);
        $pdo->bindValue(':monto_pago_colacion_diario',$monto_pago_colacion_diario);
        $pdo->bindValue(':oficio',$oficio);
        $pdo->bindValue(':maestro_o_guia',$maestro_o_guia);
        $pdo->bindValue(':duracion_contrato_aprendizaje',$duracion_contrato_aprendizaje);
        $pdo->bindValue(':establecimiento_educacional',$establecimiento_educacional);
        $pdo->bindValue(':docente_coordinador',$docente_coordinador);
        $pdo->bindValue(':condiciones_buena_practica',$condiciones_buena_practica);
        $pdo->bindValue(':total_horas_cronologicas_practica',$total_horas_cronologicas_practica);
        $pdo->bindValue(':tope_reembolsos_a_estudiante',$tope_reembolsos_a_estudiante);
        $pdo->bindValue(':dias_inasistencias_permitidos',$dias_inasistencias_permitidos);
        $pdo->bindValue(':cantidad_semanal_minima_horas',$cantidad_semanal_minima_horas);
        $pdo->bindValue(':monto_por_unidad',$monto_por_unidad);
        $pdo->bindValue(':nombre_predio_agricola',$nombre_predio_agricola);
        $pdo->bindValue(':profesion_oficio_contratado',$profesion_oficio_contratado);
        $pdo->bindValue(':ubicacion_predio',$ubicacion_predio);


        $pdo->bindValue(':tipo_pago_agricola',$tipo_pago_agricola);
        $pdo->bindValue(':monto_fijo',$monto_fijo);
        $pdo->bindValue(':pago_detalle_y_monto_a_trato',$pago_detalle_y_monto_a_trato);
        $pdo->bindValue(':regalias',$regalias);
        $pdo->bindValue(':entrega_racion_tierra',$entrega_racion_tierra);
        $pdo->bindValue(':servicios_a_entregar_trabajador',$servicios_a_entregar_trabajador);
        

        $pdo->bindValue(':nombre_empresa_usuario_plataforma',$nombre_empresa_usuario_plataforma);
        $pdo->bindValue(':capitulos_totales_contemplados',$capitulos_totales_contemplados);
        
        $pdo->bindValue(':inicio_rodaje',$inicio_rodaje);
        $pdo->bindValue(':fin_rodaje',$fin_rodaje);

        $pdo->bindValue(':forma_de_pago_sueldo',$forma_de_pago_sueldo);
        
        $pdo->bindValue(':primer_dia_semana_jornada',$primer_dia_semana_jornada);
        
        $pdo->bindValue(':ciudad_obra_construccion',$ciudad_obra_construccion);
        
        $pdo->bindValue(':monto_adelanto',$monto_adelanto);
        $pdo->bindValue(':fecha_adelanto',$fecha_adelanto);
        $pdo->bindValue(':fecha_pago_sueldo',$fecha_pago_sueldo);
        

        $pdo->bindValue(':asignacion_colacion_sin_con',$asignacion_colacion_sin_con);
        $pdo->bindValue(':monto_asignacion_colacion',$monto_asignacion_colacion);
      
        /* #pendiente:
        AGREGAR DIA, MES, AÑO


$estado_civil, $codigo_actividad_economica, $servicio_salud_que_aprueba, $tecnico_o_profesional,$numero_inscripcion, $numero_dias_trabajar_semanal, $bono_locomocion_mensual,$viatico_diario,$duracion_contrato,	$nombre_produccion,	$locacion_produccion, $nombre_de_la_obra, $locacion_de_la_obra, $comuna_locacion_obra, $tipo_de_pago,$cantidad_a_pagar,$gratificaciones, $incentivos, $bonos, $asignacion_movilizacion_con_sin, $monto_asignacion_movilizacion,$asignacion_desgaste_herramientas_sin_con,$monto_asignacion_desgastes_herramientas, $asignacion_matrimonio_sin_con, $monto_asignacion_matrimonio, $nombre_establecimiento, $tiempo_de_pago,$transporte_entre,$tareas_a_desarrollar, $horas_diarias_descanso_chofer, $dias_descanso_chofer, $monto_pago_colacion_diario, $oficio,	$maestro_o_guia, $duracion_contrato_aprendizaje,	$establecimiento_educacional, $docente_coordinador, $condiciones_buena_practica,	$total_horas_cronologicas_practica,	$tope_reembolsos_a_estudiante,$dias_inasistencias_permitidos, $cantidad_semanal_minima_horas, $monto_por_unidad, $nombre_predio_agricola, $profesion_oficio_contratado, $ubicacion_predio,	$tipo_pago_agricola,	$monto_fijo, $pago_detalle_y_monto_a_trato, $regalias, $entrega_racion_tierra, $servicios_a_entregar_trabajador

            */




        $pdo->execute();
        $this->dbh = null;
        echo $this::EXITO;
        } catch (PDOException $e) {
        echo $e->getMessage();
        echo $this::ERROR;
        }
    }











}











?>