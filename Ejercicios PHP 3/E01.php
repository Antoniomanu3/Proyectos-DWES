<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table style="border: 2px solid black;  ">
    <?php

    $min =11;
    $max=0;
    $cont1=0;
    $cont2=0;
    $cont3=0;
    $cont4=0;
    $cont5=0;
    $cont6=0;
    $cont7=0;
    $cont8=0;
    $cont9=0;
    $cont10=0;
    $conttotal=0;



echo "<tr>";
        for ($i=0; $i < 20; $i++) { 
            
           $num = random_int(1,10);
            echo"<td>$num </td>";
            $min =fmin($num, $min);
            $max= fmax($num, $max);

            $conttotal= repit($num, $cont1,$cont2,$cont3,$cont4,$cont5,$cont6,$cont7,$cont8,$cont9,$cont10, $conttotal);

          
        }

echo "</tr>";  echo "a".$conttotal;
function fmin($nume, $min){

    if ($min>$nume){
            $min = $nume;
    }
    return $min;
}
function fmax($nume, $max ){
    if( $max<$nume) 
            $max=$nume;
            return $max;
}


function repit($nume,$cont1,$cont2,$cont3,$cont4,$cont5,$cont6,$cont7,$cont8,$cont9,$cont10, $conttotal){


    switch ($nume) {
        case '1':
       
            $cont1++;

        break;
        case '2':
       
            $cont2++;
    
        break;
        case '3':
       
            $cont3++;
        
        break;
        case '4':
       
            $cont4++;
            
        break;
        case '5':
       
            $cont5++;
                
        break;
        case '6':
       
            $cont6++;
                    
        break;
        case '7':
       
         $cont7++;
                        
        break;
        case '8':
       
            $cont8++;

        break;
        case '9':
       
            $cont9++;
    
        break;
        case '10':
       
            $cont10++;

            break;
    
    }

    if ($cont1>$conttotal) {
        $conttotal= 1;
    } 
    if ($cont2>$conttotal) {
        $conttotal= 2;
    }
    if ($cont3>$conttotal) {
        $conttotal= 3;
    }
    if ($cont4>$conttotal) {
        $conttotal= 4;
    }
    if ($cont5>$conttotal) {
        $conttotal= 5;
    }
    if ($cont6>$conttotal) {
        $conttotal= 6;
    }
    if ($cont7>$conttotal) {
        $conttotal= 7;
    }
    if ($cont8>$conttotal) {
        $conttotal= 8;
    }
    if ($cont9>$conttotal) {
        $conttotal= 9;
    }
    if ($cont10>$conttotal) {
        $conttotal= 10;
    }

    
    

}
    ?>
</table>

</body>
</html>