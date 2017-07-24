<?php
  class Coche{
	  var $ruedas;
	  var $motor;
	  var $color;
	  
	  function Coche(){
		  $this->motor = 1600;
		  $this->ruedas = 4;
	  }
	  
	  function arrancar(){
		  echo "Estoy arrancando";
	  }
	  
	  function da_color($que_color){
		  $this->color = $que_color;
	  }
  }
  class Camion extends Coche{
	  
	  function Camion(){
		  $this->motor = 2600;
		  $this->ruedas = 8;
	  }
	  
	  function arrancar(){
		  parent::arrancar();
		  Echo " El camión <br>";
	  }
  }
    
?>