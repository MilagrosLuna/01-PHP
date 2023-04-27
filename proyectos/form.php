<!DOCTYPE html>
<html lang="es">    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>alumnos</title>
    </head>             
    <body style="background-color:pink;">
        <h1>PROYECTO ALUMNOS</h1>                                                                   
        <br>
            <form action="./nexo_poo.php" method="post" enctype="multipart/form-data">
            <input type="text" name="_accion" placeholder="Introduce la accion">
            <br>
            <input type="text" name="_nombre" placeholder="Introduce tu nombre">
            <br>
            <input type="text" name="_apellido" placeholder="Introduce tu apellido">
            <br>
            <input type="number" name="_legajo" placeholder="Introduce tu legajo">
            <br>
            <input type="file" name="archivo" /> 
            <br>
            <input type="submit" value="CARGAR DATOS"style="font-size: 20px; padding: 10px 20px;">
            </form>
        <br>

    </body>
</html>