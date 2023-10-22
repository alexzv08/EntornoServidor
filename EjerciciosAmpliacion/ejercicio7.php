<?php 

/**
* @author Alejandro de la Torre Ruiz
*
* Escribe un programa que diga cuál es la última cifra de un número entero introducido por
* teclado
* 
*/

$num = readline("Indique un número \n");

//Extraemos la ultima cifra de un número
$cadena = substr($num,-1);

echo "El ultimo numero de $num, es $cadena\n";

?>