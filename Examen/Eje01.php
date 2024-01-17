<?php
$nombres = ["Juan", "Pedro", "María", "Elena", "Luis"];
$notas  = [7.5, 6.0, 7.8, 9.5, 3.5];
// Une los array en uno nuevo
$calificaciones = unir($nombres, $notas);
// Creo un nuevo array
$datos = separar($calificaciones);
echo "<code><pre>";
print_r($calificaciones);
print_r($datos);
echo "</pre></code>";


function unir($nombres, $notas) {
    $calificaciones = [];
    for ($i = 0; $i < count($nombres); $i++) {
        // Unir nombres y notas
        $calificaciones[$nombres[$i]] = $notas[$i];
    }
    return $calificaciones;
}

function separar($calificaciones) {
    $nombres = [];
    $notas = [];
    foreach ($calificaciones as $nombre => $nota) {
        $nombres[] = $nombre;
        $notas[] = $nota;
    }
    return [$nombres, $notas];
}
?>

<!-- TABLA CALIFICACIONES
Array
(
[Juan] => 7.5
[Pedro] => 6
[María] => 7.8
[Elena] => 9.5
[Luis] => 3.5
)

TABLA DATOS:
Array
(
[0] => Array
	(
	[0] => Juan
	[1] => Pedro
	[2] => María
	[3] => Elena
	[4] => Luis
	)
[1] => Array
	 (
	[0] => 7.5
	[1] => 6
	[2] => 7.8
	[3] => 9.5
	[4] => 3.5
	)
) -->