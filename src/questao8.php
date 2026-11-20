<?php

class Funcionario
{
    public $nome;
    public $salario;

    public function __construct($nome, $salario)
    {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function calcularBonus()
    {
        return 0;
    }

    public function exibirBonus()
    {
        echo "{$this->nome} - Bônus: R$ "
            . number_format($this->calcularBonus(), 2, ',', '.') . "\n";
    }
}

class Vendedor extends Funcionario
{
    public function calcularBonus()
    {
        return $this->salario * 0.10;
    }
}

class Gerente extends Funcionario
{
    public function calcularBonus()
    {
        return $this->salario * 0.20;
    }
}

$vendedor = new Vendedor("Carlos", 3000);
$gerente = new Gerente("Ana", 5000);

echo "=== FOLHA DE PAGAMENTO COM BÔNUS ===\n";
$vendedor->exibirBonus();
$gerente->exibirBonus();
