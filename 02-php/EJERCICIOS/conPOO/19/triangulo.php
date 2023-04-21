<?php

//deriva de figura geometrica
class triangulo extends FiguraGeometrica
{
	//ATRIBUTOS
	public float $base;
    public float $altura;
	
	//CONSTRUCTOR
	public function __construct(float $base,float $altura)
	{
		parent::__construct();
        $this->base = $base;
        $this->altura = $altura;
	}
	
	//IMPLEMENTO METODO ABSTRACTO
	public function CalcularDatos()
    {	
        $this->superficie = ($this->base * $this->altura) / 2;
    }
    public function Dibujar()
    {
        $triangulo = '';
        for ($i = 0; $i < $this->altura; $i++) {
            // Añadir espacios en blanco al inicio de cada línea
            // j<0, margen izquierdo si le pongo 1 lo alejo 1 espacio del margen
            for ($j = 0; $j < 0 + ($this->altura - $i - 1); $j++) {
                $triangulo .= '&nbsp';
            }
            // Añadir asteriscos al final de cada línea
            for ($k = 0; $k <= $i; $k++) {
                $triangulo .= '*';
            }
            $triangulo .= "<br>";
        }
        return $triangulo;
        
    }
}

