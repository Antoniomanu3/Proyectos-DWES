<html>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <?php
    $num = random_int(1, 9);
    $contadorEspacios = $num - 1;
    $contadorAsteriscos = 1;
    ?>
    <code> <!-- monospace -->
        <?php
        for ($i = 1; $i <= $num; $i++) {
            for ($j = 1; $j <= $contadorEspacios; $j++) {
                echo "&nbsp";
            }
            for ($k = 1; $k <= $contadorAsteriscos; $k++) {
                echo "*";
            }
            $contadorAsteriscos += 2;
            $contadorEspacios--;
            echo "<br/>";
        }
        ?>
    </code>
</body>

</html>