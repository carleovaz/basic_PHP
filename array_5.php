<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
    /*Crea un array multidimensional. La clave será el nombre de un alumno y el valor será un array como el del ejercicio anterior. Muestra por pantalla tu nota en SRI.*/
    $notas = 
    [
        "Ana" => ["IAW" => 7, "SRI" => 3, "ASO" => 5, "SAD" => 8],
        "Benito" => ["IAW" => 8, "SRI" => 2, "ASO" => 5.5, "SAD" => 9],
        "Carmen" => ["IAW" => 9, "SRI" => 8, "ASO" => 6.5, "SAD" => 7],
        "Javier" => ["IAW" => 10, "SRI" => 10, "ASO" => 10, "SAD" => 10]
    ];
          
    $nota_iaw = "Tu nota en SRI es un " . $notas["Javier"]["SRI"];
    echo $nota_iaw;
	?>
</body>
</html>