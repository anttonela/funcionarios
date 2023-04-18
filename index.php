<?php

require 'vendor/autoload.php';

use Buscador\Adicionar;
use Buscador\Cargo;
use Buscador\Conexao;
use Buscador\Funcionario;
use Buscador\Listar;
use Buscador\Nivel;
use Buscador\SalvarDados;
use Buscador\Remover;

/*
$salvar = new Funcionario();
$salvar->_inserirFuncionario();

$salvar = new Remover();
$salvar->removendo();

$salvar = new Cargo();
$salvar->_inserirCargo();
*/

$salvar = new Adicionar();
$salvar->_inserirFuncionario();