<?php 
/**
* @author Alejandro de la Torre Ruiz
* 
*/
// Escribe una función que calcule A elevado a B, siendo A y B números enteros.


$num1 =(int)readline("Ingresa un numero \n");
$num2 =(int)readline("Ingresa un numero \n");


$total = pow($num1,$num2);

echo "El número $num1 elevado a $num2, es $total\n";
?>