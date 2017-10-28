<?php

class libro_asistencia extends compendio_variables{
 public $array;
 public $i;

    function __construct($id_usuario) {
       $this->id_usuario= $id_usuario;
       $this->array= $this->variables_libro_remuneraciones_unificado();
       $this->i=1;
    }

 

    public function vista_libro_asistencia(){
        
       
        $this->vista_html_no_dinamica();
   
        // método con echo, que ponga las tablas *** DEBE IR ACÁ
        // $THIS->TablaPorDia(); ... ETC.
    
    } // fin libro_remuneraciones_unificado









/*
metodo publico para resumen diario
*/
public function tabla_por_dia(){


   echo '<table style="" id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
  <thead>
    <tr>
    <th>#</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Rut</th>
      <th>Fecha</th>
      <th>Movimiento</th>
      <th>Hora</th>
      
    
    </tr>
  </thead>
  
  
  <tbody>';
  
      foreach ($this->array as $key => $value) {
          echo ' <tr>
          <th scope="row">'.$this->i.'</th>
          <td>'.$value["nombre"].'</td>
          <td>'.$value["apellido"].'</td>
          <td>'.$value["rut"].'</td>
          <td>'.$this->dias_trabajados_al_mes($value["id"],10).'</td>
          <td>'.$value["nombre"].'</td>
         
          <td>'.$value["sueldo"].'</td>
          
         
          
        </tr>';
        $this->i++;
      }
  echo '</tbody>
  </table>
  
  
  
  ';
} // fin metodo tabla por dia





/*
metodo publico para resumen mensual
*/
public function tabla_por_mes(){
  
  
     echo '<table style="display:none" id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
    <thead>
      <tr>
      <th>#</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Rut</th>
        <th>Fecha</th>
        <th>Movimiento</th>
        <th>Hora</th>
        
      
      </tr>
    </thead>
    
    
    <tbody>';
    
        foreach ($array as $key => $value) {
            echo ' <tr>
            <th scope="row">'.$i.'</th>
            <td>'.$value["nombre"].'</td>
            <td>'.$value["apellido"].'</td>
            <td>'.$value["rut"].'</td>
            <td>'.$this->dias_trabajados($value["id"],10).'</td>
            <td>'.$value["nombre"].'</td>
           
            <td>'.$value["sueldo"].'</td>
            
           
            
          </tr>';
          $i++;
        }
    echo '</tbody>
    </table>
    
    
    
    ';
  }// fin tabla_por_mes





  /*
metodo publico para resumen anual
*/
public function tabla_por_año(){
  
  
     echo '<table style="display:none" id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
    <thead>
      <tr>
      <th>#</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Rut</th>
        <th>Fecha</th>
        <th>Movimiento</th>
        <th>Hora</th>
        
      
      </tr>
    </thead>
    
    
    <tbody>';
    
        foreach ($this->array as $key => $value) {
            echo ' <tr>
            <th scope="row">'.$this->i.'</th>
            <td>'.$value["nombre"].'</td>
            <td>'.$value["apellido"].'</td>
            <td>'.$value["rut"].'</td>
            <td>'.$this->dias_trabajados($value["id"],10).'</td>
            <td>'.$value["nombre"].'</td>
           
            <td>'.$value["sueldo"].'</td>
            
           
            
          </tr>';
          $this->i++;
        }
    echo '</tbody>
    </table>
    
    
    
    ';
  }// fin tabla_por_año



/*
@métodos privados de tags html
*/
private function vista_html_no_dinamica(){
  echo '<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Asistencia <small>Libro</small></h2>
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
En la tabla podrás visualizar a tus trabajadores. Si deseas actualizar la información de alguno presiona en su nombre,
  y actualiza los cambios:
  &nbsp;
      </p> 
      
    
      <form class="form-horizontal form-label-left" novalidate>
      
                        
                        <!--    <span class="section">Datos Personales</span> -->
      
                            <div class="item form-group">
                            
                              <label  class="control-label col-md-12 col-sm-12 col-xs-12" for="nombre">
                              </label>
                              <div class="col-md-12 col-sm-12 col-xs-12">
                                <select onchange="seleccion_tipo_fecha(this)" id="visualizar_por_tipo_de_fecha" class="form-control col-md-7 col-xs-12"   type="text">
                                <option value="selecciona">Selecciona tipo de fecha</option> 
                                <option value="dia">Asistencia por día</option>  
                                <option value="mes">Asistencia mensual</option> 
                                <option value="año">Resumen anual</option>   
                                </select>
                              </div>
                            </div>


                            <div class="item form-group">
                            
                              <label  class="control-label col-md-12 col-sm-12 col-xs-12" for="nombre">
                              <p></p>
                              </label>
                              <div class="col-md-12 col-sm-12 col-xs-12">
                             <input style="display:none" placeholder="Selecciona el día" class="form-control col-md-7 col-xs-12" type="text" id="datepicker1">
                              
              
                                            <link rel="stylesheet" href="./js/jquery_ui/jquery-ui.css">
                                            <script src="./js/jquery_ui/jquery-ui.js"></script>
                                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                              </div>
                            </div>

<input type="hidden" value="'.$this->id_usuario.'" id="id_usuario_constructor_clase" >
                            

                            <div class="item form-group" style="display:none" id="div_año">
                            
                              <label  class="control-label col-md-12 col-sm-12 col-xs-12" for="nombre">
                              </label>
                              <div class="col-md-12 col-sm-12 col-xs-12">
                                <select onchange="" id="input_año" class="form-control col-md-7 col-xs-12"   type="text">
                                <option value="selecciona_año">Selecciona el año</option> 
                                <option value="2017">2017</option>  
                                <option value="2016">2016</option> 
                                </select>
                              </div>
                            </div>


                            <div class="item form-group" style="display:none" id="div_mes">
                            
                              <label  class="control-label col-md-12 col-sm-12 col-xs-12" for="nombre">
                              </label>
                              <div class="col-md-12 col-sm-12 col-xs-12">
                                <select onchange="" id="input_mes" class="form-control col-md-7 col-xs-12"   type="text">
                                <option value="selecciona_mes">Selecciona el mes</option> 
                                <option value="01">Enero</option>  
                                <option value="02">Febrero</option> 
                                <option value="03">Marzo</option>  
                                <option value="04">Abril</option> 
                                <option value="05">Mayo</option>  
                                <option value="06">Junio</option> 
                                <option value="07">Julio</option>  
                                <option value="08">Agosto</option> 
                                <option value="09">Septiembre</option>  
                                <option value="10">Octubre</option> 
                                <option value="11">Noviembre</option> 
                                <option value="12">Diciembre</option> 
                                </select>
                              </div>  
                            </div>

                            <div class="item form-group" style="display:none" id="div_boton">
                            
                              <label  class="control-label col-md-12 col-sm-12 col-xs-12" for="nombre">
                              </label>
                              <div class="col-md-12 col-sm-12 col-xs-12">
                                <button onClick="ir_asistencia_funcion(this)" id="id_boton" class="btn btn-success"   type="button">
                               Aceptar
                                </button>
                              </div>
                            </div>

                            </form>
      
                            <script src="./js/libro_asistencia/asistencia.js"></script>
                            <span class="section"></span>  <br>
                            <div id="tabla_fetch"></div>
                            
                            ';
}


}

?>


