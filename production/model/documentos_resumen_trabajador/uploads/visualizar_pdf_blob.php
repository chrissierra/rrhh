<?php
 ob_start();

$db=new PDO("mysql:host=localhost;dbname=recursos_humanos", "root", "");
$stat=$db->prepare("SELECT * FROM ingreso_empleados where id=?");
$stat->bindParam(1, $_GET["id"]);
$stat->execute();
$row= $stat->fetch();
header("Content-Type:". $row["formato_archivo_contrato"]);
echo $row["contrato_externo"];
ob_end_flush();
?>