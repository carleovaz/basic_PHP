<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
    /*Crea una matriz asociativa llamada notas. 
    Cada clave será el nombre de una de tus asignaturas y el valor será la clave. Muestra por pantalla tus notas de IAW. Muestra por pantalla tu media de notas.
    */

    $notas = 
    [
        "IAW" => 4,
        "DAW" => 2,
        "DWS" => 8,
        "DWC" => 6,
        "EIE" => 4
    ];

    echo $notas["IAW"] . "<br/>";
    $notaMedia = array_sum($notas)/count($notas);
    echo $notaMedia;
	?>
</body>
</html>