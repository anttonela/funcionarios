<?php
namespace Buscador;

use PDO;
use PDOException;

class Conexao
{
    public $user = "postgres";
    public $senha = "@postgres";

    public function conectando()
    {
        try {
            $pdo = new PDO("pgsql:host=localhost; port=5432; dbname=funcionario" . $this->user . $this->senha);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            print "\nFuncionando \n";
            return $pdo;
        } catch (PDOException $erro) {
            print "\nNão está funcionando! erro: {$erro}\n";
        }
    }
}