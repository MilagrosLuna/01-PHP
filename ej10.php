<?php
/* Aplicación No 10 (Mostrar impares)
Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
Luego imprimir (utilizando la estructura for) cada uno en una línea distinta (recordar que el
salto de línea en HTML es la etiqueta <br/>). Repetir la impresión de los números utilizando
las estructuras while y foreach.*/

$vector = [];
$numero = 1;

while(count($vector)<10)
{
    if($numero % 2 != 0)
    {
        array_push($vector,$numero);
    }
    $numero++;
}
echo "var_dump: <br>";
var_dump($vector);
echo "for:<br>";
for($i=0;$i<count($vector);$i++){
    echo $vector[$i]."<br>";
}
echo "foreach :<br>";
foreach ($vector as $item ) {
    echo $item . "<br>";
}
echo "While :<br>";
$total = 0;
while($total<count($vector))
{
    echo $vector[$total]."<br>";
    $total++;
}



