<?php
/**
* @author Alejandro de la Torre Ruiz
* 
* Generar un número aleatorio entre 1 y 5 de modo que muestre el número y su nombre en letras
*/

//Generamos un numero aleatorio
$randomInt = random_int(1, 5);

//Comprobamos el numero e imprimimos su formato escrito
if($randomInt==1){
    echo $randomInt." - Uno\n";
}else if($randomInt==2){
    echo $randomInt." - Dos\n";
}else if($randomInt==3){
    echo $randomInt." - Tres\n";
}else if($randomInt==4){
    echo $randomInt." - Cuatro\n";
}else{
    echo $randomInt." - Cinco\n";
}
?>