<?php
date_default_timezone_set("America/Santiago");
//date("Y-m-d")
//require '../../variables_empresa/clase_variables_empresa.php';
class compendio_variables extends crud_variables_empresa{

    public $id_usuario;
    public $array_fecha, $array_hora, $array_tipo_movimiento, $array_datos_del_trabajador, $array_cuantia_entrada, $array_cuantia_salida; 
   
/*
@FUNCION variables unificadas
*/
protected function variables_libro_remuneraciones_unificado(){
    return $this->get_por_query("SELECT * FROM ingreso_empleados where nombre_empresa_usuario_plataforma='".$this->id_usuario."'");
}  // fin funcion unificadas



/*
@FUNCION variables unificadas
*/
protected function query_fetchall($query){
    return $this->make_fetch($query)->fetchAll(PDO::FETCH_COLUMN, 0);
}  // fin funcion unificadas




/*
@FUNCION resumen diario
*/
protected function query_resumen_diario($fecha){
    return $this->get_por_query("SELECT * FROM asistencia where usuario_cliente='".$this->id_usuario."' AND fecha='".$fecha."'");
} // fin funcion resumen diario


/*
@FUNCION dias trabajados
*/
public function dias_trabajados($trabajador, $periodo){
  
  return $this->horas_trabajadas($trabajador, $periodo);

}// fin funcion dias trabajados



//@funcion que define los array a usar
protected function array_sql($trabajador, $columna, $tabla){
   return $this->array= $this->make_fetch("SELECT ".$columna." FROM ".$tabla." WHERE id_trabajador='".$trabajador."'")->fetchAll(PDO::FETCH_COLUMN, 0);
  
}// fin funcion de array a usar




//@funcion que define los array a usar
protected function array_atrasos($trabajador, $columna, $tabla){
    return $this->array= $this->make_fetch("SELECT ".$columna." FROM ".$tabla." WHERE id_trabajador='".$trabajador."' AND status_entrada='atraso'")->fetchAll(PDO::FETCH_COLUMN, 0);
   
 }// fin funcion de array a usar
 



//@funcion que define los array a usar
protected function array_asistencia($trabajador){
    $this->array_tipo_movimiento= $this->make_fetch("SELECT rut, tipo_movimiento, fecha, hora, nombre, apellido FROM asistencia where id_trabajador='".$trabajador."'")->fetchAll(PDO::FETCH_COLUMN, 1);
    
    $this->array_fecha= $this->make_fetch("SELECT fecha FROM asistencia where id_trabajador='".$trabajador."'")->fetchAll(PDO::FETCH_COLUMN, 0);
   
    $this->array_hora= $this->make_fetch("SELECT rut, tipo_movimiento, fecha, hora, nombre, apellido FROM asistencia where id_trabajador='".$trabajador."'")->fetchAll(PDO::FETCH_COLUMN, 3);


    $this->array_cuantia_entrada= $this->make_fetch("SELECT id,rut, id_trabajador, tipo_movimiento, fecha, usuario_cliente, hora, nombre, apellido, status_entrada, status_salida, cuantia_entrada, cuantia_salida FROM asistencia where id_trabajador='".$trabajador."'")->fetchAll(PDO::FETCH_COLUMN, 11);
   
    $this->array_datos_del_trabajador_asistencia= $this->make_fetch("SELECT * FROM asistencia where id_trabajador='".$trabajador."'")->fetchAll(PDO::FETCH_BOTH);
   
    $this->array_datos_del_trabajador= $this->make_fetch("SELECT * FROM ingreso_empleados where id='".$trabajador."'")->fetch(PDO::FETCH_BOTH);
}// fin funcion de array a usar





//@funcion que define horas trabajadas
protected function horas_trabajadas($trabajador, $periodo){
    $horas_trabajadas="";
    $sumatoria=0;
    $hora_salida=0;
    $minutos_salida=0;
    $cuantia_salida=0;
    $hora_entrada=0;
    $minutos_entrada=0;
    $cuantia_entrada=0;

    $this->array_asistencia($trabajador);
    
    
     for ($i=0; $i < count($this->array_hora); $i++) { // recorro cada hora para el trabajador
  
 
         if(explode("/", $this->array_fecha[$i])[1]==$periodo && $this->array_tipo_movimiento[$i] === "entrada"){ // si estoy en el mes que corresponde
            
                         
             for ($z=0; $z <count($this->array_hora); $z++) { 
 
                 
                 if(explode("/", $this->array_fecha[$z])[1]==$periodo && $this->array_tipo_movimiento[$z] === "salida" && explode("/", $this->array_fecha[$i])[2] == explode("/", $this->array_fecha[$z])[2] ){
                     
                     $hora_salida =explode(":", $this->array_hora[$z])[0];
                     $minutos_salida =explode(":", $this->array_hora[$z])[1];

                     $cuantia_salida= $hora_salida + ($minutos_salida/60);

                     $hora_entrada =explode(":", $this->array_hora[$i])[0];
                     $minutos_entrada =explode(":", $this->array_hora[$i])[1];

                     $cuantia_entrada= $hora_entrada + ($minutos_entrada/60);
                     $sumatoria=  $cuantia_salida - $cuantia_entrada;
                     $sumatoria=$sumatoria;
                     


                     $horas_trabajadas+=$sumatoria;
                 }
             }
 
 
 
 
         }// FIN  si estoy en el mes que corresponde
         
     }// fin recorrer todos los registros del trabajador
 
  return $horas_trabajadas;
}// fin funcion horas trabajadas









//@funcion que define horas trabajadas
protected function dias_trabajados_al_mes($trabajador, $periodo){
    $horas_trabajadas=0;
    $sumatoria=0;
    

    $this->array_asistencia($trabajador);
    $array_fecha= $this->array_sql($trabajador, "fecha", "asistencia");
    $array_tipo_movimiento= $this->array_sql($trabajador, "tipo_movimiento", "asistencia");
    $array_cuantia_salida= $this->array_sql($trabajador, "cuantia_salida", "asistencia");
    $array_cuantia_entrada= $this->array_sql($trabajador, "cuantia_entrada", "asistencia");
    
    for ($i=0; $i <count($this->array_datos_del_trabajador_asistencia) ; $i++) { 
        
    if(explode("/",$array_fecha[$i])[1]===$periodo && $array_tipo_movimiento[$i] === "entrada"){ 
        
        for ($z=0; $z <count($this->array_datos_del_trabajador_asistencia); $z++) { // recorro por segunda vez las horas
            
           
           
                            if($array_fecha[$z]=== $array_fecha[$i] && $array_tipo_movimiento[$z] === "salida"){
                               
                                $horas_trabajadas= $array_cuantia_salida[$z] - $array_cuantia_entrada[$i];
                                $sumatoria=$horas_trabajadas+$sumatoria;
                            } // fin if para verificar igualdad en movimientos
                 } // fin bucle for que recorre por segunda vez
    }// fin if que busca la primera coincidencia 

    
}// fin bucle for , el primero

$horas_jornada= substr($this->array_datos_del_trabajador["horas_jornada"],0,2)/$this->array_datos_del_trabajador["numero_dias_trabajar_semanal"];
 return $sumatoria/$horas_jornada;
}// fin funcion dias trabajadas








//@funcion que define horas trabajadas
protected function atrasos($trabajador, $periodo){
    $horas_trabajadas=0;
    $sumatoria=0;
    $atrasos=0;

    $this->array_asistencia($trabajador);
    $array_fecha= $this->array_sql($trabajador, "fecha", "asistencia");
    $array_tipo_movimiento= $this->array_sql($trabajador, "tipo_movimiento", "asistencia");
    $array_status_entrada= $this->array_sql($trabajador, "status_entrada", "asistencia");
    
    
    for ($i=0; $i <count($this->array_datos_del_trabajador_asistencia) ; $i++) { 
        
    if(explode("/",$array_fecha[$i])[1]===$periodo && $array_tipo_movimiento[$i] === "entrada"){ 
        
        $atrasos= count($this->array_atrasos($trabajador, "status_entrada", "asistencia"));
        
    }// fin if que busca la primera coincidencia 

    
}// fin bucle for , el primero


 return $atrasos;
}// fin funcion atrasos





}// @FIN CLASE +++++++++++++++++++++++

?>