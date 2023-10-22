<?php 
/**
* @author Alejandro de la Torre Ruiz
* 
*/
// Realiza un programa que diga si un número introducido por teclado es par y/o divisible entre 5

function par($num) {

    if($num%2){
        return "es impar";
    }else{
        return "es par";
    }
    
}
function divisible($num){
    if($num%5){
        return "no es divisible entre 5";
    }else{
        return "es divisible entre 5";
    }
    
}

$a = readline("Indique la primera incognita \n");

$par = par($a);
$divisible = divisible($a);
echo "El numero $a, ".$par." y ".$divisible."\n";
?>