<?php

//las clases abstractas son privadas, y solo se pueden usar si se heredan. No es posible acceder a ellas de otra manera

abstract class Persona{
    public function saludo(){
        return 'hola';
    }
}

class Estudiante extends Persona{

}

//$carlos = new Estudiante;

//echo $carlos->saludo();

?>