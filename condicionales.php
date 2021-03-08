<?php

$edad = 18;
$nombre = "Carlos";

/*
Operadores Lógicos

	&&	Evalúa que se cumplan las dos condiciones
	||, or  	Evalúa que se cumpla al menos una condición.
	xor	Evalúa que se cumpla una y solo una condición.

Operadores de Comparación

	== 	Igualdad
	<	Menor que
	>	Mayor que
	<=	Menor o igual que
	>=	Mayor o igual que
	!=	Diferente
	!	Negación
*/


if($edad >= 18 && $nombre == "Carlos"){
    echo '<h1> Bienvenido </h1>';
}

if($edad < 18){
    echo '<h1> Eres menos de edad </h1>';
}

?>