<?php require("./header/compendio_head.php"); ?>
<?php $db1 = new PDO('mysql:host=localhost;dbname=super','root','');

$user= $_SESSION["usuario"];
$resultado9 = $db1->query("SELECT * from clientes_rrhh WHERE nombre_empresa=$user");

 
 
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Perfil de usuario</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Búsqueda...">
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
                    <h2>Reporte de usuario <small>Actividad</small></h2>
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
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
<?php 
echo '<img class="img-responsive avatar-view" src="./Ingreso_Clientes/imagen_logos/'.$_SESSION["usuario"].'.png" alt="Avatar" title="Change the avatar">'; ?>
                         
                        </div>
                      </div>
                      <h3><?php echo $_SESSION["usuario"]; ?></h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> <?php 
$db1 = new PDO('mysql:host=localhost;dbname=super','root','');
$user= $_SESSION["usuario"];
$st = $db1->query("SELECT * from clientes_rrhh WHERE nombre_empresa='$user'");

foreach ($st as $key => $value) {
  echo $value["direccion"];
}
                         ?>
                        </li>

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> <?php $db1 = new PDO('mysql:host=localhost;dbname=super','root','');
$user= $_SESSION["usuario"];
$db1->exec("SET CHARACTER SET utf8");
$st = $db1->query("SELECT * from clientes_rrhh WHERE nombre_empresa='$user'");  foreach ($st as $key => $value) {
  echo $value["giro"];
} ?>
                        </li>

                        <li class="m-top-xs">
                          <i class="fa fa-external-link user-profile-icon"></i>
<?php $db1 = new PDO('mysql:host=localhost;dbname=super','root','');
$user= $_SESSION["usuario"];
$db1->exec("SET CHARACTER SET utf8");
$st = $db1->query("SELECT * from clientes_rrhh WHERE nombre_empresa='$user'");  foreach ($st as $key => $value) {
  $web= $value["website"];
} ?>

                          <a href=<?php echo $web; ?> target="_blank"><?php echo $web; ?></a>
                        </li> 
                      </ul>

                      <a class="btn btn-success" href="./ingreso_personal.php"><i class="fa fa-edit m-right-xs">&nbsp</i> Ingresa Personal</a>
                      <br />

                      <!-- start skills -->
                    <!--  <h4>Avance mensual</h4>
                      <ul class="list-unstyled user_data">
                        <li>
                          <p>Web Applications</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                          </div>
                        </li>
                        <li>
                          <p>Website Design</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="70"></div>
                          </div>
                        </li>
                        <li>
                          <p>Automation & Testing</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="30"></div>
                          </div>
                        </li>
                        <li>
                          <p>UI / UX</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                          </div>
                        </li>
                      </ul>-->
                      <!-- end of skills -->

                    </div>


<!-- ABAJO SE INDICA EL TOTAL Y SUBTOTAL QUE DEBE PAGAR EL EMPLEADOR -->
                    <div class="col-md-9 col-sm-9 col-xs-12">
                       <div>
                    <p class="lead">Monto adeudado al  2/22/2014</p>
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <th style="width:50%">Subtotal:</th>
                                  <td>$250.30</td>
                                </tr>
                                <tr>
                                  <th>IVA (19.0%)</th>
                                  <td>$10.34</td>
                                </tr>
                                <tr>
                                  <th>Otros:</th>
                                  <td>$5.80</td>
                                </tr>
                                <tr>
                                  <th>Total:</th>
                                  <td>$265.24</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                      </div>
<!-- ARRIBA SE INDICA EL TOTAL Y SUBTOTAL QUE DEBE PAGAR EL EMPLEADOR -->                     
                      <!-- start of user-activity-graph -->
                      <!--<div id="graph_bar" style="width:100%; height:280px;"></div>-->
                      <!-- end of user-activity-graph -->






                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Actividad reciente</a>
                          </li>
                          <!--<li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Proyectos</a>
                          </li>-->
                         <!-- <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Perfil</a>
                          </li>-->
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                            <!-- start recent activity -->


<?php require './model/clase_base_datos.php';
$users = Users::singleton();
$data = $users->get_usuarios("actividad_reciente", $_SESSION["usuario"]);


$date = '2009-10-22';
$sepparator = '-';
$parts = explode($sepparator, $date);
$dayForDate = date("l", mktime(0, 0, 0, $parts[1], $parts[2], $parts[0]));

echo (count($data)==0) ? "<h4>No tienes actividad reciente</h4>": "";

foreach($data as $fila): ?>




                            <ul class="messages">
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                                <div class="message_date">
                                  <h3 class="date text-info"><?php 
                                  $date = '2009-10-22';
$sepparator = '-';
$parts = explode($sepparator, $fila["cuando"]);
$dayForDate = date("M", mktime(0, 0, 0, $parts[1], $parts[2], $parts[0]));
                                  echo $parts[2];
                                   ?></h3>
                                  <p class="month"><?php echo $dayForDate; ?></p>
                                </div>
                                <div class="message_wrapper">
                                  <h4 class="heading"><?php echo $fila["afectado"]; ?></h4>
                                  <blockquote class="message"><?php echo $fila["quehizo"] . "<h6> ".$fila["variable_cambiada"]. "</h6>"; ?></blockquote>
                                  <br />
                                  <p class="url">
                                    <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                    <a href="#"><i class="fa fa-paperclip"></i> Visualizar Contrato Trabajador </a>
                                  </p>
                                </div>
                              </li>

<?php endforeach; ?>
                       

                            </ul>
                            <!-- end recent activity -->



                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                            <!-- start user projects -->
                            <table class="data table table-striped no-margin">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Project Name</th>
                                  <th>Client Company</th>
                                  <th class="hidden-phone">Hours Spent</th>
                                  <th>Contribution</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>New Company Takeover Review</td>
                                  <td>Deveint Inc</td>
                                  <td class="hidden-phone">18</td>
                                  <td class="vertical-align-mid">
                                    <div class="progress">
                                      <div class="progress-bar progress-bar-success" data-transitiongoal="35"></div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>2</td>
                                  <td>New Partner Contracts Consultanci</td>
                                  <td>Deveint Inc</td>
                                  <td class="hidden-phone">13</td>
                                  <td class="vertical-align-mid">
                                    <div class="progress">
                                      <div class="progress-bar progress-bar-danger" data-transitiongoal="15"></div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>3</td>
                                  <td>Partners and Inverstors report</td>
                                  <td>Deveint Inc</td>
                                  <td class="hidden-phone">30</td>
                                  <td class="vertical-align-mid">
                                    <div class="progress">
                                      <div class="progress-bar progress-bar-success" data-transitiongoal="45"></div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>4</td>
                                  <td>New Company Takeover Review</td>
                                  <td>Deveint Inc</td>
                                  <td class="hidden-phone">28</td>
                                  <td class="vertical-align-mid">
                                    <div class="progress">
                                      <div class="progress-bar progress-bar-success" data-transitiongoal="75"></div>
                                    </div>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                            <!-- end user projects -->

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                            <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui
                              photo booth letterpress, commodo enim craft beer mlkshk </p>
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

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Administracion de recursos humanos <a href="https://hsierrapropiedades.com">Csierra</a>
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
    <!-- morris.js -->
    <script src="../vendors/raphael/raphael.min.js"></script>
    <script src="../vendors/morris.js/morris.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>