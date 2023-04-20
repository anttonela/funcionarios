<?php

namespace Buscador;

class Cargo extends Banco 
{
    public $idCargo;
    public $cargo;
    public $idNivel;
    public $coluna;
    public $numeroId;
    public $novoDado;

    public function setInserir($idCargo, $cargo, $idNivel)
    {
        $this->idCargo = $idCargo;
        $this->cargo = $cargo;
        $this->idNivel = $idNivel;
    }

    public function setAlterar($coluna, $numeroId, $novoDado)
    {
        $this->coluna = $coluna;
        $this->numeroId = $numeroId;
        $this->novoDado = $novoDado;
    }

    public function setDeletar($idCargo)
    {
        $this->idCargo = $idCargo;
    }

    public function inserirCargo()
    {
        $inserir = "insert into cargo (id_cargo, cargo, id_nivel) values ({$this->idCargo},'{$this->cargo}', {$this->idNivel});";
        $statement = $this->conexao->prepare($inserir);
        $statement->execute();
        print_r($statement->fetchAll());
    }

    public function alterarCargo()
    {
        $alterar = "update cargo set {$this->coluna} = '{$this->novoDado}' where id_cargo = {$this->numeroId};";
        $statement = $this->conexao->prepare($alterar);
        $statement->execute();
        print_r($statement->fetchAll());
    }

    public function deletarCargo()
    {
        $alterar = "delete from cargo where id_cargo = {$this->idCargo};";
        $statement = $this->conexao->prepare($alterar);
        $statement->execute();
        print_r($statement->fetchAll());
    }
}