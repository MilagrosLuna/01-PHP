<?php

//deriva de figura geometrica
class rectangulo extends FiguraGeometrica
{
	//ATRIBUTOS
	public float $ladoUno;
    public float $ladoDos;
	
	//CONSTRUCTOR
	public function __construct(float $ladoUno,float $ladoDos)
	{
        parent::__construct();
        $this->ladoUno = $ladoUno;
        $this->ladoDos = $ladoDos;
	}
	
	//IMPLEMENTO METODO ABSTRACTO
	public function CalcularDatos()
    {
        $this->perimetro = ($this->ladoUno + $this->ladoDos) * 2;
        $this->superficie = $this->ladoUno * $this->ladoDos;
    }
    public function Dibujar()
    {	
        $rectangulo = '';
        for ($i = 1; $i <= $this->ladoUno; $i++) 
        {
            for ($j = 1; $j <= $this->ladoDos; $j++) {
                $rectangulo .= "*";
            }
            $rectangulo .=  "<br>";
        }
        return $rectangulo;
    }
}