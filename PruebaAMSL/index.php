<?php
session_start();

include_once('app/funciones.php');

if (!isset($_SESSION['errorsesion'])) {
  $_SESSION['errorsesion'] = 0;
}
// COMPROBAR EL NUMERO DE SESION echo $_SESSION['errorsesion'];
if (!empty($_GET['login']) && !empty($_GET['clave'])) {
  if (userOk($_GET['login'], $_GET['clave'])) {
    $_SESSION['errorsesion'] = 0;
    if (getUserRol($_GET['login']) == ROL_PROFESOR) {
      $contenido = verNotaTodas($_GET['login']);
    } else {
      $contenido = verNotasAlumno($_GET['login']);
    }
    include_once('app/resultado.php');
  }
  // userOK falso
  else {
    $contenido = "El número de usuario y la contraseña no son válidos";

    //si el usuario entra mas de 5 veces, salta el archivo errorsesion y se destruye la sesion
    if ($_SESSION['errorsesion'] >= 5) {
      $_SESSION['errorsesion']++;
      include_once('app/acceso.php');
    } else {
      session_destroy();
      include_once('app/errorsesion.php');
    }
  }
} else {
  //vuelvo a poner el contador a 0
  $_SESSION['errorsesion'] = 0;
  $contenido = " Introduzca su número de usuario y su contraseña";
  include_once('app/acceso.php');
}
