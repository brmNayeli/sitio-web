<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabla</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <body background="https://img.freepik.com/vector-gratis/fondo-morado-rosa-nublado_91008-257.jpg?w=2000">
        <h1>Resultado de Tabla por el número Ingresado</h1>
        <?php

        $tabla = $_GET["tabla"];

        echo "<h1>TABLA DE MULTIPLICAR DE $tabla </h1>";
        for ($i=1; $i <=10 ; $i++){
            echo "$i x $tabla = ", $i*$tabla, "<br>";
        }
        ?>

        
<a href="../html/tabla.html"><br>REGRESAR</a>
</body>
</html>