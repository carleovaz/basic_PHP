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
    $asignatura =[2,4,6,8,10];
    $media = "Tu nota media de la asignatura es: " . array_sum($asignatura)/count($asignatura) . "<br/>";
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