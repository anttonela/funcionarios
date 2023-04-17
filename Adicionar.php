<?php

namespace Buscador;

class Adicionar 
{
    public $nome;
    public $idade;
    public $situacao;
    public $salario;
    public $cargo;
    
    public function adicionando() 
    {
        $adicionarFuncionario = "insert into Funcionarios(nome, idade, situacao, salario, cargo) values ($this->nome, $this->idade, $this->situacao, $this->salario, $this->cargo)";
    }
}