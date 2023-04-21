<?php 
/*Aplicación No 18 (Par e impar)
Crear una función llamada EsPar que reciba un valor entero como parámetro y devuelva TRUE si
este número es par ó FALSE si es impar.
Reutilizando el código anterior, crear la función EsImpar. */

function EsImpar(int $numero ) : bool
{
    if ($numero % 2 == 0) {
        return false; 
    }
    else
    {
        return true;
    }
}

if (EsImpar(60)) {
  echo "Esto impar.";
} else {
  echo "Esto par.";
}