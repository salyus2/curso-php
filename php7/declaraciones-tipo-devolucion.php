<?php

//Nos permite espeficicar que tipo de valor queremos regresar, al igual que las escalares pero en vez del parametro de recepcion, en el de devolución.


function obtener_edad() : int{
    $edad = 23;
    return $edad;    
}

echo obtener_edad();

?>
