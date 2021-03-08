<?php

//static permite acceder a metodos y variables de una clase directamente sin crear un objeto para llegar a ellos

class Persona {
    public static $dia = '7 de septiembre';

    public static function saludo($nombre = null){
        if ($nombre) {
          return 'Saludos ' . $nombre;
        } else{
            return 'Hola, buen día sin nombre';
        }
    }
}


//$carlos = new Persona;
//echo Persona::$dia;

//$carlos = new Persona;
//echo $carlos->saludo('Carlos');

echo Persona::saludo('Carlos');


?>