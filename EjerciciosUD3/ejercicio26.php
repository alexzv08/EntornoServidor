<?php 
/**
* @author Alejandro de la Torre Ruiz
* 
*/

// . Con los trabajadores del ejercicio anterior, calcular el salario actual y el salario aumentado un
// porcentaje indicado por la variable


// Vector asociativo de trabajadores con sus salarios
$trabajadores = array(
    'Juan' => 3000,
    'Maria' => 3500,
    'Carlos' => 2500,
    'Luisa' => 4000,
    'Ana' => 3200
);


// Porcentaje de aumento
$porcentajeAumento = (int) readline("Indique cuanto % quiere subir los sueldos "); // Por ejemplo, 10% de aumento

// Función para calcular el salario actual
function salarioActual($salario, $porcentajeAumento) {
    return $salario;
}

// Función para calcular el salario aumentado
function salarioAumentado($salario, $porcentajeAumento) {
    return $salario * (1 + ($porcentajeAumento / 100));
}

// Calcular y mostrar los resultados
foreach ($trabajadores as $nombre => $salario) {
    $salarioActual = salarioActual($salario, $porcentajeAumento);
    $salarioAumentado = salarioAumentado($salario, $porcentajeAumento);
    
    echo "Trabajador: $nombre\n";
    echo "Salario Actual: $salarioActual\n";
    echo "Salario Aumentado ($porcentajeAumento% de aumento): $salarioAumentado\n";
    echo "\n";
}
?>