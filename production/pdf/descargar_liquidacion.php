<?php 

require "./clase.php";


$reporte_prueba = new reporte;
$reporte_prueba->nombre_empresa="RRHH Managment";
$reporte_prueba->direccion="Padre Hurtado, Santiago.";
$reporte_prueba->nombre_trabajador="Juan Pablo Peña";
$reporte_prueba->titulo="Liquidación de Sueldo";
$nombre_empresa="RRHH Managment";
$nombre_imagen="../images/user.png";
$reporte_prueba->imagen=$nombre_imagen;



$reporte_prueba->Descarga_liquidacion();


 ?>