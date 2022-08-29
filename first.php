<?php

class Conta
{
    public $cpfTitular;
    public $nomeTitular;
    public $saldo = 100;

    public function sacar(float $valorASacar)
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
        }else {
            $this->saldo -= $valorASacar;
        }
    }
}

// USAR NO CMD;
// > $umaconta = new Conta();
// >$umaconta->saldo=10000;
// > var_dump($umaconta);