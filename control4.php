<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
    /*Crea un array con notas aleatorias. Muestra por pantalla sólo las notas que están aprobadas.*/
    $notas[0] = rand(1,10);
    $notas[1] = rand(1,10);
    $notas[2] = rand(1,10);
    $notas[3] = rand(1,10);
    $notas[4] = rand(1,10);
    $notas[5] = rand(1,10);
    $notas[6] = rand(1,10);
    $notas[7] = rand(1,10);

    for ($i = 0; $i < 8; $i++) 
    {
        if ($notas[$i] > 4) 
        {
            echo $notas[$i] . "<br>";
        }
      }

	?>
</body>
</html>