<?php 
 include  "./model/config/config.php"; 


	/*var nombre_rep= document.getElementById("nombre_rep");
	var email= document.getElementById("email");
	var numero= document.getElementById("numero");
	var direccion= document.getElementById("direccion");
	var website= document.getElementById("website");
	var password= document.getElementById("password");
	var nacimiento= document.getElementById("nacimiento");
	var textarea= document.getElementById("textarea");
	var rut_rep= document.getElementById("rut_rep");
	var nombre_empresa= document.getElementById("nombre_empresa");
	var giro= document.getElementById("giro");
	var rut_empresa= document.getElementById("rut_empresa");
	var numero_empleados= document.getElementById("numero_empleados");*/


 $nombre_empresa= $_POST["nombre_empresa"]; 
 $nombre_rep= $_POST["nombre_rep"]; 
 $email= $_POST["email"]; 
 $numero= $_POST["numero"]; 
 $direccion= $_POST["direccion"];
 $website= $_POST["website"]; 
 $password= $_POST["password"]; 
 $password_encriptada= password_hash($password, PASSWORD_DEFAULT);
 $textarea= $_POST["textarea"]; 
 $rut_empresa= $_POST["rut_empresa"];
 $rut_rep= $_POST["rut_rep"];
 $giro= $_POST["giro"];
 $numero_empleados= $_POST["numero_empleados"];
 $nacimiento= $_POST["nacimiento"];




if (filter_has_var(INPUT_POST, 'nombre_empresa') &&
(strlen(filter_input(INPUT_POST, 'nombre_empresa', FILTER_SANITIZE_STRING)) <= 3)) {
print 'nombre_empresa must be more than 5 characters.';


}elseif(filter_has_var(INPUT_POST, 'direccion') &&
(strlen(filter_input(INPUT_POST, 'direccion', FILTER_SANITIZE_STRING)) <= 3)) {
print 'direccion must be more than 5 characters.';


}elseif(filter_has_var(INPUT_POST, 'email') &&
(strlen(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING)) <= 3)) {
print 'email must be more than 5 characters.';


}elseif(filter_has_var(INPUT_POST, 'nombre_rep') &&
(strlen(filter_input(INPUT_POST, 'nombre_rep', FILTER_SANITIZE_STRING)) <= 3)) {
print 'Debes agregar el nombre del representante legal.';


}elseif(filter_has_var(INPUT_POST, 'numero') &&
(strlen(filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING)) <= 3)) {
print 'Numero must be more than 5 characters.';

}/*elseif(filter_has_var(INPUT_POST, 'website') &&
(strlen(filter_input(INPUT_POST, 'website', FILTER_SANITIZE_STRING)) <= 3)) {
print 'website must be more than 5 characters.';

}*/elseif(filter_has_var(INPUT_POST, 'password') &&
(strlen(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING)) <= 3)) {
print 'password must be more than 5 characters.';

}elseif(filter_has_var(INPUT_POST, 'giro') &&
(strlen(filter_input(INPUT_POST, 'giro', FILTER_SANITIZE_STRING)) <= 3)) {
print 'giro must be more than 5 characters.';

}/*elseif(filter_has_var(INPUT_POST, 'textarea') &&
(strlen(filter_input(INPUT_POST, 'textarea', FILTER_SANITIZE_STRING)) <= 3)) {
print 'textarea must be more than 5 characters.';

}*/elseif(filter_has_var(INPUT_POST, 'rut_rep') &&
(strlen(filter_input(INPUT_POST, 'rut_rep', FILTER_SANITIZE_STRING)) <= 3)) {
print 'rut_rep must be more than 5 characters.';

}elseif(filter_has_var(INPUT_POST, 'rut_empresa') &&
(strlen(filter_input(INPUT_POST, 'rut_empresa', FILTER_SANITIZE_STRING)) <= 3)) {
print 'rut_empresa must be more than 5 characters.';

}elseif(filter_has_var(INPUT_POST, 'numero_empleados') &&
(strlen(filter_input(INPUT_POST, 'numero_empleados', FILTER_SANITIZE_STRING)) <= 3)) {
print 'numero_empleados must be more than 5 characters.';

}elseif(filter_has_var(INPUT_POST, 'nacimiento') &&
(strlen(filter_input(INPUT_POST, 'nacimiento', FILTER_SANITIZE_STRING)) <= 3)) {
print 'nacimiento must be more than 5 characters.';

}else{


$db = new PDO('mysql:host=localhost;dbname='.$bd, $usuario, $pass);
$st= $db->prepare("INSERT INTO clientes_rrhh (nombre_empresa,nombre_rep,email,numero,website,password,textarea,rut_empresa,rut_rep,giro, numero_empleados,nacimiento) VALUES (:nombre_empresa,:nombre_rep,:email,:numero,:website,:password,:textarea,:rut_empresa,:rut_rep,:giro, :numero_empleados,:nacimiento)");
 
$st->bindParam(":nombre_empresa", $nombre_empresa);
$st->bindParam(":nombre_rep", $nombre_rep);
$st->bindParam(":email", $email);
$st->bindParam(":numero", $numero);
$st->bindParam(":website", $website);
$st->bindParam(":password", $password_encriptada);
$st->bindParam(":textarea", $textarea);
$st->bindParam(":rut_empresa", $rut_empresa);
$st->bindParam(":rut_rep", $rut_rep);
$st->bindParam(":giro", $giro);
$st->bindParam(":numero_empleados", $numero_empleados);
$st->bindParam(":nacimiento", $nacimiento);

$st->execute();

print 'Exito';
}






?>