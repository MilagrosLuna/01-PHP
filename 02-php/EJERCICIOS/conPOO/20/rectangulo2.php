<?php
class rectangulo2
{
	private punto $vertice1;
    private punto $vertice2;
    private punto $vertice3;
    private punto $vertice4;
    private float $area;
    private int $ladoUno;
    private int $ladoDos;
    private float $perimetro;

    public function __construct(punto $v1,punto $v3)
    {
        $this->vertice1=$v1;
        $this->vertice3=$v3;

         // Calculamos los otros dos vértices y los asignamos
         $this->vertice2 = new Punto($v3->getX(), $v1->getY());
         $this->vertice4 = new Punto($v1->getX(), $v3->getY());
         
         // Calculamos los lados, el área y el perímetro
         $this->ladoUno = abs($v3->getX() - $v1->getX());
         $this->ladoDos = abs($v3->getY() - $v1->getY());
         $this->area = $this->ladoUno * $this->ladoDos;
         $this->perimetro = 2 * ($this->ladoUno + $this->ladoDos);
    }
    public function Dibujar():string
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
?>