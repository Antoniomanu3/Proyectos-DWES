<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   echo"<table border = '2'>"; 
   $color= "black";
  
 function color(){

        $num = rand(0,62);
        $caracter = substr('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz', $num, 1);
        $resu = "#";
        for ($i=0; $i < 3 ; $i++) { 
            $resu = $resu.$caracter;
        }

    return $resu;

 }
   
   for ($i=1; $i <=10; $i++) { 

    echo "<tr >";
      for ($j=1; $j <=10; $j++) { 
    $color=color();
     echo "<td style='background-color: $color';>&nbsp &nbsp &nbsp </td>";
 } 
 echo"</tr>";
 }
 echo"</table>";
 
    ?>
</body>
</html>