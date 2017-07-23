<?php
  require "devuelve_usuarios.php";
  $usuarios = new devuelve_usuarios();
  $reg_usuarios = $usuarios->get_usuarios();
	$reg_Cuantos = $usuarios->get_cuantos_usuarios();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ejemplo PD OO</title>
</head>

<body>
<?php
	echo "<table border='1' cellspacing='0' cellpadding='0'><tr>";
  echo "<th width='272' valign='top'><p align='center'>Nombre:</p></th>";
  echo "<th width='272' valign='top'><p align='center'>Apellidos:</p></th>";
  echo "<th width='100' align='center'><p align='center'>Edad:</p></th></tr>";

  foreach($reg_usuarios as $usuario){
	echo "<tr>";
	echo "<td>&nbsp;" . $usuario["Nombre"] . "</td>";  
	echo "<td>&nbsp;" . $usuario["Apellido"] . "</td>";  
	echo "<td align='center'>" . $usuario["Edad"] . "</td>";  
	echo "</tr>";  
  }
	foreach($reg_Cuantos as $reg){
		$prom = $reg["SumaEdades"] / $reg["Cantidad"];
	  //echo "<tr><td>&nbsp;</td><td>Edad Promedio:</td><td>" .$prom . "</td></tr>";
		echo "<tr><td>&nbsp;</td><td align='right'>Edad Promedio:&nbsp;</td><td align='Center'>";
		printf("%.0f",$prom);
		echo "</td></tr>";
	}
	echo "</tr></table>";  
?>
</body>
</html>