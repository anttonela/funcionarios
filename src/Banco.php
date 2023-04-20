<?php

namespace Buscador;

class Banco
{
    public $conexao;

    public function __construct()
    {
        $newconexao = new Conexao();
        $this->conexao = $newconexao->conectando();
    }
}
