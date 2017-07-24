<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ejemplo con operadores</title>
</head>

<body>

<p>&nbsp;</p>
<form name="form1" method="POST" action="calculadora.php">
  <p>
    <label>Número 1</label>
    <input type="text" name="num1" id="num1">
    <label>Número 2</label>
    <input type="text" name="num2" id="num2">
    <label>Operación</label>
    <select name="operacion" id="operacion">
      <option>Suma</option>
      <option>Resta</option>
      <option>Multiplicación</option>
      <option>División</option>
      <option>Módulo</option>
    </select>
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Enviar" onClick="prueba">
  </p>
</form>
<p>&nbsp;</p>

</body>
</html>