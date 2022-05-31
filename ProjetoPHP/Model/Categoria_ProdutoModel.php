<?php

class Categoria_ProdutoModel
{
   
    public $id, $descricao;   
    public $rows;

   
    public function save()
    {
        include 'DAO/Categoria_ProdutoDAO.php';

        $dao = new Categoria_ProdutoDAO();

        if(empty($this->id))
        {
           
            $dao->insert($this);
        } 
        else 
        {
            $dao->update($this);
      
        }
    }
        public function getAllRows()
        {
            include 'DAO/Categoria_ProdutoDAO.php';
            $dao = new Categoria_ProdutoDAO();
            $this->rows = $dao->select();
        }


        public function getById(int $id)
        {
            include 'DAO/Categoria_ProdutoDAO.php';

            $dao = new Categoria_ProdutoDAO();

            $obj = $dao->selectById($id);

            return ($obj) ? $obj : new Categoria_ProdutoModel();
        }

        public function delete(int $id)
    {
        include 'DAO/Categoria_ProdutoDAO.php'; 

        $dao = new Categoria_ProdutoDAO();

        $dao->delete($id);
    }

    }

