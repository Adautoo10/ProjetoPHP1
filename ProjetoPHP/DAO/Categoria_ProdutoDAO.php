<?php

class Categoria_ProdutoDAO
{
 
    private $conexao;


    function __construct() 
    {
        
        $dsn = "mysql:host=localhost:3307;dbname=db_sistema";

        $user = "root";
        
        $pass = "etecjau";
        
        
        $this->conexao = new PDO($dsn, $user, $pass);
    }


    
    function insert(Categoria_ProdutoModel $model) 
    {
        
        $sql = "INSERT INTO Categoria_Produto (descricao) VALUES (?)";
        
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->descricao);
        $stmt->execute();      

    }

    public function update(Categoria_ProdutoModel $model)
    {
        $sql = "UPDATE Categoria_Produto SET descricao=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->descricao);
        $stmt->bindValue(2, $model->id);
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM Categoria_Produto";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    } 

    public function selectById(int $id)
    {
        include_once 'Model/Categoria_ProdutoModel.php';

        $sql = "SELECT * FROM Categoria_Produto WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("Categoria_ProdutoModel"); 
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM Categoria_Produto WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}
