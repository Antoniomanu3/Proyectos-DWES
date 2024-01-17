<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border = '2'>
<?php
    $deportes = ["futbol"=> "img/futbol.jpg", "baloncesto" => "img/baloncesto.jpg", "tenis" => "img/tenis.jpg"];

    foreach ($deportes as $key => $value) {
       echo"<tr><td> $key</td><td><img src= '$value' alt='$key'></td></tr>";
    }



?>
</table>
</body>
</html>