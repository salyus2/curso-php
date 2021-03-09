<?php 

/*

$conexion = mysql_connect('localhost', 'root', '') or die();

mysql_select_db('prueba_datos', $conexion);

$_resultado = mysql_query('SELECT * FROM usuarios');



$fila = misql_fetch_object($_resultados); recupera una fila y la va a traer como un objeto y este objeto incluye propiedades de la fila, luego mueve el puntero hacia delante, dejando el puntero en la siguiente fila. De tal manera que si se vuelve a ejecutar la función, seguirá desde la fila donde quedó el puntero. Para sacar todas hace falta usar un ciclo.

$fila2 = misql_fetch_array($_resultados);

echo $fila->nombre;


//Ciclo: cuando el puntero se recorre toda la tabla, y llega a una fila sin contenido, devuelve FALSE. Podemos usar eso para detener el ciclo de la función. 

while($fila = $fila = misql_fetch_object($_resultados)){
    echo $fila->nombre . '<br />';

}

?>