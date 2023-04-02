<?php
/*Aplicación No 8 (Números en letras)
Realizar un programa que en base al valor numérico de la variable $num, pueda mostrarse por
pantalla, el nombre del número que tenga dentro escrito con palabras, para los números entre
el 20 y el 60.
*/
$num = 32;

if ($num >= 20 && $num <= 60) {
  switch ($num) {
    case 20:
      echo "veinte";
      break;
    case 21:
      echo "veintiuno";
      break;
    case 22:
      echo "veintidós";
      break;
    case 23:
      echo "veintitrés";
      break;
    case 24:
      echo "veinticuatro";
      break;
    case 25:
      echo "veinticinco";
      break;
    case 26:
      echo "veintiséis";
      break;
    case 27:
      echo "veintisiete";
      break;
    case 28:
      echo "veintiocho";
      break;
    case 29:
      echo "veintinueve";
      break;
    default:
      $decenas = floor($num / 10);
      $unidades = $num % 10;
      $nombreNumero = "";

      switch ($decenas) {
        case 3:
          $nombreNumero .= "treinta";
          break;
        case 4:
          $nombreNumero .= "cuarenta";
          break;
        case 5:
          $nombreNumero .= "cincuenta";
          break;
        case 6:
          $nombreNumero .= "sesenta";
          break;
      }

      if ($unidades > 0) {
        $nombreNumero .= " y ";

        switch ($unidades) {
          case 1:
            $nombreNumero .= "uno";
            break;
          case 2:
            $nombreNumero .= "dos";
            break;
          case 3:
            $nombreNumero .= "tres";
            break;
          case 4:
            $nombreNumero .= "cuatro";
            break;
          case 5:
            $nombreNumero .= "cinco";
            break;
          case 6:
            $nombreNumero .= "seis";
            break;
          case 7:
            $nombreNumero .= "siete";
            break;
          case 8:
            $nombreNumero .= "ocho";
            break;
          case 9:
            $nombreNumero .= "nueve";
            break;
        }
      }

      echo $nombreNumero;
      break;
  }
} else {
  echo "El número debe estar entre 20 y 60.";
}
?>