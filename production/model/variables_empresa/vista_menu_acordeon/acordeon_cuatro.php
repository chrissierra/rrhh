<div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingcuatro" data-toggle="collapse" data-parent="#accordion" href="#collapsecuatro" aria-expanded="false" aria-controls="collapsecuatro">
                          <h4 class="panel-title">Préstamo al trabajador</h4>
                        </a>
                        <div id="collapsecuatro" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingcuatro">
                          <div class="panel-body">


    <!-- Formulario para generar un préstamo -->

    <form class="form-horizontal form-label-left" novalidate>

                      <p>Si vas a prestar dinero a un trabajador, desde éste formulario podrás definir cuántas cuotas se pagarán y el monto.</p>
                      
                      <span class="section">Préstamo</span>


                    <!-- Hidden con valor de usuario -->
                        <input type="hidden" id="usuario_plataforma_cuatro" value="<?php  echo $_SESSION["usuario"]; ?>">
                        <input type="hidden" id="id_trabajador_acordeon_cuatro" value="<?php  echo $_GET["id"]; ?>">
                    <!-- Hidden con valor de usuario -->                   



                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Monto Total: 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="" placeholder="Monto Total" id="monto_total_prestamo" class="form-control col-md-7 col-xs-12"  type="number">
                        </div>
                      </div>



                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Cuotas: 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="" placeholder="N° Cuotas" id="numero_cuotas_prestamo" class="form-control col-md-7 col-xs-12"  type="number">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Valor Cuota: 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="" placeholder="Valor Cuota" id="valor_cuotas_prestamo" class="form-control col-md-7 col-xs-12"  type="number">
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre" >
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <span  class="label label-success" style="cursor:pointer;" id="genera_prestamo" >  Genera Préstamo</span>&nbsp;
                        
                        </div>
                      </div>


                      </form>
                 <!-- fin formulario -->
                          

                         
                         </div>
                       </div>
                     </div>
                     <script src="./js/prestamo_trabajador/prestamo_trabajador.js"></script>