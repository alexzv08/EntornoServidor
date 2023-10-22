<?php
/**
* @author Alejandro de la Torre Ruiz
* 
* Dado un precio aleatorio entre 10 y 90, devolver mensaje “la cantidad es de “ indicando a
* continuación el número obtenido
*/

//Generamos un numero aleatorio
$randomInt = random_int(10, 90);


//Imprimimos el numero generado
echo "la cantidad es de ".$randomInt."\n";
?>