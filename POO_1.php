<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
  include ("Vehiculos.php");
  
  $Toyota = new coche();
  echo $Toyota->motor . "<br>";
  echo $Toyota->arrancar();
  $Toyota->da_color("Blanco");
  echo $Toyota->color . "<br>";
  
  $Ford = new coche();
  echo $Ford->ruedas . "<br>";
  $Ford->da_color("Azul");
  echo $Ford->color . "<br>";
  
  $Mack = new Camion();
  echo "Las ruedas del Mack son: " . $Mack->ruedas . "<br>";
  $Mack->arrancar();
?>
</body>
</html>