<?php
/*Aplicación No 12 (Arrays asociativos)
Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, que
contenga como elementos: ‘color’, ‘marca’, ‘trazo’ y ‘precio’. Crear, cargar y mostrar tres
lapiceras.*/

echo "la primera lapicera: <br>";
MostrarLapicera($lapicera = CrearLapciera("rojo","bic","fino",140));
echo "la segunda lapicera: <br>";
MostrarLapicera($lapicera = CrearLapciera("azul","pappermate","grueso",180));
echo "la tercera lapicera: <br>";
MostrarLapicera($lapicera = CrearLapciera("violeta","bic","fino",150));



function CrearLapciera($color,$marca,$trazo,$precio)
{
    $lapicera = array("color","marca","trazo","precio");
    $lapicera["color"]=$color;
    $lapicera["marca"]=$marca;
    $lapicera["trazo"]=$trazo;
    $lapicera["precio"]=$precio;
    return $lapicera;
}

function MostrarLapicera($lapicera)
{
    echo $lapicera["color"]. "<br>";
    echo $lapicera["marca"]. "<br>";
    echo $lapicera["trazo"]. "<br>";
    echo $lapicera["precio"]. "<br>";
}