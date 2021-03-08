<?php  

//creamos una variable
$nombre = "Carlos";

echo $nombre;

// le cambiamos el valor
$nombre = "Arturo";

echo $nombre;

//esto lo podemos hacer porque es una variable, con una constante no se puede hacer.

# Para declarar una constante usamos la función define, con un primer parametro que sea el nombre de la cosntante y un segundo parámetro que sea el valor asignado que ya no podrá cambiar, con la misma tipología que las variables.

define('PI', 3.14);

echo PI;

//define('PI', 3.17); //esto nos dará un error porque la constante PI ya ha sido definida.

define('NOMBRE', 'Carlos');

echo NOMBRE; 

?>