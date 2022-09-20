<?php

namespace ProjetoPHP\DAO;

use ProjetoPHP\Model\categoria_produtoModel;
use \PDO;

class categoria_produtoDAO extends DAO
{

  

    function __construct()
    {
        parent::__construct();
    }


    function insert(Categoria_ProdutoModel $model)
    {
 
        $sql = "INSERT INTO categoria_produto (descricao) VALUES (?)";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->descricao);

        $stmt->execute();
    }
    
    public function update(categoria_produtoModel $model)
    {
        $sql = "UPDATE categoria_produto SET descricao=? WHERE id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->descricao);
        $stmt->bindValue(2, $model->id);
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM categoria_produto";

        $stmt = $this->conexao->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectById(int $id)
    {
        $sql = "SELECT * FROM categoria_produto WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("Projeto_MVC\Model\categoria_produtoModel");
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM categoria_produto WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}