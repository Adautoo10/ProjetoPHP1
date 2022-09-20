<?php

namespace ProjetoPHP\Model;

use ProjetoPHP\DAO\Categoria_ProdutoDAO;

class Categoria_ProdutoModel extends Model
{

    public $id, $descricao;


    public function save()
    {

        
        $dao = new Categoria_ProdutoDAO;

        if(empty($this->id))
        {
            $dao->insert($this);

        } else {
            $dao->update($this);
        }
    }

    public function getAllRows()
    {
        $dao = new Categoria_produtoDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        $dao = new Categoria_produtoDAO();

        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new Categoria_ProdutoModel();
    }

    public function delete(int $id)
    {
        $dao = new Categoria_ProdutoDAO();

        $dao->delete($id);
    }
}