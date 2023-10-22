<?php 

/**
* @author Alejandro de la Torre Ruiz
*
* Realiza un programa que resuelva una ecuación de primer grado (del tipo ax + b = 0)
* 
*/
echo "Diga los valores para calcular una ecuación de primer grado";
$a = readline("Indique el valor a \n");
$b = readline("Indique el valor b \n");

//Calculo de la ecuación
$x = -$b/$a;

//Imprimimos el resultado
echo("El resultado de $a\x + $b = 0, da que x es $x  \n");

?>