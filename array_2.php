<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
    /*Crea un array con los nombres de los días de la semana y muestra la posición correspondiente al “miércoles” por pantalla. 
    Posteriormente cambia el nombre de “miércoles” por “junio” y vuelve a mostrar esa posición del array por pantalla.*/
    $dias = [];  
    $dias[0] = "Lunes";
    $dias[1] = "Martes";
    $dias[2] = "Miercoles";
    $dias[3] = "Jueves";
    $dias[4] = "Viernes";
    $dias[5] = "Sabado";
    $dias[5] = "Doming";
    
    echo $dias[2];
    $dias[2] = "Junio";
    echo "<br/>";
    echo $dias[2];

    
	?>
</body>
</html>