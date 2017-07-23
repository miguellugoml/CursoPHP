<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php


  $conexion = new mysqli("localhost","root","","Pruebas");
  if ($conexion->connect_errno){
	  
	echo "Error en la conexion " . $conexion->connect_errno;
	}
	
//	mysqli_set_charset($conexion,"utf8");  
    $conexion->set_charset("utf8");
	$strsql = "Select * from usuarios";
	
//	$resultado = mysqli_query($conexion,$strsql);

    $resulatdo = $conexion->query($strsql);
	if ($conexion->connect_errno){
	  die($conexion->error);
  }
		
//	while ($fila = mysqli_fetch_array($resulatdo,MYSQLI_ASSOC);
 
    echo "<table border='1' cellspacing='0' cellpadding='0'><tr><td>Nombre</td><td>Apellido</td><td align='center'>Edad</td></tr>";

    while ($fila = $resulatdo->fetch_assoc()){
      echo "<tr>";
      echo "<td width='240' valign='top'><P>" . $fila["Nombre"] . "</P></td>";
      echo "<td width='240' valign='top'><P>" . $fila["Apellido"] . "</P></td>";
      echo "<td width='240' valign='top' align='center'><P>" . $fila["Edad"] . "</P></td>";
      echo "</tr>";
	}
    echo "</table>";
	
//	mysqli_close($conexion);
    $conexion->close();
	
	echo "por aqui";
?>
</body>
</html>