<?php

$texto = '< > & "" ';
$texto2 = 'Hola Buenos Días';

echo htmlspecialchars($texto) . "<br />";
echo trim($texto) . "<br />";
echo strlen($texto) . "<br />";
echo substr($texto, 2, 2) . "<br />";
echo strtoupper($texto2) . "<br />";
echo strtolower($texto2) . "<br />";
echo strpos($texto2, 'B') . "<br />";


?>
