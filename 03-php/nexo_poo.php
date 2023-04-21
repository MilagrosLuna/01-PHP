<?php
require_once "./archivos/alumnos.php";
use ManejoDeAlumnos\alumnos;

$_accion = isset($_POST["_accion"]) ? $_POST["_accion"] : "sin accion"; 
$_nombre = isset($_POST["_nombre"]) ? $_POST["_nombre"] : "sin nombre"; 
$_apellido = isset($_POST["_apellido"]) ? $_POST["_apellido"] : "sin apellido"; 
$_legajo = isset($_POST["_legajo"]) ? (int) $_POST["_legajo"] : 0; 
//var_dump($_GET);
if($_accion == "listar" || $_accion == "sin accion" )
{
   $_accion = join('',$_GET);// convertir a string  // la accion se recibe en el url   nexo.php?_accion=listar
    //echo $_accion;
}
echo "<br>";

switch($_accion)
{
    case "agregar":
        $nuevoAlumno = new alumnos($_nombre,$_apellido,$_legajo) ;        
        try {
            if(alumnos::agregar($nuevoAlumno)){echo"agregado<br>";}
        } catch (Exception $e) {
            echo 'Excepción: ',  $e->getMessage(), "<br>";
        }       
        break;
    case "listar":
        echo alumnos::listar(). "<br>";
        /// como poner una etiqueta html?
        
        break;
    case "verificar":
        if(alumnos::buscarPorLegajo($_legajo)){echo"El alumno con legajo $_legajo SI se encuentra en el listado<br>";}
        else{echo"El alumno con legajo $_legajo NO se encuentra en el listado<br>";}
        break;
    case "modificar":
        $modificado = new alumnos($_nombre, $_apellido, $_legajo);
		if(alumnos::modificar($modificado)){echo"El alumno con legajo $_legajo SI se ha modificado<br>";}
        else{echo"El alumno con legajo $_legajo NO se encuentra en el listado<br>";}
        break;
    case "borrar":
        if(alumnos::borrar($_legajo)){echo"El alumno con legajo $_legajo SI se ha borrado<br>";}
        else{echo"El alumno con legajo $_legajo NO se encuentra en el listado<br>";}
        break;

        default:
        echo "<script>alert('ACCION NO VALIDA');</script>";
        break;
}
/**/


?>