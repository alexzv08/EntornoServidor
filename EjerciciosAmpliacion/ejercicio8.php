<?php 

/**
* @author Alejandro de la Torre Ruiz
*
* Escribe un programa que diga cuál es la primera cifra de un número entero introducido por
* teclado. Se permiten números de hasta 5 cifras
* 
*/

$num = readline("Indique un número \n");

//Extraemos la primera cifra de un número
$cadena = substr($num, 0,1);

echo "El ultimo numero de $num, es $cadena\n";

?>