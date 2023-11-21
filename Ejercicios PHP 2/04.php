<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1" style="border-collapse: collapse">
    <tr>
                    <th style="background-color: black; color: white;" colspan="2" >Generacion de 50 valores aleatorios</th>
                    
                </tr>
    <?php

$max=0;
$min=101;
$media=0;
for ($i=0; $i < 50; $i++) { 
    $num = random_int(1,100);
    if ($min>$num)
        $min = $num;
    if ($max<$num)
        $max= $num;
        $media = $media +$num;
}
$media = $media /50;


echo "<tr><td>Minimo</td><td style=\"text-align:right\">$min</td></tr>";
echo "<tr><td>Maximo </td><td style=\"text-align:right\">$max</td></tr>";
echo "<tr><td>Media </td><td style=\"text-align:right\">$media</td></tr>";

    ?>
</table>
</body>

</html>