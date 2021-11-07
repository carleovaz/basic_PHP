<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
    /*Imprime por pantalla las tablas de multiplicar del 1 al 10 usando bucles for anidados. Sólo puedes usar una vez la instrucción echo.*/
    for($num=1;$num<11;$num++)
    {
	for($i=1;$i<11:$i++) {	
            echo $num . "x" . $i . " = " . $num*$i . "<br/>";
	}
    }

	?>
</body>
</html>
