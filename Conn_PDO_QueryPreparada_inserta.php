<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
  $ins_nom = $_GET["Nom"];
  $ins_ape = $_GET["Ape"];
  $ins_edad = $_GET["Edad"];
  try{
    $conn = new PDO('mysql:host=localhost; dbname=Pruebas', 'root', '');
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo 'Conexión Ok';
	$conn->exec("Set Character Set utf8");
	//$strsql = "Select Nombre, Apellido, Edad From Usuarios Where Edad = ?";
	$strsql = "Insert Into Usuarios (Nombre, Apellido, Edad) Values(:Nom, :Ape, :Edad)";
	$result = $conn->prepare($strsql);
	$result->execute(array("Nom"=>$ins_nom, ":Ape"=>$ins_ape, ":Edad"=>$ins_edad));
	/*while ($reg = $result->fetch(PDO::FETCH_ASSOC)){
		echo "Nombre: " . $reg["Nombre"] . " ";
		echo "Apellido: " . $reg["Apellido"] . " ";
		echo "Edad: " . $reg["Edad"] . "<br>";
	}*/
	echo "Registro Insertado";
	$result->closecursor();
  }catch(Exception $e){
	die('Error: ' . $e->GetMessage());  
  }finally{
	$base = null;
  }
?>
</body>
</html>