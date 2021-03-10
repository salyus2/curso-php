<?php

$conexion = new mysqli('localhost', 'root', '', 'prueba_datos');

if ($conexion->connect_errno) {
    die('lo siento hubo un problema con el servidor');
} else {
    $sql = "INSERT INTO usuarios(ID, nombre) VALUES (null, 'Daniel')";
    $conexion->query($sql);   

    if ($conexion->affected_rows >= 1) {
        echo 'Filas agregadas: ' . $conexion->affected_rows;
    }
}
