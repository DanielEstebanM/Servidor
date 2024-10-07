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

        echo ("Número generado <b>$num</b><br>");
        echo "<code style='font-family: monospace;'>";
        echo "<pre>";

        for($i = 1; $i <= $num; $i++) {
            for($j = 1; $j <= $num - $i; $j++) {
                echo ' ';
            }
            for ($k = 1; $k <= (2 * $i - 1); $k++) {
                echo '*';
            }
            echo "<br>";
        }
        echo "</code>";
        echo "</pre>";
    ?>
</body>
</html>