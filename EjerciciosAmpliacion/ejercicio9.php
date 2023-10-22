<?php 

/**
* @author Alejandro de la Torre Ruiz
*
* Realiza un programa que diga si un número entero positivo introducido por teclado es capicúa.
* Se permiten números de hasta 5 cifras
* 
*/

$valorleido = readline("Indique un número para comprobar si es capicua \n");


$numinv = 0;
$cociente = $valorleido;

//Comprobamos el numero si es capicúa atreves de un bucle
while ( $cociente != 0)
{
	$resto = $cociente % 10;
	$numinv = $numinv * 10 + $resto;
	$cociente = (int)($cociente / 10);
}
if ( $valorleido == $numinv )
	print "El número $valorleido Es capicúa\n";
else
	print "El número $valorleido NO es capicúa\n";
?>