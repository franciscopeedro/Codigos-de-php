<?php
$a = 100;
$b = 10;

function soma(int $x,int $y)
{
echo $x+$y . PHP_EOL;
}

function subtracao(int $x,int $y)
{
echo $x-$y . PHP_EOL;
}

function multiplicação(int $x,int $y)
{
echo $x*$y . PHP_EOL;
}

function divisao(int $x,int $y)
{
echo $x/$y . PHP_EOL;
}

function resto(int $x,int $y)
{
echo $x%$y . PHP_EOL;
}

function potencia(int $x,int $y)
{
echo $x**$y . PHP_EOL;
}

soma($a,$b);

subtracao($a,$b);
multiplicação($a,$b);
divisao($a,$b);
resto($a,$b);
potencia($a,$b);