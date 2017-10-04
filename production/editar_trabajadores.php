<?php require("./model/config/config.php"); ?>
<?php require("./header/compendio_head.php"); ?>
<?php $db1 = new PDO('mysql:host=localhost;dbname='.$bd, $usuario, $pass);
$db1->exec('SET CHARACTER SET utf8');
$user= $_SESSION["usuario"];
$empleado=$_GET["id"];
$resultado = $db1->query("SELECT * from ingreso_empleados WHERE nombre_empresa_usuario_plataforma='$user' and id='$empleado'");




 
?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Información </h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Actualiza <small>Datos personales</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <?php foreach($resultado as $row): ?>
                    <form class="form-horizontal form-label-left" novalidate>

                      <p>Puedes actualizar los datos de tus empleados desde acá. Todos los cambios quedarán guardadados
                        en la base de datos.  <?php echo "<b>". $row["nombre"] . " tiene un  ". $row["tipo_contrato"] . "</b>";  ?>
                      </p>
                      <span class="section">Datos Personales</span>

                      <div class="item form-group">
                         <!-- ANTES FOREACH ESTABA ACA -->
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php echo $row["nombre"]; ?>" disabled="disabled" id="nombre" class="form-control col-md-7 col-xs-12"  required="required" type="text">
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="apellido">Apellido <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php echo $row["apellido"]; ?>"  disabled="disabled" id="apellido" class="form-control col-md-7 col-xs-12"  required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Edad <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            
                          <input value="<?php echo $row["edad"]; ?>" disabled="disabled" type="number" id="email2" name="confirm_email"  data-validate-linked="email" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fecha_nacimiento">Fecha Nacimiento <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php echo $row["nacimiento"]; ?>" disabled="disabled"  type="text" id="fecha_nacimiento"  required="required"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="direccion">Dirección <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php echo $row["direccion"]; ?>" disabled="disabled" type="text" id="direccion" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="comuna_sucursal">Comuna <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php echo $row["comuna_empleado"]; ?>" disabled="disabled" type="text" id="comuna_empleado" required="required"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="puesto">Puesto <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php echo $row["puesto"]; ?>" disabled="disabled" type="text" name="puesto" class="optional form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="empresa" class="control-label col-md-3">Empresa</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php echo $row["empresa"]; ?>" disabled="disabled" id="empresa" type="text" name="empresa" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="jefatura" class="control-label col-md-3 col-sm-3 col-xs-12">Jefatura</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php echo $row["jefatura"]; ?>" disabled="disabled" id="jefatura" type="text"  class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ingreso">Ingreso <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php echo $row["ingreso"]; ?>" disabled="disabled" type="date" id="ingreso"  required="required"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="isapre">Isapre <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value=<?php echo $row["isapre"]; ?> disabled="disabled" type="text" id="isapre" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>



                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="afp">Afp <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value=<?php echo $row["afp"]; ?> disabled="disabled" type="text" id="afp"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="empresa_previa">Empresa previa <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php echo $row["empresa_previa"]; ?>"  disabled="disabled" type="text" id="empresa_previa" required="required"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="direccion_sucursal">Dirección sucursal <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php echo $row["direccion_sucursal"]; ?>"  disabled="disabled" type="text" id="direccion_sucursal" required="required"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="comuna_sucursal">Comuna sucursal <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php echo $row["comuna_sucursal"]; ?>" disabled="disabled" type="text" id="comuna_sucursal" required="required"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
<!--
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Tipo Contrato <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value=<?php /* echo $row["comuna_sucursal"]; */     ?> disabled="disabled" type="text" id="comuna_sucursal" required="required"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>-->

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="comuna_sucursal">Nacionalidad <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php echo $row["nacionalidad_empleado"]; ?>" disabled="disabled" type="text" id="nacionalidad_empleado" required="required"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="comuna_sucursal">Jornada en horas <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php echo $row["horas_jornada"]; ?>" disabled="disabled" type="text" id="horas_jornada" required="required"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
<!--
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="comuna_sucursal">Direccion <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php// echo $row["direccion_sin_comuna_empleado"]; ?>" disabled="disabled" type="text" id="direccion_sin_comuna_empleado" required="required"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>-->

                    

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="comuna_sucursal">Sueldo escrito <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php echo $row["sueldo_escrito"]; ?>" disabled="disabled" type="text" id="sueldo_escrito" required="required"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="comuna_sucursal">Último día semana trabajo   <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php echo $row["ultimo_dia_semana_jornada"]; ?>" disabled="disabled" type="text" id="ultimo_dia_semana_jornada" required="required"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="comuna_sucursal">Hora entrada   <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php echo $row["hora_entrada_jornada"]; ?>" disabled="disabled" type="text" id="hora_entrada_jornada" required="required"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="comuna_sucursal">Hora salida   <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php echo $row["hora_salida_jornada"]; ?>" disabled="disabled" type="text" id="hora_salida_jornada" required="required"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="comuna_sucursal">Descanso en minutos   <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php echo $row["descanso_o_almuerzo_en_minutos"]; ?>" disabled="disabled" type="text" id="descanso_o_almuerzo_en_minutos" required="required"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="comuna_sucursal">Hora inicio descanso   <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php echo $row["hora_inicio_descanso"]; ?>" disabled="disabled" type="text" id="hora_inicio_descanso" required="required"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="comuna_sucursal">Hora fin descanso   <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php echo $row["hora_fin_descanso"]; ?>" disabled="disabled" type="text" id="hora_fin_descanso" required="required"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                























                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Sueldo <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value=<?php
                           if(strlen($row["sueldo"]) < 1){ 
                          echo "Sueldo";
                           }else{ 
                           echo $row["sueldo"]; } ?> disabled="disabled" id="name" class="form-control col-md-7 col-xs-12"  name="name" placeholder="both name(s) e.g Jon Doe" required="required" type="text">
                        </div>
                      </div>



<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Rut <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value=<?php
                           if(strlen($row["rut"]) < 1){ 
                          echo "11222333-k";
                           }else{ 
                           echo $row["rut"]; } ?> disabled="disabled" id="rut" class="form-control col-md-7 col-xs-12"  name="name" placeholder="11222333-k" required="required" type="text">
                        </div>
                      </div>

<input type="hidden" value=<?php echo $_GET["id"]; ?> >
<input type="hidden" value=<?php echo $user; ?> >
                      <!--<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Textarea <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="textarea" required="required" name="textarea" class="form-control col-md-7 col-xs-12"></textarea>
                        </div>
                      </div>-->
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button id="cancelar" class="btn btn-primary">Cancelar</button>
                          <button id="actualizar"  class="btn btn-danger">Actualizar</button>
                          
                          

<!--<span class="fa fa-spin fa-spinner"></span>-->



<script>
var rut= document.getElementById("rut");
setTimeout(visualizar_contrato_funcion, 300)
function visualizar_contrato_funcion(){


var visualizar_contrato= document.getElementById("visualizar_contrato");

visualizar_contrato.addEventListener("click", function(e){
e.preventDefault();
alert("asdf")
  location.href= "./model/generacion_contratos/vista_contrato.php?trabajador="+rut.value
}, false)
}
</script>


<button id="visualizar_contrato"  class="btn btn-danger"><span class="fa fa-file-pdf-o"></span> Visualizar Contrato</button>

<button type="button" id="guardar" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Guardar</button>

                  <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Modificaciones Guardadas</h4>
                        </div>
                        <div class="modal-body">
                          <h4>Actualización realizada</h4>
                          <p> Los cambios que realizaste fueron ingresados a la base de datos. Recuerda tener precaución con los datos de tus 
                            empleados. 
                          </p>
                          
                        </div>
                        <div class="modal-footer">
                          
                          <button id="volver" type="button" class="btn btn-primary">Volver</button>
                        </div>

                      </div>
                    </div>
                  </div>













                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>


<script src="./js/funcion_fetch.js"></script>
<script src="./js/actualizar_empleados_js.js"></script>


        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- validator -->
    <script src="../vendors/validator/validator.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>