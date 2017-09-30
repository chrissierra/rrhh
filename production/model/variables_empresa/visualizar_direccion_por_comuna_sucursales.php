<?php
session_start();
//echo $_POST["comuna"];


require './../afp_isapres/conexion_base_abstracta.php';
require './clase_variables_empresa.php';
$variables_empresa= new crud_variables_empresa();
$variable_de_la_empresa= $variables_empresa->get_por_parametro_por_comuna("sucursales", $_POST["usuario"], $_POST["comuna"]);

foreach ($variable_de_la_empresa as $key => $value) {
  echo '<option value="' .$value["direccion"] .'" class="direccion">'.$value["direccion"].'</option>';
}
?>
