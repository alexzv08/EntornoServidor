<?php 

/**
* @author Alejandro de la Torre Ruiz
*
* Escribe un programa que calcule el salario semanal de un trabajador teniendo en cuenta que las
* horas ordinarias (40 primeras horas de trabajo) se pagan a 12 euros la hora. A partir de la hora
* 41, se pagan a 16 euros la hora.
* 
*/

$horas = readline("Indique las horas trabajadas esta semana \n");

//Calculamos las horas extra
$horasExtra = $horas - 40;

//Calculamos las horas ordinaras
$horasOrdinarias = $horas - $horasExtra;

//Calculamos el sueldo semanal
$salarioSemanal = $horasOrdinarias * 12 + $horasExtra * 16;

echo("El salario semanal por trabajar $horas, siendo ordinarias $horasOrdinarias y extras $horasExtra, da un salario de $salarioSemanal \n");

?>