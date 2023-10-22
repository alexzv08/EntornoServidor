<?php
/**
* @author Alejandro de la Torre Ruiz
* 
* Ordena 3 números de modo que se impriman de mayor a menor. Si son iguales debe mostrar
* una advertencia indicando que son iguales
*/

//Leemos los 3 numeros a ordenar
$num1 = readline("Ingresa número \n");
$num2 = readline("Ingresa número \n");
$num3 = readline("Ingresa número \n");


//Ordena la array de mayor a menor
if ($num1 == $num2 && $num2 == $num3) {
    echo "Los números son iguales.";
} else {
    if ($num1 >= $num2 && $num1 >= $num3) {
        $mayor = $num1;
        if ($num2 >= $num3) {
            $medio = $num2;
            $menor = $num3;
        } else {
            $medio = $num3;
            $menor = $num2;
        }
    } elseif ($num2 >= $num1 && $num2 >= $num3) {
        $mayor = $num2;
        if ($num1 >= $num3) {
            $medio = $num1;
            $menor = $num3;
        } else {
            $medio = $num3;
            $menor = $num1;
        }
    } else {
        $mayor = $num3;
        if ($num1 >= $num2) {
            $medio = $num1;
            $menor = $num2;
        } else {
            $medio = $num2;
            $menor = $num1;
        }
    }
    
    echo "Los números a ordenar son $num1, $num2, $num3. Una vez ordenados de mayor a menor son: $mayor, $medio, $menor";
}
?>
