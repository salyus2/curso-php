<?php

$conexion = new mysqli('localhost', 'root', '', 'prueba_datos');

if ($conexion->connect_errno) {
    die('lo siento hubo un problema con el servidor');
} else{
    $sql = 'SELECT * FROM usuarios';
    $resultado = $conexion->query($sql);

    if($resultado->num_rows){
        //num_rows = número de filas
        /*echo '<pre>';
        var_dump($resultado->fetch_assoc());
        var_dump($resultado->fetch_assoc());
        echo $resultado->fetch_assoc()['nombre'];
        echo '<pre>';*/
        while($fila = $resultado->fetch_assoc()){
            echo $fila['ID'] . ' - ', $fila['nombre'] . '<br />';
        }
    }else{
        echo 'No hay datos';
    }
}
