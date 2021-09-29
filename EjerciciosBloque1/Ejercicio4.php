<?php
$frase = "ana lava lana ";
$separar = explode(" ", strtolower($frase));
$nuevo = "";
foreach($separar as $palabra)
{
    trim($palabra);
    $nuevo .= $palabra; 
}

if($nuevo == strrev($nuevo))
{
    echo "La frase es palíndroma";
}
else {
    echo "La frase no es palíndroma";
}