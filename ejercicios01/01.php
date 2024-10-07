<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio01</title>
</head>
<body>
    <?php
        $num1 = random_int(1,10);
        $num2 = random_int(1,10);

        echo "1º número: $num1 <br>"; //Para mostrar el valor no hace falta sacarlo del string, con el $ es suficiente
        echo "2º número: $num2 <br><br>";

        echo "$num1 + $num2 = " .$num1 + $num2. "<br>"; //Para que no salga el valor concatenado sí que hace falta sacarlo de las comillas y rodearlo de puntos, en vez de 4+6=46, 4+6=10
        echo "$num1 - $num2 = " .$num1 - $num2. "<br>";
        echo "$num1 * $num2 = " .$num1 * $num2. "<br>";
        echo "$num1 / $num2 = " .$num1 / $num2. "<br>";
        echo "$num1 % $num2 = " .$num1 % $num2. "<br>";
        echo "$num1 ** $num2 = " .$num1 ** $num2. "<br>";
    ?>
</body>
</html>