<?php

namespace Buscador;

use Buscador\Banco;

class Funcionario extends Banco
{
    public $nome;
    public $idade;
    public $coluna;
    public $numeroId;
    public $novoDado;
    public $idFuncionario;

    public function setInserir($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function setAlterar($coluna, $numeroId, $novoDado)
    {
        $this->coluna = $coluna;
        $this->numeroId = $numeroId;
        $this->novoDado = $novoDado;
    }

    public function setDeletar($idFuncionario)
    {
        $this->idFuncionario = $idFuncionario;
    }

    public function inserirFuncionario()
    {
        $inserir = "insert into funcionario (nome, idade) values ('{$this->nome}', {$this->idade});";
        $statement = $this->conexao->prepare($inserir);
        $statement->execute();
        print_r($statement->fetchAll());
    }

    public function alterarFuncionario()
    {
        $alterar = "update funcionario set $this->coluna = $this->novoDado where id = $this->numeroId;";
        $statement = $this->conexao->prepare($alterar);
        $statement->execute();
        print_r($statement->fetchAll());
    }

    public function deletarFuncionario()
    {
        $alterar = "delete from funcionario where id = {$this->idFuncionario};";
        $statement = $this->conexao->prepare($alterar);
        $statement->execute();
        print_r($statement->fetchAll());
    }
}