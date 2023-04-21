<?php 
namespace Negocios;

include_once "mascota.php";
use Animalitos\mascota;

class guarderia{
    public string $nombre;
    public $mascotas=[];

    function __construct(string $nombre)
    {
        $this->nombre = $nombre;
    }
    function __toString() :string
    {
        $sumaEdades=0;
        $totalMascotas=0;
        $promedio=0;
        $cadena = "El nombre de la guarderia es: $this->nombre<br> mascotas:<br>";
        foreach ($this->mascotas as $mascota) {
            $cadena = $cadena . $mascota->__toString() . "<br>";
            $sumaEdades += $mascota->edad;
            $totalMascotas++;
          }
          $promedio = $sumaEdades / $totalMascotas;
          $cadena = $cadena . "<br>El promedio de las edades es de: $promedio <br>";
        return $cadena;
    }
    function add(mascota $mascota) : bool
    {
        if(!in_array($mascota, $this->mascotas))
        {
            array_push($this->mascotas,$mascota);
            return true;
        }
        return false;
    }
    function equals(guarderia $guarderia,mascota $mascota) :bool
    {
        if(in_array($mascota, $guarderia->mascotas))
        {
            return true;
        }
        return false;
    }
}

