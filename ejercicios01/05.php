<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            padding: 20px;
        }
        table {
            width: 300px;
            border-collapse: collapse;
            margin: 20px 0;
            
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: blue;
            color: white;
        }

        tr:nth-child(even) td {
            background-color: wheat;
        }

        td {
            background-color: white;
        }

        .number-info {
            margin: 10px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <?php
        $num1 = random_int(1,10);
        $num2 = random_int(1,10);

        echo "1º número: $num1 <br>";
        echo "2º número: $num2 <br><br>";

        echo "<table>
        <tr>
            <th>Operación</th>
            <th>Resultado</th>
        </tr>
        <tr>
            <td>$num1 + $num2</td>
            <td>" . ($num1 + $num2) . "</td>
        </tr>
        <tr>
            <td>$num1 - $num2</td>
            <td>" . ($num1 - $num2) . "</td>
        </tr>
        <tr>
            <td>$num1 * $num2</td>
            <td>" . ($num1 * $num2) . "</td>
        </tr>
        <tr>
            <td>$num1 / $num2</td>
            <td>" . ($num1 / $num2) . "</td>
        </tr>
        <tr>
            <td>$num1 % $num2</td>
            <td>" . ($num1 % $num2) . "</td>
        </tr>
        <tr>
            <td>$num1<sup>$num2</sup></td>
            <td>" . ($num1 ** $num2) . "</td>
        </tr>
      </table>";
    ?>
</body>
</html>