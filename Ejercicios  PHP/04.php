<?php
$cont = 0;
$contTotal = 0;
$tiempo = microtime(true);
?>
<?php


do {
    $num = random_int(1, 10);
    $contTotal++;
    if ($num == 6) {
        $cont++;
    } else {
        $cont = 0;
    }
} while ($cont < 3);

echo "Han salido tres 6 seguidos tras generar " . 
$contTotal . " numeros en " . $tiempo . 
" milisegundos";



?>