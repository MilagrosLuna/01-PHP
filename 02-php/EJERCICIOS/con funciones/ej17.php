<?php 
/**Aplicación No 17 (Invertir palabra)
Crear una función que reciba como parámetro un string ($palabra) y un entero ($max). La función
validará que la cantidad de caracteres que tiene $palabra no supere a $max y además deberá
determinar si ese valor se encuentra dentro del siguiente listado de palabras válidas:
“Recuperatorio”, “Parcial” y “Programacion”. Los valores de retorno serán:
1 si la palabra pertenece a algún elemento del listado.
0 en caso contrario.
*/

function Validar(string $palabra, int $max ) : int
{
    $palabrasValidas = ["Recuperatorio","Parcial","Programacion"];
   if( strlen($palabra) < $max)
   {
    for($i=0;$i<3;$i++)
    if($palabra === $palabrasValidas[$i])
    {
        return 1;
    }
    return 0;
   }
   return 0;
}

echo Validar("Programacion",20);
