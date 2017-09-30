<?php 

require "./clase.php";


$reporte_prueba = new reporte;
$reporte_prueba->nombre_empresa="Concha y Toro";
$reporte_prueba->direccion="Padre Hurtado, Santiago.";
$reporte_prueba->nombre_trabajador="Juan Pablo Peña";
$reporte_prueba->titulo="Liquidacion de Sueldo";
$reporte_prueba->ubicacion="Pirque";
$reporte_prueba->cargo="Comprador Insumos";
$reporte_prueba->departamento="Abastecimiento";
$reporte_prueba->rut="17961493-6";
$reporte_prueba->forma_de_pago="Deposito Bancario";
$reporte_prueba->numero_cuenta= "912341243";
$reporte_prueba->fecha_ingreso= "01.03.2017";
$reporte_prueba->dias= "30.00";
$reporte_prueba->sueldo= 800000;
$reporte_prueba->afp= "Modelo";
$nombre_empresa="RRHH Managment";
$nombre_imagen="../images/user.png";
$reporte_prueba->imagen=$nombre_imagen;



$reporte_prueba->armando_reporte_liquidacion();


 ?>