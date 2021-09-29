<?php
$pisos = $_GET ['pisos'];
$puertas = $_GET ['puertas'];
for($i=1;$i<=$pisos;$i++){
    print("<br>");
    for($x=1;$x<=$puertas;$x++){
        print("Piso ".$i." puerta ".$x);
        if($x<$puertas){
            print("-----");
        }
    }
}
?>