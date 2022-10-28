<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dias vividos</title>
    <link rel="stylesheet" href="../ACT.7/STYLE.CSS">
</head>
<body>
<body background="https://img.freepik.com/foto-gratis/fondo-banner-humo-purpura-estetico_53876-129044.jpg?w=2000">
       

       <?php
       $edad=$_GET['edad'];
       if(isset($_GET['edad'])) {
           $edad=$edad*365;
           echo "<h3 style='text-align:center;'>Has vivido $edad dias </h3>";
       }
       ?>
  
    </html>
    </body>