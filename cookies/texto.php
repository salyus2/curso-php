<?php

$tamaño = $_COOKIE['font-size'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Texto</title>
    <style>
        p {
            font-size: <?php echo $tamaño; ?>;
        }
    </style>
</head>

<body>
    <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus, ab molestias itaque incidunt corrupti neque quos qui reprehenderit corporis! In aut eveniet fugiat, deleniti qui tempore quod? Eligendi, molestiae aperiam?</p>
</body>

</html>