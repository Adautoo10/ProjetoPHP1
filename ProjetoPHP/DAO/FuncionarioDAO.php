<?php

namespace ProjetoPHP\DAO;

use ProjetoPHP\Model\FuncionarioModel;

use \PDO;


class FuncionarioDAO extends DAO
{
 
    function __construct() 
    {   
        parent::__construct();
    }


    
    function insert(FuncionarioModel $model) 
    {
        
        $sql = "INSERT INTO Funcionario (nome, cargo) VALUES (?, ?)";
        
        $stmt = $this->conexao->prepare($sql);

        
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->cargo);
        $stmt->execute();      

    }

    public function update(FuncionarioModel $model)
    {
        $sql = "UPDATE Funcionario SET nome=?, cargo=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->cargo);
        $stmt->bindValue(3, $model->id);
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM Funcionario";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    } 

    public function selectById(int $id)
    {
        include_once 'Model/FuncionarioModel.php';

        $sql = "SELECT * FROM Funcionario WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("FuncionarioModel"); 
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM Funcionario WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}
