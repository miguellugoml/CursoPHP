<?php
  require "config.php";

  class Conexion{
    protected $conexion_db;
	

	public function Conexion(){
	try{	
    $this->conexion_db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NOMBRE,'root','');
	  //$this->conexion_db = new PDO('mysql:host=localhost; dbname=Pruebas', 'root', '');
	  $this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  
	  $this->conexion_db->exec('SET CHARACTER SET '.DB_CHARSET);
	  
	  return $this->conexion_db;
	  
	}catch(Exception $e){
		echo "Falló la conexión a la base de datos, error en la linea: " . $e->getLine();
	}
//--- en forma PROCIDEMENTAL -----------------------------------------------------
/*
	  $this->conexion_db = new mysqli(DB_HOST, DB_USUARIO, DB_PASS, DB_NOMBRE);
	  if ($this->conexion_db->connect_errno){
		  echo "Falló al conectar a MySQL: " . $this->conexion_db->connect_error;
		  return;
	  }
	  $this->conexion_db->set_charset(DB_CHARSET);
*/
//--------------------------------------------------------------------------------	  
	}

  }
?>