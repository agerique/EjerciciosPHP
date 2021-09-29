<?php
$edad = rand(0, 100);
$altura = rand(100, 200);
$acompañado = rand(0, 1);
$puede = false;
if ($acompañado == 0) {
    $acom = "esta acompañado";
} else {
    $acom = "no esta acompañado";
}
echo ("Edad: " . $edad . " años, altura: " . $altura . "cm y " . $acom . "<br>");

if ($edad > 10 || $altura > 120) {
    $puede = true;
} else if ($edad > 6 && $acom == "esta acompañado") {
    $puede = true;
}

if ($puede) {
    echo ("Puede subir a la atracción.");
} else {
    echo ("No puede subir a la atracción.");
}
