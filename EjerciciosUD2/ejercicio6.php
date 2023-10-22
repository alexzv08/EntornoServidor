<?php
/**
* @author Alejandro de la Torre Ruiz
* 
* Calcula la media de varios números (mínimo 5) y redondea el resultado. Muestra los números
* introducidos y el resultado
*/

//Ingresamos los números para calcular la media
$n1 = readline("Ingresa número\n");
$n2 = readline("Ingresa número\n");
$n3 = readline("Ingresa número\n");
$n4 = readline("Ingresa número\n");
$n5 = readline("Ingresa número\n");

//Media de los numeros introducidos
$media = ($n1+$n2+$n3+$n4+$n5)/5;
//Calculamos la media y redondeamos
echo "Los números son $n1, $n2, $n3, $n4 y $n5, la media de los números es $media, redondeado quedaria " .round($media) ;

?>