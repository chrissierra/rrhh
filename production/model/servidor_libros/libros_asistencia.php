<?php
require '../config/config.php';
require '../afp_isapres/conexion_base_abstracta.php';
require '../variables_empresa/clase_variables_empresa.php';
require './../documentos_resumen_trabajador/clase_planilla_rrhh/clase_compendio_variables.php';
require './../documentos_resumen_trabajador/clase_planilla_rrhh/clase_libro_asistencia.php';
require './../documentos_resumen_trabajador/clase_planilla_rrhh/clase_libro_remuneraciones.php';
$libro= new libro_asistencia($_POST["id_usuario"]);

if($_POST["accion"] == "diario"){
    $libro->periodo=$_POST["variable"];
    $libro->tabla_por_dia();
}elseif ($_POST["accion"] == "mes") {
    $libro->periodo=$_POST["variable_mes"];
    $libro->tabla_por_mes($_POST["variable_mes"], $_POST["variable_año"]);
}

?>