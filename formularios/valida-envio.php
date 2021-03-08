<?php

/*

Dos formas de hacer lo mismo. La primera no comprueba por que formulario se ha enviado. Pero el request es una forma muy correcta de usarlo

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "Se enviaron por POST";
} else{
    echo "Se enviaron por GET";
}
*/

if (isset($_POST['submit'])) {
    echo "Se han enviado los datos correctamente";
    print_r($_POST['submit']);
}

?>