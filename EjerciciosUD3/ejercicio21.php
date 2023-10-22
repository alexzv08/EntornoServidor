<?php 
/**
* @author Alejandro de la Torre Ruiz
* 
*/
// Elabora un programa que lea un número entero y escriba el número resultante de invertir el
// orden de sus cifras Puedes usar la función creada para el ejercicio 20


// Solicitar al usuario un número entero
$numero = (string)readline("Ingrese un número entero: ");

// Obtener la la cantidad de numeros
$longitud = strlen($numero);
$newNumber = "";

for ($i = $longitud - 1; $i >= 0; $i--) {
    $newNumber .= $numero[$i];
}

echo "El número $numero invertido seria, $newNumber\n";
?>