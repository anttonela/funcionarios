<?php

namespace Buscador;

use Buscador\Banco;

class Nivel extends Banco 
{
    public function _inserirNivel()
    {
    $nivel = 'Avançado';

    $inserir = "insert into Nivel (nivel) values ('$nivel');";
    $statement = $this->conexao->prepare($inserir);
    $statement->execute();
    print_r($statement->fetchAll());
    }
}
