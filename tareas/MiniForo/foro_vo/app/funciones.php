<?php
function usuarioOk($usuario, $contraseña): bool
{

   if (strlen($usuario) >= 8) {

      if (strtolower($contraseña) == strrev(strtolower($usuario))) {
         return $usuario;
      } else return false;
   } else return false;
}



?>
