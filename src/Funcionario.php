<?php

namespace Buscador;

use Buscador\Banco;

class Funcionario extends Banco
{
    public $nome;
    public $idade;

    public function setDados($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function _inserirFuncionario()
    {
        $inserir = "insert into Funcionario (nome, idade) values ('{$this->nome}', {$this->idade});";
        $statement = $this->conexao->prepare($inserir);
        $statement->execute();
        print_r($statement->fetchAll());
    }
}