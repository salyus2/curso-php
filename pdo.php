<?php

$id = $_GET['id'];

try {
    $conexion = new PDO('mysql:host=localhost;dbname=prueba_datos', 'root', '');
    /*echo 'Conexión Ok';

    $resultados = $conexion->query('SELECT * FROM usuarios');

    foreach ($resultados as $fila) {
       // print_r($fila) . '<br />';
        echo $fila['nombre'] . '<br />';
    }*/


//Prepare statements. Consultas preparadas diseñadas para que el ussuario no pueda inyectar código en nuestra aplicacion

$statement = $conexion->prepare('INSERT INTO usuarios VALUES (null, "Jose") ');
$statement->execute();

/*
$resultados = $statement->fetchall();
foreach ($resultados as $usuario) {
    echo $usuario['nombre'] . '<br />';
}*/


} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}


?>