<?php 

class aluno{

    public string $nome;
    public string $matricula;
    public float $media;


    function __construct(string $nomealuno, string $matriculaluno)
    {
        $nome = $nomealuno;
        $matricula = $matriculaluno;        
    }
};

$aluno01=  new aluno("Pedro","123");
$aluno02=  new aluno("Andreia","345");
$aluno03=  new aluno("Julia","69");

$aluno01->media = 9.5;
$aluno02->media = 3.1;
$aluno01->media = 8.9;

echo "-------------------------------------------------------------------------------------------------" . PHP_EOL;

if($aluno01->media > $aluno02->media && $aluno01->media > $aluno03->media ){
    echo "$aluno01->nome eh o aluno(a) com a maior media, $aluno01->media"; 
    return;
}

if($aluno02->media > $aluno01->media && $aluno02->media > $aluno03->media ){
    echo "$aluno02->nome eh o aluno(a) com a maior media, $aluno02->media";
    return; 
}

if($aluno03->media > $aluno01->media && $aluno03->media > $aluno02->media ){
    echo "$aluno03->nome eh o aluno(a) com a maior media, $aluno03->media"; 
    return;
}

?>