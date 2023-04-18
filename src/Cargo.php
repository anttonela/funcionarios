<?php

namespace Buscador;

use Buscador\Conexao;

class Cargo extends Banco 
{
    public function _inserirCargo()
    {
    $idCargo = $this->estagiario;
    $cargo = 'Estagiário';
    $idNivel = $this->iniciante;

    $inserir = "insert into Cargo (cargo, id_nivel) values ({$idCargo},'{$cargo}', {$idNivel});";
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