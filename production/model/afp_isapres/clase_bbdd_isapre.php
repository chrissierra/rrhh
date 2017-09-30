<?php
/*require_once './model/afp_isapres/conexion_base_abstracta.php';*/
class conexion_isapre extends conexion_base_recursos_humanos{

const EXITO= "Ejecución exitosa";
const ERROR= "Ejecución Con Error";

    function __construct(){
      $this->tabla= "isapre";
      
    }


function insert_mysql_isapre($nombre, $monto){

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
    echo $this::ERROR;
    }
}


public function get_por_parametro_isapre($nombre_isapre)
               {
               try {
                   $this->conexion();
               $query = $this->dbh->query('SELECT * FROM '. $this->tabla .' WHERE nombre="'.$nombre_isapre.'"' );
               return $query->fetchAll();
               $this->dbh = null;
               echo $this::EXITO;
               }catch (PDOException $e) {
               $e->getMessage();
               echo $this::ERROR;
               }
}

public function get_todas_isapre()
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






}











?>