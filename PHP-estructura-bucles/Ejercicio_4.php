<?php
/*Desarrollar un ejercicio que permita llevar la cuenta del crédito que un usuario obtiene en
un juego.*/
$PrecioDeJuego = 1;
$CreditoInicial = 5;
$BalanceDeCredito = $CreditoInicial;

while ($BalanceDeCredito >= $PrecioDeJuego){
    echo "Tu crédito actual es de: $" .$BalanceDeCredito. " Puedes Seguir jugando <br/><p>";
    $BalanceDeCredito -= $PrecioDeJuego;
}

echo "Se agotaron tus creditos. ¡Recarga para seguir jugando.";


?>