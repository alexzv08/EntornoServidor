<?php 
/**
* @author Alejandro de la Torre Ruiz
* 
*/
//Realiza un programa que nos diga cuántos dígitos tiene un número dado

// Solicitar al usuario un número entero
$numero = (string)readline("Ingrese un número entero: ");

// Obtener la la cantidad de numeros
$longitud = strlen($numero);


echo "La cantidad de número es: $longitud\n";
?>