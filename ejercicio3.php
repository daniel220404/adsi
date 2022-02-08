<?php
define("IVA", 19);
$canProducto=15;
$valoruni=43000;
$valorSiniva=$canProducto*$valoruni;
$valoriva=($valorSiniva*19);
$totaliva=$valorSiniva+$valoriva;


echo ("Su valor sin iva es  ".$valorSiniva." ".("el 19% de su valor es  ").$valoriva."  ".("Su total con iva es  ").$totaliva);