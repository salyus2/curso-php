<?php

new mysqli('localhost', 'root', '', 'prueba_datos');

if ($conexion -> connect_errno) {
    die('lo siento hubo un problema con el servidor');
}

?>
