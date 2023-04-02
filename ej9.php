<?php 
/* Aplicación No 9 (Carga aleatoria)
Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la
función rand). Mediante una estructura condicional, determinar si el promedio de los números
son mayores, menores o iguales que 6. Mostrar un mensaje por pantalla informando el
resultado.*/

$vector = [];  // es lo mismo poner = array();  
$suma = 0;
$promedio = 0;
for($i =0 ; $i<5;$i++)
{
    $vector[$i] = rand(1,10); // puede ser asi o la linea 14
    //array_push($vector, rand(1,10));  // si pongo asi y la declaracion tiene el tamaño [5], el priemr lugar dice 5;

    $suma += $vector[$i]; 
    echo $vector[$i] . "<br>";

}
echo "la suma es ". $suma . "<br>";
$promedio = $suma / 5;
if($promedio>6)
{
    echo " el promedio es mayor q 6 <br>";
}
else if($promedio < 6)
{
    echo " el promedio es menor q 6 <br>";
}
else{
    echo " el promedio es 6 <br>";
}