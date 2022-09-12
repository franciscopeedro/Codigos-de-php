<?php 
class Aluno{

    public string $nome;
    public float $media;
};

$aluno01 = new Aluno();
$aluno01->media = 9.5;


if(7 <= $aluno01->media){
    echo "Aprovado com media $aluno01->media" . PHP_EOL;
}else if ($aluno01->media < 7 && $aluno01->media > 4){
    echo "Vai fazer a Prova Final pois sua media é $aluno01->media ". PHP_EOL;
}else{
    echo "Reprovado com media $aluno01->media" .PHP_EOL;
}

?>