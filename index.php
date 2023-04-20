<?php

require 'vendor/autoload.php';

use Buscador\Cargo;
use Buscador\Conexao;
use Buscador\Funcionario;
use Buscador\Listar;
use Buscador\Nivel;

//               FUNCIONÁRIO

// Adicionar Funcionário - Nome e idade
/*
$salvar = new Funcionario();
$salvar->setInserir('Carlos', 18);
$salvar->inserirFuncionario();
*/

// Alterar Funcionário - Coluna que deseja alterar, id do funcionário e o novo dado
/*
$salvar = new Funcionario();
$salvar->setAlterar('idade', 3, 20);
$salvar->alterarFuncionario();
*/

// Deletar Funcionário - ID do funcionário que deseja deletar
/*
$salvar = new Funcionario();
$salvar->setDeletar(4);
$salvar->deletarFuncionario();
*/

// Select para ver tudo
/*
$salvar = new Funcionario();
print_r($salvar->selectFuncionario());
*/


//                  NÍVEL

// Adicionar Nivel - id do nivel e o nivel
/*
$salvar = new Nivel();
$salvar->setInserir(9, 'Iniciante');
$salvar->inserirNivel();
*/

// Alterar Nível - Coluna que deseja alterar, id do nivel e o novo dado
/*
$salvar = new Nivel();
$salvar->setAlterar('nivel_no', 7, 'Iniciante');
$salvar->alterarNivel();
*/

// Deletar Nível - ID do nível que deseja deletar
/*
$salvar = new Nivel();
$salvar->setDeletar(7);
$salvar->deletarNivel();
*/

// Select para ver tudo
/*
$salvar = new Nivel();
print_r($salvar->selectNivel());
*/


//               CARGO

// Adicionar Cargo - id do cargo, cargo, e id do nivel
/*
$salvar = new Cargo();
$salvar->setInserir(4, 'Avançado', 4);
$salvar->inserirCargo();
*/

// Alterar Cargo - Coluna que deseja alterar, id do cargo e o novo dado
/*
$salvar = new Cargo();
$salvar->setAlterar('id_nivel', 2, '7');
$teste = $salvar->alterarCargo();
print_r($teste);
*/

// Deletar Cargo - ID do cargo que deseja deletar
/*
$salvar = new Cargo();
$salvar->setDeletar(1);
$salvar->deletarCargo();
*/

// Select para ver tudo
/*
$salvar = new Cargo();
print_r($salvar->selectCargo());
*/
