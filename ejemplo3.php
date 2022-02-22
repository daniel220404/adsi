<?php
$valorpagar=4.200;
$descuentos= (0 - 10);
if (kilos<=2) {
    $valorPagar=kilos*4200;
    echo "el total a pagar es 4.200 ya que no tiene descuento";
}elseif(kilos<=5) {
    $valorPagar=(kilos*4200)-(kilos*4200)*0.10;
    $descuento=(kilos*4200)*0.10;
    echo ""
} elseif(kilos<=10) {
    $valorPagar=(kilos*4200)-(kilos*4200)*0.15; 
    $descuento=(kilos*4200)*0.15;
    echo ""
}else(kilos<=20) {
    $valorPagar=(kilos*4200)-(kilos*4200)*0.20;
    $descuento=(kilos*4200)*0.20;
    echo ""
}
