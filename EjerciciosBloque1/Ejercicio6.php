<?php
$potencia = rand(1, 5);
$cantidad = rand(20, 100);
print("Potencia: " . $potencia . "<br>Cantidad: " . $cantidad . "<br>");
for ($i = 1; $i < $cantidad; $i++) {
    $resul = pow($i, $potencia);
    if ($resul < $cantidad) {
        print($i . " - " . $resul . "<br>");
    }
}
