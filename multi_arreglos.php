<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
  $alimentos = array("Fruta"=>array("Tropical"=>"Kiwi",
                                    "Citrico"=>"Naranja",
									"Otra"=>"Manzana"),
                     "Leche"=>array("Animal"=>"Vaca",
					              "Vegetal"=>"Coco"),
					 "Carne"=>array("Vacuno"=>"Lomo",
					                "Porcino"=>"Pata"));
  //echo $alimentos["Carne"]["Vacuno"];
  
  foreach($alimentos as $clv_alim=>$alim){
	  echo "$clv_alim <br>";
	  while(list($clave,$valor) = each($alim)){
		  echo "*" . $clave . " = " . $valor . "<br>";
	  }
	  echo "<br>";
  }
  echo "<br><br><br>";
  var_dump($alimentos);
  
?>
</body>
</html>