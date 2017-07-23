<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Trabajando Strings</title>

<style>
  .resaltar{
    color:#FF0000;
	font-weight:bold;
  }

</style>
</head>

<body>
<?php
  echo "<p class='resaltar'>Esto es un ejemplo de frase </p>";
  $nombre = "Miguel";
  
  echo "Hola $nombre<br>"; //salida Hola Miguel
  echo 'Hola $nombre<br>'; //salida Hola $nombre Entre comillas simples no se interpreta la variable 
  echo "<br>";
  echo "<br>";
  
  $nombre2 = "miguel";
  echo "Las variables nombre=Miguel y nombre2=miguel, comparadas ";

  $resultado = strcmp($nombre,$nombre2);
  diqueson($resultado);
  
  $resultado = strcasecmp($nombre,$nombre2);
  diqueson($resultado);
  
  function diqueson(&$resul){
    echo "<br>";
    echo "Con strcasecmp ";
    echo ($resul ? "No " : "Si "); 
    echo "son Iguales";
  }
?>

</body>
</html>
