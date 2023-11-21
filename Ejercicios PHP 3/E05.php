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

$array = [];
for ($i=0; $i < 6 ; $i++) { 
    $num = random_int(1,49);
    $array = $array + [$i => $num];

    for ($j=0; $j < $i; $j++) { 
        if ($array[$i]== $array[$j] ){
            unset($array[$i]);
            --$i;
        }
    }
}

foreach ($array as $key => $value) {
    if ($key != 5){
    echo"<td>$value </td>";
    }
    else{
    echo"<td> Complementario: $value </td>";
    }
}
    ?>

</table>
</body>
</html>