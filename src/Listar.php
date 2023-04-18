<?php

namespace Buscador;

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