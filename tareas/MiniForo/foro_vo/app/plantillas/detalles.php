<div>
<b> Detalles:</b><br>
<table>
<tr><td>Longitud:          </td><td><?= strlen($_REQUEST['comentario']) ?></td></tr>
<tr><td>Nº de palabras:    </td><td><?= trim(str_word_count($_REQUEST['comentario']))?></td></tr>
<tr><td>Letra + repetida:  </td><td><?= letraMasRepetida($_REQUEST['comentario']) ?></td></tr>
<tr><td>Palabra + repetida:</td><td><?= palabraMasRepetida($_REQUEST['comentario']) ?></td></tr>
</table>
</div>

<?php

function letraMasRepetida($texto)
{
   $texto = strtolower(str_replace(' ', '', $texto)); // Convertimos a minúsculas y quitamos espacios
   $frecuencia = array_count_values(str_split($texto)); // Contamos la frecuencia de cada letra
   arsort($frecuencia); // Ordenamos de mayor a menor frecuencia
   return array_key_first($frecuencia); // Devolvemos la letra con mayor frecuencia
}

function palabraMasRepetida($texto)
{
   $texto = strtolower($texto); // Convertimos a minúsculas
   $palabras = str_word_count($texto, 1); // Obtenemos un array de palabras
   $frecuencia = array_count_values($palabras); // Contamos la frecuencia de cada palabra
   arsort($frecuencia); // Ordenamos de mayor a menor frecuencia
   return array_key_first($frecuencia); // Devolvemos la palabra con mayor frecuencia
}

?>
