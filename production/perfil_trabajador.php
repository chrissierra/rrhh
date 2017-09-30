<?php require("./header/compendio_head.php"); ?>
<?php $db1 = new PDO('mysql:host=localhost;dbname=recursos_humanos','root','');
$db1->exec('SET CHARACTER SET utf8');
$user= $_SESSION["usuario"];
$empleado=$_GET["id"];
$resultado = $db1->query("SELECT * from ingreso_empleados WHERE nombre_empresa_usuario_plataforma='$user' and id='$empleado'");




 
?>
<link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
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
                   


                  <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i> Menú  <small><?php echo $row["empresa"]; ?></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="col-xs-3">
                      <!-- required for floating -->
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs tabs-left">
                        <li class="active"><a href="#home" data-toggle="tab">Perfil</a>
                        </li>
                        <li><a href="#profile" data-toggle="tab">Acciones</a>
                        </li>
                        <li><a href="#messages" data-toggle="tab">Anexos Contrato</a>
                        </li>
                        <li><a href="#settings" data-toggle="tab">Consultas</a>
                        </li>
                      </ul>
                    </div>

                    <div class="col-xs-9">
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div class="tab-pane active" id="home">
                          <p class="lead">Antecedentes personales</p>
<!-- aca va el widget -->
<div class="col-md-5 col-xs-12 widget widget_tally_box">
                        <div class="x_panel ui-ribbon-container fixed_height_390">
                          
                          <div class="x_title">
                            <h2>
                            <?php
                            date_default_timezone_set('America/Santiago');

                                echo date("Y/m/d"); ?>
                              </h2>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">

                            <div style="text-align: center; margin-bottom: 17px">
                              <span class="chart" data-percent="86">
                                                  <span class="percent"></span>
                              </span>
                            </div>

                            <h3 class="name_title">Asistencia</h3>
                            <p>Visualizar detalle</p>

                            <div class="divider"></div>

                          
                           <?php 
                                echo "<li><b>Cargo:   ".$row["puesto"] . "</b></li> ";
                                echo '<div class="divider"></div>';
                                echo "<li>Sueldo líquido: ".number_format(intval($row["sueldo"]),0,",",".") . "</li> ";
                                echo '<div class="divider"></div>';
                                echo "<li>Ingreso : ".$row["ingreso"] . "</li> ";
                                
                              
                            ?>
                         
                           </ul>
                          </div>
                          
                        </div>
                        
                      </div>
<!-- aca va el widget -->



<!-- sección lateral -->
                          <div class="col-md-7 col-xs-12 ">
                          <div class="clearfix"></div>
                          <div class="x_panel">
                          
                          <div class="x_content profile_details">
                        


                       
                        <div class="well profile_view ">
                          <div class="col-sm-12">
                            <h4 class="brief"><i><?php echo $row["puesto"]; ?></i></h4>
                            <div class="left col-xs-7">
                              <h2><?php echo $row["nombre"] ." " .$row["apellido"]; ?></h2>
                              <p><strong>Dpto: </strong> <?php echo $row["jefatura"]; ?> </p>
                              <ul class="list-unstyled">
                                <li><i class="fa fa-envelope"></i> Email: <?php  echo $var = (strlen($row['email1']) > 1 ? $row['email1'] : '');  ?> </li>
                                <li><i class="fa fa-phone"></i> Fono #: <?php  echo $var = (strlen($row['fono1']) > 1 ? $row['fono1'] : '');  ?></li>
                              </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src="images/user.png" alt="" class="img-circle img-responsive">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center">
                            <div class="col-xs-12 col-sm-6 emphasis">
                          
                            </div>
                            <div class="col-xs-12 col-sm-6 emphasis">
                              <button type="button" class="btn btn-success btn-xs" id="boton_editar_datos_trabajador"> <i class="fa fa-user">
                                </i> <i class="fa fa-edit"></i> </button>
                              <button type="button" class="btn btn-primary btn-xs">
                            <i class="fa fa-user"> </i> <?php echo '<a href="editar_trabajadores.php?id='.$row["id"].'" style=" color:white;" >Ver datos</a>'; ?>
                              </button>
                            </div>  
                          </div>
                        </div>
                     







                        </div>

                        </div>
                    </div>
<!-- sección lateral -->
                        </div>


                        <div class="tab-pane" id="profile">   
      <!-- start accordion -->

                    <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                 
<?php require("./model/variables_empresa/vista_menu_acordeon/acordeon_uno.php"); ?>

<?php require("./model/variables_empresa/vista_menu_acordeon/acordeon_dos.php"); ?>

<?php require("./model/variables_empresa/vista_menu_acordeon/acordeon_tres.php"); ?>


                    </div>
                    <!-- end of accordion -->
                    </div>

                        <div class="tab-pane" id="messages">Messages Tab.</div>
                        <div class="tab-pane" id="settings">Settings Tab.</div>

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
        <?php endforeach; ?>


<script src="./js/funcion_fetch.js"></script>



        <!-- /page content -->






        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true" id="modal_inicio">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button id="cerrar_modal_ingreso_datos_b" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" >×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Sister ERP</h4>
                        </div>
                        <div class="modal-body">
                         
                          
                          <form class="form-horizontal form-label-left" novalidate>

                    
                      <span class="section">Datos Personales</span>

<input type="hidden" id="id_trabajador" value="<?php echo $row['id']; ?>">
                      <div class="item form-group">
                         <!-- ANTES FOREACH ESTABA ACA -->
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">&nbsp;Número&nbsp;1
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <input value="<?php  echo $var = (strlen($row['fono1']) > 1 ? $row['fono1'] : '');  ?>" id="numero1" class="form-control col-md-7 col-xs-12"   type="text">
                        </div>
                      </div>



                      <div class="item form-group">
                         <!-- ANTES FOREACH ESTABA ACA -->
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Email&nbsp;1
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <input value="<?php  echo $var = (strlen($row['email1']) > 1 ? $row['email1'] : '');  ?>" id="email1" class="form-control col-md-7 col-xs-12"  type="text">
                        </div>
                      </div>    


                      <div class="item form-group">
                         <!-- ANTES FOREACH ESTABA ACA -->
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">&nbsp;Número&nbsp;2
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <input value="<?php  echo $var = (strlen($row['fono2']) > 1 ? $row['fono2'] : '');  ?>" id="numero2" class="form-control col-md-7 col-xs-12"   type="text">
                        </div>
                      </div>



                      <div class="item form-group">
                         <!-- ANTES FOREACH ESTABA ACA -->
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Email&nbsp;2
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <input value="<?php  echo $var = (strlen($row['email2']) > 1 ? $row['email2'] : '');  ?>" id="email2" class="form-control col-md-7 col-xs-12"  type="text">
                        </div>
                      </div>

                    </form>

                        </div>
                        <div class="modal-footer">
                          <button type="button" id="cerrar_modal_ingreso_datos" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                          <button type="button" id="guardar" class="btn btn-primary">Guardar Cambios</button>
                        </div>

                      </div>
                    </div>
                  </div>









<!--

+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
MODAL 
MODAL
MODAL
MODAL

+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

MODAL QUE PRESENTA LOS ANEXOS QUE YA TIENE EL TRABAJADOR

+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 -->

 <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true" id="modal_anexos">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button id="cerrar_modal_ingreso_datos_b" onclick="modal_close('modal_anexos')" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" >×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Sister ERP</h4>
                        </div>
                        <div class="modal-body">
                         
                          
                          <form class="form-horizontal form-label-left" novalidate>

                   
                      <span class="section">Anexos</span>

<!--<input type="hidden" id="id_trabajador" value="<?php // echo $row['id']; ?>">-->
                      <div class="item form-group" >
                         <!-- ANTES FOREACH ESTABA ACA -->
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">
                        </label>
                        <div id="div_input_modal_anexos" class="col-md-12 col-sm-12 col-xs-12">
                      <!--    <textarea  cols="30" rows="10" id="anexos" class="form-control col-md-7 col-xs-12"   type="text"></textarea>
                        -->
                        </div>
                      </div>

                    </form>

                        </div>
                        <div class="modal-footer">
                          <button type="button" onclick="modal_close('modal_anexos')" id="cerrar_modal_ingreso_datos" class="btn btn-default" data-dismiss="modal">Cerrar</button><!--
                          <button type="button" id="guardar" class="btn btn-primary">Guardar Cambios</button>-->
                        </div>

                      </div>
                    </div>
                  </div>







<!--

+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
MODAL 
MODAL
MODAL
MODAL

+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

MODAL QUE PRESENTA LOS ANEXOS QUE YA TIENE EL TRABAJADOR

+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 -->
































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
    <!-- Script modales y varios -->
    <script src="./js/menu_visualizar_trabajadores.js"></script>
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
	  <!-- jQuery Smart Wizard -->
      <script src="../vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
  

       <!-- easy-pie-chart -->
       <script src="../vendors/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
  </body>
</html>