<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    if (isset($_SESSION['redirigir'])) 
    {   
        $nombre =$_SESSION['redirigir']['_nombre'];
        $apellido =$_SESSION['redirigir']['_apellido'];
        $legajo =$_SESSION['redirigir']['_legajo'];
        $foto =$_SESSION['redirigir']['_foto'];
        echo "<h1>El legajo es: $legajo</h1>";
        echo "<h2>El nombre es: $nombre, El apellido es: $apellido</h2>";
        echo "<h3>Nombre de foto: $foto</h3>";
        echo "<img src='./fotos/$foto' width='200'> <br>";
    }
    else{       
        session_destroy();
        header('Location: nexo_poo.php');
        exit();
    }
?>
 <table border="1" >
        <tr> 
            <td>legajos</td>
            <td>apellidos</td>
            <td>nombres</td>
            <td>fotos</td>
        </tr>
            <?php 
                $tabla = "";
               $alumnos = file('./archivos/alumnos_foto.txt');
               if($alumnos)
               {
                    foreach ($alumnos as $linea) {
                        $array_linea = explode("-", $linea);
                        $array_linea[0] = trim($array_linea[0]);
                    $tabla .= "<tr>";
                        if($array_linea[0] != ""){
                            $_foto = trim($array_linea[3]);
                            $tabla .= "<td>" .  $array_linea[0] . "</td>" ;
                            $tabla .= "<td>" .  $array_linea[1] . "</td>" ;
                            $tabla .= "<td>" .  $array_linea[2] . "</td>" ;
                            $tabla .= "<td><img src='./fotos/$_foto' width='100'> </td></tr>";
                        }
                    }		
                    echo $tabla;
               }
               else{
                header('Location: ./nexo_poo.php');
               }
               
            ?>
    </table>


</body>
</html>