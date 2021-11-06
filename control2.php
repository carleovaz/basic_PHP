<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
    /*Crea un array con notas aleatorias de una asignatura. Recorre el array para mostrar todas las notas por pantalla.*/
    $asignatura =[2, 4, 6, 8, 10];
    foreach($asignatura as $notas)
    {
        echo "<br/>";
        echo "Tengo un " . $notas;
    }

	?>
</body>
</html>