<?php

namespace Buscador;

use Buscador\Banco;

class Funcionario extends Banco
{
    public $nome;
    public $idade;
    public $coluna;
    public $numeroId;
    public $novoDado;
    public $idFuncionario;

    public function setInserir(string $nome, int $idade): void
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function setAlterar(string $coluna, int $numeroId, string $novoDado): void
    {
        $this->coluna = $coluna;
        $this->numeroId = $numeroId;
        $this->novoDado = $novoDado;
    }

    public function setDeletar(int $idFuncionario): void
    {
        $this->idFuncionario = $idFuncionario;
    }

    public function inserirFuncionario(): array
    {
        $inserir = "insert into funcionario (nome, idade) values ('{$this->nome}', {$this->idade});";
        $executar = $this->executar($inserir);
        return $executar;
    }

    public function alterarFuncionario(): array
    {
        $alterar = "update funcionario set $this->coluna = $this->novoDado where id = $this->numeroId;";
        $executar = $this->executar($alterar);
        return $executar;
    }

    public function deletarFuncionario(): array
    {
        $deletar = "delete from funcionario where id = {$this->idFuncionario};";
        $executar = $this->executar($deletar);
        return $executar;
    }
}