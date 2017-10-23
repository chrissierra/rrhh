                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          <h4 class="panel-title">Beneficios Empresa</h4>
                        </a>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="panel-body">
                          <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Beneficio </th>
                                  <th>Monto a entregar</th>
                                  <th>Costo total beneficio</th>
                                  <th>Adicionales</th>
                                </tr>
                              </thead>
                              <tbody>
                              <?php 
                              require_once("./model/afp_isapres/conexion_base_abstracta.php");
                              require_once("./model/variables_empresa/clase_variables_empresa.php");
                              
$sucursales_bbdd= new crud_variables_empresa;
$resultado_sucursales= $sucursales_bbdd->get_por_parametro("beneficios", $_SESSION["usuario"]);
$i=1;
foreach ($resultado_sucursales as $key => $value) {
  
   echo '<tr>
                                  <th scope="row">'.$i.'</th>
                                  <td>'.$value["beneficio"].'<button id="borrar_beneficio" value="'.$value["id"].'" onclick="borrar_beneficio(this)" class="btn btn-danger btn-xs" data-toggle="modal" data-target=".borrar" style="float:right;"> <p class="fa fa-close" ></p>  Borrar</button><button id="actualizar_beneficio_boton" class="btn btn-info btn-xs" data-toggle="modal" data-target=".actualizar_beneficios" onclick="actualizar_beneficio(this)" style="float:right;" value="'.$value["id"].'"> <p class="fa fa-edit" ></p>  Actualizar</button></td>
                                  <td>'.$value["monto_a_entregar"].'</td>

                                  <td>'.$value["costo_total_beneficio"].'</td>
                                  <td>'.$value["entrega_adicional"].'</td>
                                  
                                  
                                </tr>';
                                $i++;
}
                              ?>
                              </tbody>
                            </table>
                             <button class="btn btn-success" data-toggle="modal" data-target=".beneficios"> <p class="fa fa-plus-circle" ></p>  Agrega</button>
                          </div>
                        </div>
                      </div>




                       <!-- Large modal -->
                  

                  <div class="modal fade beneficios" tabindex="-1" role="dialog" aria-hidden="true" id="modal_beneficios">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Configuraciones</h4>
                        </div>
                        <div class="modal-body">
                          <h4>Ingresa los beneficios de tu Empresa:</h4>
                          <p>Recuerda que los beneficios que incluyas acá serán una variable que podrás seleccionar al momento de hacer los contratos de manera voluntaria, podrás contratar personal con o sin estos beneficios.</p>
                       





 <div class="clearfix"></div>


                    <form class="form-horizontal form-label-left" novalidate>

                     
                      <span class="section">Beneficios</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Beneficio <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12 beneficio_clase" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="Glosa Beneficio" required="required" type="text">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Monto a entregar <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12 beneficio_clase" placeholder="Monto a entregar" required="required" type="number">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Costo total beneficio <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12 beneficio_clase" placeholder="Costo total beneficio en pesos" required="required" type="number">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Entrega adicional <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12 beneficio_clase" placeholder="Ej: Caja mercadería." required="required" type="text">
                        </div>
                      </div>

                   


                         
                      <input type="hidden" value='<?php echo $_SESSION["usuario"]; ?>'  class="beneficio_clase" id="usuario_input_hidden">
                     
                    </form>
                  





<?php
//require_once("./model/afp_isapres/conexion_base_abstracta.php");
//require_once("./model/variables_empresa/sucursal.php");
?>


                         
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal" id="cerrar_beneficio">Cerrar</button>
                          <button type="button" class="btn btn-primary" id="guardar_beneficio">Guardar</button>
                        </div>


<script src="./js/funcion_fetch.js"></script>

                      </div>
                    </div>
                  </div>

                  <!-- Small modal -->






                  












































                       <!-- Large modal -->
                  

                  <div class="modal fade borrar" tabindex="-1" role="dialog" aria-hidden="true" id="modal_beneficios">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Configuraciones</h4>
                        </div>
                        <div class="modal-body">
                          <h4>Ingresa los beneficios de tu Empresa:</h4>
                          <p>Recuerda que los beneficios que incluyas acá serán una variable que podrás seleccionar al momento de hacer los contratos de manera voluntaria, podrás contratar personal con o sin estos beneficios.</p>
                       
 <div class="clearfix"></div>               
                    
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal" id="cerrar_modo_borrado_beneficio">Cancelar</button>
                          <button type="button" class="btn btn-primary" id="borrado_beneficio_boton" value="hola" onclick="borrar(this)">Borrar</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Small modal -->





































































                       <!-- Large modal -->
                  

                  <div class="modal fade actualizar_beneficios" tabindex="-1" role="dialog" aria-hidden="true" id="modal_beneficios">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Configuraciones</h4>
                        </div>
                        <div class="modal-body">
                          <h4>Actualiza los beneficios de tu Empresa:</h4>
                          <p>Recuerda que los beneficios que incluyas acá serán una variable que podrás seleccionar al momento de hacer los contratos de manera voluntaria, podrás contratar personal con o sin estos beneficios.</p>
                       





 <div class="clearfix"></div>




                    <form class="form-horizontal form-label-left" novalidate id="formulario_a_actualizar">

                    </form>




<?php
//require_once("./model/afp_isapres/conexion_base_abstracta.php");
//require_once("./model/variables_empresa/sucursal.php");
?>


                         
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal" id="cerrar_beneficio">Cerrar</button>
                          <button type="button" class="btn btn-primary" id="boton_actualizar" name="guarda">Guardar</button>
                        </div>

<script src="./js/variables_empresa/beneficios.js"></script>
<script src="./js/funcion_fetch.js"></script>

                      </div>
                    </div>
                  </div>

                  <!-- Small modal -->












                  