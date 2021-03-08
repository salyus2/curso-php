<?php

$meses = array(
    'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiempre', 'Octubre', 'Noviembre', 'Diciembre'
);

$numeros = array(1, 22, 32, 13, 234, 200, 100);

sort($meses);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses del Año</title>
</head>

<body>
    <h1>Meses del Año</h1>
    <ul>

        <?php

        foreach ($meses as $mes) {
            echo '<li>' . $mes . '</li>';
        }

        ?>

    </ul>


    <ul>

        <?php
        rsort($meses);
        foreach ($meses as $mes) {
            echo '<li>' . $mes . '</li>';
        }

        ?>

    </ul>

    <ul>

        <?php
        sort($numeros);
        foreach ($numeros as $numero) {
            echo '<li>' . $numero . '</li>';
        }

        ?>

    </ul>


    <ul>

        <?php
        rsort($numeros);
        foreach ($numeros as $numero) {
            echo '<li>' . $numero . '</li>';
        }

        ?>

    </ul>


</body>

?>