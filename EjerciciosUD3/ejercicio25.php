<?php 
/**
* @author Alejandro de la Torre Ruiz
* 
*/
// Dado un vector asociativo de trabajadores con su salario, crea usando funciones el salario
// máximo, el salario mínimo y el salario medio.


// Vector asociativo de trabajadores con sus salarios
$trabajadores = array(
    'Juan' => 3000,
    'Maria' => 3500,
    'Carlos' => 2500,
    'Luisa' => 4000,
    'Ana' => 3200
);

// Función para calcular el salario máximo
function salarioMaximo($trabajadores) {
    return max($trabajadores);
}

// Función para calcular el salario mínimo
function salarioMinimo($trabajadores) {
    return min($trabajadores);
}

// Función para calcular el salario medio
function salarioMedio($trabajadores) {
    $totalSalarios = array_sum($trabajadores);
    $numeroTrabajadores = count($trabajadores);
    return $totalSalarios / $numeroTrabajadores;
}

// Calcular y mostrar los resultados
echo "Salario máximo: " . salarioMaximo($trabajadores) . "\n";
echo "Salario mínimo: " . salarioMinimo($trabajadores) . "\n";
echo "Salario medio: " . salarioMedio($trabajadores) . "\n";
?>