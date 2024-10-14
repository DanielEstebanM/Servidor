<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table {
            border: solid 2px;
            border-collapse: collapse;
        }

        td {
            border: solid 2px;
            padding: 10px;
        }
    </style>

</head>

<body>
    <?php
    

    function generarArray($cantidad) : array
    {
        $arrayAleatorios = [];
        for ($i = 0; $i < $cantidad; $i++) {
            $numAleatorios = random_int(1, 10);
            $arrayAleatorios[] = $numAleatorios;
            
        }

        return $arrayAleatorios;
        
    }

    $arrayGenerado = generarArray(20);
    

    ?>

    <table>
        <tr>
            <?php foreach ($arrayGenerado as $valor): ?>
                <td><?php echo $valor; ?></td>
            <?php endforeach; ?>
        </tr>
    </table>
</body>

</html>