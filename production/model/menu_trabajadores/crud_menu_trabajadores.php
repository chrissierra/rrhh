<?php
require '../afp_isapres/conexion_base_abstracta.php';
require '../variables_empresa/clase_variables_empresa.php';
$base= new crud_variables_empresa();



$base->insert_mysql_datos_menu($_POST["email1"], $_POST["email2"], $_POST["numero1"], $_POST["numero2"], $_POST["id_trabajador"]);





?>