<?php

# tipo tradicional de declarar un array
$semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');
echo $semana[1] . '<br/>'; 

# asignar valores a un array ya creado
$semana[10] = 'TercerDomingo';
echo $semana[10] . '<br/>';

# tipo más moderno de declarar arrrays
$semana2 = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'];

#en un array se pueden meter cualquier tipo de datos, incluso diferentes tipos.

$arreglo = array('cadenas de texto', 1, array('asd', 123), true);


//Para recorrerlo se puede hacer a mano

echo $semana[0] . '<br/>';
echo $semana[1] . '<br/>';
echo $semana[2] . '<br/>';
echo $semana[3] . '<br/>';
echo $semana[4] . '<br/>';
echo $semana[5] . '<br/>';
echo $semana[6] . '<br/>';


?>