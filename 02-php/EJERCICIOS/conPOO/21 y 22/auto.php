<?php
class auto
{
	private string  $color;
	private string  $marca;
    private float $precio;
    private DateTime $fecha;

    public function __construct(string $marca,string $color,float $precio = 0, DateTime $fecha = new DateTime('2022-05-10'))
    {
        $this->color=$color;
        $this->marca=$marca;
        $this->precio=$precio;
        $this->fecha=$fecha;
    }
    public function AgregarImpuestos(float $precio):void
    {
        $this->precio+=$precio;
    }
    public static function MostrarAuto(auto $auto):string
    {   
        $a=$auto->fecha->format('y-m-d');
        return "El auto es de color: $auto->color<br>Su precio: $auto->precio<br>Su marca: $auto->marca<br>Fecha:$a";
    }
    public function equals(auto $auto):bool
    {
        if($this->marca===$auto->marca)
        {
            return true;
        }
        return false;
    }
    public static function add(auto $auto1,auto $auto2):float
    {
        if($auto2->marca===$auto1->marca && $auto2->color===$auto1->color)
        {
            return $auto1->precio+$auto2->precio;
        }
        echo `la operacion no se pudo realizar`;
        return 0;
    }

}
?>