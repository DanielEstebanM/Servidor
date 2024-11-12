<?php

session_start();

if (isset($_POST['accion'])) {
    switch ($_POST['accion']) {
        case ' Anotar ':
            $fruta = $_POST['fruta'];
            $cantidad = $_POST['cantidad'];

            if (!isset($_SESSION['fruta'])) {
                $_SESSION['fruta'] = [];
            }

            if ($cantidad > 0) {
                if (isset($_SESSION['fruta'][$fruta])) {
                    $_SESSION['fruta'][$fruta] += $cantidad;
                } else {
                    $_SESSION['fruta'][$fruta] = $cantidad;
                }
            } else {
                if (isset($_SESSION['fruta'][$fruta])) {
                    $_SESSION['fruta'][$fruta] += $cantidad;
                }
            }

            if ($_SESSION['fruta'][$fruta] <= 0) {
                unset($_SESSION['fruta'][$fruta]);
            }

            $compraRealizada = mostrarTabla();

            include_once("compra.php");
            break;

        case ' Terminar ':
            $compraRealizada = mostrarTabla();
            include_once("despedida.php");
            session_destroy();
            exit;
    }
} else {

    if (!trim(isset($_REQUEST['cliente']))) {
        include_once("bienvenida.php");
    } else {
        if (!trim($_REQUEST['cliente']) == "") {
            $_SESSION["cliente"] = $_REQUEST["cliente"];
            $compraRealizada = "";
            include_once("compra.php");
        } else {
            include_once("bienvenida.php");
        }
    }
}

function mostrarTabla()
{
    if (isset($_SESSION['fruta'])) {

        $compraRealizada = "<p>Este es su pedido:</p>";
        $compraRealizada .= "<table style='border: 2px solid; margin-top:-15px;'>";

        foreach ($_SESSION['fruta'] as $fruta => $cantidad) {
            $compraRealizada .= "<tr>
                                    <td><b>$fruta</b> $cantidad</td>
                                </tr>";
        }

        $compraRealizada .= "</table>";
    } else {
        $compraRealizada = "";
    }

    return $compraRealizada;
}
