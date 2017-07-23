<?php
  require "Conexion.php";

  class devuelve_usuarios extends Conexion{
	  
	  public function devuelve_usuarios(){
		 
		  parent::__construct();
	  }
	  
	  public function get_usuarios(){
//------------------------------------------------------------------------
// Con Libreria PDO
		  
		  $sql = "Select Nombre, Apellido, Edad from usuarios";
		  $sentencia = $this->conexion_db->prepare($sql);
		  $sentencia->execute(array());
		  $resultado = $sentencia->fetchALL(PDO::FETCH_ASSOC);
		  $sentencia->closeCursor();
		  return $resultado;
		  $this->conexion_db=null;
		  
//-------------------------------------------------------------------------	
// Forma PROCEDIMENTAL
/*	  
		  $resultado = $this->conexion_db->query('Select * From usuarios');
		  $usuarios = $resultado->fetch_all(MYSQLI_ASSOC);
		  return $usuarios;
*/		  
	  }
	  public function get_cuantos_usuarios(){
		  
		  $sql = "Select Sum(Edad) as SumaEdades, Count(*) as Cantidad from usuarios";
		  $sentencia = $this->conexion_db->prepare($sql);
		  $sentencia->execute(array());
		  $resultado = $sentencia->fetchALL(PDO::FETCH_ASSOC);
		  $sentencia->closeCursor();
		  return $resultado;
		  $this->conexion_db=null;
		  
	  }

  }
?>