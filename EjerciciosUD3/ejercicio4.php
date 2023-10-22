<?php 
/**
* @author Alejandro de la Torre Ruiz
* 
*/

// Elabora un programa para determinar si una hora leída en la forma horas, minutos y segundos
// está correctamente expresada

$fecha =readline("Ingresa la hora en este formato HH:mm:ss \n");

$time=explode(":", $fecha);

if($time[0]<24 && $time[1]<60 && $time[2]<60){
    echo "Fecha correcta\n";
}else{
    if($time[2]>=60){
        $min = $time[1];
        $seg = $time[2];

        $div=(int)($seg/60);
        $time[1] = $min + $div;
        
        $div = (int)($seg%60);
        $time[2] = $div;
        
    }
    if($time[1]>=60){
        $min = $time[1];
        $hora = $time[0];
        
        $div=(int)($min/60);
        $time[0] = $hora + $div;
        
        $div = (int)($min%60);
        $time[1] = $div;
    }
    if($time[0]>=24){
        $dia=0;
        $hora = $time[0];
        
        $dia=(int)($hora/24);
        
        $div = (int)($hora%24);
        $time[0] = $div;
    }
    echo "$dia dias, ".$time[0].":".$time[1].":".$time[2]."\n";
}

?>