<?php
// Questão 7 — Polimorfismo: cada forma calcula sua área de maneira diferente.

class Forma
{
    public function calcularArea()
    {
        return 0;
    }
}

class Retangulo extends Forma
{
    public $largura;
    public $altura;

    public function __construct($largura, $altura)
    {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function calcularArea()
    {
        return $this->largura * $this->altura;
    }
}

class Circulo extends Forma
{
    public $raio;

    public function __construct($raio)
    {
        $this->raio = $raio;
    }

    public function calcularArea()
    {
        return pi() * ($this->raio * $this->raio);
    }
}

$retangulo = new Retangulo(5, 3);
$circulo = new Circulo(2);

echo "=== CALCULADORA DE ÁREAS ===\n";
echo "Área do retângulo: " . number_format($retangulo->calcularArea(), 2, ',', '.') . "\n";
echo "Área do círculo: " . number_format($circulo->calcularArea(), 2, ',', '.') . "\n";
