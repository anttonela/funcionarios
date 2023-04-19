<?php

namespace Buscador;

use Buscador\Conexao;

class Cargo extends Banco 
{
    public $idCargo;
    public $cargo;
    public $idNivel;

    public function setDados($idCargo, $cargo, $idNivel)
    {
        $this->idCargo = $idCargo;
        $this->cargo = $cargo;
        $this->idNivel = $idNivel;
    }

    public function _inserirCargo()
    {
        $inserir = "insert into cargo (id_cargo, cargo, id_nivel) values ({$this->idCargo},'{$this->cargo}', {$this->idNivel});";
        $statement = $this->conexao->prepare($inserir);
        $statement->execute();
        print_r($statement->fetchAll());
    }
}