<?php
/*
Parte 4 - Ejercicios con POO
Aplicación No 19 (Figuras geométricas)
La clase FiguraGeometrica posee: todos sus atributos protegidos, un constructor por defecto, un
método getter y setter para el atributo _color, un método virtual (ToString) y dos métodos
abstractos: Dibujar (público) y CalcularDatos (protegido).
CalcularDatos será invocado en el constructor de la clase derivada que corresponda, su
funcionalidad será la de inicializar los atributos _superficie y _perimetro.
Dibujar, retornará un string (con el color que corresponda) formando la figura geométrica del objeto
que lo invoque (retornar una serie de asteriscos que modele el objeto).
Ejemplo:
  *    *******
 ***   *******
*****  *******
Utilizar el método ToString para obtener toda la información completa del objeto, y luego dibujarlo
por pantalla.
Jerarquía de clases:
 */
require_once "FiguraGeometrica.php";
require_once "triangulo.php";
require_once "rectangulo.php";
$a = new triangulo(5,8);
echo $a->Dibujar();
echo "<br><br><br>";
$a = new rectangulo(5,20);
echo $a->Dibujar();
