<?php
// Questão 9 — Os quatro pilares juntos: Animal, Cachorro, Gato e Passaro.

class Animal
{
    public $nome;
    private $idade;

    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->setIdade($idade);
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        if ($idade >= 0) {
            $this->idade = $idade;
        } else {
            echo "A idade não pode ser negativa.\n";
        }
    }

    public function fazerBarulho()
    {
        echo "{$this->nome} faz um som.\n";
    }
}

class Cachorro extends Animal
{
    public function fazerBarulho()
    {
        echo "{$this->nome}: Au au!\n";
    }
}

class Gato extends Animal
{
    public function fazerBarulho()
    {
        echo "{$this->nome}: Miau!\n";
    }
}

class Passaro extends Animal
{
    public function fazerBarulho()
    {
        echo "{$this->nome}: Piu piu!\n";
    }
}

$rex = new Cachorro("Rex", 3);
$mimi = new Gato("Mimi", 2);
$pipoca = new Passaro("Pipoca", 1);

echo "=== ZOOLÓGICO ===\n";
$rex->fazerBarulho();
$mimi->fazerBarulho();
$pipoca->fazerBarulho();

echo "Idade do Rex: " . $rex->getIdade() . " ano(s).\n";
$rex->setIdade(-1);
