<?php
function enviarDatos()
{

    $arrayUsuario = [
        "Daniel" => '1234',
        "Geanina" => '5678',
        "Myriam" => '4321'
    ];
    $nombreUsuario = $_REQUEST['Nombre'];
    $contraseñaUsuario = $_REQUEST['Contraseña'];
    $msg = "";

    if ($nombreUsuario == "" || $contraseñaUsuario == "") {
        $msg = "Rellene todos los campos";
    } else {
        if (array_key_exists($nombreUsuario, $arrayUsuario) && $arrayUsuario[$nombreUsuario] = $contraseñaUsuario) {
            $msg = "Bienvenido " . $nombreUsuario;
        } else $msg = "Usuario o contraseña incorrectos";
    }
    return $msg;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej-01 Hoja-04</title>
</head>

<body>
    <p><?= enviarDatos(); ?></p>
</body>

</html>