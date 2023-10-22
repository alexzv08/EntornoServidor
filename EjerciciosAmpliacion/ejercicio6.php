<?php 

/**
* @author Alejandro de la Torre Ruiz
*
* Realiza un programa que diga si un número introducido por teclado es par y/o divisible entre 5
* 
*/

$num = readline("Indique un número \n");

//Comprobamos si el numero es par o impar
if(($num%2)==0){
    echo "El $num es par. ";
}else{
    echo "El $num es impar. ";
}
//Comprobamos si el número es divisible entre 5
if(($num%5)==0)
    echo "El $num es divisible entre 5 \n";

?>