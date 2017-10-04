<?php require("./model/config/config.php"); ?>
<?php require("./header/compendio_head.php"); ?>

<?php $db1 = new PDO('mysql:host=localhost;dbname='.$bd, $usuario, $pass);

$user= $_SESSION["usuario"];

$resultado = $db1->query("SELECT * from ingreso_empleados WHERE nombre_empresa_usuario_plataforma='$user'");



 require("./titulo.php");
 
?>



    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">




<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Listado Trabajadores <small>Users</small></h2>
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
                      En la tabla puedes visualizar a tus trabajadores. Si deseas actualizar la información de alguno presiona en su nombre,
                y actualiza los cambios.
                    </p>
                   
                    
                   <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Nombre</th>
                          <th>Puesto</th>
                          <th>Jefatura</th>
                          <th>Edad</th>
                          <th>Ingreso</th>
                          <th>Sueldo</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php foreach($resultado as $row): ?>
                        <?php 
                        setlocale(LC_MONETARY, 'en_US.UTF-8');
                   // money_format('%.2n', $number);
                    
                        echo '<tr>
                          <td><a href="perfil_trabajador.php?id='.$row["id"].'" >'.$row["nombre"].'</a></td>
                          <td><a href="perfil_trabajador.php?id='.$row["id"].'" >'.utf8_encode($row["puesto"]).'</a></td>
                          <td>'.utf8_encode($row["jefatura"]).'</td>
                          <td>'.$row["edad"].'</td>
                          <td>'.$row["ingreso"].'</td>
                          <td>'.number_format(intval($row["sueldo"]),0,",",".").'</td>
                        </tr>'; ?>
                        

                       <?php endforeach; ?>
                      </tbody>
                    </table>
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

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
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

  </body>
</html>