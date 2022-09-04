<?php

require_once "Conta.php";

$conta01 = new Conta("Pedro","123-456-789-01");
$conta02 = new Conta("Lucas","123-456-229-02");

$conta01->deposita($conta01,1000);
$conta02->deposita($conta02,10);

var_dump($conta01);
var_dump($conta02);

$conta01->transfere($conta01,$conta02,280);

var_dump($conta01);
var_dump($conta02);

