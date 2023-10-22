<?php 
/**
* @author Alejandro de la Torre Ruiz
* 
*/

// Diseña un programa que determine la cantidad total a pagar por una llamada telefónica de
// acuerdo a las siguientes premisas: Toda llamada que dure menos de 3 minutos tiene un coste de
// 10 céntimos. Cada minuto adicional a partir de los 3 primeros es un paso de contador y cuesta 5
// céntimos.


$mins =readline("Ingresa los minutos de la llamada \n");

$coste = 0.1;

$adicional = $mins/60;

$coste += $adicional*0.05;
if($mins%60>=1){$coste+=0.05;}

echo "El coste de la llamada es ".round($coste,2)."\n";
?>