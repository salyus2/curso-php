<?php

//Las declaraciones de tipo escalar se trata de un sistema para evitar que se pasen valores inadecuados a nuestras funciones

function cuadrado(int $numero){
    return $numero * $numero;
}


$numero = '2';

echo 'El cuadrado de ' . $numero . ' es ' . cuadrado($numero);


//declare(strict_types=1);


function cuadrado2(int $numero2)
{
    return $numero2 * $numero2;
}


$numero2 = 2;

echo 'El cuadrado de ' . $numero2 . ' es ' . cuadrado2($numero2);