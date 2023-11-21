<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<code>
<?php

$num = random_int(1, 9);

for ($i=0; $i < $num ; $i++) { 
    echo "**** "; 
}
echo "<br>";
for ($i=0; $i < $num ; $i++) { 
    echo "**** "; 
}
echo "<br>";
for ($i=0; $i < ($num*4+$num-1); $i++) { 
    echo"*";
}

?>    
</code>
</body>
</html>