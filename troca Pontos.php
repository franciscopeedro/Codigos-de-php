<?php 

class Ponto
{    
    public float $x;
    public float $y;
};

$a = new Ponto();
$b = new Ponto();

$a->x = 22;
$a->y = 14;

$b->x = 1;
$b->y = 2;

echo "Os pontos iniciais de a e b são," . PHP_EOL; 
echo "A = ($a->x:$a->y);" . PHP_EOL;
echo "B = ($b->x:$b->y)" . PHP_EOL;

$aux = new Ponto();

$aux->x = $a->x;
$aux->y = $a->y;

$a->x = $b->x;
$a->y = $b->y;

$b->x = $aux->x;
$b->y = $aux->y;

echo "Os Pontos trocados," .PHP_EOL;
echo "A = ($a->x:$a->y);" . PHP_EOL;
echo "B = ($b->x:$b->y)" . PHP_EOL;
?>