<?php 
/**
* @author Alejandro de la Torre Ruiz
* 
*/
// Dada la fecha del sistema, indicar las horas, minutos y segundos junto con el día de la semana

//$char =readline("Ingresa un carácter \n");

$fecha =time(); 

echo date("H:i:s d", $fecha);

?>