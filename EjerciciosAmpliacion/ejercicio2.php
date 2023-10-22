<?php 
/**
* @author Alejandro de la Torre Ruiz
* 
*Escribe un programa que pinte por pantalla una pirámide rellena a base de asteriscos. La base
*de la pirámide debe estar formada por 9 asteriscos
*/

// Altura de la pirámide
$altura = 9; 

// Calculamos los asteriscos en la base
$max_asteriscos = 2 * $altura - 1;

// Bucle para las filas
for ($i = 1; $i <= $altura; $i++) { 
    // Numero de * por fila
    $num_asteriscos = 2 * $i - 1;
    // Calcular el número de espacios
    $num_espacios = ($max_asteriscos - $num_asteriscos) / 2;
    // Imprimir los espacios en blanco
    for ($j = 1; $j <= $num_espacios; $j++) { 
        echo "  ";
    }

    // Imprimir los asteriscos
    for ($j = 1; $j <= $num_asteriscos; $j++) { 
        if ($j % 2 == 0) {
            echo " ";
        } else {
            echo " * ";
        }
    }
    // Salto de línea al final de cada fila
    echo "\n"; 
}
?>