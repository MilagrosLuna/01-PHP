<?php 
/* Aplicación No 16 (Invertir palabra)
Realizar el desarrollo de una función que reciba un Array de caracteres y que invierta el orden de las
letras del Array.
Ejemplo: Se recibe la palabra “HOLA” y luego queda “ALOH”.
 */
function InvertirOrden(string $a ) : string
{
   return implode("",array_reverse(str_split($a)));
   //str split convierte en array y el implode en string
}

echo InvertirOrden("messi Enashe");