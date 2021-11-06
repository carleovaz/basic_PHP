<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
    /*Crea un array con notas aleatorias de una asignatura. Recorre el array para mostrar todas las notas por pantalla.*/
    $notas[0] = rand(1,10);
    $notas[1] = rand(1,10);
    $notas[2] = rand(1,10);
    $notas[3] = rand(1,10);
    $notas[4] = rand(1,10);
    foreach($notas as $asignatura)
    {
        echo "<br/>";
        echo "Tengo un " . $asignatura;
    }

	?>
</body>
</html>
