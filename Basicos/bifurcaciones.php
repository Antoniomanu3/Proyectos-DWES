<h1>Primera forma</h1>
<?php

$curso = "1DAW"; ?>
<select name="modulos">
    <?php if ($curso == "1DAW") { ?>
        <option value="Prog">Programacion </option>
        <option value="Bd">Bases de datos </option>
    <?php } else { ?>
        <option value="Dweb">Despliegue </option>
        <option value="Dint">Interfaces web </option>
    <?php } ?>


<h1>Segunda forma</h1>
<?php
$curso = "1DAW";
echo "<select name='modulos'>";
if ($curso == "1DAW") {
    echo "<select value = 'Prog'>Programacion </option>".
         "<select value = 'Bd'>Base de datos </option>";
} else {
    echo "<select value = 'Dweb'>Despliegue</option>".
         "<select value = 'diw'>Interfaces </option>";
}
echo "</select>";
?>

<h1>Tercera forma</h1>
<?php $curso="2DAW"; ?>
<select name ="modulos">
<?php if ($curso=="1DAW") : ?>
<option value = "Prog">Programacion </option>
<option value = "Bd">Bases de datos </option>
<?php else : ?>
<option value = "Dweb">Despliegue </option>
<option value = "Dint">Interfaces web </option>
<?php endif; ?>
<!-- opcion parecida con mismop resultado al if else
$resultado = $valor == 1 ? "valor es 1" : "valor no es uno"; 