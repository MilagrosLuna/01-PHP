<?php
class garage
{
	private string $razonSocial;
    private float $precioPorHora;
    private $autos;

    public function __construct(string $razon,float $precio=0)
    {
        $this->razonSocial=$razon;
        $this->precioPorHora=$precio;
        $this->autos=array();
    }
    public function MostrarGarage()
    {
        $cadena = "Razon Social: $this->razonSocial<br>Precio por Hora: $this->precioPorHora<br>Autos:";
        foreach($this->autos as $auto)
        {
            $cadena .= auto::MostrarAuto($auto) . "<br><br>";
        }
        return $cadena;
    } 
    public function equals(auto $auto):bool
    {
        if(in_array($auto, $this->autos))
        {
            return true;
        }
        return false;
    }
    function add(auto $auto) : bool
    {
        if(!in_array($auto, $this->autos))
        {
            array_push($this->autos,$auto);
            return true;
        }
        return false;
    }
    function remove(auto $auto) : bool
    {
        if(in_array($auto, $this->autos))
        {
            $posicion = array_search($auto, $this->autos);
            if ($posicion !== false) {
                unset($this->autos[$posicion]);
                return true;
            }
        }
        return false;
    }
}
?>