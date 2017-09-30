<?php
require_once("../afp_isapres/conexion_base_abstracta.php");
require_once("./clase_variables_empresa.php");

// borrar_beneficio($id)








// actualizar_beneficios($beneficio, $monto, $id, $costo_total, $entrega_adicional)
$ingresa= new crud_variables_empresa;
$ingresa->borrar_beneficio($_POST["id"]);
echo "borrado";
//insert_mysql_contrato($locacion,$rut_empresa, $representante_legal, $rut_representante, $direccion_empresa_sc, $comuna_empresa, $descanso_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $quien_asume_cargo_monetario_colacion, $cuanto_cargo_colacion)

?>