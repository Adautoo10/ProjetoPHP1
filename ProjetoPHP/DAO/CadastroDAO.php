<?php

namespace ProjetoPHP\DAO;

use ProjetoPHP\Model\CadastroModel;

use \PDO;

class CadastroDAO extends DAO
{
   
    public function __construct()
    {
        
        parent::__construct();       
    }


    
    public function selectByEmailAndSenha($nome, $email, $senha)
    {
        $sql = "SELECT * FROM cadastro WHERE nome = ? email = ? AND senha = sha1(?) ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $nome);
        $stmt->bindValue(2, $email);
        $stmt->bindValue(3, $senha);
        $stmt->execute();

        return $stmt->fetchObject("ProjetoPHP\Model\CadastroModel"); // Retornando um objeto específico PessoaModel
    }


    
}