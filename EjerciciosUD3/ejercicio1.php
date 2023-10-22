<?php 
/**
* @author Alejandro de la Torre Ruiz
* 
*/
// Elabora un programa que dado un carácter determine si es:
// 1. una letra mayúscula
// 2. una letra minúscula
// 3. un carácter numérico
// 4. un carácter blanco
// 5. un carácter de puntuación
// 6. un carácter especial

$char =readline("Ingresa un carácter \n");

if(ctype_upper($char)){
    echo "Es mayusculas\n";
}
if(ctype_lower($char)){
    echo "Es minusculas\n";
}
if(ctype_digit($char)){
    echo "Es un número\n";
}
if(ctype_space($char)){
    echo "Es carácter en blanco\n";
}
if(ctype_punct($char)){
    echo "Es un carácter de puntuacion\n";
};
if(!ctype_alnum($char)){
    echo "Es un carácter especial\n";
}


?>