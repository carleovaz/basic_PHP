<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
    /*Crea un array con notas aleatorias de una asignatura. Si la media de las notas da aprobado, muestra por pantalla un mensaje de felicitación. 
    En caso contrario muestra un mensaje con la media que ha sacado.*/
    $notas[0] = rand(1,10);
    $notas[1] = rand(1,10);
    $notas[2] = rand(1,10);
    $notas[3] = rand(1,10);
    $notas[4] = rand(1,10);
    $media = "Tu nota media de la asignatura es: " . array_sum($notas)/count($notas) . "<br/>";
    echo $media;
    if($media >= 5)
    {
        echo "Felicidades, has aprobado manin.";
    }
    else
    {
        echo "Mala suerte bro, estudia mas para la próxima.";
    }
	?>
</body>
</html>
