<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php
/*
  function suma($num1, $num2){
	  $resultado = $num1 + $num2;
	  return $resultado;
  }
  echo suma(5,6);
*/  
  function Mayus($frase,$conver=true){
	$frase=strtolower($frase);
	if ($conver){
		$result = ucwords($frase);
	}else{
		$result = strtoupper($frase);
	}
	  return $result;
  }
  
  echo Mayus("esto es una prueba de funcion", true);
?>
</body>
</html>