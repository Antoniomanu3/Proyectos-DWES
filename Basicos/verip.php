<?php

$dirips = $_SERVER['SERVER_ADDR'];
$diripc = $_SERVER['REMOTE_ADDR'];

echo " Tu IP del servidor es:" . $dirips . "<br>" ;
echo " Tu IP del cliente es:" . $diripc . "<br>" ;
echo __DIR__;
?>