<?php
/*Desarrolle un ejercicio que le permita Mostrar en una pantalla el cambien en efectivo que
le corresponde a un cliente al realizar una compra en una maquina dispensadora*/

$PrecioDelProducto = 0.75;
$CantidadInsertada = 5.00;

$Cambio = $CantidadInsertada-$PrecioDelProducto;

echo "Tu compra fue realizada!!<br/><p>";

echo "Pagaste la cantidad de $$PrecioDelProducto con un billete de $$CantidadInsertada recoge tu cambio de $$Cambio";

?>