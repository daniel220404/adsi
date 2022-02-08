<?php
define("dolar","4000");
$cantDolar = rand( 1 , 100);
$conversion = dolar * $cantDolar;

echo "segun la cantidad de dolares: ".$cantDolar."<br>";
echo "usted tiene en pesos colombianos la suma de $conversion;