<?php 
require("config.php");

$db = new PDO('mysql:host=localhost;dbname=super','root','');
/*$result1 = $db->query("SELECT distinct Material from saldos");
foreach ($result1 as $row){
	//guarda material en variable
	$material=$row["Material"];
// query en coois , cada valor unico se busca en coois... 	
$result_en_zocpls = $db->query("SELECT * from saldos where Material=$material order by fecha asc");
$saldo=0;
//Por cada valor hallado en coois:
foreach($result_en_zocpls as $r){
$saldo=$r["Cantidad"]+$saldo;*/
 ?>