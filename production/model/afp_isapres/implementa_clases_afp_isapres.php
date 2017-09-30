<?php
/*require_once './model/afp_isapres/clase_bbdd_isapre.php';
require_once './model/afp_isapres/clase_bbdd_afp.php';*/


class implementacion_afp_isapre{
    
    function afp(){
        $afp= new conexion_afp;
        return $afp;
    }

     function isapre(){
        $isapre= new conexion_isapre;
        return $isapre;
    }
}



$bbdd_mysql= new implementacion_afp_isapre;

//$bbdd_mysql->afp()->insert_mysql_afp("MODELO",12.18);

$resultado_afp= $bbdd_mysql->afp()->get_todas_afp();

/*
foreach ($resultado_afp as $key => $value) {
   echo $value["nombre"];
}
*/

$resultado_isapre= $bbdd_mysql->isapre()->get_todas_isapre();

/*
foreach ($resultado_isapre as $key => $value) {
   echo $value["nombre"];
}*/





?>