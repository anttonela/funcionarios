<?php

namespace Buscador;

use Buscador\Banco;

class Nivel extends Banco
{
    public $idNivel;
    public $nivel;

    public function setDados($idNivel, $nivel)
    {
        $this->idNivel = $idNivel;
        $this->nivel = $nivel;
    }

    public function _inserirNivel()
    {
        $inserir = "insert into Nivel (id_nivel, nivel) values ($this->idNivel, '$this->nivel');";
        $statement = $this->conexao->prepare($inserir);
        $statement->execute();
        print_r($statement->fetchAll());
    }
}