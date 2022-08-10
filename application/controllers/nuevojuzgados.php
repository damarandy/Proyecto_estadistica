<?php
class nuevojuzgados extends CI_Controller {
     private $model;

     public function __construct(){
     parent::__construct();
     $this->load->helper('url');
     $this->load->database();
    $this->load->library('Grocery_CRUD');
   }

	public function index(){
	$this ->load ->view ('plantilla/encabezado');
     $this->load->view('paginas/nuevomovimientos');
     $this ->load ->view ('plantilla/piee');
     // Aqui debo traer los valores capturados
     //llamar al modelo para que almacene a la bd
     //$this->load->models('Model_Index');
      //Regresar para que ejecute otra funcion
     
       
   }
   public function tipomovi(){
     $this ->load ->view ('plantilla/encabezado2');
     $this->load->view('paginas/movi_datos');
     $this ->load ->view ('plantilla/piee');

   }

   public function datos_recibidos(){

     $this ->load ->view ('plantilla/encabezado3');
     $this->load->view('paginas/recibe_datos');
     $this ->load ->view ('plantilla/piee');

   }
    
  

}


?>


