<?php

$resumen_trabajador= new libro_remuneraciones($empleado, "resumen");

?>
                      
                      
                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingtres" data-toggle="collapse" data-parent="#accordion" href="#collapsetres" aria-expanded="false" aria-controls="collapsetres">
                          <h4 class="panel-title">Validar Sueldo</h4>
                        </a>
                        <div id="collapsetres" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtres">
                          <div class="panel-body">
                        
       <form class="form-horizontal form-label-left" novalidate>

                     
                      <span class="section">Libera el sueldo del empleado: </span>

                      <div class="item form-group">
                         <!-- ANTES FOREACH ESTABA ACA -->
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Suedo Bruto <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php echo number_format(intval($resumen_trabajador->sueldo_bruto),0,",","."); ?>" disabled="disabled" id="nombre" class="form-control col-md-7 col-xs-12"  required="required" type="text">
                        </div>
                      </div>


                      <div class="item form-group">
                         <!-- ANTES FOREACH ESTABA ACA -->
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Suedo líquido <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php echo number_format(intval($row["sueldo"]),0,",","."); ?>" disabled="disabled" id="nombre" class="form-control col-md-7 col-xs-12"  required="required" type="text">
                        </div>
                      </div>


                      <div class="item form-group">
                         <!-- ANTES FOREACH ESTABA ACA -->
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Monto AFP <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php echo number_format(intval($resumen_trabajador->afp_monto),0,",","."); ?>" disabled="disabled" id="nombre" class="form-control col-md-7 col-xs-12"  required="required" type="text">
                        </div>
                      </div>


                      <div class="item form-group">
                         <!-- ANTES FOREACH ESTABA ACA -->
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Monto Isapre <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php echo number_format(intval($resumen_trabajador->isapre_monto),0,",","."); ?>" disabled="disabled" id="nombre" class="form-control col-md-7 col-xs-12"  required="required" type="text">
                        </div>
                      </div>


                      <div class="item form-group">
                         <!-- ANTES FOREACH ESTABA ACA -->
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Total dsctos. Legales <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php echo number_format(intval($resumen_trabajador->total_descuentos_legales),0,",","."); ?>" disabled="disabled" id="nombre" class="form-control col-md-7 col-xs-12"  required="required" type="text">
                        </div>
                      </div>


<!-- INICIO GRATIFICACIONES -->
<?php 

if($resumen_trabajador->gratificaciones_n === 0){

}else{

for ($i=0; $i < $resumen_trabajador->gratificaciones_n ; $i++) { 
  
  echo ' <div class="item form-group">
  <!-- ANTES FOREACH ESTABA ACA -->
 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Gratificaciones <span class="required">*</span>
 </label>
 <div class="col-md-6 col-sm-6 col-xs-12">
   <input value="'. number_format(intval($resumen_trabajador->gratificaciones[$i+2]),0,",",".") .'" disabled="disabled" id="nombre" class="form-control col-md-7 col-xs-12"  required="required" type="text">
 </div>
</div>';

}

}

?>
<!-- FIN GRATIFICACIONES -->



<!-- INICIO BONOS -->

<?php 

if($resumen_trabajador->bonos_n === 0){

}else{

for ($i=0; $i < $resumen_trabajador->bonos_n ; $i++) { 
  
  echo ' <div class="item form-group">
  <!-- ANTES FOREACH ESTABA ACA -->
 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">'. $resumen_trabajador->bonos[$i+1] .' <span class="required">*</span>
 </label>
 <div class="col-md-6 col-sm-6 col-xs-12">
   <input value="'. number_format(intval($resumen_trabajador->bonos[$i+2]),0,",",".") .'" disabled="disabled" id="nombre" class="form-control col-md-7 col-xs-12"  required="required" type="text">
 </div>
</div>';

}

}

?>
<!-- fin BONOS -->



<!-- INICIO incentivos -->

<?php 

if($resumen_trabajador->incentivos_n === 0){

}else{

for ($i=0; $i < $resumen_trabajador->incentivos_n ; $i++) { 
  
  echo ' <div class="item form-group">
  <!-- ANTES FOREACH ESTABA ACA -->
 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">'. $resumen_trabajador->incentivos[$i+1] .' <span class="required">*</span>
 </label>
 <div class="col-md-6 col-sm-6 col-xs-12">
   <input value="'. number_format(intval($resumen_trabajador->incentivos[$i+2]),0,",",".") .'" disabled="disabled" id="nombre" class="form-control col-md-7 col-xs-12"  required="required" type="text">
 </div>
</div>';

}

}

?>
<!-- fin incentivos -->




        </form>
                        

                         
                         </div>
                       </div>
                     </div>