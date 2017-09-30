<?php
require './clase_base_datos.php';



class actividad_reciente extends Users{

private $quien_hizo;
private $afectado;
private $que_hizo;
private $cuando;
public $tabla;
public $variable_cambiada;
public $valor_var_cambiada;

 public function __construct($quien_hizo, $afectado, $que_hizo, $variable_cambiada, $valor_var_cambiada){
    $this->quien_hizo= $quien_hizo;
    $this->afectado= $afectado;
    $this->que_hizo= $que_hizo;
    $this->variable_cambiada= $variable_cambiada;
    $this->valor_var_cambiada= $valor_var_cambiada;
    parent::__construct();
    }


    
    public function guarda_actividad_base(){
        
        parent::insertar_actividad_reciente($this->quien_hizo, $this->afectado, $this->que_hizo, 'actividad_reciente', $this->variable_cambiada);
    }



}



?>