<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<style>
  p{
	  color:#F00;
	  font-size:25px;
  }
</style>

<body>
<?php
  $datos = array("Nombre"=>"Miguel","Apellidos"=>"Lugo Zamora","Edad"=>58);
  echo $datos{"Nombre"} . "<br>";
  $datos["Pais"]="Espeña";
  //$datos = "Miguel";
  echo (is_array($datos)? "Es ": "No es ") . " un arreglo";
  echo "<br><br>";
  foreach($datos as $clave=>$valor){
	  //echo $clave . ": " . $valor . "<br>";
	  echo "<p>$clave: $valor </p>";
  }
  
  $semana = array("Lunes","Martes","Miercoles","Jueves");
  sort($semana);
  for ($i = 0; $i < count($semana); $i++){
	  echo $semana[$i] . "<br>";
  }
?>
</body>
</html>