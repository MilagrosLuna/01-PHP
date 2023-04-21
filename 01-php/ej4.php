<?php
/*
Aplicación No 4 (Sumar números)
Confeccionar un programa que sume todos los números enteros desde 1 mientras la suma no
supere a 1000. Mostrar los números sumados y al finalizar el proceso indicar cuantos números
se sumaron.
*/


$suma = 0;
$numerosSumados = array();

for ($i = 1; $suma + $i <= 1000; $i++) {
  $suma += $i;
  array_push($numerosSumados, $i);
}

echo "Los números sumados son: " . implode(", ", $numerosSumados) . "<br>";
echo "La cantidad de números sumados es: " . count($numerosSumados) . "<br>";

echo "LA SUMA ES " . $suma . "<br>";
?>