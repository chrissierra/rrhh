                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                          <h4 class="panel-title">Sucursales</h4>
                        </a>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                          <div class="panel-body">
                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Nombre </th>
                                  <th>Dirección</th>
                                  <th>Comuna</th>
                                  <th>Ciudad</th>
                                  <th>Latitud</th>
                                  <th>Longitud</th>
                                </tr>
                              </thead>
                              <tbody>
                              <?php 
                              require_once("./model/afp_isapres/conexion_base_abstracta.php");
                              require_once("./model/variables_empresa/clase_variables_empresa.php");
                              
$sucursales_bbdd= new crud_variables_empresa;
$resultado_sucursales= $sucursales_bbdd->get_por_parametro("sucursales", $_SESSION["usuario"]);
$i=1;
foreach ($resultado_sucursales as $key => $value) {
   echo '<tr>
                                  <th scope="row">'.$i.'</th>
                                  <td>'.$value["nombre"].'</td>
                                  <td>'.$value["direccion"].'</td>
                                  <td>'.$value["comuna"].'</td>
                                  <td>'.$value["ciudad"].'</td>
                                  <td>'.$value["latitud"].'</td>
                                  <td>'.$value["longitud"].'</td>
                                </tr>';
                                $i++;
}
                              ?>
                              </tbody>
                            </table>
                             <button class="btn btn-success" data-toggle="modal" data-target=".sucursal"> <p class="fa fa-plus-circle" ></p>  Agrega</button>
                         <small><b>* Si deseas borrar o actualizar una dirección, simplemente agrega una nueva y deja en desuso las antiguas.  </b></small>
                          </div>
                        </div>
                      </div>




                       <!-- Large modal -->
                  

                  <div class="modal fade sucursal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Configuraciones</h4>
                        </div>
                        <div class="modal-body">
                          <h4>Ingresa nueva sucursal</h4>
                          <p>Recuerda que por ley aquellos trabajadores contratados pueden realizar sus labores en cualquiera de las sucursales de la empresa.</p>
                       





 <div class="clearfix"></div>


                    <form class="form-horizontal form-label-left" novalidate>

                     
                      <span class="section">Sucursales</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nombre <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12 surcursal_clase" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="Nombre descriptivo de la sucursal" required="required" type="text">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Direccion <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12 surcursal_clase" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="Escribe la calle y numeración de la sucursal" required="required" type="text">
                        </div>
                      </div>

                                            <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Comuna <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12 surcursal_clase" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="Comuna" required="required" type="text">
                        </div>
                      </div>


                                            <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Ciudad <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12 surcursal_clase" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="Ciudad" required="required" type="text">
                        </div>
                      </div>
                      <input type="hidden" value='<?php echo $_SESSION["usuario"]; ?>' class="surcursal_clase">
                     
                    </form>
                  





<?php
//require_once("./model/afp_isapres/conexion_base_abstracta.php");
//require_once("./model/variables_empresa/sucursal.php");
?>


                         
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                          <button type="button" class="btn btn-primary" id="boton_sucursal">Guardar</button>
                        </div>

<script src="./js/variables_empresa/sucursal.js"></script>
<script src="./js/funcion_fetch.js"></script>

                      </div>
                    </div>
                  </div>

                  <!-- Small modal -->