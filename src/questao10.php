<?php

class Usuario
{
    public $nome;
    private $senha;

    public function __construct($nome, $senha)
    {
        $this->nome = $nome;
        $this->setSenha($senha);
    }

    public function setSenha($senha)
    {
        if (strlen($senha) >= 8) {
            $this->senha = password_hash($senha, PASSWORD_DEFAULT);
        } else {
            echo "A senha precisa ter pelo menos 8 caracteres.\n";
        }
    }

    public function verificarSenha($senha)
    {
        return password_verify($senha, $this->senha);
    }

    public function listarPermissoes()
    {
        return array();
    }

    public function exibirPermissoes()
    {
        echo "Usuário: {$this->nome}\n";
        echo "Permissões: " . implode(", ", $this->listarPermissoes()) . "\n";
    }
}

class Admin extends Usuario
{
    public function listarPermissoes()
    {
        return array("cadastrar", "editar", "excluir", "visualizar");
    }
}

class Cliente extends Usuario
{
    public function listarPermissoes()
    {
        return array("visualizar", "realizar compra", "consultar pedidos");
    }
}

$admin = new Admin("Administrador", "admin1234");
$cliente = new Cliente("João", "cliente123");

echo "=== SISTEMA DE USUÁRIOS ===\n";
$admin->exibirPermissoes();
echo "Senha do administrador correta? ";
echo $admin->verificarSenha("admin1234") ? "Sim\n\n" : "Não\n\n";

$cliente->exibirPermissoes();
echo "Senha do cliente correta? ";
echo $cliente->verificarSenha("cliente123") ? "Sim\n" : "Não\n";
