<?php
//algoritmo en php para saber si es par o impar
$numero = rand(-3,3);
if ($numero > 0){
    echo "el valor $numero es POSITIVO";
}elseif($numero<0){
    echo "el valor $numero es NEGATIVO";
}else{
    echo "el valor $numero es equivalente a CERO";
}