<?php

$palavra = "paaaralelepipedo";
$letra = "a";
$contador = 0;

for($i=0;$i<strlen($palavra);$i++){
    if($letra==$palavra[$i]){
        $contador++;
    }
}
 
echo "Tem $contador '$letra' na palavra '$palavra'! " . PHP_EOL;


?>