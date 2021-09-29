<?php
class Rectangulo
{
    public $anchura;
    public $altura;
    public function obtenerPerimetro($anchura, $altura)
    {
        $perimetro = $altura + $altura + $anchura + $anchura;
        echo $perimetro."<br>";
    }
    public function obtenerArea($anchura, $altura)
    {
        $area = $altura * $anchura;
        echo $area."<br>";
    }
}
function __construct(){
    $a = new Rectangulo;
    $a -> obtenerPerimetro(50,60);
    $a -> obtenerArea(50,60);
}
__construct();