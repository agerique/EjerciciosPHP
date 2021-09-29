<?php
$numero = rand(1,50);
print($numero);
for($i=0;$numero!=1;$i++){
    if($numero%2==0){
        $numero = $numero/2;
    }else{
        $numero = ($numero*3)+1;
    }
    print(", ".$numero);
}
print(".");