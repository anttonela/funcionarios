<?php

namespace Buscador;

class Adicionar extends Banco
{
    public function _inserirFuncionario() 
    {   
        $nome = 'Felipe';
        $idade = 14;

        $conexao = new Conexao();
        $pdo = $conexao->conectando();

        $inserir = "insert into Funcionario (nome, idade) values ('$nome', $idade);";
        $statement = $this->conexao->prepare($inserir);
        $statement->execute();
        print_r($statement->fetchAll());
    }
}