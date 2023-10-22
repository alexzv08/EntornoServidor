<?php
/**
* @author Alejandro de la Torre Ruiz
* 
* Crea un conversor de monedas de pesetas a euros usando variables para almacenar el resultado
*/

$pesetas =readline("Ingresa cantidad de pesetas a convertir \n");

//Convertimos la cantidad de euros a pesetas
$euro = $pesetas/166.386;

//Mostramos la conversion de monedas
echo $pesetas." pesetas equivalen a ".$euro." euros redondeado a " .round($euro, 2) ."\n";
?>