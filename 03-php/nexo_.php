<?php
$_accion = isset($_POST["_accion"]) ? $_POST["_accion"] : "sin accion"; 
$_nombre = isset($_POST["_nombre"]) ? $_POST["_nombre"] : "sin nombre"; 
$_apellido = isset($_POST["_apellido"]) ? $_POST["_apellido"] : "sin apellido"; 
$_legajo = isset($_POST["_legajo"]) ? (int) $_POST["_legajo"] : 0; 
//var_dump($_GET);
if($_accion == "sin accion")
{
   $_accion = join('',$_GET);// convertir a string  // la accion se recibe en el url   nexo.php?_accion=listar
    //echo $_accion;
}
echo "<br>";
switch($_accion)
{
    case "agregar":
        $ar = fopen("./archivos/alumnos.txt", "a");
		$cant = fwrite($ar, "{$obj->_legajo}-{$obj->_apellido}-{$obj->_nombre}\r\n");
		if($cant > 0){echo "agregado<br>";}else{echo"no se pudo agregar<br>";}
        break;
		
    case "listar":
        $ar = fopen("./archivos/alumnos.txt", "r");
		while(!feof($ar))
		{
			$linea = fgets($ar);
			echo $linea . "<br>";		
		}
		fclose($ar);
        break;

    case "verificar":
		$esta = false;
		$ar = fopen("./archivos/alumnos.txt", "r");
		while(!feof($ar))
		{
			$linea = fgets($ar);
			$array_linea = explode("-", $linea);
			$array_linea[0] = trim($array_linea[0]);
			if($array_linea[0] != ""){
				$_legajo = trim($array_linea[0]);
				if ($_legajo == $legajo) {$esta = true;}
			}
		}
		if($esta){echo"El alumno con legajo $_legajo SI se encuentra en el listado<br>";}
        else{echo"El alumno con legajo $_legajo NO se encuentra en el listado<br>";}
        break;

    case "modificar":
        $elementos = array();
		$ar = fopen("./archivos/alumnos.txt", "r");
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
		if($cant > 0){echo"El alumno con legajo $_legajo SI se ha modificado<br>";}
		else{echo"El alumno con legajo $_legajo NO se encuentra en el listado<br>";}
		fclose($ar);
        break;

    case "borrar":
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
		if($cant > 0){echo"El alumno con legajo $_legajo SI se ha borrado<br>";}
        else{echo"El alumno con legajo $_legajo NO se encuentra en el listado<br>";}
		fclose($ar);
        break;

        default:
        echo "<script>alert('ACCION NO VALIDA');</script>";
        break;
}
/**/


?>