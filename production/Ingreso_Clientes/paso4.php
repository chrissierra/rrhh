  <div id="step-4">
                        <h2 class="StepTitle">Finalizar Proceso</h2>
                        <p>Para finalizar el proceso presiona en botón de finalizar.
                        </p>








                              <!-- Small modal -->
                  <button type="button" class="btn btn-primary" id="finalizar" data-toggle="modal" data-target=".bs-example-modal-sm">Finaliza Ingreso</button>

                  <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Ingreso Clientes</h4>
                        </div>
                        <div class="modal-body">
                          <h4>Estatus:</h4>
                          <p id="alerta_p">Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                         
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>

                      </div>
                    </div>
                  </div>
                  <!-- /modals -->


           <div id="alertas" style="display:block"><!-- div nuevo--><!-- div nuevo-->
<div class="alert alert-success alert-dismissible fade in" role="alert" id="exito" style="display:none">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong id="strong">Has generado la cuenta satisfactoriamente. </strong>
                  </div>


<div class="alert alert-error alert-dismissible fade in" role="alert" id="error" style="display:none">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong id="strong">Debes completar todos los campos. </strong>
                  </div>
</div><!-- div nuevo--><!-- div nuevo--><!-- div nuevo-->
                      </div>


              </div>









<script type="text/javascript" src="./Ingreso_Clientes/ingreso.js"></script>

<script type="text/javascript">
guarda();
</script>
      