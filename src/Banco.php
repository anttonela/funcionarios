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
        $nome = 'Kleber';
        $idade = 32;
        die;
    }

    public function inserirCargo()
    {

    }

    public function inserirNivel()
    {
        
    }
}