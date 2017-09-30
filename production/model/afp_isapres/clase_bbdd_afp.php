<?php
//require_once './model/afp_isapres/conexion_base_abstracta.php';
class conexion_afp extends conexion_base_recursos_humanos{

const EXITO= "Ejecución exitosa";
const ERROR= "Ejecución Con Error";


    function __construct(){
      $this->tabla= "afp";
      
    }


public function insert_mysql_afp($nombre, $monto){

        try {
        $this->conexion();
        $pdo = $this->dbh->prepare('INSERT INTO '.$this->tabla.' SET nombre=:nombre, monto=:monto');
        $pdo->bindValue(':nombre', $nombre);
        $pdo->bindValue(':monto', $monto);
        $pdo->execute();
        $this->dbh = null;
        echo $this::EXITO;
        } catch (PDOException $e) {
        echo $e->getMessage();
        }
}



public function get_por_parametro_afp($nombre_afp)
               {
               try {
                   $this->conexion();
               $query = $this->dbh->query('SELECT * FROM '. $this->tabla .' WHERE nombre="'.$nombre_afp.'"' );
               return $query->fetchAll();
               $this->dbh = null;
               }catch (PDOException $e) {
               $e->getMessage();
               }
}

public function get_todas_afp()
               {
               try {
                   $this->conexion();
               $query = $this->dbh->query('SELECT * FROM '. $this->tabla);
               return $query->fetchAll();
               $this->dbh = null;
               echo $this::EXITO;
               }catch (PDOException $e) {
               $e->getMessage();
               echo $this::ERROR;
               }
}




}

?>