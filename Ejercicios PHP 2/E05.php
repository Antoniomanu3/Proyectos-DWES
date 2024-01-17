<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    function generarHTMLTable ( $filas, $columnas, $borde,$contenido){

        echo"<table border = '$borde'>";
        
        for ($i=0; $i < $filas; $i++) { 
           echo "<tr></tr>";
             for ($j=0; $j < $columnas; $j++) { 
            echo "<td>$contenido </td>";
        } 
        }
       
        echo "</table>";
    }
    echo generarHTMLTable(4,8,2,"hola");

    ?>
</body>
</html>