<?php
namespace Buscador;

use PDO;
use PDOException;
use Buscador\Conexao;

class SalvarDados
{
    private $conexao;

    public function __invoke($x)
    {
        print "Método mágico de execução";
    }

    public function __construct()
    {
        print "Iniciando \n";
        print var_dump( $this->Teste() );
        print "\nSaindo aqui";
    }

    public function Teste()
    {
        try {
            // $salvarDados = new SalvarDados();
            $this->conexao = new Conexao();
            // $conexao->conectando();
            // $salvarDados = $pdo->prepare($this->adicionar, $this->remover, $this->listar);
            // $salvarDados->execute();

            // print_r($salvarDados->fetchAll());
            // print "Feito";
            return $this->conexao;
        } catch (PDOException $erro) {
            print "Erro: {$erro}";
        }
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
    
}
