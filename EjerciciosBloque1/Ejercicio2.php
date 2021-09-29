<?php
$numeros = [rand(1,50),rand(1,50),rand(1,50)];
for($i=0;$i<sizeof($numeros);$i++){
    print("Numero ".($i+1)." = ".$numeros[$i]."<br>");
}
$mayor = 0;
for($i=0;$i<sizeof($numeros);$i++){
    if($numeros[$i]>$mayor){
        $mayor = $numeros[$i];
    }
}

print($mayor." es el número mayor.");