<?php

namespace Buscador;

use PDO;
use PDOException;

class Conexao
{
    public function conectando()
    {
        try {
            $pdo = new PDO("pgsql:host=localhost; port=5432; dbname=funcionario", "postgres", "@postgres");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            print "\nConexão está funcionando!\n";
            //return $pdo;
        } catch (PDOException $erro) {
            //throw new PDOException($erro);
            print "\nConexão NÃO está funcionando! erro: \n{$erro}\n";
        }

        $select = "select * from funcionario";
        $statement = $pdo->prepare($select);
        $statement->execute();
        print_r($statement->fetchAll());

        //$pdo->prepare($listarTeste);
        $result = $pdo->exec($select);
        return $result;
    }
}