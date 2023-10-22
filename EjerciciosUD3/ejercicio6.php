<?php 
/**
* @author Alejandro de la Torre Ruiz
* 
*/
// Escribe un programa que lea tres números positivos y compruebe si son iguales. Por ejemplo:
// * Si la entrada fuese 5 5 5, la salida debería ser “hay tres números iguales a 5“.
// * Si la entrada fuese 4 6 4, la salida debería ser “hay dos números iguales a 4“.
// * Si la entrada fuese 0 1 2, la salida debería ser “no hay números iguales


$mins =readline("Ingresa los minutos de la llamada \n");

$coste = 0.1;

$adicional = $mins/60;

$coste += $adicional*0.05;
if($mins%60>=1){$coste+=0.05;}

echo "El coste de la llamada es ".round($coste,2)."\n";
?>