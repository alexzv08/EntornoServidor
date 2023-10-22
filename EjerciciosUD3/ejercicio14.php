<?php 
/**
* @author Alejandro de la Torre Ruiz
* 
*/
// Escribe una función que calcule todas las potencias de un número hasta llegar al exponente
// indicado, las almacene en un vector y muestre el resultado de cada potencia indicando además
// la suma de todas las potencias incluyendo la del exponente indicado.

function calcularPotencias($base, $exponente) {
    $potencias = array();

    //Realizamos el calculo del exponente
    for ($i = $base; $i <= $exponente; $i++) {
        $potencia = pow($i, $exponente);
        $potencias[] = $potencia;
        echo "($i ^ $exponente) = $potencia\n";
    }

    $suma = array_sum($potencias);
    //Recorremos la array para mostrarla
    foreach ($potencias as $elemento){
        echo "$elemento, ";
    }
    //Mostramos la suma del calculo
    echo "La suma de todas las potencias es: $suma\n";

    return $potencias;
}

$base = readline("Indique el numero base"); // Cambia el número base según tus necesidades
$exponente = readline("Indique el exponente"); // Cambia el exponente según tus necesidades

$potencias = calcularPotencias($base, $exponente);
?>