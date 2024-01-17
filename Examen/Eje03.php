<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title> Las frutas </title>
</head>

<body>
    <?php

    //Creo un array con las frutas
    $fruta = [];

    if (isset($_GET['galletadefrutas'])) {
        //Si existe la lista de frutas, la guardo en la variable fruta
        $fruta = $_GET['galletadefrutas'];
        //Guardo en la cookie la lista de frutas que he seleccionado separadas por comas y con una duración de 1 semana
        setcookie('galletadefrutas', implode(",", $fruta), time() + 7 * 24 * 60 * 60);
    } else {
        //Si no esta definida la lista de frutas  y existe la cookie, la guardo en la variable fruta separado por comas
        if (isset($_COOKIE['galletadefrutas'])) {
            $fruta = explode(",", $_COOKIE['galletadefrutas']);
        }
    }

    //intento de controlar el evento submit 
    // if (isset($_GET['submit'])) {
    //     $orden = $_GET['submit'];
    //     switch ($orden) {
    //         case 'CambiarCookie':

    //             break;
    //         case 'BorrarCookie':
    //             //trato de borrar el cookie
    //             if (isset($_GET['BorrarCookie'])) {
    //                 setcookie("BorrarCookie", "", time() - 3600, "/");
    //             }
    //             break;
    //     }
    // }

    //trato de borrar el cookie
    if (isset($_GET['BorrarCookie'])) {
        setcookie("BorrarCookie", "", time() - 3600, "/");
    }
    ?>

    <form>
        <fieldset>
            <legend>Sus frutas preferidas </legend>
            <label for="nombre">Lista de frutas:</label><br>
            <select name="galletadefrutas[]" multiple>
                <!-- Recorro el array fruta y si el valor de la fruta coincide con el valor de la cookie, lo selecciono -->
                <option value="Platano" <?= in_array("Platano", $fruta) ? "selected=\"selected\"" : "" ?>>Platano</option>
                <option value="Fresa" selected <?= in_array("Fresa", $fruta) ? "selected=\"selected\"" : "" ?>>Fresa</option>
                <option value="Naranja" <?= in_array("Naranja", $fruta) ? "selected=\"selected\"" : "" ?>>Naranja</option>
                <option value="Melón" selected <?= in_array("Melón", $fruta) ? "selected=\"selected\"" : "" ?>>Melón</option>
                <option value="Manzana" <?= in_array("Manzana", $fruta) ? "selected=\"selected\"" : "" ?>>Manzana</option>
            </select>
            <input type="submit" name="CambiarCookie" value=" Cambiar ">
            <input type="submit" name="BorrarCookie" value="Borrar">
        </fieldset>
    </form>
</body>

</html>