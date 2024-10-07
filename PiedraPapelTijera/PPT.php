<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
           font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; 
        }
        .tamañoManos {
            font-size: 70px;
        }
    </style>
</head>

<body>

    <h1><b>¡Piedra, papel, tijera!</b></h1>
    <p>Actualice la página para mostrar otra partida.</p>

    <?php
    define('PIEDRA1',  "&#x1F91C;");
    define('PIEDRA2',  "&#x1F91B;");
    define('TIJERAS',  "&#x1F596;");
    define('PAPEL',    "&#x1F91A;");

    $jugador1 = random_int(1, 3);
    $jugador2 = random_int(1, 3);
    $mensaje = "";

    if ($jugador1 == 1 && $jugador2 == 1) {
        $mensaje = 'Empate';
    } else if ($jugador1 == 1 && $jugador2 == 2) {
        $mensaje = 'Ha ganado el jugador 1';
    } else if ($jugador1 == 1 && $jugador2 == 3) {
        $mensaje = 'Ha ganado el jugador 2';
    } else if ($jugador1 == 2 && $jugador2 == 1) {
        $mensaje = 'Ha ganado el jugador 2';
    } else if ($jugador1 == 2 && $jugador2 == 2) {
        $mensaje = 'Empate';
    } else if ($jugador1 == 2 && $jugador2 == 3) {
        $mensaje = 'Ha ganado el jugador 1';
    } else if ($jugador1 == 3 && $jugador2 == 1) {
        $mensaje = 'Ha ganado el jugador 1';
    } else if ($jugador1 == 3 && $jugador2 == 2) {
        $mensaje = 'Ha ganado el jugador 2';
    } else if ($jugador1 == 3 && $jugador2 == 3) {
        $mensaje = 'Empate';
    }

    function partida(&$jugador1, &$jugador2)
    {
        if ($jugador1 == 1) {
            $jugador1 = PIEDRA1;
        } else if ($jugador1 == 2) {
            $jugador1 = TIJERAS;
        } else $jugador1 = PAPEL;

        if ($jugador2 == 1) {
            $jugador2 = PIEDRA2;
        } else if ($jugador2 == 2) {
            $jugador2 = TIJERAS;
        } else $jugador2 = PAPEL;

        return $jugador1;
        return $jugador2;
    }

    partida($jugador1, $jugador2);

    ?>

    <div style="display: flex;">
        <div>
            <h3><b>Jugador 1</b></h3>
            <h1 class="tamañoManos"><?= $jugador1 ?></h1>
        </div>
        <div>
            <h3><b>Jugador 2</b></h3>
            <h1 class="tamañoManos"><?= $jugador2 ?></h1>
        </div>
        
    </div>
    <h3><b><?= $mensaje ?></b></h3>
</body>

</html>