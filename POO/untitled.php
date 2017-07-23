<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<st
</head>

<body>
<?php
        $string = 'ml123';
				echo $string;
        $size = strlen($string) - 1;
        $result = '';
        for($i = $size; $i >= 0; $i--){
            $result .= $string[$i];
        }
        $result = md5($result);
        echo "<p>".$result."</p>";
?>

</body>
</html>