<?php
//algoritmo en php para saber si es par o impar
$numero - rand(1 , 50);
$validar - $numero%2;
if ($validar === 0) {
    echo "el numero a validar es: ",$numero, "<br>";
    echo "el numero es par";
}else{
    echo "el numero a validar es: ",$numero, "<br>";
    echo "el numero es impar";
}
?>