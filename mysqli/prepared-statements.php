<?php

$conexion = new mysqli('localhost', 'root', '', 'prueba_datos');

if ($conexion->connect_errno) {
    die('lo siento hubo un problema con el servidor');
} else {
    $statement = $conexion->prepare("INSERT INTO usuarios(ID, nombre) VALUES (?, ?)");
    /*Reemplazamos los placeholder ? con los valores que queremos usar.
    //una S por placeholder que tengamos
    // s = string
    // i = integer
    // d = double
    */
    $statement->bind_param('ss', $id, $nombre);
    $id = NULL;
    

    if (isset($_GET['nombre'])) {
        $nombre = $_GET['nombre'];
    }


    $statement->execute();
    // echo 'Filas Añadidas: ' . $conexion->affected_rows;
    
    if ($conexion->affected_rows >= 1) {
        # code...
        echo 'Filas agregadas: ' . $conexion->affected_rows;
    } else{
        echo 'No se agregó nada';
    }

}
