<?php

namespace Buscador;

use PDO;
use PDOException;


class Conexao
{
    public function conectando(): pdo
    {
        try {
            $pdo = new PDO("pgsql:host=localhost; port=5432; dbname=banco", "postgres", "@postgres");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            print "Conexão está funcionando!\n";
            return $pdo;
        } catch (PDOException $erro) {
            print "Conexão NÃO está funcionando! erro: \n{$erro}\n";
        }
    }
}