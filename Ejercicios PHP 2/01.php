<?php

function elMayor($a, $b)
{
    $c =0;
    if ($a > $b) $c = $a;
    else if ($a < $b) $c = $b;
    return $c;
}


echo elMayor(47, 64);

