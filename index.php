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

// Adicionar Funcionário 
/*
$salvar = new Funcionario();
$salvar->setDados('Carlos', 16);
$salvar->_inserirFuncionario();
*/

// Adicionar Nivel
/*
$salvar = new Nivel();
$salvar->setDados(7, 'Iniciante');
$salvar->_inserirNivel();
*/

// Adicionar Cargo
$salvar = new Cargo();
$salvar->setDados(1, 'Estagiário', 7);
$salvar->_inserirCargo();