<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta http-equiv="refresh", content="5">
    <style>
        .rojo {
            background-color: red;
            padding: 5px;
            padding-left: 10px;
        }

        .verde {
            background-color: green;
            padding: 5px;
            padding-left: 10px;
        }

        .azul {
            background-color: blue;
            padding: 5px;
            padding-left: 10px;
        }
    </style>
</head>
<body>
    
    <?php
        $numRojo = random_int(100,500);
        $numVerde = random_int(100,500);
        $numAzul = random_int(100,500);

        echo "<div class='rojo' style = 'width: ".$numRojo."px'> <p>Rojo($numRojo)<p></div>
        <div class='verde' style = 'width: ".$numVerde."px'> <p>Verde($numVerde)</p></div>
        <div class='azul' style = 'width: ".$numAzul."px'> <p>Azul($numAzul)</p></div>"
    ?>
</body>
</html>