<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
    /*Imprime por pantalla las tablas de multiplicar del 1 al 10 usando bucles for anidados. Sólo puedes usar una vez la instrucción echo.*/
    for ($i = 1; $i <= 10; $i++) 
    {
        for ($j = 1; $j <= 10; $j++) 
        {
            echo $i . " x " . $j . " = " . $i*$j . "<br/>";
        }
      }

	?>
</body>
</html>
