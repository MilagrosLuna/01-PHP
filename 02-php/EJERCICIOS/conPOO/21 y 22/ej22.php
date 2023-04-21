<?php
/*Crear la clase Garage que posea como atributos privados:

_razonSocial (String)
_precioPorHora (Double)
_autos (Autos[], reutilizar la clase Auto del ejercicio anterior)

Realizar un constructor capaz de poder instanciar objetos pasándole como parámetros:

i. La razón social.
ii. La razón social, y el precio por hora.

Realizar un método de instancia llamado “MostrarGarage”, que no recibirá parámetros y que
mostrará todos los atributos del objeto.
Crear el método de instancia “Equals” que permita comparar al objeto de tipo Garaje con un
objeto de tipo Auto. Sólo devolverá TRUE si el auto está en el garaje.
Crear el método de instancia “Add” para que permita sumar un objeto “Auto” al “Garage” (sólo si
el auto no está en el garaje, de lo contrario informarlo).
Ejemplo: $miGarage->Add($autoUno);
Crear el método de instancia “Remove” para que permita quitar un objeto “Auto” del “Garage”
(sólo si el auto está en el garaje, de lo contrario informarlo).
Ejemplo: $miGarage->Remove($autoUno);
En testGarage.php, crear autos y un garage. Probar el buen funcionamiento de todos los métodos.
 */
include_once "auto.php";
include_once "garage.php";
$auto1 = new auto("ferrari","rojo",345.6); 
$auto2 = new auto("ferrari","azul",1005.6);
$auto3 = new auto("ferrari","rojo",18.6);
$fecha = new DateTime('05/08/2023');
$auto4 = new auto("peugeot","verde",12.5,$fecha);
$miGarage = new garage("estacionamiento",150);
$miGarage2 = new garage("gratis",);
if($miGarage->Add($auto1)){echo "agregado <br>";}
if($miGarage->Add($auto2)){echo "agregado <br>";}
if($miGarage->Add($auto3)){echo "agregado <br>";}
if($miGarage->Add($auto4)){echo "agregado <br>";}
if($miGarage->Add($auto1)){echo "agregado <br>";}else{echo"nono ya esta<br>";}
if($miGarage->remove($auto4)){echo "eliminado <br>";}
if($miGarage->remove($auto4)){echo "eliminado <br>";}else{echo"no existe?<br>";}
if($miGarage->equals($auto2)){echo "esta <br>";}
if($miGarage->equals($auto4)){echo "esta <br>";}else{echo"no esta";}




?>