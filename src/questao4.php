<?php
// Questão 4 — Encapsulamento: salário privado com getter e setter.

class Funcionario
{
    private $salario;

    public function __construct($salario)
    {
        $this->setSalario($salario);
    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function setSalario($salario)
    {
        if ($salario < 0) {
            echo "Erro: o salário não pode ser negativo.\n";
            return;
        }

        $this->salario = $salario;
    }
}

$funcionario = new Funcionario(2500);

echo "=== FOLHA DE PAGAMENTO ===\n";
echo "Salário atual: R$ " . number_format($funcionario->getSalario(), 2, ',', '.') . "\n";

$funcionario->setSalario(2800);
echo "Salário atualizado: R$ " . number_format($funcionario->getSalario(), 2, ',', '.') . "\n";

$funcionario->setSalario(-100);
