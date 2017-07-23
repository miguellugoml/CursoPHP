<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

</head>

<body>
<?php

  $db_host="localhost";
  $db_nombre="pruebas";
  $db_usuario="root";
  $db_clave="";
  
  //$conn=mysqli_connect($db_host,$db_usuario,$db_clave,$db_nombre);
  $conn=mysqli_connect($db_host,$db_usuario,$db_clave);
  
  if (mysqli_connect_errno()){
	  echo "Error al tratar de conectar con la base de datos";
	  exit();
  }
  mysqli_select_db($conn,$db_nombre) or die("No se encuentra la base de datos");
  
  mysqli_set_charset($conn,"utf8");

  $db_strsql="Select * From Usuarios";
  
  $resultado = mysqli_query($conn,$db_strsql);
  
  echo "<table border='1' cellspacing='0' cellpadding='0'><tr><td>Nombre</td><td>Apellido</td><td align='center'>Edad</td></tr>";
  
  while($fila = mysqli_fetch_assoc($resultado)){
    echo "<tr>";
    echo "<td width='240' valign='top'><P>" . $fila["Nombre"] . "</P></td>";
    echo "<td width='240' valign='top'><P>" . $fila["Apellido"] . "</P></td>";
    echo "<td width='240' valign='top' align='center'><P>" . $fila["Edad"] . "</P></td>";
    echo "</tr>";
  }
  echo "</table>";
  mysqli_close($conn);
  
?>
</body>
</html>