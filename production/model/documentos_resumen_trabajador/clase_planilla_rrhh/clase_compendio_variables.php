<?php
date_default_timezone_set("America/Santiago");
//date("Y-m-d")
//require '../../variables_empresa/clase_variables_empresa.php';
class compendio_variables extends crud_variables_empresa{

    public $id_usuario;
    public $array_fecha, $array_hora, $array_tipo_movimiento; 
   

public function variables_libro_remuneraciones_unificado(){
    return $this->get_por_query("SELECT * FROM ingreso_empleados where nombre_empresa_usuario_plataforma='".$this->id_usuario."'");
}




/*
@FUNCION dias trabajados
*/
public function dias_trabajados($trabajador, $periodo){
  
  return $this->horas_trabajadas($trabajador, $periodo);

}// fin funcion dias trabajados







//@funcion que define los array a usar
protected function array_asistencia($trabajador){
    $this->array_tipo_movimiento= $this->make_fetch("SELECT rut, tipo_movimiento, fecha, hora, nombre, apellido FROM asistencia where id_trabajador='".$trabajador."'")->fetchAll(PDO::FETCH_COLUMN, 1);
    $this->array_fecha= $this->make_fetch("SELECT rut, tipo_movimiento, fecha, hora, nombre, apellido FROM asistencia where id_trabajador='".$trabajador."'")->fetchAll(PDO::FETCH_COLUMN, 2);
    $this->array_hora= $this->make_fetch("SELECT rut, tipo_movimiento, fecha, hora, nombre, apellido FROM asistencia where id_trabajador='".$trabajador."'")->fetchAll(PDO::FETCH_COLUMN, 3);
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
  
 
         if(explode("-", $this->array_fecha[$i])[1]==$periodo && $this->array_tipo_movimiento[$i] === "entrada"){ // si estoy en el mes que corresponde
            
                         
             for ($z=0; $z <count($this->array_hora); $z++) { 
 
                 
                 if(explode("-", $this->array_fecha[$z])[1]==$periodo && $this->array_tipo_movimiento[$z] === "salida" && explode("-", $this->array_fecha[$i])[2] == explode("-", $this->array_fecha[$z])[2] ){
                     
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


}// @FIN CLASE +++++++++++++++++++++++

?>