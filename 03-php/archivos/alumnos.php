<?php   
namespace ManejoDeAlumnos;
use \Exception;
class Alumnos
{
    private string $_nombre;
	private string $_apellido;
    private int $_legajo;

	public function __construct(string $_nombre, string $_apellido,int $_legajo)
	{
		$this->_nombre = $_nombre;
		$this->_apellido = $_apellido;
		$this->_legajo = $_legajo;
	}
    public static function agregar(Alumnos $obj) : bool {
		$retorno = false;
		if(!alumnos::buscarPorLegajo($obj->_legajo))
		{
			//ABRO EL ARCHIVO
			$ar = fopen("./archivos/alumnos.txt", "a");//A - append
			//ESCRIBO EN EL ARCHIVO CON FORMATO: CLAVE-VALOR_UNO-VALOR_DOS
			$cant = fwrite($ar, "{$obj->_legajo}-{$obj->_apellido}-{$obj->_nombre}\r\n");
			if($cant > 0)
			{
				$retorno = true;						
			}else{throw new Exception('hubo un problema con el archivo');}
			//CIERRO EL ARCHIVO
			fclose($ar);
		}else{throw new Exception('el alumno ya esta agregado');}				
		return $retorno;
	}
	public static function listar() : string {
		$retorno = "";
		//ABRO EL ARCHIVO
		$ar = fopen("./archivos/alumnos.txt", "r");
		//LEO LINEA X LINEA DEL ARCHIVO 
		$retorno .= "<h1>LISTADO DE ALUMNOS</h1>";
		while(!feof($ar))
		{
			$retorno .= fgets($ar) . "<br>";		
		}
		//CIERRO EL ARCHIVO
		fclose($ar);
		return $retorno;
	}
	
	public static function buscarPorLegajo(int $legajo) : bool {
		$retorno = false;
		//ABRO EL ARCHIVO
		$ar = fopen("./archivos/alumnos.txt", "r");
		//LEO LINEA X LINEA DEL ARCHIVO 
		while(!feof($ar))
		{
			$linea = fgets($ar);
			$array_linea = explode("-", $linea);
			$array_linea[0] = trim($array_linea[0]);
			if($array_linea[0] != ""){
				//RECUPERO LOS CAMPOS
				$_legajo = trim($array_linea[0]);
				if ($_legajo == $legajo) {$retorno = true;}
			}
		}
		return $retorno;
	}

	public static function modificar(alumnos $obj) : bool {
		$retorno = false;
		$elementos = array();
		//ABRO EL ARCHIVO
		$ar = fopen("./archivos/alumnos.txt", "r");
		//LEO LINEA X LINEA DEL ARCHIVO 
		while(!feof($ar))
		{
			$linea = fgets($ar);
			$array_linea = explode("-", $linea);
			$array_linea[0] = trim($array_linea[0]);
			if($array_linea[0] != ""){
				$_legajo = trim($array_linea[0]);
				$_nombre = trim($array_linea[1]);
				$_apellido = trim($array_linea[2]);
				if ($_legajo == $obj->_legajo) { array_push($elementos, "{$_legajo}-{$obj->_nombre}-{$obj->_apellido}\r\n");}
				else{array_push($elementos, "{$_legajo}-{$_nombre}-{$_apellido}\r\n");}
			}
		}
		fclose($ar);
		$ar = fopen("./archivos/alumnos.txt", "w");
		$cant = 0;		
		foreach($elementos AS $item){
			$cant = fwrite($ar, $item);
		}
		if($cant > 0)
		{
			$retorno = true;			
		}
		fclose($ar);
		return $retorno;
	}

	public static function borrar(int $_legajo) : bool {

		$retorno = false;
		$elementos = array();
		$ar = fopen("./archivos/alumnos.txt", "r");
		while(!feof($ar))
		{
			$linea = fgets($ar);
			$array_linea = explode("-", $linea);
			$array_linea[0] = trim($array_linea[0]);
			if($array_linea[0] != ""){
				$legajo_archivo = trim($array_linea[0]);
				$nombre_archivo = trim($array_linea[1]);
				$apellido_archivo = trim($array_linea[2]);
				if ($legajo_archivo == $_legajo) 
				{
					continue;
				}
				
				array_push($elementos, "{$legajo_archivo}-{$nombre_archivo}-{$apellido_archivo}\r\n");
			}
		}
		fclose($ar);
		$cant = 0;
		$ar = fopen("./archivos/alumnos.txt", "w");
		foreach($elementos AS $item){

			$cant = fwrite($ar, $item);
		}
		if($cant > 0)
		{
			$retorno = true;			
		}
		fclose($ar);
		return $retorno;
	}
}
?>