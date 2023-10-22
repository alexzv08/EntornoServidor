<?php 
/**
* @author Alejandro de la Torre Ruiz
* 
*/
// Escribe un programa que calcule el salario semanal de un trabajador teniendo en cuenta que las
// horas ordinarias (40 primeras horas de trabajo) se pagan a 12 euros la hora. A partir de la hora
// 41, se pagan a 16 euros la hora.

function salario($horas) {

    if($horas<=40){
        $salario = $horas * 12;
    }else{
        $horasextra = $horas - 40;
        $salarioextra= $horasextra * 16;
        $salario = 40 * 12;
        $salario += $salarioextra;
    }

    return $salario;
}

$horas = readline("Indique las horas trabajadas esta semana \n");

echo "Has trabajado ".$horas.", lo cual tu salario es: ". salario($horas)."\n";
?>