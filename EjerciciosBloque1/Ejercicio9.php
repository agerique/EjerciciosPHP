<?php
$ventas = 15000;
function calcularComision($ventas)
{
    switch ($ventas) {
        case $ventas < 10000:
            $comision = (5 * $ventas) / 100;
            return $comision;
            break;
        case $ventas < 20000:
            $comision = (8 * $ventas) / 100;
            return $comision;
            break;
        case $ventas < 40000:
            $comision = (10 * $ventas) / 100;
            return $comision;
            break;
        case $ventas >= 40000:
            $comision = (13 * $ventas) / 100;
            return $comision;
            break;
    }
}

$comision = calcularComision($ventas);
$total = $comision + $ventas;

echo("El importe de ventas es de: ".$ventas."€ con una comision de ".$total."€");