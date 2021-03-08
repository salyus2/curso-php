<?php

$edad = 18;

$edad = (isset($edad)) ? $edad : 'El usuario no establecio su edad';

echo 'Edad: ' . $edad;

/* $variable  = (condicion) ? $edad : "El usuario no establecio su edad"
    para asignar una variable con if hacemos lo siguiente:

        $variable [nombre variable]
        = [agisnación simple]
        (condicion) [condicion para que se asigne algo o no]
        ? [Esto sería el if]
        $edad [Aquí lo que hacemos si if es true]
        : [Separación entre lo que pasa si true y false]
        "El usuario..." [Aqui lo que pasa si if es false]

*/

?>