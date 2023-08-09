<?php
/*Desarrolle un ejercicio que permita mostrar los premios que un usuario se puede ganar
según la cantidad de puntos que acumule en un juego de competencias. */

$CantidadDePuntos = 500;
/*a cantidad de puntos que acumule en un juego de competencias.
100pts gana $40.00
200pts gana $60.00
400pts gana $80.00
500pts gana $100.00
*/
if($CantidadDePuntos ==100){
    echo "¡Ganaste $40.00!";
}elseif ($CantidadDePuntos  ==200){
    echo "¡Ganaste $60.00!";
}elseif ($CantidadDePuntos ==400){
    echo "¡Ganaste $80.00!";
}elseif ($CantidadDePuntos  ==500){
    echo "¡Ganaste $100.00";
}else{
    echo "Lo siento, no hay premio :(";
} 
?>