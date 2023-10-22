<?php
/**
* @author Alejandro de la Torre Ruiz
* 
* Genera un mensaje de modo que si el día actual es menor o igual que 15 muestre “primera
* quincena” mostrando “segunda quincena” en otro caso. Haz una modificación para poder leer el
* día
*/


//Ingresamos la fecha
$fecha;

//8.A
//Comprobamos si es la primera o la segunda quincena
if(date("d")<=15){
    $fecha= "Primera quincena\n";
}else{
    $fecha="Segunda quincena\n";
}

echo "Actualmente estamos a día " .date("d")." estamos en la ".$fecha;

//8.B

$fecha=readline("Ingresa la fecha\n ");

if($fecha<=15){
    echo"Estamos en la primera quincena\n";
}else{
    echo "Estamos en la segunda quincena\n";
}


?>