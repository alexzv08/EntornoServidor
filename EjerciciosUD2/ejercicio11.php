<?php
/**
* @author Alejandro de la Torre Ruiz
* 
* Crea un conversor de monedas de euros a pesetas usando variables para almacenar el resultado
*/

$euro =readline("Ingresa cantidad de euros a convertir \n");

//Convertimos la cantidad de euros a pesetas
$pesetas = $euro/0.0060;

//Mostramos la conversion de monedas
echo $euro." euros equivalen a ".$pesetas." pesetas, redondeado quedaria " .round($pesetas) ."\n" ;
?>