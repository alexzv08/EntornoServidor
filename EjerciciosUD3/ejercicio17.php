<?php 
/**
* @author Alejandro de la Torre Ruiz
* 
*/
// Realiza un programa que resuelva una ecuación de primer grado (del tipo ax + b = 0)

function ecuacion($a,$b) {

    $resultado = -$b/$a;
    return $resultado;
}

$a = readline("Indique la primera incognita \n");
$b = readline("Indique la segunda incognita \n");
$solucion = ecuacion($a, $b);
echo "La solucion de la ecuacion ".$a."x + ".$b." = 0, es: ".$solucion."\n";
?>