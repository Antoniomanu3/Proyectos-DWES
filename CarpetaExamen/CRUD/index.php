<?php
session_start();

include_once 'app/funciones.php';
include_once 'app/acciones.php';

// Tabla de usuarios
if (!isset($_SESSION['tuser'])) {
    $_SESSION['tuser'] = cargarDatos();
}

// Div con contenido
$_SESSION['msg'] = "";
$contenido = "";
if ($_SERVER['REQUEST_METHOD'] == "GET") {

    if (isset($_GET['orden'])) {
        switch ($_GET['orden']) {
            case "Nuevo":
                accionAlta();
                break;
            case "Borrar":
                accionBorrar($_GET['id']);
                break;
            case "Modificar":
                accionModificar($_GET['id']);
                break;
            case "Detalles":
                accionDetalles($_GET['id']);
                break;
            case "Terminar":
                accionTerminar();
                break;
        }
    }
}
// POST Formulario de alta o de modificación
else {
    if (isset($_POST['orden'])) {
        switch ($_POST['orden']) {
            case "Nuevo":
                accionPostAlta();
                break;
            case "Modificar":
                accionPostModificar();
                break;
            case "Detalles":; // No hago nada
        }
    }
}

$msg = $_SESSION['msg'];
print "<br>";
$contenido .= mostrarDatos();
// Muestro la página principal
include_once "app/layout/principal.php";