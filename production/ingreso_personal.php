<?php include  "./model/config/config.php"; 

?>
<?php require("./header/compendio_head.php");

require './model/afp_isapres/conexion_base_abstracta.php';
require './model/variables_empresa/clase_variables_empresa.php';
$variables_empresa= new crud_variables_empresa();
?>
<script src="./js/funcion_contrato.js"></script>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Ingreso Personal</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Búsqueda..">
                    <span class="input-group-btn">
                              <button type="button"  class="btn btn-default" type="button">Go!</button>
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
                    <h2>Formulario de ingreso <small id="descripcion_contrato_actual">Contratación</small></h2>
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












   <!-- Large modal -->
     <!--<button type="button"  type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>-->

     <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="modal_inicio">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button"  type="button" class="close" data-dismiss="modal" id="volver_inicio_desde_modal_inicio_contratacion"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Inicio proceso contratación</h4>
                        </div>
                        <div class="modal-body">
                          <h4>Selecciona el tipo de empleado que estás contratando: </h4>
                          <p>Podrás generar un contrato si así lo deseas para tu nuevo trabajador. Cada contrato está basado en los modelos de contratación que ofrece la dirección nacional del trabajo en su sitio http://www.dt.gob.cl.</p>
                          <form class="form-horizontal form-label-left" action="" method="get">

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group">
<label class="control-label col-md-12 col-sm-12 col-xs-12" for="first-name">¿Deseas generar contrato automático? <span class="required">*</span>
</label>
<div class="col-md-12 col-sm-12 col-xs-12">
  <select name="" type="text" id="tipo_contrato"  class="form-control col-md-12 col-xs-12 contrato">
<option value="" class="tipo_contrato">Si, usaré el contrato generado por Sister ERP.</option>
<option value="" class="tipo_contrato">No. Importaré un pdf, word o imagen del contrato pues ya está hecho.</option>
  </select>
</div>
</div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->


                     <!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group">
<label class="control-label col-md-12 col-sm-12 col-xs-12" for="first-name">Tipo de contrato <span class="required">*</span>
</label>
<div class="col-md-12 col-sm-12 col-xs-12">
  <select name="" type="text" id="generacion_contrato"  class="form-control col-md-12 col-xs-12 contrato">
  <?php 


$tipos_contrato= $variables_empresa->get_todo_sin_parametro("tipos_de_contrato");

foreach ($tipos_contrato as $key => $value) {
echo '<option value="' .$value["tipo_contrato"] .'" class="tipo_contrato">'.$value["tipo_contrato"].'</option>';
}
?>
  </select>
</div>
</div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

                        </form>



                         
                        </div>




                        
                        <div class="modal-footer">
                          <button type="button"  type="button" class="btn btn-default" id="continuar_inicio_proceso_contratacion">Continuar</button>
                          <button type="button"  type="button" class="btn btn-primary" id="volver_inicio_desde_modal_inicio_contratacion" onClick="funcion_volver_inicio_desde_modal_inicio_contratacion()" >Volver</button>
                        </div>

                      </div>
                    </div>
                  </div>

                  <!-- Small modal -->


















                    <!-- Smart Wizard -->
                    <p>Completa los datos y sigue las instrucciones. Recuerda que estás agregando a la base de datos un nuevo empleado. Al finalizar se generarán los documentos de ingreso a la plataforma.</p>
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                              Paso 1<br />
                                              <small>Datos Personales</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              Paso 2<br />
                                              <small>Antecedentes</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                              Paso 3<br />
                                              <small>AFP / Isapre </small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-4">
                            <span class="step_no">4</span>
                            <span class="step_descr">
                                              Paso 4<br />
                                              <small>Agregar Trabajador</small>
                                          </span>
                          </a>
                        </li>
                      </ul>
                      <div id="step-1">
                        <form class="form-horizontal form-label-left" action="" method="get">

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombres <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="hidden" class="contrato_parte_estandar" id="nombre_empresa" value='<?php echo $_SESSION["usuario"]; ?>'  >
                              <input name="nombre" type="text" id="nombre"  class="form-control col-md-7 col-xs-12 contrato_parte_estandar">
                            </div>
                          </div>


                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Apellidos <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input name="apellido" type="text" id="apellido" name="last-name"  class="form-control col-md-7 col-xs-12 contrato_parte_estandar">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Estado civil <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input name="" type="text" id="estado_civil" name=""  class="form-control col-md-7 col-xs-12 contrato_parte_estandar">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Dirección<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input name="direccion" id="direccion" class="form-control col-md-7 col-xs-12 contrato_parte_estandar" type="text" name="middle-name">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Comuna<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input name="comuna" id="comuna" class="form-control col-md-7 col-xs-12 contrato_parte_estandar" type="text" name="middle-name">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nacionalidad<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input name="nacionalidad" id="nacionalidad" class="form-control col-md-7 col-xs-12 contrato_parte_estandar" type="text" name="middle-name">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Género<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div id="gender" class="btn-group" data-toggle="buttons">
                               
                                  <select name="hombre" type="select" id="sexo" class="form-control col-md-7 col-xs-12 contrato_parte_estandar">
                                 
                               <option value="hombre">Hombre</option>
                               <option value="mujer">Mujer</option>
                               </select>
                               
                              </div>
                            </div>
                          </div>


                          
                         
                         
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha Nacimiento <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input name="nacimiento" id="nacimiento" class="date-picker form-control col-md-7 col-xs-12 contrato_parte_estandar"  type="date">
                            </div>
                          </div>


                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">RUT <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input name="nombre" type="text" id="rut"  class="form-control col-md-7 col-xs-12 contrato_parte_estandar">
                            </div>
                          </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Edad <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input name="nombre" type="number" id="edad"  class="form-control col-md-7 col-xs-12 contrato_parte_estandar">
                            </div>
                          </div>



                        </form>

                      </div>





















































                      <div id="step-2">
                        <h2 class="StepTitle">Antecedentes </h2>
                        <p>
                          Agrega el sueldo que se le entregará a tu trabajador. Indicando el valor líquido obtendrás automaticamente valor bruto y detalle de cada ítem.
                        </p>
                      <br><!--Sacar este br, hacerlo con css -->

 <form class="form-horizontal form-label-left" action="" method="get">

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
                       <div class="form-group" id="sueldo">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Sueldo Líquido <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="sueldo_liquido" type="number"   class="form-control col-md-7 col-xs-12 contrato">
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->


<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
                       <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jefatura o Departamento <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input name="jefatura" type="text" id="jefatura"  class="form-control col-md-7 col-xs-12 contrato">
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
                       <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Empresa <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input name="empresa" type="text" id="empresa"  class="form-control col-md-7 col-xs-12 contrato">
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->   

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
                       <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Puesto <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input name="puesto" type="text" id="puesto"  class="form-control col-md-7 col-xs-12 contrato">
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->  

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
                       <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Horario <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select id="horario"  class="form-control col-md-7 col-xs-12 contrato" name="horario">
                              <option>36 Horas</option>
                              <option>45 Horas</option>
                              <option>18 Horas</option>
                              </select>
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->  
                         
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Empresa Previa <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input name="empresa_previa" type="text" id="empresa_previa"  class="form-control col-md-7 col-xs-12 contrato">
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->  

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group" id="sueldo_escrito_div">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Sueldo Escrito <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="sueldo_escrito" type="text"  placeholder="Ej: Quinientos mil pesos"  class="form-control col-md-7 col-xs-12 contrato">
                            </div>
                       </div> 
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC --> 


<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Comuna Sucursal <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control col-md-7 col-xs-12  contrato" id="select_sucursal" name="comuna_sucursal">
                            <option value="Seleccion">Selecciona la comuna de tu sucursal</option>
<?php 

$variable_de_la_empresa= $variables_empresa->get_por_parametro_distinct("sucursales", $_SESSION["usuario"]);

foreach ($variable_de_la_empresa as $key => $value) {
  echo '<option value="' .$value["comuna"] .'" class="comuna_sucursal">'.$value["comuna"].'</option>';
}
?>
</select>
                            </div>
                       </div> 
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC --> 


<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Dirección Sucursal <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control col-md-7 col-xs-12 contrato" id="select_sucursal_direccion" name="direccion_sucursal">



 <option value="" id="option_direccion_sucursal"></option>


</select>
                            </div>
                       </div> 
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC --> 

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Primer Día laboral de la semana <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select name="primer_dia_laboral_semana" placeholder="Ej: Lunes" type="text" id="primer_dia_semana_jornada"  class="form-control col-md-7 col-xs-12 contrato">
<option value="lunes">Lunes</option>
<option value="martes">Martes</option>
<option value="miercoles">Miércoles</option>
<option value="jueves">Jueves</option>
<option value="viernes">Viernes</option>
<option value="sabado">Sábado</option>
<option value="domingo">Domingo</option>
                              </select>
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC --> 

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Último Día laboral de la semana <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select name="ultimo_dia_laboral_semana" placeholder="Ej: Viernes" type="text" id="ultimo_dia_semana_jornada"  class="form-control col-md-7 col-xs-12 contrato">
<option value="viernes">Viernes</option>
<option value="lunes">Lunes</option>
<option value="martes">Martes</option>
<option value="miercoles">Miércoles</option>
<option value="jueves">Jueves</option>
<option value="sabado">Sábado</option>
<option value="domingo">Domingo</option>
                             </select>
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->  

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Hora Entrada Jornada <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input name="hora_entrada_jornada" type="time" id="hora_entrada_jornada"  class="form-control col-md-7 col-xs-12 contrato">
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC --> 

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Hora Salida Jornada <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input name="hora_salida_jornada" type="time" id="hora_salida_jornada"  class="form-control col-md-7 col-xs-12 contrato">
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Colación en Minutos <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input name="descanso_en_minutos" type="number" id="descanso_o_almuerzo_en_minutos"  class="form-control col-md-7 col-xs-12 contrato">
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Hora Inicio Descanso <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input name="hora_inicio_descanso" type="time" id="hora_inicio_descanso"  class="form-control col-md-7 col-xs-12 contrato">
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Hora Fin Descanso <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input name="hora_fin_descanso" type="time" id="hora_fin_descanso"  class="form-control col-md-7 col-xs-12 contrato">
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->












<!--

EN ESTE APARTADO VA LO RELACIONADO CON CONTRATO 
PARA prevencion riesgos,  
SIN EMBARGO  SE PUEDE USAR ALGUN INPUT
PARA OTROS TIPOS DE CONTRATOS

++++++++++++++++++++++++++++++++
################################
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$


  -->



<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group prevencion_riesgos" style="display:none">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Código Actividad Ecónomica <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="codigo_actividad_economica" name="codigo_actividad_prevencion_riesgos" class="form-control col-md-7 col-xs-12 contrato" >
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group prevencion_riesgos" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Servicio de salud que aprueba<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input  type="text" name="servicio_salud_aprueba_prevencion_riesgos" id="servicio_salud_aprueba_prevencion_riesgos"  class="form-control col-md-7 col-xs-12 contrato" placeholder="Seremi">
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group prevencion_riesgos" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Técnico o Profesional <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select  type="text" id="tecnico_o_profesional_prevencion_riesgos" name="tecnico_o_profesional_prevencion_riesgos"  class="form-control col-md-7 col-xs-12 contrato" >
<option value="tecnico">Técnico</option>
<option value="profesional">Profesional</option>
                              </select>
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->


<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group prevencion_riesgos" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Número de inscripción <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input  type="text" id="numero_inscripcion_prevencion_riesgos"  class="form-control col-md-7 col-xs-12 contrato" >
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group prevencion_riesgos" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Número de días a trabajar semanal <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input  type="number" id="numero_dias_a_trabajar_semana_prevencion_riesgos"  class="form-control col-md-7 col-xs-12 contrato" >
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group prevencion_riesgos" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Bono locomoción mensual <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input  type="number" id="bono_locomocion_mensual_prevencion_riesgos"  class="form-control col-md-7 col-xs-12 contrato" >
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group prevencion_riesgos chofer_cargas" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Viático diario <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input  type="number" id="viatico_diario_prevencion_riesgos"  class="form-control col-md-7 col-xs-12 contrato" >
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group prevencion_riesgos construccion_contrato auxiliar_transporte_contrato contrato_a_trato contrato_agricola_permanente contrato_plazo_fijo contrato_profesor" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Duración contrato <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input  type="text" id="duracion_contrato"  class="form-control col-md-7 col-xs-12 contrato" placeholder="">
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->


<!--

EN ESTE APARTADO VA LO RELACIONADO CON CONTRATO 
PARA prevencion riesgos, 
SIN EMBARGO  SE PUEDE USAR ALGUN INPUT
PARA OTROS TIPOS DE CONTRATOS

++++++++++++++++++++++++++++++++
################################
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$


  -->




















<!--

EN ESTE APARTADO VA LO RELACIONADO CON CONTRATO 
PARA Teatro y television, estricto rigor TELEVISION
SIN EMBARGO  SE PUEDE USAR ALGUN INPUT
PARA OTROS TIPOS DE CONTRATOS

++++++++++++++++++++++++++++++++
################################
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$


  -->
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group television_contrato teatro_contrato" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre Produccion <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input  type="text" id="nombre_produccion_television"  class="form-control col-md-7 col-xs-12 contrato" placeholder="">
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group television_contrato teatro_contrato" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Locación producción <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input  type="text" id="locacion_produccion_television"  class="form-control col-md-7 col-xs-12 contrato" placeholder="">
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group television_contrato" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Capitulos totales <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input  type="number" id="capitulos_totales_contemplados"  class="form-control col-md-7 col-xs-12 contrato" placeholder="">
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group television_contrato" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Inicio Grabaciones <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input  type="date" id="inicio_rodaje"  class="form-control col-md-7 col-xs-12 contrato" placeholder="">
                            
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group television_contrato" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Fin Grabaciones <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input  type="date" id="fin_rodaje"  class="form-control col-md-7 col-xs-12 contrato" placeholder="">
                            
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->


<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group television_contrato teatro_contrato" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Forma de pago <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input  type="text" id="forma_de_pago_sueldo"  class="form-control col-md-7 col-xs-12 contrato" placeholder="Transferencia, Cheque, Efectivo, etc.">
                            
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--

EN ESTE APARTADO VA LO RELACIONADO CON CONTRATO 
PARA Teatro y television, estricto rigor TELEVISION
SIN EMBARGO  SE PUEDE USAR ALGUN INPUT
PARA OTROS TIPOS DE CONTRATOS

++++++++++++++++++++++++++++++++
################################
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$


  -->




























<!--

EN ESTE APARTADO VA LO RELACIONADO CON CONTRATO 
PARA CONSTRUCCION
SIN EMBARGO  SE PUEDE USAR ALGUN INPUT
PARA OTROS TIPOS DE CONTRATOS

++++++++++++++++++++++++++++++++
################################
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$


  -->
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group construccion_contrato" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre de la obra <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input  type="text" id="nombre_obra_construccion"  class="form-control col-md-7 col-xs-12 contrato" placeholder="">
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group construccion_contrato" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Dirección de la obra <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input  type="text" id="locacion_obra_construccion"  class="form-control col-md-7 col-xs-12 contrato" >

                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group construccion_contrato" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Comuna de la obra <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input  type="text" id="comuna_locacion_obra_construccion"  class="form-control col-md-7 col-xs-12 contrato" >

                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group construccion_contrato" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ciudad de la obra <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input  type="text" id="ciudad_obra_construccion"  class="form-control col-md-7 col-xs-12 contrato" >

                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group construccion_contrato" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tipo de pago <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <select  type="text" id="tipo_pago_construccion"  class="form-control col-md-7 col-xs-12 contrato" >
<option value="pago_a_trato">Pago a Trato</option>
<option value="pago_por_dia">Pago por día</option>

                              </select>

                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group construccion_contrato" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Cantidad a pagar <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input  type="number" id="cantidad_a_pagar_construccion" placeholder="Escribir cantidad a pagar según sea: A trato o Por día."  class="form-control col-md-7 col-xs-12 contrato" >

                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->


<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group construccion_contrato" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Adelanto o quincena <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input  type="number" id="monto_adelanto" placeholder="Escribir monto del adelanto."  class="form-control col-md-7 col-xs-12 contrato" >

                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group construccion_contrato" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Fecha pago adelanto <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input  type="number" id="fecha_adelanto" placeholder="Dia del mes que se paga, Ej: 15"  class="form-control col-md-7 col-xs-12 contrato" >

                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->


<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group construccion_contrato" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Fecha Pago Sueldo <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input  type="number" id="fecha_pago_sueldo" placeholder="Dia del mes que se paga, Ej: 15"  class="form-control col-md-7 col-xs-12 contrato" >

                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->


<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div id="gratificacion_div_aca_se_pega">
<div class="form-group construccion_contrato contrato_a_trato contrato_profesor" style="display:none" id="gratificacion_div_aca_se_copia">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Gratificación <span class="required">*</span>
                            </label>&nbsp;<button type="button"  data-toggle="tooltip"  data-original-title="Presiona el botón para agregar mas gratificaciones" onClick="botones_agregar_items(this, 'gratificacion_div_aca_se_pega')" value="gratificacion_div_aca_se_copia" class=""><span class="fa fa-plus-square"></span></button>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <select  type="text" id="con_sin_gratificacion"  class="form-control col-md-7 col-xs-12 con_sin_gratificacion" onchange='enabled_disabled_dinamico(this, "con", "sin")' >
<option value="sin">Sin gratificación diaria</option>
<option value="con">Con Gratificación diaria</option>

                              </select>
                           <br><br> 
                              <input   type="text" placeholder="Detalla Gratificación" class="form-control col-md-7 col-xs-12 con_sin_gratificacion" disabled > <br><br>
                              <input  type="number" placeholder="Monto " class="form-control col-md-7 col-xs-12 con_sin_gratificacion" disabled >
                            </div>
                       </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div id="incentivos_div_aca_se_pega">
<div class="form-group construccion_contrato contrato_a_trato contrato_profesor" style="display:none" id="incentivos_div_aca_se_copia" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Incentivos <span class="required">*</span>
                            </label>&nbsp;<button type="button"  data-toggle="tooltip"  data-original-title="Presiona el botón para agregar mas incentivos" onClick="botones_agregar_items(this, 'incentivos_div_aca_se_pega')" value="incentivos_div_aca_se_copia" class=""><span class="fa fa-plus-square"></span></button>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <select  type="text" id=""  class="form-control col-md-7 col-xs-12 con_sin_incentivo" onchange='enabled_disabled_dinamico(this, "con", "sin","incentivo_contrato_construccion")' >
<option value="sin">Sin incentivos diario</option>
<option value="con">Con incentivos diario</option>

                              </select>
                           <br><br> 
                              <input  type="text" placeholder="Detalla incentivo" class="form-control col-md-7 col-xs-12 con_sin_incentivo" disabled > <br><br>
                              <input  type="number" placeholder="Monto " class="form-control col-md-7 col-xs-12 con_sin_incentivo" disabled >
                            </div>
                       </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div id="bono_div_aca_se_pega">
<div class="form-group construccion_contrato contrato_a_trato contrato_profesor" style="display:none" id="bono_div_aca_se_copia" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Bono <span class="required">*</span>
                            </label>&nbsp;<button type="button"  data-toggle="tooltip"  data-original-title="Presiona el botón para agregar mas bonos" onClick="botones_agregar_items(this, 'bono_div_aca_se_pega')" value="bono_div_aca_se_copia" class=""><span class="fa fa-plus-square"></span></button>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <select  type="text" id=""  class="form-control col-md-7 col-xs-12 con_sin_bono" onchange='enabled_disabled_dinamico(this, "con", "sin")' >
<option value="sin">Sin bono diario</option>
<option value="con">Con bono diario</option>

                              </select>
                           <br><br> 
                              <input  type="text" placeholder="EJ: Bono por puntualidad, etc." class="form-control col-md-7 col-xs-12 contrato con_sin_bono" disabled > <br><br>
                              <input  type="number" placeholder="Monto " class="form-control col-md-7 col-xs-12 contrato con_sin_bono" disabled >
                            </div>
                       </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->


<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<div class="form-group construccion_contrato practica_profesional contrato_a_trato" style="display:none">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Asignación de colación <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <select  type="text" id="asignacion_colacion_sin_con"  class="form-control col-md-7 col-xs-12 asignacion_colacion" onchange='enabled_disabled_dinamico_corto(this, "con", "sin")' >
<option value="sin">Sin asignación</option>
<option value="con">Con asignación</option>

                              </select>
                              <input id="monto_asignacion_colacion" type="number" placeholder="Monto " class="form-control col-md-7 col-xs-12 asignacion_colacion" disabled >
                            </div>
                       </div>
                       
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<div class="form-group construccion_contrato practica_profesional contrato_a_trato" style="display:none">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Asignación de movilización <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <select  type="text" id="booleano_asignacion_movilizacion"  class="form-control col-md-7 col-xs-12 contrato" onchange='enabled_disabled_dinamico_corto(this, "con", "sin")' >
<option value="sin">Sin asignación</option>
<option value="con">Con asignación</option>

                              </select>
                              <input  type="number" id="monto_asignacion_movilizacion" placeholder="Monto " class="form-control col-md-7 col-xs-12 contrato" disabled >
                            </div>
                       </div>
                       
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<div class="form-group construccion_contrato contrato_a_trato" style="display:none">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Asignación de desgaste de herramientas <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <select  type="text" id="booleano_asignacion_desgaste_herramientas"  class="form-control col-md-7 col-xs-12 contrato" onchange='enabled_disabled_dinamico_corto(this, "con", "sin")' >
<option value="sin">Sin asignación</option>
<option value="con">Con asignación</option>

                              </select>
                              <input  type="number" placeholder="Monto "  id="monto_asignacion_desgaste_herramientas" class="form-control col-md-7 col-xs-12 contrato" disabled >
                            </div>
                       </div>
                       
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<div class="form-group construccion_contrato" style="display:none">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Asignación de matrimonio <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <select  type="text" id="booleano_asignacion_matrimonio"  class="form-control col-md-7 col-xs-12 contrato" onchange='enabled_disabled_dinamico_corto(this, "con", "sin")' >
<option value="sin">Sin asignación</option>
<option value="con">Con asignación</option>

                              </select>
                              <input  type="number"  id="monto_asignacion_matrimonio" placeholder="Monto (Pagadero presentando documentación). " class="form-control col-md-7 col-xs-12 contrato" disabled >
                            </div>
                       </div>
                       
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--

EN ESTE APARTADO VA LO RELACIONADO CON CONTRATO 
PARA CONSTRUCCION
SIN EMBARGO  SE PUEDE USAR ALGUN INPUT
PARA OTROS TIPOS DE CONTRATOS

++++++++++++++++++++++++++++++++
################################
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$


  -->


























































<!--

EN ESTE APARTADO VA LO RELACIONADO CON CONTRATO 
PARA teatro
SIN EMBARGO  SE PUEDE USAR ALGUN INPUT
PARA OTROS TIPOS DE CONTRATOS

++++++++++++++++++++++++++++++++
################################
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$


  -->
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group teatro_contrato contrato_profesor" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre establecimiento <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input  type="text" id="nombre_establecimiento_teatro"  class="form-control col-md-7 col-xs-12 contrato" placeholder="Nombre establecimiento donde trabajará">
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group teatro_contrato contrato_a_trato" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tiempo de pago <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select  type="text" id="tiempo_pago"  class="form-control col-md-7 col-xs-12 contrato" >
<option value="semanal">Semanal</option>
<option value="quincenal">Quincenal</option>
<option value="mensual">Mensual</option>
                              </select>
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--

EN ESTE APARTADO VA LO RELACIONADO CON CONTRATO 
PARA teatro
SIN EMBARGO  SE PUEDE USAR ALGUN INPUT
PARA OTROS TIPOS DE CONTRATOS

++++++++++++++++++++++++++++++++
################################
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$


  -->


























































































<!--

EN ESTE APARTADO VA LO RELACIONADO CON CONTRATO 
PARA CHOFER TRANSPORTE,  
SIN EMBARGO  SE PUEDE USAR ALGUN INPUT
PARA OTROS TIPOS DE CONTRATOS

++++++++++++++++++++++++++++++++
################################
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$


  -->







<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group chofer_cargas" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Transporte entre <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input  type="text" id="transporte_entre"  class="form-control col-md-7 col-xs-12 contrato" placeholder="EJ: Santiago - Concepción">
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group chofer_cargas contrato_a_trato" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tareas a desarrollar <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <textarea  cols="10" rows="5"  type="text" id="tareas_a_desarrollar"  class="form-control col-md-7 col-xs-12 contrato" placeholder="Listar las tareas a desarrollar"></textarea>
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group chofer_cargas" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Horas diarias descanso Chofer <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input  type="number" id="horas_diarias_chofer"  class="form-control col-md-7 col-xs-12 contrato" placeholder="En horas">
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group chofer_cargas" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Días descanso Chofer <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input  type="text" id="dias_descanso_chofer"  class="form-control col-md-7 col-xs-12 contrato" placeholder="Días libres a la semana">
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->




<!--

EN ESTE APARTADO VA LO RELACIONADO CON CONTRATO 
PARA CHOFER TRANSPORTE, 
SIN EMBARGO  SE PUEDE USAR ALGUN INPUT
PARA OTROS TIPOS DE CONTRATOS

++++++++++++++++++++++++++++++++
################################
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$


  -->

























<!--

EN ESTE APARTADO VA LO RELACIONADO CON CONTRATO 
PARA auxiliar en TRANSPORTE,  
SIN EMBARGO  SE PUEDE USAR ALGUN INPUT
PARA OTROS TIPOS DE CONTRATOS

++++++++++++++++++++++++++++++++
################################
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$


  -->

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group auxiliar_transporte_contrato" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Monto pago colación diario <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input  type="number" id="monto_pago_colacion_diario"  class="form-control col-md-7 col-xs-12 contrato" placeholder="Monto diario, EJ: $3000">
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--

EN ESTE APARTADO VA LO RELACIONADO CON CONTRATO 
PARA auxiliar en TRANSPORTE,
SIN EMBARGO  SE PUEDE USAR ALGUN INPUT
PARA OTROS TIPOS DE CONTRATOS

++++++++++++++++++++++++++++++++
################################
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

  -->




















<!--

EN ESTE APARTADO VA LO RELACIONADO CON CONTRATO 
PARA contrato de aprendizaje,  
SIN EMBARGO  SE PUEDE USAR ALGUN INPUT
PARA OTROS TIPOS DE CONTRATOS

++++++++++++++++++++++++++++++++
################################
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$


  -->

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group contrato_aprendizaje" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Oficio <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input  type="text" id="oficio"  class="form-control col-md-7 col-xs-12 contrato" placeholder="Oficio a ser impartido">
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group contrato_aprendizaje" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Maestro o guía <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input  type="text" id="maestro_o_guia"  class="form-control col-md-7 col-xs-12 contrato" placeholder="Guía o maestro designado">
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group contrato_aprendizaje" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Duración Contrato Aprendizaje <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input onChange="if(this.value > 24) { alert('No puede durar mas de 24 meses'); this.value='' } " type="number" id="duracion_contrato_de_aprendizaje"  class="form-control col-md-7 col-xs-12 contrato" placeholder="Duración en meses. No puede sobrepasar los 2 años.">
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--

EN ESTE APARTADO VA LO RELACIONADO CON CONTRATO 
PARA contrato de aprendizaje, 
SIN EMBARGO  SE PUEDE USAR ALGUN INPUT
PARA OTROS TIPOS DE CONTRATOS

++++++++++++++++++++++++++++++++
################################
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

  -->














<!--

EN ESTE APARTADO VA LO RELACIONADO CON CONTRATO 
PARA CONVENIO PRACTICA PROFESIONAL  
SIN EMBARGO  SE PUEDE USAR ALGUN INPUT
PARA OTROS TIPOS DE CONTRATOS

++++++++++++++++++++++++++++++++
################################
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$


  -->

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group practica_profesional" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Establecimiento educacional <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input  type="text" id="establecimiento_educacional"  class="form-control col-md-7 col-xs-12 contrato" placeholder="Establecimiento educacional">
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group practica_profesional" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Docente Coordinador <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input  type="text" id="docente_coordinador"  class="form-control col-md-7 col-xs-12 contrato" placeholder="Nombre profesor">
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group practica_profesional" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Condiciones para una buena práctica <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <textarea cols="5" rows="5" type="text" id="condiciones_buena_practica"  class="form-control col-md-7 col-xs-12 contrato" placeholder="Describir condiciones necesarias para el buen cumplimiento de la práctica profesional. "></textarea> 
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group practica_profesional" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Total horas cronólogicas Práctica <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="number" id="total_horas_cronologicas_practica"  class="form-control col-md-7 col-xs-12 contrato" placeholder="Escribir en horas">
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group practica_profesional" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tope reembolsos al estudiante <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="number" id="tope_reembolso_estudiante"  class="form-control col-md-7 col-xs-12 contrato" placeholder="Tope máximo de reembolsos para el estudiante">
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group practica_profesional" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Días inasistencia permitidos <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="number" id="dias_inasistencia_permitidos"  class="form-control col-md-7 col-xs-12 contrato" placeholder="Indicar días de inasistencia que anulen práctica">
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--

EN ESTE APARTADO VA LO RELACIONADO CON CONTRATO 
PARA CONVENIO PRACTICA PROFESIONAL  
SIN EMBARGO  SE PUEDE USAR ALGUN INPUT
PARA OTROS TIPOS DE CONTRATOS

++++++++++++++++++++++++++++++++
################################
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

  -->





































<!--

EN ESTE APARTADO VA LO RELACIONADO CON CONTRATO 
PARA CONTRATO A TRATOOOOO
SIN EMBARGO  SE PUEDE USAR ALGUN INPUT
PARA OTROS TIPOS DE CONTRATOS

++++++++++++++++++++++++++++++++
################################
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$


  -->

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group contrato_a_trato" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Cantidad semanal mínima <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input  type="number" id="cantidad_semanal"  class="form-control col-md-7 col-xs-12 contrato" placeholder="Cantidad semanal mínima a rendir">
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->



<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group contrato_a_trato" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Monto por unidad <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input  type="number" id="monto_por_unidad"  class="form-control col-md-7 col-xs-12 contrato" placeholder="Monto a pagar por unidad o trabajo ejecutado">
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--

EN ESTE APARTADO VA LO RELACIONADO CON CONTRATO 
PARA CONTRATO A TRATOOOOO
SIN EMBARGO  SE PUEDE USAR ALGUN INPUT
PARA OTROS TIPOS DE CONTRATOS

++++++++++++++++++++++++++++++++
################################
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

  -->



























<!--

EN ESTE APARTADO VA LO RELACIONADO CON CONTRATO 
PARA AGRICOLA PERMANENTE
SIN EMBARGO  SE PUEDE USAR ALGUN INPUT
PARA OTROS TIPOS DE CONTRATOS

++++++++++++++++++++++++++++++++
################################
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
  -->


<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group contrato_agricola_permanente" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre Predio Agrícola <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="nombre_predio_agricola" type="text" class="form-control col-md-7 col-xs-12 contrato" placeholder="Nombre del predio">
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group contrato_agricola_permanente" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Profesión u oficio del contratado <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="profesion_oficio_del_contratado_agricola_permanente" type="text" class="form-control col-md-7 col-xs-12 contrato" placeholder="Profesión u oficio">
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group contrato_agricola_permanente" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ubicación del predio <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="ubicacion_predio" type="text" class="form-control col-md-7 col-xs-12 contrato" placeholder="Locación predio agrícola">
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->




<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<div class="form-group contrato_agricola_permanente" style="display:none">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tipo de pago  <span class="required">*</span>
</label>
<div class="col-md-6 col-sm-6 col-xs-12">
<select  type="text" name="pago_a_trato_disabled"  class="form-control col-md-7 col-xs-12 contrato" id="tipo_de_pago" onchange='enabled_disabled_input_externos(this, "con", "sin")' >
<option value="sin">Pago diario a trato</option>
<option value="con">Pago diario fijo</option>

  </select>
  <input  type="number" id="cantidad_diaria_si_es_fijo" placeholder="Monto " class="form-control col-md-7 col-xs-12 contrato" disabled >
</div>
</div>

<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->




<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div id="pago_trato_div_aca_se_pega">
<div class="form-group contrato_agricola_permanente" style="display:none" id="pago_trato_div_aca_se_copia">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pago a trato <span class="required">*</span>
                            </label>&nbsp;<button type="button"  data-toggle="tooltip"  data-original-title="Presiona el botón para agregar mas pago_trato" onClick="botones_agregar_items(this, 'pago_trato_div_aca_se_pega')" value="pago_trato_div_aca_se_copia" class="pago_a_trato_disabled"><span class="fa fa-plus-square "></span></button>
                            <div class="col-md-6 col-sm-6 col-xs-12"> 
                              <input  type="text" placeholder="Detalle. Ej: Kilo de papa (No escribir acá el monto)" class="form-control col-md-7 col-xs-12 contrato pago_a_trato_disabled input_pago_a_trato_agricola " > <br><br>
                              <input  type="number" placeholder="Monto diario" class="form-control col-md-7 col-xs-12 contrato pago_a_trato_disabled input_pago_a_trato_agricola"   >
                            </div>
                       </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->


<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div id="regalia_div_aca_se_pega">
<div class="form-group contrato_agricola_permanente" style="display:none" id="regalia_div_aca_se_copia" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Regalías <span class="required">*</span>
                            </label>&nbsp;<button type="button"  data-toggle="tooltip"  data-original-title="Presiona el botón para agregar mas bonos" onClick="botones_agregar_items(this, 'regalia_div_aca_se_pega')" value="regalia_div_aca_se_copia" id="boton_a_habilitar" disabled><span class="fa fa-plus-square" ></span></button>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <select  type="text" name="boton_a_habilitar"  class="form-control col-md-7 col-xs-12 regalias" onchange='enabled_disabled_dinamico(this, "con", "sin")' >
<option value="sin">Sin Regalía</option>
<option value="con">Con Regalía</option>

                              </select>
                           <br><br> 
                              <input  type="text" placeholder="Descripción regalía" class="form-control col-md-7 col-xs-12 regalias" disabled > <br><br>
                              <input  type="number" placeholder="Monto " class="form-control col-md-7 col-xs-12 regalias" disabled >
                            </div>
                       </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->



<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div id="entrega_tierras_div_aca_se_pega">
<div class="form-group contrato_agricola_permanente" style="display:none" id="entrega_tierras_div_aca_se_copia" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Entrega ración de tierra <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <select  type="text" name="boton_a_habilitar"  class="form-control col-md-7 col-xs-12 entrega_racion_tierra" onchange='enabled_disabled_dinamico(this, "con", "sin")' >
               <option value="sin">Sin entrega de tierras</option>
               <option value="con">Con entrega de tierras</option>

                              </select>
                           <br><br> 
                              <input  type="text" placeholder="Mes entrega tierra" class="form-control col-md-7 col-xs-12 entrega_racion_tierra" disabled > <br><br>
                              <input  type="text" placeholder="Mes devolución tierra " class="form-control col-md-7 col-xs-12 entrega_racion_tierra" disabled >
                            </div>
                       </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->

<!--

EN ESTE APARTADO VA LO RELACIONADO CON CONTRATO 
PARA AGRICOLA PERMANENTE
SIN EMBARGO  SE PUEDE USAR ALGUN INPUT
PARA OTROS TIPOS DE CONTRATOS

++++++++++++++++++++++++++++++++
################################
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

  -->





















<!--

EN ESTE APARTADO VA LO RELACIONADO CON CONTRATO 
PARA contrato PLAZO FIJO
SIN EMBARGO  SE PUEDE USAR ALGUN INPUT
PARA OTROS TIPOS DE CONTRATOS

++++++++++++++++++++++++++++++++
################################
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

  -->



<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div id="servicio_a_entregar_div_aca_se_pega">
<div class="form-group contrato_plazo_fijo" style="display:none" id="servicio_a_entregar_div_aca_se_copia" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Servicios a entregar por parte del trabajador<span class="required">*</span>
                            </label>&nbsp;<button type="button"  data-toggle="tooltip"  data-original-title="Presiona el botón para agregar mas bonos" onClick="botones_agregar_items(this, 'servicio_a_entregar_div_aca_se_pega')" value="servicio_a_entregar_div_aca_se_copia" id="boton_a_habilitar_servicios_a_entregar" disabled><span class="fa fa-plus-square" ></span></button>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <select  type="text" name="boton_a_habilitar_servicios_a_entregar"  class="form-control col-mds-7 col-xs-12 servicios_a_entregar_por_parte_trabajador" onchange='enabled_disabled_dinamico(this, "con", "sin")' >
                            
<option value="sin">Sin Servicios adicionales</option>
<option value="con">Con Servicios adicionales</option>

                              </select>
                           <br><br> 
                              <input  type="text" placeholder="Descripción servicio que debe entregar el trabajador" class="form-control col-md-7 col-xs-12 servicios_a_entregar_por_parte_trabajador" disabled > <br><br>
                             
                            </div>
                       </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->





<!--

EN ESTE APARTADO VA LO RELACIONADO CON CONTRATO 
PARA contrato PLAZO FIJO
SIN EMBARGO  SE PUEDE USAR ALGUN INPUT
PARA OTROS TIPOS DE CONTRATOS

++++++++++++++++++++++++++++++++
################################
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

  -->

















<!--

EN ESTE APARTADO VA LO RELACIONADO CON CONTRATO 
PARA profesor
SIN EMBARGO  SE PUEDE USAR ALGUN INPUT
PARA OTROS TIPOS DE CONTRATOS

++++++++++++++++++++++++++++++++
################################
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$


  -->
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group contrato_profesor" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pactos docente - empleador <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <textarea  cols="30" rows="10" type="text" id="pactos" class="form-control col-md-7 col-xs-12 contrato" placeholder=""></textarea>
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->



<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
<div class="form-group contrato_profesor" style="display:none" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Funciones docentes <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea  cols="30" rows="10" type="text" id="funciones_docentes" class="form-control col-md-7 col-xs-12 contrato" placeholder=""></textarea>
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->



<!--

EN ESTE APARTADO VA LO RELACIONADO CON CONTRATO 
PARA profesor
SIN EMBARGO  SE PUEDE USAR ALGUN INPUT
PARA OTROS TIPOS DE CONTRATOS

++++++++++++++++++++++++++++++++
################################
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$


  -->
























































































































































 




                        </form>
                      </div>


 <!--
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
FIN PASO 4, EN ADELANTE COMIENZA PASO 3
FIN PASO 4, EN ADELANTE COMIENZA PASO 3
FIN PASO 4, EN ADELANTE COMIENZA PASO 3
FIN PASO 4, EN ADELANTE COMIENZA PASO 3
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  -->
<!--
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
FIN PASO 4, EN ADELANTE COMIENZA PASO 3
FIN PASO 4, EN ADELANTE COMIENZA PASO 3
FIN PASO 4, EN ADELANTE COMIENZA PASO 3
FIN PASO 4, EN ADELANTE COMIENZA PASO 3
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  --><!--
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
FIN PASO 4, EN ADELANTE COMIENZA PASO 3
FIN PASO 4, EN ADELANTE COMIENZA PASO 3
FIN PASO 4, EN ADELANTE COMIENZA PASO 3
FIN PASO 4, EN ADELANTE COMIENZA PASO 3
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  -->
<!--
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
FIN PASO 4, EN ADELANTE COMIENZA PASO 3
FIN PASO 4, EN ADELANTE COMIENZA PASO 3
FIN PASO 4, EN ADELANTE COMIENZA PASO 3
FIN PASO 4, EN ADELANTE COMIENZA PASO 3
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  -->








                      <div id="step-3">
                      <!-- INICIO PASO 3 DONDE SE UBICAN LOS INPUTS PARA AFP E ISAPRES-->
                        <h2 class="StepTitle">Información AFP e Isapre</h2>
                        <p>
                          Registra los datos de AFP e isapre de tu trabajador. También toda la información respecto situación de cesantía y ACHS. 
                        </p>


<form class="form-horizontal form-label-left" action="" method="">
<?php




require './model/afp_isapres/clase_bbdd_afp.php';
require './model/afp_isapres/clase_bbdd_isapre.php';

require './model/afp_isapres/implementa_clases_afp_isapres.php';
?>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
                       <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">AFP <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control col-md-7 col-xs-12 contrato" id="select_afp">
<?php foreach ($resultado_afp as $key => $value) {
   echo '<option value="' .$value["nombre"] .'">'.$value["nombre"].'</option>';
}?>
                            

                            </select>
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->      


<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->
                       <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ISAPRE <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control col-md-7 col-xs-12 contrato" id="select_isapre">
<?php
foreach ($resultado_isapre as $key => $value) {
   echo '<option value="' .$value["nombre"] .'">'.$value["nombre"].'</option>';
}
?>
                           

                            </select>
                            </div>
                       </div>
<!--INPUT PARA FORMULARIO DE DATOS DEL TRABAJO, SUELDO LIQUIDO, JEFATURA, EDIFICIO, SUCURSAL, ETC -->                     
</form>





                       <!-- FIN PASO 3 DONDE SE UBICAN LOS INPUTS PARA AFP E ISAPRES-->
                      </div>




                      <div id="step-4">
                        <h2 class="StepTitle">Finalizar Contratación</h2>
                        <p>Al presionar boton de Finalizar estarás inscribiendo a un nuevo trabajador a la base de datos. Sus datos de cotizaciones y pagos serán cargados al total del pago mensual por todos tus trabajadores. Si tienes certeza entonces de la contratación, presiona Finalizar!
                        </p>

<?php
date_default_timezone_set('America/Mexico_City'); //Asignas la zona horaria de tu país.
setlocale(LC_TIME, 'spanish'); //Fijamos el tiempo local
$diaSemana=strftime('%A'); // Guardamos el Nombre del día de la semana.
$mes=strftime('%B');
$año=strftime('%Y');


?>


                        
                       
<button type="button"  id="finalizar" type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-sm" data-placement="bottom" title="" data-original-title="Finaliza el proceso e ingresa al empleado">Finalizar</button>






<script src="./js/ingreso_empleados_seccion_direccion_sucursal.js"></script>


   <!--<button type="button"  type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>-->
<script src="./js/funcion_fetch.js"></script>
                  <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button"  type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Proceso Finalizado</h4>
                        </div>
                        <div class="modal-body" id="aviso_fin_proceso_contrato">
                          <h4>Empleado Ingresado</h4>
                          <p id="aviso_proceso_finalizado"></p>
                          
                        </div>
                        <div class="modal-footer" id="footer_modal">
                         <!-- <button type="button"  type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                          <button type="button"  type="button" class="btn btn-primary" id="volver_perfil">Volver</button>
                          <button type="button"  type="button" class="btn btn-danger" id="ir_a_contrato">Visualizar Contrato</button>
                          <script>
                          var volver= document.getElementById("volver_perfil");
                          volver.addEventListener("click", volviendo, false);
                          function volviendo(){
                            location.href='./index.php';
                          }

var fin_input1= document.getElementsByClassName("contrato")
let array2= [];
for(var i=0;i<fin_input1.length;i++ ){
console.log(fin_input1[i].value)
array2.push(fin_input1[i].value);
 }


                          var visualizar_contrato= document.getElementById("ir_a_contrato");
                          visualizar_contrato.addEventListener("click", funcion_visualizar_contrato, false);
                          function funcion_visualizar_contrato(){
                           location.href= "./model/generacion_contratos/vista_contrato.php?trabajador="+array2[8]
                            
                          }
                          </script>
                        </div>

                      </div>
                    </div>
                  </div>



















                      </div>

                    </div>
              
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->























<script>


</script>



  











































        <!-- footer content -->
        <footer>
          <div class="pull-right">
            RRHH - Dashboard <a href="https://hsierrapropiedades.com">FreshCut</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

<!-- script para ingreso de clientes, envia info desde navagador o cliente al servidor -->
<script src="./js/ingresa_empleados.js"></script>
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- jQuery Smart Wizard -->
    <script src="../vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

    <?php require("./model/chat/chat_embebido/chat.php"); ?>
  </body>
</html>