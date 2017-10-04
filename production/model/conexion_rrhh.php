<?php

try{
   // $base= new PDO('mysql:host=localhost; dbname=super', 'root', '');
//$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//$base->exec("SET CHARACTER SET utf8");
   // $base= new PDO('mysql:host=localhost; dbname=super', 'root', '');
   
$pdo=new PDO('mysql:host=localhost;dbname='.$bd, $usuario, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec('SET CHARACTER SET utf8');
}catch(PDOException $e){
    $error= "no se puede conectar";
    exit();
}

?>