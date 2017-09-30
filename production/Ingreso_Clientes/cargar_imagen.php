<?php ob_start(); setcookie("i", "true");?>
<?php 
$dir_subida = './imagen_logos/';
$nombre=$_POST["nombre_imagen"];
$fichero_subido = $dir_subida . $nombre . ".png";
session_start();

echo '<pre>';
if (move_uploaded_file($_FILES['hola']['tmp_name'], $fichero_subido)) {
    echo "El fichero es válido y se subió con éxito.\n";
    $_SESSION["imagen"]="true";

} else {
    echo "¡Posible ataque de subida de ficheros!\n";
}

echo ' <script type="text/javascript">


setTimeout(hola, 50);



function hola(){

var promise = new Promise(function (resolve, reject) {
 resolve("true");
 reject(0); // Does nothing
 
});


promise.then(function (e) {
 


window.history.back();
});





	

}

 </script>';
ob_end_flush();
 ?>






