<?php
/**
* @author Alejandro de la Torre Ruiz
* 
* Dados dos números enteros realizar operaciones de suma, resta, división y multiplicación y mostrar los resultados por pantalla 
* concatenando la operación y el resultado
*/

$n1 = readline("Ingresa primer operador ");
$n2 = readline("Ingresa segundo operador ");

//Calculode la suma de los numeros
$resultado = $n1 + $n2;
echo "La suma de " .$n1 ." y " .$n2 ." es: " .$resultado."\n" ;

//Calculode la resta de los numeros
$resultado = $n1 - $n2;
echo "La resta de " .$n1 ." y " .$n2 ." es: " .$resultado."\n" ;

//Calculode la división de los numeros
$resultado = $n1 / $n2;
echo "La división de ".$n1 ." y " .$n2 ." es: " .$resultado."\n" ;

//Calculode la multiplicación de los numeros
$resultado = $n1 * $n2;
echo "La multiplicación de " .$n1 ." y " .$n2 ." es: " .$resultado."\n" ;
?>