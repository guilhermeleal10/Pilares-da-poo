"<?php

class Livro
{
    public $titulo;
    public $autor;
    public $ano;
    public $editora;

    public function __construct($titulo, $autor, $ano, $editora)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ano = $ano;
        $this->editora = $editora;
    }

    public function exibirFicha()
    {
        echo "Título: {$this->titulo}\n";
        echo "Autor: {$this->autor}\n";
        echo "Ano: {$this->ano}\n";
        echo "Editora: {$this->editora}\n";
    }
}

$livro = new Livro("O Pequeno Príncipe", "Antoine de Saint-Exupéry", 1943, "Reynal & Hitchcock");

echo "=== FICHA DO LIVRO ===\n";
$livro->exibirFicha();
