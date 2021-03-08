<?php

/*Operador nave espacial. sirve para ayudar a comparar expresiones. Se usa la expresion <=> poniendo a cada lado lo que quieres comparar y básicamente te dice si uno de los valores es igual, menor o mayor al otro.

Regresa 1 si el valor de la izquierda es mayor que el de la derecha
Regresa 0 si los valores de ambos lados son iguales
Regresa -1 si el valor de la derecha es mayor que el de la izquierda.

<   =   >
1   0   -1

echo 1 <=> 1;

*/
//vamos a hacer una función que imite el <=>

$array = [1,3,2,5,4];

function comparar($a, $b){
    return $a <=> $b;
}

/*

la función superior es excatamente igual a esta:

function comparar($a, $b){
    if ($a == $b) {
        return 0;
    } elfeif($a > $b){
        return 1;
    } else{
        return -1;
    }
}
*/


usort($array, 'comparar');

echo implode(' - ', $array);

?>
