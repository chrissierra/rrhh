<?php 
ob_start();
require("./model/config/config.php");

require './header/compendio_head.php';
include './model/afp_isapres/conexion_base_abstracta.php';
include './model/afp_isapres/clase_bbdd_afp.php';
include './model/afp_isapres/clase_bbdd_isapre.php';
include './model/afp_isapres/implementa_clases_afp_isapres.php';
include './model/variables_empresa/clase_variables_empresa.php';
include './model/documentos_resumen_trabajador/clase_planilla_rrhh/clase_compendio_variables.php';
include './model/documentos_resumen_trabajador/clase_planilla_rrhh/clase_libro_remuneraciones.php';
include './model/documentos_resumen_trabajador/clase_planilla_rrhh/clase_libro_asistencia.php';
//require("./titulo.php");


?>

 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Libros</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Búsqueda..">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
   
    <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tablas Sister ERP <small>Users</small></h2>
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
                    <p class="text-muted font-13 m-b-30">
                      Puedes exportar en excel tus tablas. Recuerda que puedes guiarte por éstas para rellenar tus libros de remuneraciones o analisis contables varios. 
                    </p>
                   
                    
                
                      <?php 
                      
                      if($_GET["id"] =="remuneraciones"){
                        $remuneraciones= new libro_remuneraciones($_SESSION["usuario"], "libros");
                        $remuneraciones->libro_remuneraciones_unificado();
                      }elseif($_GET["id"] == "asistencia"){
                        $asistencia= new libro_asistencia($_SESSION["usuario"]);
                        $asistencia->vista_libro_asistencia();
                      }elseif(!isset($_GET["id"])){
                        header("location:./index.php");
                      }elseif($_GET["id"]!== "remuneraciones" OR $_GET["id"]!== "asistencia"){
                        header("location:./index.php");
                      }
                      
                      ?>
              </div>
              </div>
            </div>
</div>
</div>
</div>
            <footer>
        <div class="pull-right">
          Administracion de recursos humanos <a href="https://hsierrapropiedades.com">Csierra</a>
        </div>
        <div class="clearfix"></div>
      </footer>

       </div>
  </div>


<!-- agregado extra, porque no funciona -->


<!-- fin agregado extra -->



  <!-- jQuery -->
 
  <!-- Bootstrap -->
  <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="../vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="../vendors/nprogress/nprogress.js"></script>
  <!-- iCheck -->
  <script src="../vendors/iCheck/icheck.min.js"></script>
  <!-- Datatables -->
  <script src="../vendors/datatables.net/js/jquery.dataTables.js"></script>
  <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
  <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
  <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
  <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
  <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
  <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
  <script src="../vendors/jszip/dist/jszip.min.js"></script>
  <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
  <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

  <!-- Custom Theme Scripts -->
  <script src="../build/js/custom.min.js"></script>
<?php require("./model/chat/chat_embebido/chat.php"); ?>

</body>

</html>

<?php ob_end_flush(); ?>