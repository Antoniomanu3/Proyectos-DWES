<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


$medios =  [ "El Pais" => "https://www.elpais.com", "El Mundo" => "https://www.elmundo.es", "ABC"=> "https://www.abc.es/", "20minutos"=>"https://www.20minutos.es/", "MARCA"=>"https://www.marca.com/"];
   
    $num = random_int(0,4);

   
    echo "<a href=\"".$medios["El Pais"]."\">El Pais</a><br>";
   
   
   ?>
</body>
</html>