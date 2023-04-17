<?php
namespace Buscador;

use PDO;
use PDOException;
use Buscador\Conexao;

class SalvarDados
{
    private $conexao;

    public function __construct()
    {
        print "Iniciando \n";
        print var_dump( $this->Teste() );
        print "\nSaindo aqui";
    }
    
    public function adicionar()
    {
        $adicionar = new Adicionar();
        $adicionar->adicionando();
    }

    public function remover()
    {
        $remover = new Remover();
        $remover->removendo();
    }

    public function listar()
    {
        $listar = new Listar();
        $listar->listando();
    }
    
    public function Teste()
    {
        try {
            $this->conexao = new Conexao();
            $conexaoDb = $this->conexao->conectando();
            $salvarDados = $conexaoDb->$this->pdo->prepare($this->adicionar, $this->remover, $this->listar);
            $salvarDados->execute();

            print_r($salvarDados->fetchAll());
            print "Feito";
            return $this->conexao;
        } catch (PDOException $erro) {
            print "Erro: {$erro}";
        }
    }
}
