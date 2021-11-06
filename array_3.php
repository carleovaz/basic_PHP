<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
    /*Crea un array llamado notas_dws cuyas claves sean nombres de los alumnos de nuestro curso y los valores sus notas en DWS.
     Muestra por pantalla tus notas. Muestra por pantalla la media de notas de la clase en DWS.
    */

    $notas = 
    [
        "Lengua" => 4,
        "Matematicas" => 2,
        "Historia" => 8,
        "Historia del Arte" => 6,
        "Ingles" => 4
    ];

    foreach($notas as $asignatura => $nota)
    {
        echo "Mi nota en ".$asignatura." es: ".$nota . "<br/>";
      }
      
    $media = array_sum($notas)/count($notas);
    echo "La media de notas es: $media";

	?>
</body>
</html>