<?php
require '../config/config.php';
require '../afp_isapres/conexion_base_abstracta.php';
require '../variables_empresa/clase_variables_empresa.php';
$base= new crud_variables_empresa();

if($_POST["funcion_servidor"]=="select_load"){
    $usuario= $_POST["usuario_plataforma"];
    
    $query='SELECT * from anexos_hechos where usuario="'.$usuario.'"';
    
    $resultado= $base->get_por_query($query);

    //echo count($resultado);
if(count($resultado)== 0){
    echo "<option>Sin anexos creados</option>";
}else{
    $select="<option>Selecciona anexo</option>";
    foreach ($resultado as $key => $value) {
        $select.="<option value=".$value["id"].">".$value["descripcion_breve_anexo"]."</option>";
    }
    echo $select;
}

}elseif ($_POST["funcion_servidor"]=="cargar_anexos_visualizacion") {

    $id= $_POST["id_trabajador"];
    
    $query='SELECT * from anexos_hechos where id="'.$id.'"';
    
    $resultado= $base->get_por_query($query);
                 /*
  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++               
                 */
                 if(count($resultado)== 0){
                    echo 0;
                }else{
                    $input="";
                    foreach ($resultado as $key => $value) {
                        $input.=$value["anexo"];
                    }
                    echo $input;
                }

                 /*
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ 
                 */

//ingresar


}elseif ($_POST["funcion_servidor"]=="ingresar") {

    function testear($pdo, $columna){
     
        foreach ($pdo as $key => $value) {
            return strlen($value[$columna]);
        }
    
    }//fin funcion testear
    $descripcion_breve=$_POST["descripcion_breve"];
    $usuario=$_POST["usuario"];
        $id= $_POST["id_trabajador"];
        $anexo_por_post=$_POST["anexo_por_post"];
        $query1='SELECT * from ingreso_empleados where id="'.$id.'"';
     echo $id;
     echo testear($base->get_por_query($query1),"anexo1");
                     /*
      +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++               
                     */
            
if(testear($base->get_por_query($query1),"anexo1")==0){
    $base->update_query('UPDATE ingreso_empleados SET anexo1="'.$anexo_por_post.'" WHERE id="'.$id.'"');
}elseif(testear($base->get_por_query($query1),"anexo2")==0){
    $base->update_query('UPDATE ingreso_empleados SET anexo2="'.$anexo_por_post.'" WHERE id="'.$id.'"');  
}elseif(testear($base->get_por_query($query1),"anexo3")==0){
    $base->update_query('UPDATE ingreso_empleados SET anexo3="'.$anexo_por_post.'" WHERE id="'.$id.'"');
}elseif(testear($base->get_por_query($query1),"anexo4")==0){
    $base->update_query('UPDATE ingreso_empleados SET anexo4="'.$anexo_por_post.'" WHERE id="'.$id.'"');
}elseif(testear($base->get_por_query($query1),"anexo5")==0){
    $base->update_query('UPDATE ingreso_empleados SET anexo5="'.$anexo_por_post.'" WHERE id="'.$id.'"');
}elseif(testear($base->get_por_query($query1),"anexo6")==0){
    $base->update_query('UPDATE ingreso_empleados SET anexo6="'.$anexo_por_post.'" WHERE id="'.$id.'"');
}elseif(testear($base->get_por_query($query1),"anexo7")==0){
    $base->update_query('UPDATE ingreso_empleados SET anexo7="'.$anexo_por_post.'" WHERE id="'.$id.'"');
}elseif(testear($base->get_por_query($query1),"anexo8")==0){
    $base->update_query('UPDATE ingreso_empleados SET anexo8="'.$anexo_por_post.'" WHERE id="'.$id.'"');
}elseif(testear($base->get_por_query($query1),"anexo9")==0){
    $base->update_query('UPDATE ingreso_empleados SET anexo9="'.$anexo_por_post.'" WHERE id="'.$id.'"');
}elseif(testear($base->get_por_query($query1),"anexo10")==0){
    $base->update_query('UPDATE ingreso_empleados SET anexo10="'.$anexo_por_post.'" WHERE id="'.$id.'"');
}
/*
 (testear($base->get_por_query($query1),"anexo1")>3) ? "" : $base->update_query('UPDATE ingreso_empleados SET anexo1="'.$anexo_por_post.'" WHERE id="'.$id.'"');
 (testear($base->get_por_query($query1), "anexo2")>3) ? "" : $base->update_query('UPDATE ingreso_empleados SET anexo2="'.$anexo_por_post.'" WHERE id="'.$id.'"');  
 (testear($base->get_por_query($query1), "anexo3")>3) ? "" : $base->update_query('UPDATE ingreso_empleados SET anexo3="'.$anexo_por_post.'" WHERE id="'.$id.'"');
 (testear($base->get_por_query($query1), "anexo4")>3) ? "" : $base->update_query('UPDATE ingreso_empleados SET anexo4="'.$anexo_por_post.'" WHERE id="'.$id.'"');
 (testear($base->get_por_query($query1), "anexo5")>3) ? "" : $base->update_query('UPDATE ingreso_empleados SET anexo5="'.$anexo_por_post.'" WHERE id="'.$id.'"');
 (testear($base->get_por_query($query1), "anexo6")>3) ? "" : $base->update_query('UPDATE ingreso_empleados SET anexo6="'.$anexo_por_post.'" WHERE id="'.$id.'"');
 (testear($base->get_por_query($query1), "anexo7")>3) ? "" : $base->update_query('UPDATE ingreso_empleados SET anexo7="'.$anexo_por_post.'" WHERE id="'.$id.'"');
 (testear($base->get_por_query($query1), "anexo8")>3) ? "" : $base->update_query('UPDATE ingreso_empleados SET anexo8="'.$anexo_por_post.'" WHERE id="'.$id.'"');
 (testear($base->get_por_query($query1), "anexo9")>3) ? "" : $base->update_query('UPDATE ingreso_empleados SET anexo9="'.$anexo_por_post.'" WHERE id="'.$id.'"');
 (testear($base->get_por_query($query1), "anexo10")>3) ? "" : $base->update_query('UPDATE ingreso_empleados SET anexo10="'.$anexo_por_post.'" WHERE id="'.$id.'"');*/
 

 echo "descripcion breve: ". $descripcion_breve;
if(is_numeric($descripcion_breve)){
   
}else{
    $base->insert_por_query('INSERT INTO anexos_hechos SET anexo="'.$anexo_por_post.'",usuario="'.$usuario.'", descripcion_breve_anexo="'.$descripcion_breve.'"');
}





                     /*
    +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ 
                     */
    
    //ingresar
    
    
    }elseif ($_POST["funcion_servidor"]=="cargar_anexos_visualizacion_modal") {
    
        $id= $_POST["id_trabajador"];
        
        $query='SELECT * from ingreso_empleados where id="'.$id.'"';
        
        $resultado= $base->get_por_query($query);
                     /*
      +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++               
                     */
                     if(count($resultado)== 0){
                        echo 0;
                    }else{
                        $input="";
                        foreach ($resultado as $key => $value) {

if(strlen($value["anexo1"])>2){
    $input.= '<textarea  cols="30" rows="10" id="anexos" class="form-control col-md-7 col-xs-12"   type="text">'.$value["anexo1"].'</textarea>&nbsp;&nbsp;&nbsp;';
}

if(strlen($value["anexo2"])>2){
    $input.= '<textarea  cols="30" rows="10" id="anexos" class="form-control col-md-7 col-xs-12"   type="text">'.$value["anexo2"].'</textarea>&nbsp;&nbsp;&nbsp;';
}

if(strlen($value["anexo3"])>2){
    $input.= '<textarea  cols="30" rows="10" id="anexos" class="form-control col-md-7 col-xs-12"   type="text">'.$value["anexo3"].'</textarea>&nbsp;&nbsp;&nbsp;';
}

if(strlen($value["anexo4"])>2){
    $input.= '<textarea  cols="30" rows="10" id="anexos" class="form-control col-md-7 col-xs-12"   type="text">'.$value["anexo4"].'</textarea>&nbsp;&nbsp;&nbsp;';
}

if(strlen($value["anexo5"])>2){
    $input.= '<textarea  cols="30" rows="10" id="anexos" class="form-control col-md-7 col-xs-12"   type="text">'.$value["anexo5"].'</textarea>&nbsp;&nbsp;&nbsp;';
}

if(strlen($value["anexo6"])>2){
    $input.= '<textarea  cols="30" rows="10" id="anexos" class="form-control col-md-7 col-xs-12"   type="text">'.$value["anexo6"].'</textarea>&nbsp;&nbsp;&nbsp;';
}

if(strlen($value["anexo7"])>2){
    $input.= '<textarea  cols="30" rows="10" id="anexos" class="form-control col-md-7 col-xs-12"   type="text">'.$value["anexo7"].'</textarea>&nbsp;&nbsp;&nbsp;';
}

if(strlen($value["anexo8"])>2){
    $input.= '<textarea  cols="30" rows="10" id="anexos" class="form-control col-md-7 col-xs-12"   type="text">'.$value["anexo8"].'</textarea>&nbsp;&nbsp;&nbsp;';
}

if(strlen($value["anexo9"])>2){
    $input.= '<textarea  cols="30" rows="10" id="anexos" class="form-control col-md-7 col-xs-12"   type="text">'.$value["anexo9"].'</textarea>&nbsp;&nbsp;&nbsp;';
}

if(strlen($value["anexo10"])>2){
    $input.= '<textarea  cols="30" rows="10" id="anexos" class="form-control col-md-7 col-xs-12"   type="text">'.$value["anexo10"].'</textarea>&nbsp;&nbsp;&nbsp;';
}
                            
                        }
                        echo $input;
                    }
    
                     /*
    +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ 
                     */
    
    //cargar_anexos_visualizacion_modal
    
    
    }



?>