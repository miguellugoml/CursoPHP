<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>
<body>
<?php 
  print "Hola Muuundo </br></br>";
    $ar_m = array(array(1,2,array(3,4)),5,6);
	
	
	echo "La Matriz \$ar_m = array(array(1,2,array(3,4)),5,6) tiene s&oacute;lo " . count($ar_m) . " posiciones" . "</br></br>";
	
	//echo isarray($ar_m[0]);
	
	echo "Posici&oacute;n 0 es: " . $ar_m[0][0] . "</br>";
	echo "Posici&oacute;n 1 es: " . $ar_m[0][1] . "</br>";
	echo "Posici&oacute;n 2 es: " . $ar_m[0][2][0] . "</br>";
	echo "Posici&oacute;n 3 es: " . $ar_m[0][2][1] . "</br>";
	echo "Posici&oacute;n 4 es: " . $ar_m[1] . "</br>";
	echo "Posici&oacute;n 5 es: " . $ar_m[2] . "</br><br>";
	
	$ar_s = array($ar_m[0][0],$ar_m[0][1],$ar_m[0][2][0],$ar_m[0][2][1],$ar_m[1],$ar_m[2]);
	
    for ($i=0;$i<6;$i++){
	  echo $ar_s[$i] . "<br>";
	}
	echo implode(" - ",$ar_s);
	$a = array( 'color' => 'red',
            'taste' => 'sweet',
            'shape' => 'round',
            'name'  => 'apple',
            4        // la clave será 0
          );
    echo "<br>";
	echo implode(' * ', $a);
	echo "<br>";
	echo $a['shape']."<br>";
	echo $a[0];
	$colors = array('rojo', 'azul', 'verde', 'amarillo');

foreach ($colors as $color) {
    echo "¿Les gusta el $color?" . "<br>";
}
$b = array('a', 'b', 'c');
foreach ($b as $c) {
    echo "Un valor es $c" . "<br>";
}
	
?>
</body>
</html>