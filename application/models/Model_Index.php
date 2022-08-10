<?php

require_once("config.php");
require_once("controlller/index.php");

class Modelo extends CI_Models{
	private $Modelo;
	private $db;

	public function_contruct() {

		$this->Modelo=array();
		$this-> db = new PDO ('mysql:host=localhost;dbname = estructura',"root","");
   
    }

 
    public function insertar($tabla,$data){
    $conexion = new mysqli("localhost", "root", " ", "estructura");
    //if ($conexion){
    //  echo "exito";
    //}
    // else{
    //echo "no exito";
    // }

    $query = "INSERT INTO tipomovimiento() VALUES ()";
            
    $resultado = $conexion->query($query);
    
    if($resultado){
        echo "inserción exitosa";
    }
    else{
    echo "inserción no exitosa";    
    }
    $consultainsert="insert into".$tabla."value(null,".$data.")";
    if($resultado){
    	return true;
    else{
    	return false;
    }
    }

    }
    
   public function mostrar($tabla,$condicion){
    $consul="select * form".$tabla."".$data.";";
    $resu=$this-> db->query($consult);
    	while ($fila=$resu ->FETCHALL (PDO::FETCH_ASSOC)){
        $this valor []=$fila;

    	}
    return $this -> valor;
    	
   
    }

    public function actualizar($tabla,$data){

    	
    }

}
?>