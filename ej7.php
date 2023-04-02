<?php
/*Aplicación No 7 (Mostrar fecha y estación)
Obtenga la fecha actual del servidor (función date) y luego imprímala dentro de la página con
distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del
año es. Utilizar una estructura selectiva múltiple.
*/

print "Today is " . date("Y-m-d") . "<br>";
switch(date("m"))
{
    case "1": print "estas en verano";
    break;
    case "2": print "estas en verano";
    break;
    case "3": print "otoño";
    break;
    case "4": print "otoño";
    break;
    case "5": print "invierno??";
    break;
    case "6": print "invierno";
    break;
    case "7": print "invierno";
    break;
    case "8": print "termina el invierno";
    break;
    case "9": print "primavera";
    break;
    case "10": print "primavera";
    break;
    case "11": print "estas en verano";
    break;
    case "12": print "estas en verano";
    break;
}


?>