<?php

class Produto
{
    public $nome;
    public $preco;

    public function __construct($nome, $preco)
    {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function aplicarDesconto($percentual)
    {
        if ($percentual < 0 || $percentual > 100) {
            echo "Desconto inválido. Informe um valor entre 0 e 100%.\n";
            return;
        }

        $desconto = $this->preco * ($percentual / 100);
        $precoFinal = $this->preco - $desconto;

        echo "Produto: {$this->nome}\n";
        echo "Preço original: R$ " . number_format($this->preco, 2, ',', '.') . "\n";
        echo "Preço com desconto: R$ " . number_format($precoFinal, 2, ',', '.') . "\n";
    }
}

$produto = new Produto("Teclado", 150.00);

echo "=== CATÁLOGO DE PRODUTOS ===\n";
$produto->aplicarDesconto(10);
