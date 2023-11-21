<html>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <h1>Ejercicio 1</h1>
    <hr>
    <?php

    $n1 =  random_int(1, 10);
    $n2 =  random_int(1, 10);

    echo "numero 1 : " . $n1 . "<br/>";
    echo "numero 2 : " . $n2 . "<br/>" . "<br/>";

    echo "Suma: $n1 + $n2 = " . ($n1 + $n2) . "<br/>";
    echo "Resta: $n1 - $n2 = " . ($n1 - $n2) . "<br/>";
    echo "Multiplicación: $n1 * $n2 = " . ($n1 * $n2) . "<br/>";
    echo "División: $n1 / $n2 = " . ($n1 / $n2) . "<br/>";
    echo "Módulo: $n1 % $n2 = " . ($n1 % $n2) . "<br/>";
    echo "Potencia: $n1 ** $n2 = " . ($n1 ** $n2) . "<br/>";

    ?>
</body>

</html>