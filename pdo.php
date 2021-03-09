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


//Prepare statements. Consultas preparadas diseñadas para que el ussuario pueda inyectar código en nuestra aplicacion

$statement = $conexion->prepare('SELECT * FROM usuarios WHERE id = :id or :id2');
$statement->execute(
    array(
        ':id' => $id,
        ':id2' => 5
        )
);

$resultados = $statement->fetchall();
foreach ($resultados as $usuario) {
    echo $usuario['nombre'] . '<br />';
}


} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}


?>