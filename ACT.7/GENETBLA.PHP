<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../ACT.7/STYLE.CSS">
</head>
<body>
<body background="https://img.freepik.com/foto-gratis/holi-color-fondo-sobre-fondo-blanco_24972-874.jpg?w=2000">

     
<?php
    $columna=$_GET['columna'];
    $renglon=$_GET['renglon'];

    echo "<center>","La tabla generada $columna columnas y $renglon renglones","</center>";
    echo "<br>";

    if( $renglon&& $columna && isset($_GET['columna'])) {
        echo"<table align='center' border='2px' background=purple>";

        for($ren=1; $ren<=$_GET['renglon']; $ren++){
            echo "<tr>";
            for($col=1; $col<=$_GET['columna']; $col++){
                echo "<td>";
                echo "$ren$col";
                echo"</td>";
            }
        echo "<tr>";
        }
        echo "</table>";
    }
?>
    
</body>
</html>