<?php
session_start();
define('MAXIINTENTOS', 5);
$msg = "";
if (!isset($_SESSION['numeroOculto'])) {
    $valor = random_int(1, 20);
    $_SESSION['numeroOculto'] = $valor;
    $_SESSION['intentos'] = 0;
    $msg = "bienvenido a adivina un numero";
}

if (!isset($_GET["numeroUsuario"])) {
    $numu = $_GET["numeroUsuario"];
    $nums = $_SESSION['numeroOculto'];
    if ($numu == $nums) {
        $msg = "Has acertado";
        session_destroy();
        header("refresh:3");
    } else {
        if ($_SESSION['intentos'] >= MAXIINTENTOS) {
            $msg = "suiperado el maximo de intentos";
            session_destroy();
            header("refresh:3");
        } else {
        if ($numu > $nums) {
            $msg = "te pasasssssssssssssssssssssssss";
        } else {
            $msg = "te quedas corto como tu pija";
        }
        
    } 
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?= $_SESSION['numeroOculto'] ?>

<?= $msg ?>
<form method="get">
    Introduce un numero:
</form>
<input name="numeroUsuario" type="number">

</html>