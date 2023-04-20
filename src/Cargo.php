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

    public function setInserir(int $idCargo, string $cargo, int $idNivel): void
    {
        $this->idCargo = $idCargo;
        $this->cargo = $cargo;
        $this->idNivel = $idNivel;
    }

    public function setAlterar(string $coluna, int $numeroId, string $novoDado): void
    {
        $this->coluna = $coluna;
        $this->numeroId = $numeroId;
        $this->novoDado = $novoDado;
    }

    public function setDeletar(int $idCargo): void
    {
        $this->idCargo = $idCargo;
    }

    public function inserirCargo(): array
    {
        $inserir = "insert into cargo (id_cargo, cargo, id_nivel) values ({$this->idCargo},'{$this->cargo}', {$this->idNivel});";
        $executar = $this->executar($inserir);
        return $executar;
    }

    public function alterarCargo()
    {
        $alterar = "update cargo set {$this->coluna} = '{$this->novoDado}' where id_cargo = {$this->numeroId};";
        $executar = $this->executar($alterar);
        return $executar;
    }

    public function deletarCargo()
    {
        $deletar = "delete from cargo where id_cargo = {$this->idCargo};";
        $executar = $this->executar($deletar);
        return $executar;
    }
}