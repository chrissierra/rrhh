  <link href="../vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">
 <div id="step-3">
                        <h2 class="StepTitle">Logo</h2>
                         <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Arrastra la imagen o presiona para cargarla</h2>
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
                    <p>Sube una sola imagen que se usará como el logo de la empresa.</p>
<form enctype="multipart/form-data" method="post" action="./Ingreso_Clientes/cargar_imagen.php" >
<input type="file" class="dropzone" name="hola" style="width:100%">
<input type="hidden" name="nombre_imagen" id="nombre_imagen">
<input type="submit" class="btn btn-success">
                    </form>

<?php /*if(isset($_SESSION["imagen"])){

echo '<div class="alert alert-success alert-dismissible fade in" role="alert" id="alerta">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Holy guacamole!</strong>
                  </div>';

unset($_SESSION["imagen"]);
}*/ 
?>






                    <script type="text/javascript">
var nombre_empresa1= document.getElementById("nombre_empresa");

setInterval(nombre_dela_imagen, 100);

function nombre_dela_imagen(){
 
  var nombre_input=document.getElementById("nombre_imagen");
  nombre_input.value=nombre_empresa1.value;

}
                    </script>
                  
                    <br />
                    <br />
                    <br />
                    <br />
                  </div>
                </div>
              </div>
            </div>
                   
                      </div>