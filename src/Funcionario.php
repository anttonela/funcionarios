<?php

namespace Buscador;

use Buscador\Banco;

class Funcionario extends Banco 
{
    public function _inserirFuncionario()
    {
    $funcionario = new Funcionario();
    $funcionario->_inserirFuncionario();

    $inserir = "insert into Funcionario (nome, idade) values ('{$funcionario->$this->nome}', {$funcionario->$this->idade});";
    $statement = $this->conexao->prepare($inserir);
    $statement->execute();
    print_r($statement->fetchAll());
    }
}
/*
    public function buscarCargo()
    {
        $cargo = new \Buscador\Cargo();
        return $cargo->getCargo();
    }
    */

    /*
    Listar

class Listar
{   
    public function listando() 
    {
        $conexao = new Conexao();
        $pdo = $conexao->conectando();

        $listar= "select * from Funcionario;";
        $statement = $pdo->prepare($listar);
        $statement->execute();
        print_r($statement->fetchAll());
        $resultado = $pdo->exec($listar);
        return $resultado;
    }
}
*/