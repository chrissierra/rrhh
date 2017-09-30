<?php 
/**
* 
*/
require("./fpdf.php");
class reporte 
{
	
	public $titulo;
	public $imagen;
	public $nombre_trabajador;
	public $nombre_empresa;
	public $glosa_item;
	public $glosa_valor;
	public $direccion;
	public $fecha;
	public $ubicacion;
	public $cargo;
	public $departamento;
	public $rut;
	public $fecha_ingreso;
	public $dias;
	public $forma_de_pago;
	public $numero_cuenta;
	public $sueldo;
	public $afp;



	function __construct($titulo, $imagen, $nombre_trabajador, $nombre_empresa, $glosa_item, $glosa_valor,$fecha, $direccion,$ubicacion="")
	{ 
$this->titulo= $titulo;
$this->imagen= $imagen;
$this->nombre_trabajador= $nombre_trabajador;
$this->nombre_empresa= $nombre_empresa;
$this->glosa_item= $glosa_item;
$this->glosa_valor= $glosa_valor;
$this->direccion= $direccion; //direccion trabajador; NO LO USA
$this->fecha= $fecha;	
$this->ubicacion= $ubicacion;	//Ubicacion empresa	
	}

	public function armando_reporte_liquidacion(){

ob_end_clean(); //    the buffer and never prints or returns anything.
ob_start(); // it starts buffering

$pdf=new FPDF("P", "cm", "letter");
$pdf->addPage();

$pdf->setFont("Arial", "B", "10");
$pdf->cell(0,0,$this->nombre_empresa, 0, 1, "L");
$pdf->image($this->imagen,18, 1, 1.5, 1.5);
$pdf->ln(0.5);
$pdf->cell(0,0,$this->direccion, 0, 1, "L");
$pdf->ln(0.5);

$pdf->cell(0,0,utf8_decode($this->tiempo()), 0, 1, "L");
$pdf->ln(0.5);
$pdf->setFont("Arial", "BU", "10");

$pdf->cell(0,0,strtoupper(utf8_decode($this->titulo)),0,0,"C");
$pdf->setFont("Arial", "B", "10");
$pdf->ln(0.5);
$pdf->cell(0,0,utf8_decode("Nombre: ".$this->nombre_trabajador),0,0,"L");//nombre:
$pdf->cell(0,0,utf8_decode("Cargo : ".$this->cargo),0,0,"R");//cargo:




$pdf->ln(0.5);
$pdf->cell(0,0,utf8_decode("Ubicación: ".$this->ubicacion),0,0,"L");//ubicacion
$pdf->cell(0,0,utf8_decode("Departamento: ".$this->departamento),0,0,"R");//Departamento


$pdf->setFont("Arial");
$pdf->ln(1);
$pdf->cell(0,0,utf8_decode("Rut: ".$this->rut."                                          		 Forma de pago: ".$this->forma_de_pago. "                 MES DE PAGO  "),0,0,"L");


//$pdf->cell(0,0,utf8_decode("Rut: ".$this->rut),0,0,"C");
//$pdf->cell(0,0,utf8_decode("Mes de pago: ".$this->rut),0,0,"L");
//$pdf->cell(0,0,utf8_decode("Pago: ".$this->rut),0,0,"C");

$pdf->ln(0.6);
$pdf->cell(0,0,utf8_decode("Fecha Ingreso: ".$this->fecha_ingreso),0,0,"L");

$pdf->ln(0.6);
$pdf->cell(0,0,utf8_decode("Días trabajados: ".$this->dias. "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t Numero de cuenta: ".$this->numero_cuenta. " 	                       MARZO 2017"),0,0,"L");
$pdf->ln(1);
$pdf->cell(0,0,utf8_decode("HABERES LEGALES                            MONTO                        DESCUENTOS LEGALES                       MONTO"),0,0,"L");
 $pdf->ln(1);
 $pdf->setFont("Arial", "", "9");
 $pdf->cell(0,0,utf8_decode("Sueldo mensual pagado       ".$this->dias."               ".$this->sueldo."                             ".$this->afp." Cot Fon Ret(10%)              10.0             ".$this->sueldo*0.1),0,0,"L");


//lineas:
$pdf->line(1,4,20,4);
$pdf->line(1,6,20,6);




$pdf->output("I", utf8_decode("Liquidación de ". $this->nombre_trabajador . " al ".$this->tiempo()), true);


   ob_end_flush(); // It's printed here, because ob_end_flush "prints" what's in
	}



public function tiempo(){
	//$miFecha= gmmktime(12,0,0,1,15,2089);
setlocale(LC_TIME, 'es_ES.UTF-8');
setlocale(LC_ALL,"es_ES");

date_default_timezone_set("America/Santiago");
$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
 
$fecha= $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
//Salida: Viernes 24 de Febrero del 2012

//echo strftime("%A, %d de %B de %Y %H:%M");


	
//setlocale(LC_TIME, 'es_ES','es_ES.UTF-8');
//setlocale(LC_ALL, 'es_ES','es_ES.UTF-8');
//setlocale(LC_TIME, 'es_ES.UTF-8');
//ate_default_timezone_set("America/Santiago");
//$fecha1= date("l, d-m-Y");
//$fecha= strftime("%A, %d de %B de %Y %H:%M");
return $fecha;
}




public function Descarga_liquidacion(){

ob_end_clean(); //    the buffer and never prints or returns anything.
ob_start(); // it starts buffering

$pdf=new FPDF("P", "cm", "letter");
$pdf->addPage();

$pdf->setFont("Arial", "B", "10");
$pdf->cell(0,0,$this->nombre_empresa, 0, 1, "L");
$pdf->image($this->imagen,18, 1, 1.5, 1.5);
$pdf->ln(0.5);
$pdf->cell(0,0,$this->direccion, 0, 1, "L");
$pdf->ln(0.5);

$pdf->cell(0,0,utf8_decode($this->tiempo()), 0, 1, "L");
$pdf->ln(0.5);
$pdf->cell(0,0,utf8_decode($this->titulo),0,0,"C");

$pdf->output(utf8_decode("Liquidación_de_". $this->nombre_trabajador . "_al_".$this->tiempo()).".pdf", "D");


   ob_end_flush(); // It's printed here, because ob_end_flush "prints" what's in
	}



}

 ?>