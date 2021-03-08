<?php

//le asignamos un nombre a cada valor, y luego lo usamos para llamar a esa "posición"
$alex = array('telefono' => '9654654', 'edad' => 25, 'apellido' => 'FalconMasters', 'pais' =>'mexico');

echo $alex['telefono'] . '<br/>';
echo $alex['edad'] . '<br/>';
echo $alex['apellido'] . '<br/>';
echo $alex['pais'] . '<br/>';


$alex['telefono'] = 'nuevotelefono911111111';
echo 'El telefono de Alex es: ' . $alex['telefono'];

?>