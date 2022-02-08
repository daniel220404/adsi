<?php
define("producto","43000");
$canProducto = rand( 15 , 43000);
$conversion = producto * $canProducto;
$valorSiniva = 
$valorConiva = producto * $canProducto + 0.19;

echo "segun la cantidad de productos: ".$canProducto."<br>";
echo "usted tiene en productos la suma de $ " .$conversion;
echo "valor del iva";