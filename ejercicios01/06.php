<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header {
            background-color: blue;
            color: white;
            text-shadow: rgba(0, 0, 0, 0,5);
        }
        body {
            background-color: grey;
            margin-left: 25%;
            margin-right: 25%;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        div {
            background-color: white;
        }
        h1 {
            padding: 20px;
            text-align: center;
        }
        table, th, td {
            border: 1px solid black;
            background-color: white;
            border-collapse: collapse;
        }
        td, th {
            padding: 5px;
            font-size: 18px;
        }

    </style>
</head>
<header>
        <?php
            echo "<h1>TABLA DE MULTIPLICAR<h1>";
        ?>
</header>
<body>
    <?php
        $num = random_int(1,10);
        
        echo "<table>
            <tr>
                <th>Tabla del $num</th>
            </tr>
            <tr>
                <td>$num x 1 = </td>
                <td>" .($num * 1). "</td>
            </tr>
            <tr>
                <td>$num x 2 = </td>
                <td>" .($num * 2). "</td>
            </tr>
            <tr>
                <td>$num x 3 = </td>
                <td>" .($num * 3). "</td>
            </tr>
            <tr>
                <td>$num x 4 = </td>
                <td>" .($num * 4). "</td>
            </tr>
            <tr>
                <td>$num x 5 = </td>
                <td>" .($num * 5). "</td>
            </tr>
            <tr>
                <td>$num x 6 = </td>
                <td>" .($num * 6). "</td>
            </tr>
            <tr>
                <td>$num x 7 = </td>
                <td>" .($num * 7). "</td>
            </tr>
            <tr>
                <td>$num x 8 = </td>
                <td>" .($num * 8). "</td>
            </tr>
            <tr>
                <td>$num x 9 = </td>
                <td>" .($num * 9). "</td>
            </tr>
            <tr>
                <td>$num x 10 = </td>
                <td>" .($num * 10). "</td>
            </tr>
            </table>";
    ?>
</body>
</html>