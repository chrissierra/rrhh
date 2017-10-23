<?php

class libro_remuneraciones extends compendio_variables{

    function __construct($id_usuario) {
        $this->id_usuario= $id_usuario;
     }



public function libro_remuneraciones_unificado(){
    
    $array= $this->variables_libro_remuneraciones_unificado();
    $i=1;

echo '  <div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">
  <div class="x_title">
    <h2>Remuneraciones <small>Libro</small></h2>
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
    </p> <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
<thead>
  <tr>
  <th>#</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Rut</th>
    <th>Días trabajados</th>
    <th>Sueldo base</th>
    <th>Horas extras</th>
    <th>Valor horas extras</th>
    <th>Gratificación</th>
    <th>Bono producción</th>
    <th>Total Remuneración imponible</th>
    <th>Asignaciones</th>
    <th>Total haberes</th>
    <th>Organismo previsional Pensiones</th>
    <th>Cotización obligatoria</th>
    <th>Organismo previsional Salud </th>
    <th>Dscto. Al trabajador</th>
    <th>Cotización Voluntaria</th>
    <th>Seguro Cesantía</th>
    <th>Mutual</th>
    <th>Total Dsctos.</th>
    <th>Líquido</th>
    <th>Anticipos</th>
    <th>Saldo líquido</th>
  
  </tr>
</thead>


<tbody>';

    foreach ($array as $key => $value) {
        echo ' <tr>
        <th scope="row">'.$i.'</th>
        <td>'.$value["id"].'</td>
        <td>'.$value["apellido"].'</td>
        <td>'.$value["rut"].'</td>
        <td>'.$this->dias_trabajados($value["id"],10).'</td>
        <td>'.$value["nombre"].'</td>
       
        <td>'.$value["sueldo"].'</td>
        <td>'.$value["nombre"].'</td>
        <td>'.$value["nombre"].'</td>
        <td>'.$value["nombre"].'</td>
        <td>'.$value["nombre"].'</td>
        <td>'.$value["nombre"].'</td>
       
        <td>'.$value["sueldo"].'</td>   
        <td>'.$value["nombre"].'</td>
        <td>'.$value["nombre"].'</td>
        <td>'.$value["nombre"].'</td>
        <td>'.$value["nombre"].'</td>
        <td>'.$value["nombre"].'</td>
       
        <td>'.$value["sueldo"].'</td>
        <td>'.$value["nombre"].'</td>
        <td>'.$value["nombre"].'</td>
        <td>'.$value["nombre"].'</td>
        <td>'.$value["nombre"].'</td>
        <td>'.$value["nombre"].'</td>
       
        
      </tr>';
      $i++;
    }
echo '</tbody>
</table>';
} // fin libro_remuneraciones_unificado


//@ CALCULOS
// FUNCION QUE CALCULA EL SUELDO BRUTO, ENTREGANDO POR PARÁMETRO SUELDO LÍQUIDO Y
private function sueldo_bruto(){



} // fin sueldo_bruto
    
}

?>