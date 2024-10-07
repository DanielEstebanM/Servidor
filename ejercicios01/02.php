<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $num = random_int(1, 9);

    echo ("Número generado <b>$num</b><br><br>");
    $colores = ['red', 'blue'];

    for ($i = 1; $i <= $num; $i++) {
        $color = $colores[$i % 2];

        echo "<span style='color: $color'>"; //Así se accede al estilo de la página
        for ($j = 1; $j <= $i; $j++) {
            echo $i;
        }
        echo "</span><br>"; //Se tiene que cerrar
    }
    ?>
</body>

</html>