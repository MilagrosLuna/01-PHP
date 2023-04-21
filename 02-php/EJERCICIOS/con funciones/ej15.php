<?php 
/**Parte 3 - Ejercicios con Funciones
Aplicación No 15 (Potencias de números)
Mostrar por pantalla las primeras 4 potencias de los números del uno 1 al 4 (hacer una función que
las calcule invocando la función pow).
 */

 function CalcularPotencia(int $numero ) : void
 {
    for($i = 0;$i<4;$i++)
    {
        echo "la potencia del $numero elevado a $i es:". pow($numero,$i) . "<br>";
    }
 }

 CalcularPotencia(1);
 CalcularPotencia(2);
 CalcularPotencia(3);
 CalcularPotencia(4);