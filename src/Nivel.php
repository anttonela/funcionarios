<?php

namespace Buscador;

use Buscador\Banco;

class Nivel extends Banco
{
    public $idNivel;
    public $nivel;
    public $coluna;
    public $novoDado;
    public $numeroId;

    public function setInserir($idNivel, $nivel)
    {
        $this->idNivel = $idNivel;
        $this->nivel = $nivel;
    }

    public function setAlterar($coluna, $numeroId, $novoDado)
    {
        $this->coluna = $coluna;
        $this->numeroId = $numeroId;
        $this->novoDado = $novoDado;
    }

    public function setDeletar($idNivel)
    {
        $this->idNivel = $idNivel;
    }

    public function inserirNivel()
    {
        $inserir = "insert into Nivel (id_nivel, nivel_no) values ($this->idNivel, '$this->nivel');";
        $statement = $this->conexao->prepare($inserir);
        $statement->execute();
        print_r($statement->fetchAll());
    }

    public function alterarNivel()
    {
        $alterar = "update nivel set {$this->coluna} = '{$this->novoDado}' where id_nivel = {$this->numeroId};";
        $statement = $this->conexao->prepare($alterar);
        $statement->execute();
        print_r($statement->fetchAll());
    }

    public function deletarNivel()
    {
        $alterar = "delete from nivel where id_nivel = {$this->idNivel};";
        $statement = $this->conexao->prepare($alterar);
        $statement->execute();
        print_r($statement->fetchAll());
    }
}