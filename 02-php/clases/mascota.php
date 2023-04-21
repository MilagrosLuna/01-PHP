<?php
namespace Animalitos;

class mascota{
    public string $nombre;
    public string $tipo;
    public int $edad;

    function __construct(string $nombre,string $tipo,int $edad = 0)
    {
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->edad = $edad;
    }
    function __toString() :string
    {
        return "$this->nombre - $this->tipo - $this->edad";
    }
    function Mostrar(mascota $mascota) : string
    {
        return $mascota->__toString();
    }
    function equals(mascota $mascota) :bool
    {
        if($mascota->nombre == $this->nombre && $mascota->tipo == $this->tipo)
        {
            return true;
        }
        return false;
    }

}


