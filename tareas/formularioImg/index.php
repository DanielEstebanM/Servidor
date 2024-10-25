<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salida formulario</title>
    <style>
        body {
            background-color: yellow;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        .contenedor {
            background-color: yellow;
            border-radius: 10px;
            width: 500px;
            margin: 20px auto;
            padding: 20px;
            text-align: left;
            display: flex;
        }

        h1 {
            text-align: center;
            font-size: 24px;
            margin-top: 50px;
        }

        .datos {
            width: 60%;
        }

        .datos p {
            margin: 8px 0;
            font-size: 16px;
        }

        .imagen {
            width: 35%;
            text-align: center;
        }

        .imagen img {
            max-width: 100%;
            border: 2px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>

<body>

    <h1>Datos del jugador</h1>


    <?php

    $nombre = "";
    $alias = "";
    $edad = 0;
    $armas = [];
    $artesMagicas = "";
    $imagen = 'calavera.png';


    if (isset($_REQUEST['nombre'])) {
        $nombre = $_REQUEST['nombre'];
    }

    if (isset($_REQUEST['alias'])) {
        $alias = $_REQUEST['alias'];
    }

    if (isset($_REQUEST['edad'])) {
        $edad = $_REQUEST['edad'];
    }

    // Array de checkbox
    if (isset($_POST['arma']) && is_array($_POST['arma'])) {
        $armas = $_POST['arma'];
    }

    // Botón de radios
    if (isset($_REQUEST['magia'])) {
        $artesMagicas = $_REQUEST['magia'];
    }

    // Botón de explorador de archivos (PNG)
    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
        $tipo = $_FILES['imagen']['type'];
        $tamaño = $_FILES['imagen']['size'];

        // Validación del tipo y tamaño del archivo
        if ($tipo === 'image/png' && $tamaño <= 10240) { // 10 KB
            // Obtener el contenido binario del archivo
            $contenidoImagen = file_get_contents($_FILES['imagen']['tmp_name']);
            // Codificar la imagen en base64 para mostrarla en línea
            $imagen = 'data:' . $tipo . ';base64,' . base64_encode($contenidoImagen);
        } else {
            $mensajeError = "Solo se permiten archivos PNG de hasta 10KB.";
        }
    }

    ?>

    <div class="contenedor">
        <div class="datos">
            <p><b>Nombre:</b> <?php echo htmlspecialchars($nombre); ?></p>
            <p><b>Alias:</b> <?php echo htmlspecialchars($alias); ?></p>
            <p><b>Edad:</b> <?php echo htmlspecialchars($edad); ?></p>
            <p><b>Armas seleccionadas:</b>
                <?php
                if (count($armas) > 0) {
                    echo htmlspecialchars(implode(", ", $armas));
                } else {
                    echo "No tiene armas";
                }
                ?>
            </p>
            <p><b>¿Practica artes mágicas?: </b><?php echo $artesMagicas; ?></p>
        </div>

        <div class="imagen">
            <img src="<?php echo $imagen; ?>" alt="Imagen del jugador">
            <?php if (!empty($mensajeError)): ?>
                <p class="error"><?php echo $mensajeError; ?></p>
            <?php endif; ?>
        </div>

    </div>

</body>

</html>