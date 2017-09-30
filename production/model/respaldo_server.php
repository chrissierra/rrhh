<?php

/*
<?php

require './clase_actividad_reciente.php';

$postdata = file_get_contents("php://input");

$request= json_decode($postdata);

$users = users::singleton();

//($nombre,$apellido, $edad, $fecha_nacimiento, $direccion, $puesto, $empresa, $jefatura, $ingreso, $sueldo, $rut, $tabla, $id)

$data = $users->update_usuario($request[1],$request[2],$request[3],$request[4],$request[5],$request[6],$request[7],$request[8],$request[9],$request[10],$request[11], "ingreso_empleados", $request[12]);

$usuario_administrador= $request[13];
$actividad_reciente1= new actividad_reciente($usuario_administrador, $request[1], "Actualización de perfil de ". $request[1]. " ". $request[2], $request[8], "kjh");
#$actividad_reciente1->tabla= "actividad_reciente";

$actividad_reciente1->guarda_actividad_base();




?>*/



require './clase_actividad_reciente.php';
try{
   // $base= new PDO('mysql:host=localhost; dbname=super', 'root', '');
//$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//$base->exec("SET CHARACTER SET utf8");
   // $base= new PDO('mysql:host=localhost; dbname=super', 'root', '');

$pdo=new PDO('mysql:host=localhost; dbname=recursos_humanos','root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec('SET CHARACTER SET utf8');
}catch(PDOException $e){
    $error= "no se puede conectar";
    exit();
}
echo "variable sesion: ".$_POST["nombre_empresa"];
echo $_POST["nombre1"] . "<br>";
echo $_POST["apellido"] . "<br>";
echo $_POST["sexo"] . "<br>";
echo $_POST["direccion"] . "<br>";
echo $_POST["nacimiento"] . "<br>";
echo $_POST["sueldo"] . "<br>";

try{


$sql= 'INSERT INTO ingreso_empleados SET nombre=:nombre,
apellido=:apellido,
edad=:edad,
sexo=:sexo,
nacimiento=:nacimiento,
direccion=:direccion,
sueldo=:sueldo,
puesto=:puesto,
empresa=:empresa,
jefatura=:jefatura,
ingreso=CURDATE(),
rut=:rut,
isapre=:isapre,
afp=:afp,
horario=:horario';

$s= $pdo->prepare($sql);
$s->bindValue(':nombre',$_POST["nombre1"] );
$s->bindValue(':apellido',$_POST["apellido"] );
$s->bindValue(':edad',$_POST["edad"] );
$s->bindValue(':sexo',$_POST["sexo"] );
$s->bindValue(':nacimiento',$_POST["nacimiento"] );
$s->bindValue(':direccion',$_POST["direccion"] );

$s->bindValue(':sueldo',$_POST["sueldo"] );
$s->bindValue(':puesto',$_POST["puesto"] );
$s->bindValue(':empresa',$_POST["nombre_empresa"] );
$s->bindValue(':jefatura',$_POST["jefatura"] );
//ingreso
$s->bindValue(':rut',$_POST["rut"] );
$s->bindValue(':isapre',$_POST["isapre"] );
$s->bindValue(':afp',$_POST["afp"] );
$s->bindValue(':horario',$_POST["horario"] );
$s->execute();
echo "listo";
}catch(PDOException $e){
    $error="error no se puede ingresar";
    echo $error . " " .$e;
    exit();
}

$actividad_reciente1= new actividad_reciente($_POST["nombre_empresa"], $_POST["nombre1"] . " ". $_POST["apellido"], "Ingreso de nuevo empleado: ". $_POST["nombre1"], "nulo", "nulo");
$actividad_reciente1->tabla= "actividad_reciente";

$actividad_reciente1->guarda_actividad_base();

//$json_str = file_get_contents('php://input');


?>
