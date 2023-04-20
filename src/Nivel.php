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

    public function setInserir(int $idNivel, string $nivel): void
    {
        $this->idNivel = $idNivel;
        $this->nivel = $nivel;
    }

    public function setAlterar(string $coluna, int $numeroId, string $novoDado): void
    {
        $this->coluna = $coluna;
        $this->numeroId = $numeroId;
        $this->novoDado = $novoDado;
    }

    public function setDeletar(int $idNivel): void
    {
        $this->idNivel = $idNivel;
    }

    public function inserirNivel(): array
    {
        $inserir = "insert into Nivel (id_nivel, nivel_no) values ($this->idNivel, '$this->nivel');";
        $executar = $this->executar($inserir);
        return $executar;
    }

    public function alterarNivel(): array
    {
        $alterar = "update nivel set {$this->coluna} = '{$this->novoDado}' where id_nivel = {$this->numeroId};";
        $executar = $this->executar($alterar);
        return $executar;
    }

    public function deletarNivel(): array
    {
        $deletar = "delete from nivel where id_nivel = {$this->idNivel};";
        $executar = $this->executar($deletar);
        return $executar;
    }
}