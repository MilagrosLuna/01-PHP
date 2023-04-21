<?php
/*Realizar una clase llamada “Auto” que posea los siguientes atributos privados:
_color (String)
_precio (Double)
_marca (String).
_fecha (DateTime)
Realizar un constructor capaz de poder instanciar objetos pasándole como parámetros:
i. La marca y el color.
ii. La marca, color y el precio.
iii. La marca, color, precio y fecha.
Realizar un método de instancia llamado “AgregarImpuestos”, que recibirá un doble por
parámetro y que se sumará al precio del objeto.
Realizar un método de clase llamado “MostrarAuto”, que recibirá un objeto de tipo “Auto” por
parámetro y que mostrará todos los atributos de dicho objeto.
Crear el método de instancia “Equals” que permita comparar dos objetos de tipo “Auto”. Sólo
devolverá TRUE si ambos “Autos” son de la misma marca.
Crear un método de clase, llamado “Add” que permita sumar dos objetos “Auto” (sólo si son de la
misma marca, y del mismo color, de lo contrario informarlo) y que retorne un Double con la suma
de los precios o cero si no se pudo realizar la operación.*/
include_once "auto.php";
$auto1 = new auto("ferrari","rojo",345.6); 
$auto2 = new auto("ferrari","azul",1005.6);
$auto3 = new auto("ferrari","rojo",18.6);
$fecha = new DateTime('05/08/2023');
$auto4 = new auto("peugeot","verde",12.5,$fecha);

$auto1->AgregarImpuestos(56.25);

echo"<br>";
echo auto::add($auto1,$auto3);
echo"<br><br>";
if($auto1->equals($auto2))
{
    echo "son iguales";
}
else
{
    echo"NO SON IGUAKLES";
}
echo"<br>";
if($auto1->equals($auto4))
{
    echo "son iguales";
}
else
{
    echo"NO SON IGUAKLES";
}
echo auto::MostrarAuto($auto1);
echo"<br><br>";
echo auto::MostrarAuto($auto2);
echo"<br><br>";
echo auto::MostrarAuto($auto3);
echo"<br><br>";
echo auto::MostrarAuto($auto4);