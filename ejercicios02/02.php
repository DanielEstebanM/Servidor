<!DOCTYPE html>

<?php
    require_once("");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $num1 = random_int(1, 10);
        $num2 = random_int(1, 10);

        echo "1º número: $num1 <br>";
        echo "2º número: $num2 <br><br>";

        echo "$num1 + $num2 = " .$num1 + $num2. "<br>";
        echo "$num1 - $num2 = " .$num1 - $num2. "<br>";
        echo "$num1 * $num2 = " .$num1 * $num2. "<br>";
        echo "$num1 / $num2 = " .$num1 / $num2. "<br>";
        echo "$num1 % $num2 = " .$num1 % $num2. "<br>";
        echo "$num1 ** $num2 = " .$num1 ** $num2. "<br>";
    ?>

</body>
</html>