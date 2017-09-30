<?php

abstract class conexion_base_recursos_humanos
{
public $tabla;
public $dbh;



 public function conexion()
 {
 try {
$this->dbh = new PDO('mysql:host=localhost;dbname=recursos_humanos;charset=utf8', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
$this->dbh->exec("SET CHARACTER SET utf8");
$this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$this->dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
//echo "conexion Realizada";
} catch (PDOException $e) {
print "Error!: " . $e->getMessage();
die();
}
 }


}

?>