<?php

class ContaBancaria
{
    private $saldo;

    public function __construct($saldoInicial = 0)
    {
        if ($saldoInicial < 0) {
            $this->saldo = 0;
        } else {
            $this->saldo = $saldoInicial;
        }
    }

    public function depositar($valor)
    {
        if ($valor <= 0) {
            echo "O depósito precisa ser maior que zero.\n";
            return;
        }

        $this->saldo += $valor;
        echo "Depósito realizado com sucesso.\n";
    }

    public function sacar($valor)
    {
        if ($valor <= 0) {
            echo "O saque precisa ser maior que zero.\n";
        } elseif ($valor > $this->saldo) {
            echo "Saldo insuficiente para realizar o saque.\n";
        } else {
            $this->saldo -= $valor;
            echo "Saque realizado com sucesso.\n";
        }
    }

    public function getSaldo()
    {
        return $this->saldo;
    }
}

$conta = new ContaBancaria(200);

echo "=== CONTA BANCÁRIA ===\n";
echo "Saldo inicial: R$ " . number_format($conta->getSaldo(), 2, ',', '.') . "\n";
$conta->depositar(100);
$conta->sacar(50);
$conta->sacar(500);
echo "Saldo final: R$ " . number_format($conta->getSaldo(), 2, ',', '.') . "\n";
