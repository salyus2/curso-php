<?php

session_start();

if ($_SESSION) {
    print_r($_SESSION);
} else{
    echo " No has iniciado sesión";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Página 2</title>
</head>
<body>
    <h1>Hola, <?php echo $_SESSION['nombre']; ?> </h1>
    <a href="cerrar.php">Cerrar Sesion</a>
</body>
</html>