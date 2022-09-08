<?php

$NumeroSegundos = 3661;
$horas=0;
$minutos=0;
$segundos=0;

$resto=0;

$horas= $NumeroSegundos/3600;
$resto=$NumeroSegundos%3600;
$minutos= $resto/60;
$resto = $resto%60;
$segundos = $resto;

echo "$horas:$minutos:$segundos"



?>