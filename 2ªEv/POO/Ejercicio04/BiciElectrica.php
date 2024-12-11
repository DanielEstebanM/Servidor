<?php

class BiciElectrica
{
    private $id; // Identificador de la bicicleta (entero)
    private $coordx; // Coordenada X (entero)
    private $coordy; // Coordenada Y (entero)
    private $bateria; // Carga de la batería en tanto por ciento (entero)
    private $operativa; // Estado de la bicleta ( true operativa- false no disponible)

    public function __construct($id, $coordx, $coordy, $bateria, $operativa)
    {
        $this -> id = $id;
        $this -> coordx = $coordx;
        $this -> coordy = $coordy;
        $this -> bateria = $bateria;
        $this -> operativa = $operativa;
    }

    public function __get($atributo)
    {
        return $this -> $atributo;
    }

    public function __set($atributo, $valor)
    {
        if (property_exists($this, $atributo)) {
            $this -> $atributo = $valor;
        }
    }

    public function __toString() 
    {
        return " Identificador: $this -> id Batería $this -> bateria";
    }

    public function distancia($x, $y)
    {   //sqrt -> calcula la raíz cuadrada
        //pow -> calcula el cuadrado del número
        return sqrt(pow($x - $this -> coordx, 2) + pow($y - $this -> coordy, 2));
    }

}

?>