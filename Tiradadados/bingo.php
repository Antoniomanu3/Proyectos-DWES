<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <?php

        $n = [];
        $min = 0;
        $max = 9;
        $h = 0;
        for ($i = 0; $i < 9; $i++) {
            for ($j = 0; $j < 3; $j++) {
                $n[$h] = random_int($min, $max);
                $h++;
            }

            $min = $min + 10;
            $max = $max + 10;
       
        }
        sort($n);
        foreach ($n as $key => $value) {
            echo $value . " ,";
        }

        // for ($i=0; $i < 3; $i++) { 
        //         echo"<tr>";
        //         for ($j=0; $j < 9; $j++) { 
        //             echo"<td>";



        //             echo"</td>";
        //         }
        //         echo"</tr>";
        //     }

        //Solo puede haber 5 numeros por cada fila, y 2 por cada columna
        //con un array bidimensional que un valor sea la finla y otro la columna 
        //solo le afectan los que estan pegado a ese numero como un buscaminas

        $h = 0;
        for ($i = 0; $i < 3; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 9; $j++) {
                echo "<td>";

                $tablero[$i][$j] = $n[$h];
                $h++;
                echo $tablero[$i][$j];

                echo "</td>";
            }
            echo "</tr>";
        }
        echo"<br></br>";
        for ($i = 0; $i < 3; $i++) {

            for ($j = 0; $j < 9; $j++) {
                $tablero=cercamejorada($tablero, $i, $j);
            }
        }
        
        for ($i = 0; $i < 3; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 9; $j++) {
                echo "<td>";
                echo $tablero[$i][$j];
                echo "</td>";
            }
            echo "</tr>";
        }
       
        //columna los valores 1,2,3 =$i, la fila 1-9 =$j
        //sirve para quitar los numeros 

        //¿¿Y si meto un for dentro de cada if para ver si las otras casillas estan vacias o no??
        function cercamejorada($tablero, $columna, $fila) {
            $aleatorio = random_int(0, 1);
            //Quitar numero de abajo
            if ($aleatorio == 0 && $columna != 2) {
                unset($tablero[$columna + 1][$fila]);
                $tablero[$columna + 1][$fila]=0;
               
                //$numero=0(en $columna =$columna+1 y $fila = $fila)
            }
            $aleatorio = random_int(0, 1);
            //Quitar numero de arriba
            if ($aleatorio == 0 && $columna != 0) {
                unset($tablero[$columna - 1][$fila]);
                $tablero[$columna - 1][$fila]=0;
                //$numero=0(en $columna =$columna-1 y $fila = $fila)
            }
            $aleatorio = random_int(0, 1);
            //Quitar numero de la derecha
            if ($aleatorio == 0 && $fila != 8) {
                unset($tablero[$columna][$fila + 1]);
                $tablero[$columna][$fila + 1]=0;
                //$numero=0(en $columna =$columna y $fila = $fila+1)
            }
            $aleatorio = random_int(0, 1);
            //Quitar numero de la izquierda
            if ($aleatorio == 0 && $fila != 0) {
                unset($tablero[$columna][$fila - 1]);
                $tablero[$columna][$fila - 1]=0;
                //$numero=0(en $columna =$columna y $fila = $fila-1)
            }
            return $tablero;
        }

        function columnasbien($tablero){
            $aleatorio = random_int(0,8);
            


        }


        //Vamos a suponer que esto esta bien definido y tiene la columna los valores 1,2,3 , la fila 1-9 y los numeros pues los que sean 
        $fila = 0;
        $columna = 0;
        $numero = 0;

        function cerca($fila, $columna, $numero)
        {
            if ($tablero[$numero] = !0) {
                switch ($columna) {
                    case 1:
                        if ($fila == 1) {
                            //el ramdom es para que si sale 0 salga la casilla vacia yt si sale 1 salga con numero
                            $aleatorio = random_int(0, 1);
                            if ($aleatorio == 0) {
                                //$numero=0(en $columna =1 y $fila = $fila+1)
                            }
                            $aleatorio = random_int(0, 1);
                            if ($aleatorio == 0) {
                                //$numero=0(en $columna =2 y $fila = $fila)
                            }
                        } elseif ($fila == 9) {
                            $aleatorio = random_int(0, 1);
                            if ($aleatorio == 0) {
                                //$numero=0(en $columna =1 y $fila = $fila-1)
                            }
                            $aleatorio = random_int(0, 1);
                            if ($aleatorio == 0) {
                                //$numero=0(en $columna =2 y $fila = $fila)
                            } else {
                                $aleatorio = random_int(0, 1);
                                if ($aleatorio == 0) {
                                    //$numero=0(en $columna =1 y $fila = $fila+1)
                                }
                                $aleatorio = random_int(0, 1);
                                if ($aleatorio == 0) {
                                    //$numero=0(en $columna =2 y $fila = $fila)
                                }
                                $aleatorio = random_int(0, 1);
                                if ($aleatorio == 0) {
                                    //$numero=0(en $columna =1 y $fila = $fila-1)
                                }
                            }
                            break;
                        }
                    case 2:

                        break;

                    default:
                        # code...
                        break;
                }
            }
        }





        ?>
    </table>
</body>

</html>