<?php

/*
count();
sort();
rsort();
var_dumb();
print_r();  
*/

$nombre = "Juanito";

function saludo($nombre){
    return "Saludo, $nombre!" . "<br />";
    
}

echo saludo($nombre);
echo saludo('Carlos');
echo saludo('Juan');
echo saludo("Manuel");


function sumar($numero1, $numero2){
    $resultado = $numero1 + $numero2;
    return $resultado;
}

sumar(3, 5);

$resultado = sumar(10, 15);

?>


