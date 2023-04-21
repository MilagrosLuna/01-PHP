<?php

//CLASE QUE DERIVA DE LA CLASE ABSTRACTA
abstract class FiguraGeometrica
{
	//ATRIBUTOS
	public string $color;
	public float $perimetro;
    public float $superficie;

	//CONSTRUCTOR
	public function __construct()
	{
		$this->color = "" ;
        $this->perimetro = 0.0;
        $this->superficie = 0.0;
	}
    
    // SETTER & GETTER
    public function setColor($valor){$this->color = $valor;}
    public function getColor(){return $this->color;}
    
    // METODOS abstractos es decir NO SE IMPLENTAN EN EL PADRE PERO SI EN LOS HIJOS
	abstract protected function CalcularDatos() ;
	
    abstract public function Dibujar() ;

    //
    public function __toString()
    {
        return "Figura de color " . $this->color . ", superficie = " . $this->superficie . ", perimetro = " . $this->perimetro;
    }
}