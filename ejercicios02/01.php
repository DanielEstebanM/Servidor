<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        $numA = random_int(1, 10);
        $numB = random_int(1, 10);
        $numC = 0;
        
        function elMayor($numA, $numB, &$numC): void {
            //La razón de poner el "&" es que va a coger el valor de $numC, no el parámetro
            if ($numA > $numB) {
                $numC = $numA;
            } 
            
            else if ($numA < $numB) {
                $numC = $numB;
            } 
            
            else $numC = 0;
            
        }

        echo $numA. " ~ " .$numB. "<br>";
        elMayor($numA, $numB, $numC). "<br>";
        echo $numC. "<br><br>";
        echo "<b>¿Qué parámetros se deberían pasar por valor o copia y cuales por referencia?</b><br>
        Los 2 primeros valores se pueden pasar por copia, porque los valores no van a cambiar, mientras que el tercero se pasa por referencia porque va a cambiar dependiendo de los 2 primeros.";

    ?>
</body>

</html>