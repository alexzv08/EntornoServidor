<?php 
/**
* @author Alejandro de la Torre Ruiz
* 
*/
// Realiza un programa que diga si un número entero positivo introducido por teclado es
// capicúa/palisandro. Se permiten números de hasta 5 cifras. Puedes usar la función creada para el
// ejercicio 20

// Solicitar al usuario un número entero positivo
$numero = (string)readline("Ingrese un número entero positivo: ");

// Invertir el número
$numeroInvertido = strrev($numero);

// Comparar el número original con el número invertido
if ($numero == $numeroInvertido) {
    echo "El número $numero es un número capicúa (palíndromo).\n";
} else {
    echo "El número $numero no es un número capicúa (palíndromo).\n";
}
?>