<?php

namespace Buscador;

class Banco
{
    public $conexao;
    public $newConexao;

    public function __construct()
    {
        $this->newConexao = new Conexao();
        $this->conexao = $this->newConexao->conectando();
    }

    public function executar(string $query): array
    {
        $statement = $this->conexao->prepare($query);
        $statement->execute();
        return $statement->fetchAll();
    }
}
