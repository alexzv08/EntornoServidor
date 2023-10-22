<?php 
/**
* @author Alejandro de la Torre Ruiz
* 
*/
// Escribe un programa que diga cuál es la última cifra de un número entero introducido por teclado

// Solicitar al usuario un número entero
$numero = (string)readline("Ingrese un número entero: ");

// Obtener la última cifra utilizando la función abs() para manejar números negativos
$longitud = strlen($numero);
$ultima_cifra = substr($numero, $longitud - 1, 1);

echo "La última cifra del número es: $ultima_cifra\n";
?>