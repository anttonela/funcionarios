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

/*
    public function getCargo()
    {
        $id_cargo = ''; // Inicia uma variável que vai ser usada no futuro
        $sql = "SELECT id_cargo, no_cargo, id_nivel FROM Cargo where no_cargo='$idCargo' "; // Estabeleço  a consulta no banco
        $query = $this->conexao->query($sql); // Conecta no banco e busca o resultado da consulta

        foreach ($query as $registro) { // loop em todos os registros encontrados
            $id_cargo = $registro['id_cargo']; // $registro possui os dados do registro, vou pegar somente o id_cargo
            break; // Para sair do loop
        }

        return $id_cargo; // Retornar o id_cargo para quem pediu
    }
}
*/