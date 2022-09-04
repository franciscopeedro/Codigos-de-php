<?php
class Conta{
    private string $titular;
    private string $cpf;
    private float $saldo=0;
    static int $NumeroDeContas=0;

    function __construct(string $nome,string $cpf)
    {
        $this->titular=$nome;
        $this->cpf=$cpf;
        $this->saldo=0;
        self ::$NumeroDeContas++;

    }

    function __destruct()
    {
        self ::$NumeroDeContas--;
    }


    function saca(Conta $conta,float $valor){
        if($this->saldo<$valor){
            echo "Saque indisponivel, pois não possui esse valor" . PHP_EOL;
            return;
        }
        $conta->saldo =$conta->saldo- $valor;
    }

    function deposita(Conta $conta,float $valor){
        if($valor<0){
            echo "Valor incorreto" . PHP_EOL;
            return;
        }
        $conta->saldo =$conta->saldo+ $valor;
    }

    function transfere(Conta $conta,Conta $conta2,float $valor){
        $conta->saca($conta,$valor);
        $conta2->deposita($conta2,$valor);
    }

};
    