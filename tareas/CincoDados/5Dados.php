<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h1 {
            font-size: 2em;
        }

        .jugador1 {
            width: 425px;
            margin: 10px auto;
            padding: 10px;
            border: 1px solid black;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: red;
        }

        .jugador2 {
            width: 425px;
            margin: 10px auto;
            padding: 10px;
            border: 1px solid black;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: blue;
            color: white;
        }

        .dados {
            display: flex;
        }

        .dado {
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 50px;
        }

        #resultado {
            font-size: 1.5em;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <h1>Cinco dados</h1>
    <p>Actualice la página para mostrar una nueva tirada.</p>

    <?php

    $figuraDados = ['&#9856;', '&#9857;', '&#9858;', '&#9859;', '&#9860;', '&#9861;'];

    function lanzarDados()
    {
        $dados = [];
        for ($i = 0; $i < 5; $i++) {
            $dados[] = random_int(1, 6);
        }
        return $dados;
    }

    function calcularPuntuacion($dados)
    {
        $sumaTotal = array_sum($dados);
        $min = min($dados);
        $max = max($dados);

        return $sumaTotal - $min - $max;
    }

    function mostrarDados($dados)
    {
        global $figuraDados;
        $resultado = "<div class='dados'>";

        foreach ($dados as $dado) {
            $resultado .= "<div class='dado'>".$figuraDados[$dado - 1]."</div>"; //Le resto 1 porque los arrays comienzan desde 0 y los valores de los dados desde 1
        }

        $resultado .= "</div>";
        return $resultado;
    }

    $turnoJugador1 = lanzarDados();
    $turnoJugador2 = lanzarDados();

    $puntuacionJugador1 = calcularPuntuacion($turnoJugador1);
    $puntuacionJugador2 = calcularPuntuacion($turnoJugador2);

    //Jugador 1
    echo "<div class='jugador1'>";
    echo "<div><strong>Jugador 1</strong></div>";
    echo mostrarDados($turnoJugador1);
    echo "<div><strong>".$puntuacionJugador1." puntos</strong></div>";
    echo "</div>";

    //Jugador 2
    echo "<div class='jugador2'>";
    echo "<div><strong>Jugador 2</strong></div>";
    echo mostrarDados($turnoJugador2);
    echo "<div><strong>".$puntuacionJugador2." puntos</strong></div>";
    echo "</div>";

    if ($puntuacionJugador1 > $puntuacionJugador2) {
        echo "<div id='resultado'><strong>Resultado: Ha ganado el Jugador 1</strong></div>";
    } elseif ($puntuacionJugador2 > $puntuacionJugador1) {
        echo "<div id='resultado'><strong>Resultado: Ha ganado el Jugador 2</strong></div>";
    } else echo "<div id='resultado'><strong>Resultado: ¡Empate!</strong></div>";

    ?>

</body>

</html>