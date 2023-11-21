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
        $numcolor = random_int(0,4);
  if($numcolor==0){
    $color= "black";}
    elseif($numcolor==1){
    $color= "white";}
    elseif($numcolor==2){
    $color= "green";}
    elseif($numcolor==3){
    $color= "red";}
    elseif($numcolor==4){
    $color= "blue";}
    return $color;

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