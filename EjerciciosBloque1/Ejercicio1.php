<?php
$pisos = rand(1,10);
$puertas = rand(1,5);

for($i=1;$i<=$pisos;$i++){
    print("<br>");
    for($x=1;$x<=$puertas;$x++){
        print("Piso ".$i." puerta ".$x);
        if($x<$puertas){
            print("-----");
        }
    }
}
