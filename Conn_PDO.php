<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
  try{
    $base = new PDO('mysql:host=localhost; dbname=Pruebas', 'root', '');
    echo 'Conexión Ok';
  }catch(Exception $e){
	die('Error: ' . $e->GetMessage());  
  }  
?>
</body>
</html>