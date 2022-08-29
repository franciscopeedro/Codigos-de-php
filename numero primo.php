<?php

$n=70; //Coloque qualquer numero maior q zero para saber se é primo!!

function primo(int $n)
{
    $cont=0;
    if($n==2){
        echo "eh primo";
    }
    else{
        for($i=1;$i<=$n;$i++){
            if($n%$i==0){
                $cont++;
            }
        }
        if($cont==2){
            echo "Eh primo pois so tem $cont divisores!".PHP_EOL;
        }
        else{
            echo "Nao eh primo, pois tem $cont divisores e para ser primo so pode ter 2!!" .PHP_EOL;
        }
    }
}

primo($n);