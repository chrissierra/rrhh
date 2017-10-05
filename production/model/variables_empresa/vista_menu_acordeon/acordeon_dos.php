                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          <h4 class="panel-title">Modificar contrato (anexos)</h4>
                        </a>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="panel-body">


                          <!-- Formulario para inrgesar un anexo, explicar como se ejecuta -->

                          <form class="form-horizontal form-label-left" novalidate>

                      <p>Para realizar modificaciones a las actividades de un trabajador o a su estatus debes generar un anexo de trabajo. Si tienes dudas recuerda que cuentas con la asesoría de tu ejecutivo de Sister ERP <a href="./model/chat/vista/index.html"><span class="fa fa-comments"></span><span  class="label label-warning" style="cursor:pointer">  Chatear con un experto</span></a> .
                      
                       Sin embargo, si sabes realizar el procedimiento sigue las instrucciones de tu software Sister para generar el documento.   
                        
                        <?php // echo "<b>". $row["nombre"] . " tiene un  ". $row["tipo_contrato"] . "</b>";  ?>
                      </p>
                      <span class="section">Anexo de trabajo</span>

<input type="hidden" id="usuario_plataforma" value="<?php  echo $_SESSION["usuario"]; ?>">
                      <div class="item form-group">
                         <!-- ANTES FOREACH ESTABA ACA -->
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Descripción breve: 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php // echo $row["nombre"]; ?>" placeholder="Describe muy brevemente tu anexo" id="descripcion_breve_anexo" class="form-control col-md-7 col-xs-12"  type="text">
                        </div>
                      </div>


                      <div class="item form-group">
                         <!-- ANTES FOREACH ESTABA ACA -->
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Detalla el anexo: 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea  cols="5" rows="5" value="<?php  echo 'Debes escribir cuidadosamente el anexo de trabajo a generar. Usa Empleado para referirte a '. $row["nombre"].' y empleador para referirte a tu persona'; ?>" placeholder="<?php  echo 'Debes escribir cuidadosamente el anexo de trabajo a generar. Usa Empleado para referirte a '. $row["nombre"].' y empleador para referirte a tu persona'; ?>" id="anexo" class="form-control col-md-7 col-xs-12"   type="text"></textarea>
                        </div>
                      </div>


                     


                      <div class="item form-group">
                         <!-- ANTES FOREACH ESTABA ACA -->
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Anexos hechos: 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select  value="<?php // echo $row["nombre"]; ?>"  id="select_anexos_hechos" class="form-control col-md-7 col-xs-12"   type="text">
                          <option value="<?php // echo $row["nombre"]; ?>"></option>
                          </select>
                        </div>
                      </div>

                      <div class="item form-group" id="mostrando_anexo_hecho_div" style="display:none">
                         <!-- ANTES FOREACH ESTABA ACA -->
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre" id="label_anexo"> 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea cols="30" rows="10" value="<?php // echo $row["nombre"]; ?>"  id="input_anexo" class="form-control col-md-7 col-xs-12"  disabled type="text"></textarea> 
                          <input id="input_checkbox" type="checkbox">&nbsp;<small>Usar este anexo</small>
                        </div>
                      </div>


                      <div class="item form-group">
                         <!-- ANTES FOREACH ESTABA ACA -->
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre" >
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <span  class="label label-success" style="cursor:pointer;" id="genera_tu_anexo" >  Genera tu anexo</span>&nbsp;
                        <span  class="label label-primary" style="cursor:pointer;" id="visualizar_anexos_para_el_trabajador">  Visualizar anexos para este trabajador</span>
                        </div>
                      </div>

                      


                      </form>




                          <!-- fin formulario -->
                          

                         
                         </div>
                       </div>
                     </div>