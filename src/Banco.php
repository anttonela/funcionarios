<?php

namespace Buscador;

use PDO;
use PDOException;

class Banco
{
    public $conexao;

    public function __construct()
    {
        $newconexao = new Conexao();
        $this->conexao = $newconexao->conectando();
    }


    public function inserirFuncionario()
    {

    }

    public function inserirNivel()
    {

    }

    public function inserirCargo()
    {

    }
}
