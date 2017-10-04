<?php

abstract class conexion_base_recursos_humanos extends config
{
public $tabla;
public $dbh;



 public function conexion()
 {
 try {
$this->dbh = new PDO('mysql:host=localhost;dbname='.$this->bd, $this->usuario, $this->pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
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