<?php

$palavra = "pedro";
$letra = "b";

for($i=0;$i<strlen($palavra);$i++){
    if($letra==$palavra[$i]){
        echo "A letra $letra está na palavra '$palavra'! " . PHP_EOL;
        return;
    }
}
 
echo "A letra $letra não está na palavra '$palavra'! " . PHP_EOL;


?>