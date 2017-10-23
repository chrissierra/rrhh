                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingtres" data-toggle="collapse" data-parent="#accordion" href="#collapsetres" aria-expanded="false" aria-controls="collapsetres">
                          <h4 class="panel-title">Contrato</h4>
                        </a>
                        <div id="collapsetres" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtres">
                          <div class="panel-body">
                            
<?php 

 require_once("./model/afp_isapres/conexion_base_abstracta.php");
                              require_once("./model/variables_empresa/clase_variables_empresa.php");
                              
$contrato_bbdd= new crud_variables_empresa;
$resultado_contrato= $contrato_bbdd->get_por_parametro("contrato", $_SESSION["usuario"]);
$verifica_ingreso= count($resultado_contrato);
//echo count($resultado_contrato);
//echo $resultado_contrato[0]["locacion"];
//echo $resultado_contrato[0]["direccion_empresa_sc"];



?>


<form class="form-horizontal form-label-left" novalidate>

                     
                      <span class="section">Datos para generar contratos:</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Locación del tramite: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input disabled="disabled"  id="name" class="form-control col-md-7 col-xs-12 contratos " data-validate-length-range="6" data-validate-words="2" name="name" placeholder="Comuna donde se realiza contrato" required="required" type="text" value='<?php
                     echo count($resultado_contrato)==1 ? $resultado_contrato[0]["locacion"] : "";
                            ?>' ><!--<button class="btn btn-success btn-xs">Actualizar</button><button class="btn btn-danger btn-xs">Insertar</button>-->
                        </div>
                      </div>



                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">RUT empresa: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input disabled="disabled"  id="name" class="form-control col-md-7 col-xs-12 contratos " data-validate-length-range="6" data-validate-words="2" name="name" placeholder="RUT empresa" required="required" type="text" value='<?php
                     echo count($resultado_contrato)==1 ? $resultado_contrato[0]["rut_empresa"] : "";
                            ?>'><!--<button class="btn btn-success btn-xs">Actualizar</button><button class="btn btn-danger btn-xs">Insertar</button>-->
                        </div>
                      </div>


                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Representante legal: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input disabled="disabled"  id="name" class="form-control col-md-7 col-xs-12 contratos " data-validate-length-range="6" data-validate-words="2" name="name" placeholder="Nombre representante legal" required="required" type="text"  value='<?php
                     echo count($resultado_contrato)==1 ? $resultado_contrato[0]["representante_legal"] : "";
                            ?>'><!--<button class="btn btn-success btn-xs">Actualizar</button><button class="btn btn-danger btn-xs">Insertar</button>-->
                        </div>
                      </div>


                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">RUT Representante: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input disabled="disabled"  id="name" class="form-control col-md-7 col-xs-12 contratos " data-validate-length-range="6" data-validate-words="2" name="name" placeholder="RUT representante" required="required" type="text" value='<?php
                     echo count($resultado_contrato)==1 ? $resultado_contrato[0]["rut_representante"] : "";
                            ?>'><!--<button class="btn btn-success btn-xs">Actualizar</button><button class="btn btn-danger btn-xs">Insertar</button>-->
                        </div>
                      </div>


                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Direccion empresa: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input disabled="disabled"  id="name" class="form-control col-md-7 col-xs-12 contratos " name="name" placeholder="Dirección de la empresa. Calle y numeración" required="required" type="text" value='<?php
                     echo count($resultado_contrato)==1 ? $resultado_contrato[0]["direccion_empresa_sc"] : "";
                            ?>'  ><!--<button class="btn btn-success btn-xs">Actualizar</button><button class="btn btn-danger btn-xs">Insertar</button>-->
                        </div>
                      </div>


                                             <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Comuna de la empresa: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input disabled="disabled"  id="name" class="form-control col-md-7 col-xs-12 contratos " data-validate-length-range="6" data-validate-words="2" name="name" placeholder="Comuna Empresa" required="required" type="text" value='<?php
                     echo count($resultado_contrato)==1 ? $resultado_contrato[0]["comuna_empresa"] : "";
                            ?>'><!--<button class="btn btn-success btn-xs">Actualizar</button><button class="btn btn-danger btn-xs">Insertar</button>-->
                        </div>
                      </div>


                                 <!--            <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Horario Entrada: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input disabled="disabled"  id="name" class="form-control col-md-7 col-xs-12 contratos " data-validate-length-range="6" data-validate-words="2" name="name" placeholder="Hora ingreso" required="required" type="text"><button class="btn btn-success btn-xs">Actualizar</button><button class="btn btn-danger btn-xs">Insertar</button>
                        </div>
                      </div>


                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Horario Salida: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input disabled="disabled"  id="name" class="form-control col-md-7 col-xs-12 contratos " data-validate-length-range="6" data-validate-words="2" name="name" placeholder="Horario Salida" required="required" type="text"><button class="btn btn-success btn-xs">Actualizar</button><button class="btn btn-danger btn-xs">Insertar</button>
                        </div>
                      </div>-->



<!--
                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Duración Colación: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input disabled="disabled"  id="name" class="form-control col-md-7 col-xs-12 contratos " data-validate-length-range="6" data-validate-words="2" name="name" placeholder="Tiempo en minutos duración de colación" required="required" type="text"  value='<?php
                   //  echo count($resultado_contrato)==1 ? $resultado_contrato[0]["descanso_en_minutos"] : "";
                            ?>'><!--<button class="btn btn-success btn-xs">Actualizar</button><button class="btn btn-danger btn-xs">Insertar</button>-->
               <!--         </div>
                      </div>


                                             <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Hora Inicio Colación: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input disabled="disabled"  id="name" class="form-control col-md-7 col-xs-12 contratos " data-validate-length-range="6" data-validate-words="2" name="name" placeholder="Hora inicio colación" required="required" type="text" value='<?php
                  //   echo count($resultado_contrato)==1 ? $resultado_contrato[0]["hora_inicio_descanso"] : "";
                            ?>'><!--<button class="btn btn-success btn-xs">Actualizar</button><button class="btn btn-danger btn-xs">Insertar</button>-->
               <!--         </div>
                      </div>



                                             <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Hora Fin Colación: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input disabled="disabled"  id="name" class="form-control col-md-7 col-xs-12 contratos " data-validate-length-range="6" data-validate-words="2" name="name" placeholder="Hora fin colación" required="required" type="text" value='<?php
                  //   echo count($resultado_contrato)==1 ? $resultado_contrato[0]["hora_fin_descanso"] : "";
                            ?>'><!--<button class="btn btn-success btn-xs">Actualizar</button><button class="btn btn-danger btn-xs">Insertar</button>-->
                    <!--    </div>
                      </div>
-->


                                             <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Colación por parte de: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select disabled="disabled" id="name" class="form-control col-md-7 col-xs-12 contratos " data-validate-length-range="6" data-validate-words="2" name="name" placeholder="Nombre descriptivo de la sucursal" required="required" type="text" value='<?php
                     echo count($resultado_contrato)==1 ? $resultado_contrato[0]["quien_asume_cargo_monetario_colacion"] : "";
                            ?>'>
                          <option>Empleador</option>
                          <option>Trabajador</option>
                          </select><!--<button class="btn btn-success btn-xs">Actualizar</button><button class="btn btn-danger btn-xs">Insertar</button>-->
                        </div>
                      </div>



                                             <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Costo Colación: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input disabled="disabled"  id="name" class="form-control col-md-7 col-xs-12 contratos " data-validate-length-range="6" data-validate-words="2" name="name" placeholder="Costo unitario colación" required="required" type="number"  value='<?php
                     echo count($resultado_contrato)==1 ? $resultado_contrato[0]["cuanto_cargo_colacion"] : "";
                            ?>'><!--<button class="btn btn-success btn-xs">Actualizar</button><button class="btn btn-danger btn-xs">Insertar</button>-->
                        </div>
                      </div>





                      <input disabled="disabled"  type="hidden" value='<?php echo $_SESSION['usuario']; ?>' class="contratos">


                      
                                             <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          
 <button class="btn btn-success btn-xs" id="actualizar"  >Modificar</button>

<?php
if($verifica_ingreso==0){
  echo '<button id="boton_contrato" class="btn btn-danger btn-xs">Insertar</button>';
}else{
  echo '<button id="boton_actualizar_datos" class="btn btn-danger btn-xs">Actualizar datos en Base de datos</button>';
}
?>
 
 
                        </div>
                      </div>


                    
                    </form>

 

<script src="./js/variables_empresa/contrato.js"></script>

   

    <script  src="./js/variables_empresa/toast.min.js"></script>
<link href="./js/variables_empresa/pnotify.custom.min.css" media="all" rel="stylesheet" type="text/css" />
  

                          </div>
                        </div>
                      </div>


<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modaluno">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close cerrar" data-dismiss="modal" id="cerrar"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Información Guardada</h4>
                        </div>
                        <div class="modal-body">
                          <h4>Has ingresado tu información</h4>
                          <p>La información que ingresaste es la que se usará para generar los contratos automáticos. Debes estar seguro que se ingresó correctamente y que corresponde a todos tus datos fidedignamente.</p>
                         
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default cerrar" id="inicio">Volver Inicio</button>
                          <button type="button" class="btn btn-primary volver" id="volver_configuracion">Volver Configuración</button>
                        </div>

                      </div>
                    </div>
                  </div>                    
