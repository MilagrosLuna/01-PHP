<?php
/*Aplicación No 14 (Arrays de Arrays)
Realizar las líneas de código necesarias para generar un Array asociativo y otro indexado que
contengan como elementos tres Arrays del punto anterior cada uno. Crear, cargar y mostrar los
Arrays de Arrays. */
$vec1 = array("Perro", "Gato", "Ratón", "Araña", "Mosca");
$vec2 = array("1986", "1996", "2015", "78", "86");
$vec3 = array("php", "mysql", "html5", "typescript", "ajax");


// Arreglo indexado
$indexado = array($vec1, $vec2, $vec3);

// Arreglo asociativo
$asociativo = array(
  "animales" => $vec1,
  "numeros" => $vec2,
  "lenguajes" => $vec3
);

// Mostrar arreglos de arreglos
echo "Arreglo indexado: <br>";
print_r($indexado);
echo "<br><br>";

echo "Arreglo asociativo: <br>";
print_r($asociativo); // print_r o var_dump
echo "<br>";
