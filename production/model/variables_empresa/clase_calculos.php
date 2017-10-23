<?php

class calculo extends crud_variables_empresa{
     
    public $id_plataforma, $id_trabajador;

    function __construct($id_plataforma, $id_trabajador){
        
        $this->id_plataforma= $id_plataforma;
        $this->id_trabajador= $id_trabajador;
      }
  


    public function get_arrays($array){

    }


    public function get_singles($variable){
        try{
        $this->conexion();
        $db->prepare("SELECT * FROM ingreso_empleados where id='".$this->id_trabajador. "'");
        }catch (PDOException $e){
            echo $e;
        }
      

    }

    public function muestra(){
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

}

?>