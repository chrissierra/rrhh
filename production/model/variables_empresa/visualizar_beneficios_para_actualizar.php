<?php
require_once("../afp_isapres/conexion_base_abstracta.php");
require_once("./clase_variables_empresa.php");

$usuario= $_POST["usuario"];
$id= $_POST["id"];





$ingresa= new crud_variables_empresa;
$resultado=$ingresa->get_por_parametro_beneficio_para_actualizar($usuario, $id);
foreach ($resultado as $key => $value) {


    echo '<span class="section">Beneficios</span>
    
                          <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Beneficio <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="name" class="form-control col-md-7 col-xs-12 beneficio_actualizar" value="'.$value["beneficio"].'" name="name" placeholder="Glosa Beneficio" required="required" type="text">
                          </div>
                        </div>
    
                        <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Monto a entregar <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="name" value="'.$value["monto_a_entregar"].'" class="form-control col-md-7 col-xs-12 beneficio_actualizar" placeholder="Monto a entregar" required="required" type="number">
                          </div>
                        </div>
    
                        <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Costo total beneficio <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="name" value="'.$value["costo_total_beneficio"].'" class="form-control col-md-7 col-xs-12 beneficio_actualizar" placeholder="Costo total beneficio en pesos" required="required" type="number">
                          </div>
                        </div>
    
                        <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Entrega adicional <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="name" value="'.$value["entrega_adicional"].'" class="form-control col-md-7 col-xs-12 beneficio_actualizar" placeholder="Ej: Caja mercadería." required="required" type="text">
                          </div>
                        </div>
    <input type="hidden" class="beneficio_actualizar" value="'.$value["id"].'">
                         
                         
                       ';

    //echo $value["entrega_adicional"];
}
//insert_mysql_contrato($locacion,$rut_empresa, $representante_legal, $rut_representante, $direccion_empresa_sc, $comuna_empresa, $descanso_en_minutos, $hora_inicio_descanso, $hora_fin_descanso, $quien_asume_cargo_monetario_colacion, $cuanto_cargo_colacion)

?>