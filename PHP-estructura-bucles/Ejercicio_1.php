<?php
/*Desarrolle un ejercicio que le permita a un usuario calcular el salario según que devenga
mensualmente*/

/*Hasta $450.00 descontar 8%.*/
$Salario = 450;
$Descuento = 8;
$Descuento = $Salario *(0.08);
$DescuentoAplicado = $Salario - $Descuento;
echo "El descuento mensual del %8 al salario $$Salario es de: $$Descuento dando un total de: $$DescuentoAplicado <br/><p>";

$Salario = 600;
$Descuento = 15;
$Descuento = $Salario *(0.15);
$DescuentoAplicado = $Salario - $Descuento;
echo "El descuento mensual del %8 al salario $$Salario es de: $$Descuento dando un total de: $$DescuentoAplicado <br/><p>";

$Salario = 800;
$Descuento = 18;
$Descuento = $Salario *(0.18);
$DescuentoAplicado = $Salario - $Descuento;
echo "El descuento mensual del %8 al salario $$Salario es de: $$Descuento dando un total de: $$DescuentoAplicado <br/><p>";

$Salario = 1000;
$Descuento = 20;
$Descuento = $Salario *(0.20);
$DescuentoAplicado = $Salario - $Descuento;
echo "El descuento mensual del %8 al salario $$Salario es de: $$Descuento dando un total de: $$DescuentoAplicado <br/><p>";

?>