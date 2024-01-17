<?php
// Comprobar si la solicitud es válida
function solicitudOk()
{
    // Si el token de la sesión coincide con el token enviado en la solicitud, la solicitud es válida
    return isset($_SESSION['token']) && isset($_POST['token']) && $_SESSION['token'] === $_POST['token'];
}

// Generar un nuevo token CSRF y guardarlo en la sesión
function csrf_token()
{
    //convierto de cadena binaria a cadena hexadecimal
    $token = bin2hex(random_bytes(32));
    $_SESSION['token'] = $token;
}

// Procesar el formulario vía POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (solicitudOk()) {
        // El formulario ha sido enviado correctamente
        echo 'Formulario enviado correctamente.';
    } else {
        // Puede indicar un ataque CSRF
        echo 'Solicitud no válida.';
    }
} else {
    csrf_token();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title> Agenda App </title>
</head>

<body>
    <form>
        <fieldset>
            <legend>Su agenda personal</legend>
            <label for="nombre">Nombre:</label><br>
            <input type='text' name='nombre' size=20>
            <input type='submit' name="orden" value="Consultar"><br>
            <label for="telefono">Teléfono:</label><br>
            <input type='tel' name='telefono' size=20>
            <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
            <input type='submit' name="orden" value="Añadir">
        </fieldset>
    </form>
</body>

</html>

<?php

//Defino el nombre del fichero para utilizarlo posteriormente
define('FILEUSER', 'contactos.txt');

//Creo la funcion informacioFichero para leer el fichero y devolver un array con los datos
function informacionFichero()
{
    // abrimos el fichero para lectura
    $fichero = @fopen(FILEUSER, 'r') or die("ERROR al abrir fichero de usuarios");
    $tabla = [];
    while ($linea = fgets($fichero)) {
        $datos = explode(',', trim($linea));
        // Escribimos la correspondiente fila en tabla
        $tabla[] = [$datos[0], $datos[1]];
    }
    fclose($fichero);
    return $tabla;
}

//Creo la funcion consultar para buscar el nombre en el array y devolver el telefono, si no esta devuelvo un error. 
function consultar(): string
{
    $tabla = informacionFichero();
    $nombre = $_GET['nombre'];
    $telefono = $_GET['telefono'];
    $encontrado = false;
    $mensaje = " ";
    //loop de las entradas
    foreach ($tabla as $contacto) {
        if ($contacto[0] == $nombre) {
            $encontrado = true;
            $telefono = $contacto[1];
        }
    }
    //genera el mensaje de respuesta
    if ($encontrado) {
        $mensaje = "<p>El teléfono de $nombre es $telefono</p>";
    } else {
        $mensaje = "<p>No se ha encontrado el contacto $nombre</p>";
    }

    return $mensaje;
}

//Creo la funcion añadir para añadir el nombre y el telefono al array, siempre que el telefono sea numerico, la funcion devuelve un mensaje de confirmacion o error si ya existe 
function añadir(): string
{
    $tabla = informacionFichero();
    $nombre = $_GET['nombre'];
    $telefono = $_GET['telefono'];
    $encontrado = false;
    $mensaje = " ";
    foreach ($tabla as $contacto) {
        if ($contacto[0] == $nombre) {
            $encontrado = true;
        }
    }
    if ($encontrado) {
        $mensaje = "<p>El contacto $nombre ya existe</p>";
    } else {
        //compruebo si el teléfono es un número
        if (is_numeric($telefono)) {
            // abrimos el fichero para lectura
            $fichero = @fopen(FILEUSER, 'a') or die("ERROR al abrir fichero de usuarios");
            fwrite($fichero, "$nombre,$telefono\n");
            $mensaje = "<p>El contacto $nombre se ha añadido correctamente</p>";
            fclose($fichero);
        } else {
            //mensaje si el teléfono no es numérico
            $mensaje = "<p>El teléfono no es válido, tiene que ser un número</p>";
        }
    }
    return $mensaje;
}

//Aquí llamamos a la funcion consultar o añadir segun el boton pulsado
if (isset($_GET['orden'])) {
    $orden = $_GET['orden'];
    switch ($orden) {
        case 'Consultar':
            echo consultar();
            break;
        case 'Añadir':
            echo añadir();
            break;
    }
}

?>