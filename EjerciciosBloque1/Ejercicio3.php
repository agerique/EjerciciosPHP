<?php
$edad = rand(0, 100);
echo("La edad es de ".$edad." años.<br>");

switch ($edad) {
    case $edad < 10:
        echo "Se encuentra entre 0 y 9 años";
        break;
    case $edad < 20:
        echo "Se encuentra entre 10 y 19 años";
        break;
    case $edad < 30:
        echo "Se encuentra entre 20 y 29 años";
        break;
    case $edad < 40:
        echo "Se encuentra entre 30 y 39 años";
        break;
    case $edad < 50:
        echo "Se encuentra entre 40 y 49 años";
        break;
    case $edad < 60:
        echo "Se encuentra entre 50 y 59 años";
        break;
    case $edad < 70:
        echo "Se encuentra entre 60 y 69 años";
        break;
    case $edad < 80:
        echo "Se encuentra entre 70 y 79 años";
        break;
    case $edad < 90:
        echo "Se encuentra entre 80 y 89 años";
        break;
    case $edad <= 100:
        echo "Se encuentra entre 90 y 100 años";
        break;
}
