<?php

class libro_remuneraciones extends compendio_variables{
  public $array;
  public $constante_afp;
  public $isapre_monto, $afp_monto, $sueldo_bruto, $total_descuentos_legales, $haberes_exentos, $otros_descuentos, $total_descuentos, $haberes_imponibles, $total_haberes, $impuesto_renta;
  public $incentivos, $bonos, $gratificaciones;
  public $incentivos_n, $bonos_n, $gratificaciones_n;

    function __construct($id_usuario, $contexto) {
      $this->id_usuario= $id_usuario;
          if($contexto === "resumen"){      
                        
                        $this->sueldo_bruto();
                        $this->afp_monto_a_pagar();
                        $this->isapre_monto_a_pagar();
                        $this->calculos_extras();
          } // fin IF

     }// ** FIN CONSTRUCTOR **



public function libro_remuneraciones_unificado(){
    
    $array= $this->variables_libro_remuneraciones_unificado();
    $i=1;
  //  $this->vista_html_no_dinamica();
echo '     <script src="../vendors/jquery/dist/jquery.min.js"></script> <!-- Datatables -->
<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
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
  try {

    $afp= $this->query_fetchall("SELECT afp FROM ingreso_empleados where id='".$this->id_usuario."'");
    //$query= "SELECT monto from afp where nombre='".$row["afp"]."'";
    $afp_constante= $this->query_fetchall("SELECT monto from afp where nombre='".$afp[0]."'");
    
    $this->constante_afp= $afp_constante[0];

    $sueldo_liquido= $this->query_fetchall("SELECT sueldo FROM ingreso_empleados where id='".$this->id_usuario."'");
    // ( 1 + (0.7) + ($afp_constantes[0]/100) ) * $row["sueldo"];
    $sueldo_bruto= ( 1 + (0.07) + ($afp_constante[0]/100) ) * $sueldo_liquido[0];
    $this->sueldo_bruto= $sueldo_bruto;
    //return $sueldo_bruto;
   // return number_format(intval($sueldo_bruto),0,",",".");

 } catch (Exception $e) {
 echo $e->getMessage();
 
 }


} // fin sueldo_bruto
    

/*
@métodos afp_monto_a_pagar
*/
private function afp_monto_a_pagar(){
 $sueldo_bruto= $this->sueldo_bruto;

 $afp_monto_a_pagar= $sueldo_bruto  * ( $this->constante_afp/100);
 $this->afp_monto= $afp_monto_a_pagar;

 //return number_format(intval($afp_monto_a_pagar),0,",",".");

}// fin afp monto a pagar




/*
@métodos isapre
*/
private function isapre_monto_a_pagar(){
  $sueldo_bruto= $this->sueldo_bruto;
  $this->isapre_monto= $sueldo_bruto * 0.07;
 // return $sueldo_bruto * 0.07;
 
 }// fin isapre monto a pagar
 


 
/*
@métodos calculos varios
*/
private function calculos_extras(){
  //explode("-", $numero_dia_ingreso);
  $this->gratificaciones= explode(",",$this->query_fetchall("SELECT gratificaciones FROM ingreso_empleados where id='".$this->id_usuario."'")[0]);  
  $this->bonos= explode(",",$this->query_fetchall("SELECT bonos FROM ingreso_empleados where id='".$this->id_usuario."'")[0]); 
  $this->incentivos= explode(",",$this->query_fetchall("SELECT incentivos FROM ingreso_empleados where id='".$this->id_usuario."'")[0]); 

  $this->gratificaciones_n = $this->condicional_arrays($this->gratificaciones);
  $this->bonos_n = $this->condicional_arrays($this->bonos);
  $this->incentivos_n = $this->condicional_arrays($this->incentivos);


  $this->total_descuentos_legales= $this->isapre_monto + $this->afp_monto;

 
 }// fin calculos externos
 


/*
@métodos condicional array
*/
private function condicional_arrays($array_a_evaluar){
            
              if($array_a_evaluar[0] === "sin"){
                $contador=0;
              }else{
              $contador_n= count($array_a_evaluar);
              $contador= $contador_n / 3;
              }
  
    return $contador;
} // fin funcion condicional array

}

?>