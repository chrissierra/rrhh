        <!-- page content -->
   
    
    

                
                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th >#</th>
                          <th>Descripción</th>
                          <th>Archivo</th>
                          <th>Acción</th>
                          
                        </tr>
                      </thead>
                      <tbody>

                      <?php 
                      $empleado=$_GET["id"];
                      $resultado_documentos = $db1->query("SELECT * from ingreso_empleados WHERE nombre_empresa_usuario_plataforma='$user' and id='$empleado'");
                      $resultado_documentos1 = $db1->query("SELECT * from ingreso_empleados WHERE nombre_empresa_usuario_plataforma='$user' and id='$empleado'");
/*

<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

*/


                      
                      foreach($resultado_documentos as $row): ?>                   
                        <tr>
                         <td>#</td>
                                    <td>
                                    <a><?php echo (strlen($row["foto"])>2) ? "Imagen Perfil" : "No tiene imagen disponible"; ?></a>
                                            <br>
                                    <small><?php echo (strlen($row["foto"])>2) ? "Subida el ".$row["fecha_upload_imagen"] : ""; ?></small>
                                    </td>



                            <td>
                            <ul class="list-inline">
                                            <li>
                                          <!--  <i class="fa fa-file-picture-o"></i> 
                                            Functional-requirements.docx -->

                     <?php echo (strlen($row["foto"])>2) ? '<a href="./model/documentos_resumen_trabajador/uploads/visualizar_imagen_blob.php?id='.$row["id"].'" ><i class="fa fa-picture-o"></i> Visualizar '  : ""; ?>
                                            </a>
                                            </li>
                                            </ul>
                            </td>
                            
                         <td>
                         <?php echo (strlen($row["foto"])>2) ? '<a href="#" class="btn btn-info btn-xs"  data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-pencil"></i> Actualizar </a>
                         <a href="#" class="btn btn-danger btn-xs" name="foto" onclick="borrar(this)" data-toggle="modal" data-target=".modal_borrar"><i class="fa fa-trash-o"></i> Borrar </a>  ' : ''; ?>            
                        </td>


                        
                      
                        </tr>
                        <?php endforeach; ?>


<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->







<?php foreach($resultado_documentos1 as $row): ?>  
                 
                        <tr>
                         <td>#</td>
                                    <td>
                                    <a><?php echo (strlen($row["contrato_externo"])>2) ? "Contrato" : "No tiene contrato disponible"; ?></a>
                                            <br>
                                    <small><?php echo (strlen($row["contrato_externo"])>2) ? "Subida el ".$row["fecha_upload_contrato"] : ""; ?></small>
                                    </td>



                            <td>
                                            <ul class="list-inline">
                                            <li>
                                          <!--  <i class="fa fa-file-picture-o"></i> 
                                            Functional-requirements.docx -->

                     <?php echo (strlen($row["contrato_externo"])>2) ? '<a href="./model/documentos_resumen_trabajador/uploads/visualizar_pdf_blob.php?id='.$row["id"].'" ><i class="fa fa-file-pdf-o"></i> Visualizar '  : ""; ?>
                                            </a>
                                            </li>
                                            </ul>
                            </td>
                         <td>
                         <!--   <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>-->

                         <?php echo (strlen($row["contrato_externo"])>2) ? '<a href="#" class="btn btn-info btn-xs"  data-toggle="modal" data-target=".bs-example-modal-lg" ><i class="fa fa-pencil"></i> Actualizar </a>
                            <a href="#" class="btn btn-danger btn-xs" name="contrato" data-toggle="modal" onclick="borrar(this)" data-target=".modal_borrar"><i class="fa fa-trash-o"></i> Borrar </a>  ' : ''; ?>
                                         
                        </td>


                        
                      
                        </tr>
                        <?php endforeach; ?>








<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

                      </tbody>
                    </table>
                    <!-- end project list -->

  
    
        <!-- /page content -->

 
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Agrega documentos</button>

                  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Upload Documentos</h4>
                        </div>
                        <div class="modal-body">
                          <h4>Elije el archivo</h4>
                           <form enctype="multipart/form-data" class="form-horizontal form-label-left" action="./model/documentos_resumen_trabajador/servidor_upload_files.php" method="POST" novalidate>

                      <p>Selecciona archivos asociados al trabajador. Si eliges la opción de fotografía, aparecerá en el perfil del trabajador. Si seleccionas contrato corresponde a un trabajador cuyo ingreso no fue con Sister ERP. Podrás guardar otro tipo de archivos si lo deseas seleccionando Otro. 
                      </p>
                      <span class="section">Gestión Documentos</span>

                <input type="hidden" value='<?php echo $_GET["id"]; ?>' name="id_trabajador" id="id_trabajador">
                <input type="hidden" value='<?php echo $usuario; ?>' name="usuario">
                <input type="hidden" value='<?php echo $pass; ?>' name="pass">
                <input type="hidden" value='<?php echo $bd; ?>' name="bd">

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Tipo documento <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select type="text" id="tipo_documento_select" name="tipo_documento_select" required="required" class="form-control col-md-7 col-xs-12">
                          <option>Selecciona el tipo documento</option>
                              <option value="contrato">Contrato</option>
                              <option value="foto">Fotografía Trabajador</option>
                      <!--        <option value="otro">Otro</option> -->
                          </select>
                        </div>
                      </div>
<script>
document.getElementById("tipo_documento_select").addEventListener("change", function(){
valor_select= new String(this.value);
otro= new String('otro');
if(valor_select.trim() === otro.trim()){
    
    document.getElementById("div_display_variable").style.display='block';

}else{
    document.getElementById("div_display_variable").style.display='none';
}
}, false)
    </script>
<script src="./js/upload_documentos/js/uploading.js"></script>
                      <div class="item form-group" style="display:none" id="div_display_variable">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Nombre Archivo <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="nombre_archivo" name="nombre_archivo" required="required" class="form-control col-md-7 col-xs-12">   
                        </div>
                      </div>
    <!--  <input type="file" name="fileToUpload" id="fileToUpload"> -->

    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Archivo <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="file" id="documento_tipo_file" name="documento_tipo_file"  class="form-control col-md-7 col-xs-12">   
                        </div>
                      </div>


                      <div class="ln_solid"></div>


                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                         <!-- <button type="submit" class="btn btn-primary">Cancel</button>-->
                         <!-- <button id="send" type="submit" class="btn btn-success">Subir</button>-->
                        </div>
                      </div>


                   
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal" >Cerrar</button>
                          <input type="submit" class="btn btn-primary">
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>




















                  <!--   -->




          <!--        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modal_borrar">Agrega documentos</button>-->

                  <div class="modal fade modal_borrar" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Sister ERP</h4>
                        </div>
                        <div class="modal-body">
                          <h4>¿Deseas borrar el registro?</h4>
                           <form enctype="multipart/form-data" class="form-horizontal form-label-left" action="./model/documentos_resumen_trabajador/servidor_upload_files.php" method="POST" novalidate>

                      <p>Si aceptas eliminarás el registro.
                      </p>


                     <input type="hidden"  value='<?php echo $_GET["id"]; ?>' id="">

                     <div class="item form-group">
                       
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                        <button type="button" class="btn btn-success" id="botton_borrar" onclick="funcion_borrar()" data-dismiss="modal" >Aceptar</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal" >Cancelar</button>
                        </div>
                      </div>              
                   
                        </div>
                      
                        </form>
                      </div>
                    </div>
                  </div>





                  <!-- -->