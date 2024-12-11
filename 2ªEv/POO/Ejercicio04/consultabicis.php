<?php

include "BiciElectrica.php";

function cargabicis()
{
    $fichero = fopen("Bicis.csv", "r");
    $arrayBicis = [];

    while (($bici = fgetcsv($fichero)) !== false) {
        $bicicleta = new BiciElectrica($bici[0], $bici[1], $bici[2], $bici[3], $bici[4]);
        $arrayBicis[] = $bicicleta;
    }
    fclose($fichero);

    return $arrayBicis;
}

$tabla = cargabicis();
if (!empty($_GET['coordx']) && !empty($_GET['coordy'])) {
    $biciRecomendada = bicimascercana($_GET['coordx'], $_GET['coordy'], $tabla);
}

function bicimascercana($coordx, $coordy, $tabla) {
    $biciCercana = null;
    $distanciaMinima = PHP_INT_MAX;

    foreach ($tabla as $bici) {
        if ($bici->operativa) {
            $distancia = sqrt(pow($bici->coordx - $coordx, 2) + pow($bici->coordy - $coordy, 2));
            
            if ($distancia < $distanciaMinima) {
                $distanciaMinima = $distancia;
                $biciCercana = $bici;
            }
        }
    }

    return $biciCercana ? $biciCercana->id : "No hay bicicletas operativas disponibles.";
}

function mostrartablabicis($tabla)
{
    $msg = "<table>
                <tr>
                    <th>Id</th>
                    <th>Coord X</th>
                    <th>Coord Y</th>
                    <th>Batería</th>
                </tr>";

    foreach ($tabla as $b) {
        if ($b -> operativa == true) {
            $msg .= "<tr>
                    <td>" . $b -> id . " </td>
                    <td>" . $b -> coordx . " </td>
                    <td>" . $b -> coordy . " </td>
                    <td>" . $b -> bateria . " </td>
                </tr>";
        }
    }

    $msg .= "</table>";

    return $msg;
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>MOSTRAR BICIS OPERATIVAS</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>

</head>

<body>
    <h1> Listado de bicicletas operativas </h1>
    <?= mostrartablabicis($tabla); ?>
    <?php if (isset($biciRecomendada)) : ?>
        <h2> Bicicleta disponible más cercana es <?= $biciRecomendada ?> </h2>
        <button onclick="history.back()"> Volver </button>
    <?php else : ?>
        <h2> Indicar su ubicación: <h2>
                <form>
                    Coordenada X: <input type="number" name="coordx"><br>
                    Coordenada Y: <input type="number" name="coordy"><br>
                    <input type="submit" value=" Consultar ">
                </form>
            <?php endif ?>

</body>

</html>