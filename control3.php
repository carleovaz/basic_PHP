<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
    /*Crea una variable entera aleatoria llamada “edad” y muéstrala por pantalla. 
    Si la edad es mayor de 65 años, muestra por pantalla el mensaje “Ya puedes disfrutar de la jubilación”. 
    Si la edad está entre 18 y 65 (incluídos) muestra por pantalla “Estás en edad laboral”. 
    Si la edad es menor de 18 muestra “Todavía no puedes trabajar”.*/

    $edad= rand(1, 66);
    if($edad > 65) 
    {
        echo "Felicidades, ya puedes jubilarte, en el caso de que no vivas en España.";
    }

    elseif ($edad < 18)
    {
        echo "Tranquilo, aún no puedes trabajar, aprovecha y hazte youtuber.";
    }

    else
    {
        echo "Preparate para ingresar al paro, ya tienes 18 o mas";
    }

	?>
</body>
</html>