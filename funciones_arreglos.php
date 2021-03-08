<?php

$amigo = array('telefono' => 45454545, 'edad' => 20, 'pais' => 'mexico');

extract($amigo);

echo $edad . '<br />';

$semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');

$ultimo_dia = array_pop($semana);

foreach ($semana as $dia ) {
    echo $dia . '<br />';
}

echo 'El ultimo dia es: ' . $ultimo_dia . '<br />';

echo 'Join: ' . join(' - ', $semana) . '<br />';

echo 'Count: ' . count($semana) . '<br />';

sort($semana) . '<br />';
echo 'Sort: ' . join(', ', $semana) . '<br />';

rsort($semana) . '<br />';
echo 'RSort :' . join(', ', $semana) . '<br />';

$semana_reverse = array_reverse($semana);
echo 'Semana Reverse: ' . join(', ', $semana_reverse) . '<br />';

?>
