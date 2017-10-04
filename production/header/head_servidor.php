  <?php 
 include  "../model/config/config.php"; 


     session_start(); 

     if(!isset($_SESSION["usuario"]))  {
         header("location:./login.php");

      if(!isset($_POST["usuario"])){

         header("location:./login.php");

       }else{
$clean= array();  
$clean["usuario"]=$_POST["usuario"];
$base= new PDO('mysql:host=localhost;dbname='.$bd, $usuario, $pass);
$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$base->exec("SET CHARACTER SET utf8");
$sql= "SELECT password FROM clientes_rrhh WHERE nombre_empresa =? ";
$st= $base->prepare($sql);
$st->execute(array($clean["usuario"]));
$clave= $st->fetchColumn();

if(password_verify($_POST["clave"],$clave)){
$_SESSION["usuario"]=$_POST["usuario"];
header("location:../index.php");
}else{
  echo "no funciona";
  header("location:./login.php");
}


        

       }

     }else{
       
     }
     
     ?>