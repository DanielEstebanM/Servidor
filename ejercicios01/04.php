<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numero6consecutivo = 0;
        $contador = 0;
        $inicioTemporizador = microtime(true); //Se usa poniendo al principio y al final del programa, y el resultado se resta para determinar la duración

        while ($numero6consecutivo <3 ) {
            $num = random_int(1, 10);
            $contador++;

            if ($num == 6) {
                $numero6consecutivo++;
            } else {
                $numero6consecutivo = 0;
            }
        }

        $finalTemporizador = microtime(true);
        $duracion = ($finalTemporizador - $inicioTemporizador) * 1000;
        
        echo "Han salido tres 6 seguidos tras generar <b>$contador</b> en <b>$duracion</b> milisegundos";
        ?>
</body>
</html>