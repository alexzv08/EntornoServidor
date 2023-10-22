<?php 
/**
* @author Alejandro de la Torre Ruiz
* 
*/
// Crea una función llamada permutaciones que reciba un vector $V y que cambie la posición de
// los elementos dicho vector haciendo permutaciones. Las permutaciones se harán entre los
// elementos $V[$N-1] y $V[0], $V[$N-2] y $V[1] , $V[$N-3] y $V[2] etc. siendo $N el tamaño
// del vector.

function permutaciones($V) {
    //Copia del vector original
    $vectorPermutado = $V;
    //Longitud del vector
    $n = count($V);
    //Ultimo es el primero y el primero el ultimo
    $vectorPermutado[$n-1] = $V[0];
    $vectorPermutado[0] = $V[$n-1];

    //Penultimo es el segundo y el segundo el penultimo
    $vectorPermutado[$n-2] = $V[1];
    $vectorPermutado[1] = $V[$n-2];

    //Ante penultimo es el tercero y el tercero el ante penultimo
    $vectorPermutado[$n-3] = $V[2];
    $vectorPermutado[2] = $V[$n-3];
    return($vectorPermutado);
}

$miVector = [1, 2, 3, 4, 5, 6];
$vectorPermutado = permutaciones($miVector);

echo "Vector después de las permutaciones: ";
print_r($vectorPermutado);
?>