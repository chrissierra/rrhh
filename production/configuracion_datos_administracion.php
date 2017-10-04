<?php require("./model/config/config.php"); ?>
<?php 

require './header/compendio_head.php';

?>
<?php
require './model/afp_isapres/conexion_base_abstracta.php';
require './model/afp_isapres/clase_bbdd_afp.php';
require './model/afp_isapres/clase_bbdd_isapre.php';

require './model/afp_isapres/implementa_clases_afp_isapres.php';
?>




 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>AFP / ISAPRES <small>Datos y cifras para cada institución</small></h3>
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
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Listado AFP <small>Tasa cotización</small></h2>
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



                    <table class="table table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>ISAPRE</th>
                          
                          <th>Código</th>
                        </tr>
                      </thead>
                      <tbody>


                                          <?php

$i=1;
foreach ($resultado_isapre as $key => $value) {

   echo ' <tr>
                          <th scope="row">'.$i.'</th>
                          <td>'.$value["nombre"].'</td>
                         
                          <td>'.$value["monto"].'</td>
                        </tr>';
                        $i++;
}
?>


                       
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>

               <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Stripped table <small>Stripped table subtitle</small></h2>
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

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>AFP</th>
                         
                          <th>Tasa cotización</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php

$i=1;
foreach ($resultado_afp as $key => $value) {

   echo ' <tr>
                          <th scope="row">'.$i.'</th>
                          <td>'.$value["nombre"].'</td>
                         
                          <td>'.$value["monto"].'</td>
                        </tr>';
                        $i++;
}
?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!--Aca se ubican los widgets-->
              <!--Aca se ubican los widgets-->
              <!--Aca se ubican los widgets-->

<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-cog"></i>
                          </div>
                          <div class="count">179</div>

                          <h3>Actualizar</h3>
                          <p>Lorem ipsum psdea itgum rixt.</p>
                        </div>
                      </div>

                      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-cog"></i>
                          </div>
                          <div class="count">Actualizar</div>

                         <h3><a href="configuracion_variables_empresa.php">Variables de empresa</a></h3>
                          <p>Ingresa la información para contratos.</p>
                        </div>
                      </div>

                      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-database"></i>
                          </div>
                          <div class="count">Ingresa</div>

                          <h3><a href="ingresa_actualiza_afp_isapre.php">Una AFP o Isapre</a></h3>
                          <p>Configuración</p>
                        </div>
                      </div>

                      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-caret-square-o-right"></i>
                          </div>
                          <div class="count">179</div>

                          <h3>New Sign ups</h3>
                          <p>Lorem ipsum psdea itgum rixt.</p>
                        </div>
                      </div>






<!--Aca se ubican los widgets-->
<!--Aca se ubican los widgets-->
<!--Aca se ubican los widgets-->

             </div>
             
</div>

</div>

                     
                      
                     
      




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