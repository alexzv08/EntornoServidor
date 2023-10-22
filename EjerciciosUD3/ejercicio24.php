<?php 
/**
* @author Alejandro de la Torre Ruiz
* 
*/
// Escribe un programa que lea una lista de diez números y determine cuántos son positivos, y
// cuántos son negativos (muestra los números, la cantidad de positivos y negativos y el porcentaje
// de cada grupo)


//Array numeros
$numeros = array(1, 2, 3, -4, 5, -6, 7, 8, -9, 10);
$numeroPos = array();
$numeroNeg = array();
//Recorriendo la array comprobando los positivos y negativos 
foreach($numeros as $numero){

    if($numero>=0){
        $numeroPos[]=$numero;
    }else{
        $numeroNeg[]=$numero;
    }
}
$totalNumeros = count($numeros);
$porcentajePositivos = (count($numeroPos) / $totalNumeros) * 100;
$porcentajeNegativos = (count($numeroNeg) / $totalNumeros) * 100;

echo "Numeros positivos \n";
foreach($numeroPos as $numero){
    echo $numero . " ";
}
echo "\nCon un porcentaje de $porcentajePositivos\n";


echo "Numeros negativos \n";
foreach($numeroNeg as $numero){
    echo $numero . " ";
}
echo "\nCon un porcentaje de $porcentajeNegativos\n";
?>