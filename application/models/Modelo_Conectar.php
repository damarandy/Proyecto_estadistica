<?php 

class Model {
    private $Modelo;
    private $db;

    public function_contruct() {

       // $this->Model=array();
      //  $this-> db = new PDO ('mysql:host=localhost;bd=estructura',"root","");
   
    }

 
    public function insertar($tabla,$data){
    $consulta="insert into".$tabla."value(null,".$data.")";
    if($resultado){
        return true;
    else{
        return false;
    }
    }

    }
    


?>
