<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
  $busca_ape = $_GET["Ape"];
  $Busca_edad = $_GET["Edad"];
  try{
    $conn = new PDO('mysql:host=localhost; dbname=Pruebas', 'root', '');
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo 'Conexión Ok';
	$conn->exec("Set Character Set utf8");
	//$strsql = "Select Nombre, Apellido, Edad From Usuarios Where Edad = ?";
	$strsql = "Select Nombre, Apellido, Edad From Usuarios Where Apellido = :Ape AND Edad = :Edad";
	$result = $conn->prepare($strsql);
	$result->execute(array(":Ape"=>$busca_ape, ":Edad"=>$Busca_edad));
	while ($reg = $result->fetch(PDO::FETCH_ASSOC)){
		echo "Nombre: " . $reg["Nombre"] . " ";
		echo "Apellido: " . $reg["Apellido"] . " ";
		echo "Edad: " . $reg["Edad"] . "<br>";
	}
	$result->closecursor();
  }catch(Exception $e){
	die('Error: ' . $e->GetMessage());  
  }finally{
	$base = null;
  }
?>
</body>
</html>