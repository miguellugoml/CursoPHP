<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
  try{
	  $conn = new PDO("mysql:host=localhost; dbname=Pruebas", "root","");
	  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  $strsql = "Select * from Usuarios_pass where Usuario = :login And Password = :password";
	  $resultado = $conn->prepare($strsql);
	  $login = htmlentities(addslashes($_POST["login"]));
 	  $password = htmlentities(addslashes($_POST["password"]));
	  $resultado->bindValue(":login", $login);
	  $resultado->bindValue(":password", $password);
	  $resultado->execute();
	  $num_reg = $resultado->rowCount();
	  if ($num_reg != 0){
		  echo "<h2>Usuario Válido</h2>";
	  }else{
		  header("location:login.php");
	  }
  }catch(Exception $e){
	  die("Eroor: " . $e->getMessage());
  }

?>
</body>
</html>