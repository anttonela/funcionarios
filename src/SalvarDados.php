<?php

namespace Buscador;

use PDO;
use PDOException;
use Buscador\Conexao;

class SalvarDados
{
    public function adicionar()
    {
        $new = new Adicionar();
        $adicionar = $new->adicionando();
        return $adicionar;
    }

    public function remover()
    {
        $new = new Remover();
        $remover = $new->removendo();
        return $remover;
    }

    public function listar()
    {
        $new = new Listar();
        $listar = $new->listando();
        return $listar;
    }
    
    public function Teste()
    {
        try {
            $conexao = new Conexao();
            $conexaoDb = $conexao->conectando();
            $sql = $this->adicionar();
           // die( "Aqui o código " .  var_dump($sql) );
            $conexaoDb->prepare( $sql );
            $conexaoDb->execute();

            print_r($salvarDados->fetchAll());
            print "Alteração salva!";
        } catch (PDOException $erro) {
            print "Erro: {$erro}";
        }
    }
}
