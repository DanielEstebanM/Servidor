        <?php
        $numero1 = "";
        $numero2 = "";

        if (isset($_REQUEST['numero1']) && isset($_REQUEST['numero2'])) {
            $numero1 = $_REQUEST['numero1'];
            $numero2 = $_REQUEST['numero2'];


            $operacion = $_REQUEST['operacion'];

            function calcular()
            {
                $resultado = "";
                if (isset($numero1) && isset($numero2) && isset($operacion)) {

                    switch ($operacion) {
                        case '+':
                            $resultado = $numero1 + $numero2;
                            return $resultado;
                            break;
                        case '-':
                            $resultado = $numero1 - $numero2;
                            return $resultado;
                            break;
                        case '*':
                            $resultado = (int)$numero1 * (int)$numero2;
                            return $resultado;
                            break;
                        case '/':
                            if ($numero2 == 0) {
                                $resultado = "Error: División por cero no permitida.";
                                exit;
                            }
                            $resultado = $numero1 / $numero2;
                            return $resultado;
                            break;
                        default:
                            $resultado = "Operación no válida.";
                            exit;
                    }
                } else {
                    $resultado = "Introduzca los números.";
                }
            }

            function convertir()
            {
                $controles = $_REQUEST['controles'];
                $resultado = "";
                switch ($controles) {
                    case 'decimal':
                        $resultado = $resultado;
                        return $resultado;
                        echo "El resultado es " . $resultado;
                        break;

                    case 'binario':
                        $resultado = decbin($resultado);
                        return $resultado;
                        echo "El resultado es " . $resultado;
                        break;

                    default:
                        $resultado = dechex($resultado);
                        return $resultado;
                        echo "El resultado es " . $resultado;
                        break;
                }
            }


            // $botonBorrar = $_REQUEST('borrarNumeros');
            // if ($botonBorrar != null) {
            //     $_REQUEST['numero1'] = "";
            //     $_REQUEST['numero2'] = "";
            //     $resultado = 0;
            // } else {
            // }

            if ($botonBorrar != null && $_REQUEST['numero1'] = "" && $_REQUEST['numero2'] = "") {
                $_REQUEST['numero1'] = "";
                $_REQUEST['numero2'] = "";
                $resultado = 0;
            }
        }

        ?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Ej-02 Hoja-04</title>
            <style>
                * {
                    text-align: center;
                }

                body {
                    padding: 20px;
                }

                label {
                    margin-top: 10px;
                }

                div {
                    border: 1px solid black;
                }
            </style>
        </head>

        <body>
            <div class="calculadora">
                <div class="titulo">
                    <h1>Mini Calculadora</h1>
                </div>
                <form action="02.php" method="post">
                    <label>Nº 1: </label><input type="number" name="numero1" placeholder="Introduce un número" value="<? $numero1 ?>">
                    <label>Nº 2: </label><input type="number" name="numero2" placeholder="Introduce un número" value="<? $numero2 ?>"><br><br>

                    <div>
                        <input type="submit" name="operacion" value="+">
                        <input type="submit" name="operacion" value="-">
                        <input type="submit" name="operacion" value="*">
                        <input type="submit" name="operacion" value="/">
                        <button type="submit" name="borrarNumeros">Borrar</button>
                    </div>

                    <div>
                        <input type="radio" name="controles" value="decimal" checked>Decimal
                        <input type="radio" name="controles" value="binario">Binario
                        <input type="radio" name="controles" value="hexadecimal">Hexadecimal
                    </div><br>
                    <input type="button" value="Borrar con reset">
                    <p><? "El resultado es " . $resultado ?></p>

                </form>


            </div>
        </body>

        </html>